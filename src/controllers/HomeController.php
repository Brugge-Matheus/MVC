<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $posts = array(
            ['titulo' => 'Título do post 1', 'corpo' => 'Corpo do post 1'],
            ['titulo' => 'Título do post 2', 'corpo' => 'Corpo do post 2'],
            ['titulo' => 'Título do post 3', 'corpo' => 'Corpo do post 3'],
            ['titulo' => 'Título do post 4', 'corpo' => 'Corpo do post 4'],
            ['titulo' => 'Título do post 5', 'corpo' => 'Corpo do post 5'],
        );

        $this->render('home', array(
            'nomeCompleto' => 'Matheus Brugge',
            'idade' => 20,
            'genero' => 'masculino',
            'posts' => $posts
         ) );
    }

    public function fotos() {
        echo "Opa, fotos";
        echo "Opa, fotos";
    }

    public function foto($param) {
        echo "Unica foto..." .var_dump($param);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobrePessoa($param) {
        echo "Sobre o ". $param['nome'];
    }

}