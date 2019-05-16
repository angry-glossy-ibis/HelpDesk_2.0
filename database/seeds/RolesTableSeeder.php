<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Роль раз', 'Роль два'];
        foreach ($roles as $role) {
            $timestamp = Carbon::now();
            Role::create([
                'name' => $role,
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ]);
        }
    }
}
