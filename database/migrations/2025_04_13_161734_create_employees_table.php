<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('role');
            $table->timestamps();
        });

        $user = User::create([
            'username' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('bmpcars2025'),
            'role' => 'Employee',
        ]);

        Employee::create([
            'first_name' => 'System',
            'last_name' => 'Admin',
            'user_id' => $user->id,
            'role' => 'Admin',
        ]);
        
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
