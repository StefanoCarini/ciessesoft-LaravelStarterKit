<?php

use Illuminate\Database\Seeder;

class TabellaUfficiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areaServizi')->insert([
            'denominazione' => 'Ufficio Comando',
            'note' => 'Personale in servizio presso l\'Ufficio Comando',
        ]);
    }
}
