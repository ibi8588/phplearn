<!DOCTYPE html>
<html>
<body>

<h1>My Third PHP page</h1>

<?php
define("GREETING", "Hello :)");
define("person", "Ibrahim");
echo GREETING;
echo "<br>";
//constants have global scope.
function personFunc(){
  echo person;
}
personFunc();
?>

</body>
</html>
