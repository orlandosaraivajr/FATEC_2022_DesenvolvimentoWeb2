<?php 
abstract class Conta 
{ 
    protected $agencia; 
    protected $conta; 
    protected $saldo; 
    
    public function __construct($agencia, $conta, $saldo) 
    { 
        $this->agencia = $agencia; 
        $this->conta   = $conta; 
        if ($saldo >= 0) { 
            $this->saldo   = $saldo; 
        } 
    } 
    public function getInfo() 
    { 
        return "Agência: {$this->agencia}, Conta: {$this->conta}";
    }
    public function depositar($quantia) 
    { 
        if ($quantia > 0) { 
            $this->saldo += $quantia; 
        } 
    } 
    
    public function getSaldo() 
    { 
        return $this->saldo; 
    } 
    
    abstract function retirar($quantia);
}