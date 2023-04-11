<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index() 
    {
        //return 'HOMEPAGE';

        //get comics list
         $comics = config('comics');
        //dd($comics);


        //generiamo url for comics


        //$slug = Str::slug('Laravel 5 Framework', '-');
        //dd($slug);

        foreach ($comics as $key => $comic) {
            //passiamo per prima cosa dal titolo a slug
            $slug = Str::slug($comic['title'], '-');
            //dump($slug);

            //aggiungere slug
            $comics[$key]['slug'] = $slug;
            
        }
        //dd($comics);


        return view('home', compact('comics'));
    }
}
