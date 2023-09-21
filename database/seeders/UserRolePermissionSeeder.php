<?php

namespace Database\Seeders;

use App\Models\DataPelatih;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];

        DB::beginTransaction();

        try {
            $role_admin = Role::create(['name' => 'admin']);
            $role_trainer = Role::create(['name' => 'trainer']);
            $role_user = Role::create(['name' => 'user']);

            $permission = Permission::create(['name' => 'read role']);
            $permission = Permission::create(['name' => 'create role']);
            $permission = Permission::create(['name' => 'update role']);
            $permission = Permission::create(['name' => 'delete role']);
            $permission = Permission::create(['name' => "pelatih"]);
            $permission = Permission::create(['name' => 'transaction-list']);
            $permission = Permission::create(['name' => 'transaction-detail']);
            $permission = Permission::create(['name' => 'transaction-update']);
            $permission = Permission::create(['name' => 'transaction-delete']);

            $role_admin->givePermissionTo(
                'read role', 'create role', 
                'update role', 'delete role', 
                'pelatih',
                'transaction-list', 'transaction-detail',
                'transaction-update', 'transaction-delete'
            );

            $role_trainer->givePermissionTo(
                'transaction-list', 'transaction-detail',
            );

            
            $admin = User::create(array_merge([
                'email' => 'admin@gmail.com',
                'name' => 'Admin',
                'level' => User::LEVEL_ADMIN,
            ], $default_user_value));

            $trainer = User::create(array_merge([
                'email' => 'trainer@gmail.com',
                'name' => 'trainer default',
                'level' => User::LEVEL_TRAINER,
            ], $default_user_value));

            $user = User::create(array_merge([
                'email' => 'user@gmail.com',
                'name' => 'User',
                'level' => 'user',
            ], $default_user_value));

            $admin->assignRole('admin');
            $trainer->assignRole('trainer');
            $user->assignRole('user');

            DataPelatih::create([
                "user_id"      => $trainer->id,
                "nama_pelatih" => "trainer default",
                "pengalaman"   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu cursus sapien, eget venenatis urna. Aenean et varius odio. Fusce non libero odio. Nulla porta facilisis risus, quis mollis nisl posuere sit amet. Aliquam in risus fermentum nisl eleifend finibus.",
                "img_pelatih"  => "",
                "status"       => "aktif",
            ]);

            DB::commit();
        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();
        }
    }
}
