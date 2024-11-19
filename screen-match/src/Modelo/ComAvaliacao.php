<?php

namespace ScreenMatch\Modelo;

use ScreenMatch\Exception\NotaInvalidaException;

trait ComAvaliacao
{
    private array $notas = [];

    /**
     * @throws \InvalideArgumentException Se a nota for negativa ou maior que 10
     */
    public function avalia(float $nota): void
    {
        if($nota < 0 || $nota >10){
            throw new NotaIvalidaException();
        } 
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}
