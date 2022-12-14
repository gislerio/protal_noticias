<?php

namespace Database\Seeders;

use App\Models\NoticiaDetalhe;
use Illuminate\Database\Seeder;

class NoticiaDetalheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //o método create (atenção para o atributo fillable da classe)
        NoticiaDetalhe::create([
            'noticia_id' => 1,
            'conteudo' => 'What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
            of Lorem Ipsum.'

        ]);
        NoticiaDetalhe::create([
            'noticia_id' => 2,
            'conteudo' => 'What is Lorem Ipsum?
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys 
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make 
            a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions 
            of Lorem Ipsum.'

        ]);
    }
}
