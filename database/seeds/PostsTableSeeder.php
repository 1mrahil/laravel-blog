<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
            'title' => 'Laten we het leven vieren',
            'body' => 'De zon schijnt, eindelijk richting voorjaar! 
            
            Hopelijk gaan we een mooie zomer tegemoet, met lekker buiten eten en een lekker wijntje erbij!',
            'user_id' => '3',
            'created_at' => now(),
            'updated_at' => now()
            ],

            [
            'title' => 'Wijntje doen?',
            'body' => 'Graag!',
            'user_id' => '4',
            'created_at' => now(),
            'updated_at' => now()
            ],

            [
            'title' => 'Mosterd',
            'body' => 'Na de maaltijd',
            'user_id' => '4',
            'created_at' => now(),
            'updated_at' => now()
            ],

            [
            'title' => 'Mijn eerste post',
            'body' => 'Even testen!',
            'user_id' => '4',
            'created_at' => now(),
            'updated_at' => now()
            ],
        ]);
    }
}
