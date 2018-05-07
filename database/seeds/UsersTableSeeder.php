<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TBL_Usuarios')->insert([
            [
                'name' => 'Johan Suárez',
                'email' => 'root@app.com',
                'role' => 'administrador',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Oscar Lobaton',
                'email' => 'Loba@app.com',
                'role' => 'funcionario',
                'password' => bcrypt('12345')
            ]
        ]);
    }
}
