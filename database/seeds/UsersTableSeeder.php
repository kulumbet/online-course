<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@oc.kz',
            'password' => bcrypt('qwe321'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        UserRole::create([
            'role_id' => 1,
            'user_id' => $admin->id,
        ]);
    }
}
