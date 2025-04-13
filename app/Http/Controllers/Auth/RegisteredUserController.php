<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {   
        // dd($request->all());
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'middlename' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'barangay' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:20'],
            'driver_license' => ['required', 'string', 'max:255'],
            'licence_exp' => ['required', 'date'],
            'upload_img' => ['required', 'file', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', 'min:8'],
            'is_banned' => ['required', 'boolean']
        ]);

        try {
            DB::beginTransaction();
            DB::enableQueryLog();

            $username = Str::before($request->email, '@');
            $uploadedImage = $request->file('upload_img');

            $imageName = time() . '_' . $uploadedImage->getClientOriginalName();
            $uploadedImage->move(public_path('license_images'), $imageName);
            $licenseImgPath = 'license_images/' . $imageName;

            // Create User
            $user = User::create([
                'username' => $username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'Customer',
            ]);

            $customerData = [
                'first_name' => $request->firstname,
                'middle_name' => $request->middlename,
                'last_name' => $request->lastname,
                'user_id' => $user->id,
                'province' => $request->province,
                'city' => $request->city,
                'barangay' => $request->barangay,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
                'driver_license_number' => $request->driver_license,
                'license_expiration_date' => $request->licence_exp,
                'license_img_path' => $licenseImgPath,
                'is_banned' => $request->is_banned, 
            ];

            // dd($customerData);

            // Create Customer
            Customer::create($customerData);

            event(new Registered($user));

            Auth::login($user);

            DB::commit();
            Log::info(DB::getQueryLog());
            return redirect(route('dashboard', absolute: false));
        } catch (\Exception $e) {
            DB::rollback();
            Log::error($e->getMessage());
            Log::info(DB::getQueryLog());
            return back()->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }
}