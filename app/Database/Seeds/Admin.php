<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        $data = [
            'nama_admin'=> 'admin',
            'username'  => 'admin',
            'password'  => '$2a$12$9itAdyuzRwG7eDW/UmLl6OV1qGEGGWG1Hj75ZW7oP7jzojjoPrjKS',
        ];
        $this->db->query('INSERT INTO admin (nama_admin, username, password) VALUES(:nama_admin:,:username:, :password:)', $data);
        $this->db->table('admin')->insert($data);
    }
}
