<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DefaultUserSeeder extends Seeder
{
    public function run()
    {
        App\Models\User::create([
            'name'              => 'John Doe',
            'email'             => 'john@example.org',
            'username'          => 'john',
            'password'          => Hash::make('passw0rd'),
            'remember_token'    => Str::random(12),
            'email_verified_at' => now(),
        ]);
    }
}
