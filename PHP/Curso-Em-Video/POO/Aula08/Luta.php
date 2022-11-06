<?php
require_once 'Lutador.php';
class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function marcarLuta($l1, $l2)
    {
        if($l1 -> getCategoria() === $l2 -> getCategoria() && $l1 != $l2)
        {
            $this -> aprovada = true;
            $this -> desafiado = $l1;
            $this -> desafiante = $l2;
        }

        else
        {
            $this -> aprovada = false;
            $this -> desafiado = null;
            $this -> desafiante = null;
        }
    }

    public function lutar()
    {
        if($this -> aprovada)
        {
            $this -> desafiado -> apresentar();
            $this -> desafiante -> apresentar();
            $vencedor = rand(0,2);

            if($vencedor == 1)
            {
                echo "<p>{$this -> desafiado -> getNome()} vencedor</p>";
                $this -> desafiado -> ganharLuta();
                $this -> desafiante -> perderLuta();
            }

            else if($vencedor == 2)
            {
                echo "<p>{$this -> desafiante -> getNome()} vencedor</p>";
                $this -> desafiante -> ganharLuta();
                $this -> desafiado -> perderLuta();
            }

            else
            {
                echo "<p>Empate</p>";
                $this -> desafiado -> empatarLuta();
                $this -> desafiante -> empatarLuta();
            }
        }

        else
        {
            echo "<p>Luta não pode acontecer</p>";
        }
    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado)
    {
        $this->desafiado = $desafiado;

        return $this;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;

        return $this;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function setRounds($rounds)
    {
        $this->rounds = $rounds;

        return $this;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;

        return $this;
    }
}