<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticiaDetalhe extends Model
{
    use HasFactory;
    protected $fillable = ['noticia_id', 'conteudo'];
}
