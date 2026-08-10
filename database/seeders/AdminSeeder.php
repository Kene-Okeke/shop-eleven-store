<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => config('admin.one.email')],
            [
                'name' => config('admin.one.name'),
                'password' => Hash::make(config('admin.one.password')),
            ]
        );

        User::updateOrCreate(
            ['email' => config('admin.two.email')],
            [
                'name' => config('admin.two.name'),
                'password' => Hash::make(config('admin.two.password')),
            ]
        );
    }
}
