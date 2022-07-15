<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'name' => 'Author',
            ],
            [
                'name' => 'Editor',
            ],
            [
                'name' => 'Subscriber',
            ],
            [
                'name' => 'Administrator',
            ]
        ];

        for ($i = 0; $i < count($role); $i++) {
            DB::table('roles')->insert(array(
                "name" => $role[$i]['name'],
            ));
        }
    }
}
