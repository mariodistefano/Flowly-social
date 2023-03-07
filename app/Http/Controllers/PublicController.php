<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        $articles = Article::orderBy('created_at', 'desc')->get()->take(10);
        return view('welcome', compact('articles'));
    }

    public function __construct(){
        $this->middleware('auth')->except('homepage');
    }
    
    public function careers(){ // FUNZIONE PER CONTATTI
        return view('careers');
    }

    public function careersSubmit(Request $request){
        $request->validate([
            'role' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        // dd($request->all());
    }





}
