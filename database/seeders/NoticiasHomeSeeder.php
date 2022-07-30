<?php

namespace Database\Seeders;

use App\Models\NoticiasHome;
use Illuminate\Database\Seeder;

class NoticiasHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //o método create (atenção para o atributo fillable da classe)
        NoticiasHome::create([
            'titulo' => 'Título Da noticia',
            'descricao' => 'Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.'
        ]);
        NoticiasHome::create([
            'titulo' => 'Título Da noticia 2',
            'descricao' => 'Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card.'
        ]);
    }
}
