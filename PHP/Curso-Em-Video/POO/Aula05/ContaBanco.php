<?php
class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this -> setSaldo(0);
        $this -> setStatus(false);
        echo "<p>Conta criada com sucesso</p>";
    }

    public function abrirConta($t)
    {
        $this -> setTipo($t);
        $this -> setStatus(true);

        if($t == "CC")
        {
            $this -> setSaldo(50);
        }

        else if($t == "CP")
        {
            $this -> setSaldo(150);
        }
    }

    public function fecharConta()
    {
        if($this -> getSaldo() > 0)
        {
            echo "<p?>Conta ainda tem dinheiro, não posso fechá-lo!</p>";
        }

        else if($this -> getSaldo() < 0)
        {
            echo "<p>Conta está em débito. Impossível ewncerrar!</p>";
        }

        else 
        {
            $this -> setStatus(false);
            echo "<p>Conta de {$this -> getDono()} fechada com sucesso</p>";
        }
    }

    public function depositar($v)
    {
        if($this -> getStatus())
        {
            $this -> setSaldo($this -> getSaldo() + $v);
            echo "<p>Depósito de R$$v na conta de {$this -> getDono()}</p>";
        }

        else
        {
            echo "<p>Conta fechada. Não consigo depositar.</p>";
        }
    }

    public function sacar($v)
    {
        if($this -> getStatus())
        {
            if($this -> getSaldo() >= $v)
            {
                $this -> setSaldo($this -> getSaldo() -$v) ;
                echo "<p>Saque de R$$v autorizado na conta de {$this -> getDono()}</p>";
            }

            else
            {
                echo "<p>Saldo insuficiente para saque.</p>";
            }
        }

        else
        {
            echo "<p>Não posso sacar de uma conta fechada</p>";
        }
    }

    public function pagarMensal()
    {
        if($this -> getTipo() == "CC")
        {
            $v = 12;
        }

        else if ($this -> getTipo() == "CP")
        {
            $v = 20;
        }

        if($this -> getStatus())
        {
            $this -> setSaldo($this -> getSaldo() - $v);
            echo "<p>Mensalidade de R$$v debitada na conta de {$this -> getDono()}</p>";
        }

        else
        {
            echo "<p>Problema com a conta. Não posso cobrar</p>";
        }
    }

    public function getNumConta()
    {
        return $this->numConta;
    }

    public function setNumConta($numConta)
    {
        $this->numConta = $numConta;

        return $this;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getDono()
    {
        return $this->dono;
    }

    public function setDono($dono)
    {
        $this->dono = $dono;

        return $this;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}