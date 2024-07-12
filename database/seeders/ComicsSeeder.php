<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = config('comics');
        DB::table('comics')->truncate();
        foreach($data as $comics_db) {

            $comic = new Comic();

            $comic->title = $comics_db['title'];
            $comic->description = $comics_db['description'];
            $comic->thumb = $comics_db['thumb'];
            $comic->price = $comics_db['price'];
            $comic->series = $comics_db['series'];
            $comic->sale_date = $comics_db['sale_date'];
            $comic->type = $comics_db['type'];
            $artists = '';
            foreach($comics_db['artists'] as $index=>$comic_artist) {
                if($index == count($comics_db['artists']) - 1) {
                    $artists .= $comic_artist;
                } else {
                    $artists .= $comic_artist . ', ';
                }
            }
            $comic->artists = $artists;
            $writers = '';
            foreach($comics_db['writers'] as $index=>$comic_writer) {
                if($index == count($comics_db['writers']) - 1) {
                    $writers .= $comic_writer;
                } else {
                    $writers .= $comic_writer . ', ';
                }
            }
            $comic->writers = $writers;

            $comic->save();

        }
        
    }
}
