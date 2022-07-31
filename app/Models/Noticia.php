<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'descricao'];

    public function noticiaDetalhe()
    {
        return $this->hasOne(NoticiaDetalhe::class);
    }
}
