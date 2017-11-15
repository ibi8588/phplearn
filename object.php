<!DOCTYPE html>
<html>
<body>

<h1>My Second PHP page</h1>

<?php
class Car {
    function Car() {
        $this->model = "Camery";
        $this->make = "Prius";
    }
}

$cam = new Car();

echo $cam->model;
echo "<br>";
echo $cam->make;
?>

</body>
</html>
