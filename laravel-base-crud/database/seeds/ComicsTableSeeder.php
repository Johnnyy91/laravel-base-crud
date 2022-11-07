<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataComics = config('data.comics');
        foreach($dataComics as $Comics){
            $newComics = new Comic();
            $newComics->Titolo=$Comics['title'];
            $newComics->Description=$Comics['description'];
            $newComics->Copertina=$Comics['thumb'];
            $newComics->type=$Comics['type'];

            $newComics->save();
        }
    }
}
