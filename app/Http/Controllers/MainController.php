<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $articles = json_decode(file_get_contents("articles.json"));
        // dump($articles);
        return view("gallery.index", compact("articles"));
    }
    public function show($img, $desc)
    {
        return view("gallery.show", compact("img","desc"));
    }
}
