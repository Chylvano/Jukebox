<?php

namespace Database\Seeders;
//Gives accses to Song Model
use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//Gives accses to DataBase (DB)->Model
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run()
    {
        DB::table('songs')->insert([
            "name"=> "Fur Elise",
            "description"=> "classic song",
            "artist"=> "Beethoven",
            "genre_id"=> 2,
            "duration"=> "00:06:32",
        ]);

        Song::factory()->count(25)->create();

    }
}
