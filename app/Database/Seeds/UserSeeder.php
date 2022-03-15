<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        //satu data
        // $data = [
        //     'name_user' => 'admin',
        //     'email_user' => 'admin@gmail.com',
        //     'password_user' => password_hash('12345', PASSWORD_BCRYPT)
        // ];
        // $this->db->table('tb_users')->insert($data);     //simpan data

        //multi data
        $data = [
            [
                'name_user' => 'admin2',
                'email_user' => 'admin2@gmail.com',
                'password_user' => password_hash('12345', PASSWORD_BCRYPT)
            ],
            [
                'name_user' => 'admin3',
                'email_user' => 'admin3@gmail.com',
                'password_user' => password_hash('123', PASSWORD_BCRYPT)
            ]
        ];
        $this->db->table('tb_users')->insertBatch($data);     //simpan data
    }
}
