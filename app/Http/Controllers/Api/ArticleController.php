<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        return Article::latest()->get();
    }
    public function show(){

    }
    public function store(){

    }
    public function destroy
}

// Controller -> Model