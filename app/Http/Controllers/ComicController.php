<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    // detail page for a comic item

    public function show($slug) {
        //return 'detail' . $id;

        $comics = config('comics');
        //dd($comics);


        //get specific comic by id

        // $comic = [];
        // foreach ($comics as $item) {
        //     if ($id == $item['id']) {
        //         $comic = $item;
        //     }
        // }

        //get specific comic by slug
        $comic = [];
        foreach ($comics as $item) {
            //title => slug
            $titleConverted = Str::slug($item['title'], '-');

            //decisione
            if ($slug == $titleConverted) {
                $comic = $item;
                break;
            }
        }

        //SE LA PAGINA CERCATA NON ESISTE INSERIAMO UN MESSAGGIO DI ERRORE
        if (empty($comic)) {
            abort(404);
        }


        return view('comics.show', compact('comic'));
    }
}
