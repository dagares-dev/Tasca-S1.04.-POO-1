<?php
declare(strict_types=1);

require_once 'Shape.php';

$rectangle1 = new Rectangle(4.0, 8.0);
$triangle1 = new Triangle(7.0, 11.0);

echo "<h2>Nivell 1</h2>";
echo "<h3>Exercici 2</h3>";

echo "El área del rectángulo es " . $rectangle1->area()."<br>";
echo "El área del triángulo es " . $triangle1->area()."<br>";