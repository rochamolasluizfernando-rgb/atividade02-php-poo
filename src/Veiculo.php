<?php

abstract class Veiculo
{
    private string $marca;
    private string $modelo;
    private int $ano;

    public function __construct(
        string $marca,
        string $modelo,
        int $ano
    ) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    abstract public function calcularDiaria(): float;
}