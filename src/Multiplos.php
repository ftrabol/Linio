<?php 
declare(strict_types=1);
class Multiplos
{
    public $mult1;
    public $mult2;

    function __construct(int $mult1, int $mult2)
    {
        $this->IsValicInteger($mult1);
        $this->IsValicInteger($mult2);

        $this->mult1 = $mult1;
        $this->mult2 = $mult2;
    }

    function ckeckMultiplo(int $ciclo, int $opcion) : int
    {
        $salida = 0;
        if ($ciclo%$opcion ==0) {
            $salida = $opcion;
        }
        return $salida;
    }

    function printMessage(): array
    {
        $resultado = array();
        
        $suma = $this->mult1 + $this->mult2;
        
        $message = array(0=>"", $this->mult1 => "Linio", $this->mult2 => "IT", $suma => "Linianos");
        for ($i=1; $i <=100 ; $i++) { 
            $resultado[$i] = $message[$this->ckeckMultiplo($i,$this->mult1) + $this->ckeckMultiplo($i,$this->mult2)];
        }
        return $resultado;
    }

    function IsValicInteger(int $input): void
    {
        if (!filter_var($input, FILTER_VALIDATE_INT)) {
            throw new \InvalidArgumentException('input is not an integer val: '.$input);
        }
    }
}
