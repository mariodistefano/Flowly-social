<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        $articles = Article::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('articles'));
    }

    public function contacts(){ // FUNZIONE PER CONTATTI
        return view('contacts');
    }





}
