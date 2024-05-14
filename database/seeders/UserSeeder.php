<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {

    User::create([
      'name' => 'Mellitya Silviandro H',
      'email' => 'tya@cpg.com',
      'password' => Hash::make('admintya'),
    ]);

    User::create([
      'name' => 'Try Bhuwaneswari',
      'email' => 'anes@cpg.com',
      'password' => Hash::make('adminanes'),
    ]);
  }
}
