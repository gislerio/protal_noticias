<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NoticiaDetalhe;
use App\Models\Noticia;

class NoticiasController extends Controller
{
    public function index()
    {
        $noticias = Noticia::all();
        //dd($noticiasHome);
        return view('home', ['noticiashome' => $noticias]);
    }

    public function detalhe($id)
    {
        $noticiaDetalhe = Noticia::find($id);
        //dd($noticiaDetalhe->noticiaDetalhe);
        //['noticiaDetalhe' => $noticiaDetalhe]

        return view('detalheNoticia', ['noticiaDetalhe' => $noticiaDetalhe]);
    }
}
