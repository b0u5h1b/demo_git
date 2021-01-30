<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP</title>
</head>

<body>
  <?php
  class Person
  {
    public $isAlive = true;

    function __construct($name)
    {
      $this->name = $name;
    }

    public function dance()
    {
      return "I'm dancing!";
    }
  }

  $me = new Person("Shane");
  if (is_a($me, "Person")) {
    echo "I'm a person, ";
  }
  if (property_exists($me, "name")) {
    echo "I have a name, ";
  }
  if (method_exists($me, "dance")) {
    echo "and I know how to dance!";
  }
  ?>
</body>

</html>