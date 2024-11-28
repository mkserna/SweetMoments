<?php

use Illuminate\Database\Migrations\Migration;
use Spstie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $role1 = Role::create([
            'name' => 'admin',
        ]);

        $role2 = Role::create([
            'name' => 'user',
        ]);

        $admin = User::create([
            'name' => 'Mariana Perez Serna',
            'email' => 'mariana@gmail.com',
            'password' => '123456789',
            'phone' => '+57 3008387411',
            'address' => 'Sweet Moments, Medellín, Colombia',
        ]);
        $admin->assignRole($role1);

        User::where('id', '!=', $admin->id)->get()->each(function ($user) use ($role2) {
            if (!$user->hasRole($role2)) {
                $user->assignRole($role2);
            }
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('roles');
    }
};
