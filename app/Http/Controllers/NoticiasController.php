<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NoticiasHome;

class NoticiasController extends Controller
{
    public function index()
    {
        $noticiasHome = NoticiasHome::all();
        //dd($noticiaHome);
        return view('home', ['noticiashome' => $noticiasHome]);
    }
}
