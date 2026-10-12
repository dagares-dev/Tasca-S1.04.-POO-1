<?php
declare(strict_types=1);

require 'Employee.php';

$employee1 = new Employee();
$employee2 = new Employee();

echo "<h2>Nivell 1</h2>";
echo "<h3>Exercici 1</h3>";
echo "Todo empleado que supere 6000 debe pagar impuestos.<br>";
echo "<br>";
$employee1 ->save ("Juan", 5400);
$employee1 ->sendNotification();
echo "<br>";
echo "<br>";
$employee2 ->save ("Ricardo", 7600);
$employee2 ->sendNotification();


