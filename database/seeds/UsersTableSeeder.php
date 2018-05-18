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
        $of = App\AreaServizi::first();
        DB::table('users')->insert([
            'name' => 'Amministratore',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'areaServizi_id' => $of->id,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
