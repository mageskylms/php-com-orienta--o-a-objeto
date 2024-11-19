<?php

use ScreenMatch\Calculos\ConversorNotaEstrela;
use ScreenMatch\Exception;
use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;

require 'autoload.php';

try {
    $serie = new Serie('Nome da serie', 2024, Genero::Acao, 7, 20, 30);
    $episodio = new Episodio($serie, 'Piloto', 1);
    $episodio->avalia(45);
    $episodio->avalia(-35);
} catch (NotaInvalidaException $e){
    echo "Um problema aconteceu: " . $e->getMessage();
}

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($episodio);