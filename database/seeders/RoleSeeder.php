<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([['name' => 'admin'],['name' => 'kecamatan'], ['name' => 'author']])
            ->each(fn ($data) => Role::create($data));
    }
}
