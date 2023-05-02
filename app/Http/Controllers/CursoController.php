<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //
    public function index()
    {
        return "vista del curso" ;
    }
    
    public function create()
    {
        return "vista crear curso" ;
    }

    public function show($curso)
    {
        return "vista del curso $curso" ;
    }

}
