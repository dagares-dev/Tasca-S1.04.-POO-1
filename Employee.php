<?php
/*
Crea una classe que representi un empleat, amb atributs referits al seu nom i sou. 
Defineix un mètode que rebi com a paràmetres el nom i el sou.
Planteja un segon mètode que imprimeixi el nom i un missatge 
que mostri si ha de pagar o no impostos (si el sou en supera 6000, paga impostos).
*/

declare (strict_types=1);

class Employee {
    private string $name;
    private float $salary;

    public function save(string $name, float $salary): void {
        $this->name = $name;
        $this->salary = $salary;
    }

   public function payTaxes(): bool {
    if ($this->salary > 6000) {
        return true;
    }
    return false;
}

    public function sendNotification(): void {
        echo "Empleado " . $this->name . " con un salario de " . $this->salary ."<br>";
        if ($this->payTaxes()) {
            echo "debe pagar impuestos.";
        } else {
            echo "no debe pagar impuestos.";
        }
    }
}