<?php
require_once 'Controlador.php';
class ControleRemoto implements Controlador
{
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this -> volume = 50;
        $this -> ligado = false;
        $this -> tocando = false;
    }

    private function getVolume()
    {
        return $this->volume;
    }

    private function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    private function getLigado()
    {
        return $this->ligado;
    }

    private function setLigado($ligado)
    {
        $this->ligado = $ligado;

        return $this;
    }

    private function getTocando()
    {
        return $this->tocando;
    }

    private function setTocando($tocando)
    {
        $this->tocando = $tocando;

        return $this;
    }

    public function ligar()
    {
        $this -> setLigado(true);
    }

    public function desligar()
    {
        $this -> setLigado(false);
    }

    public  function abrirMenu()
    {
        echo "<p>----- MENU -----</p>";
        echo "<br>Esta ligado?: ". ($this -> getLigado()?"Sim":"Não");
        echo "<br>Esta tocando?: ". ($this -> getTocando()? "Sim":"Não");
        echo "<br>Volume: ". ($this -> getVolume());
        for($i = 0; $i <= $this -> getVolume(); $i += 10)
        {
            echo "|";
        }

        echo "<br>";
    }

    public function fecharMenu()
    {
        "<br>Fechando Menu...";
    }

    public function maisVolume()
    {
        if($this -> getLigado())
        {
            $this -> setVolume($this -> getVolume() + 10);
        }

        else
        {
            echo "<p>ERRO! Não posso aumentar o volume</p>";
        }
    }

    public function menosVolume()
    {
        if($this -> getLigado())
        {
            $this -> setLigado($this -> getVolume() - 10);
        }

        else
        {
            echo "<p>ERRO! Não posso diminuir o volume</p>";
        }
    }

    public function ligarMudo()
    {
        if($this -> getLigado() && $this -> getVolume() > 0)
        {
            $this -> setVolume(0);
        }
    }

    public function desligarMudo()
    {
        if($this -> getLigado() && $this -> getVolume() == 0)
        {
            $this -> setVolume(50);
        }
    }

    public function play()
    {
        if($this -> getLigado() && !($this -> getTocando()))
        {
            $this ->setTocando(true);
        }
    }

    public function pause()
    {
        if($this -> getLigado() && $this -> getTocando())
        {
            $this -> setTocando(false);
        } 
    }
}