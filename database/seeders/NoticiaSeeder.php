<?php

namespace Database\Seeders;

use App\Models\Noticia;
use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //o método create (atenção para o atributo fillable da classe)
        Noticia::create([
            'titulo' => 'Título Da noticia',
            'descricao' => 'Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.'
        ]);
        Noticia::create([
            'titulo' => 'Título Da noticia 2',
            'descricao' => 'Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.'
        ]);
    }
}
