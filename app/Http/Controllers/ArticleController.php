<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        //je vais devoir recup tout les articles
        return view('article.index');
    }


    public function show($id)
    {
        //je vais devoir recup l'article avec l'id
        return show('article.show');
    }
}
