<!-- overriding concept in interface -->
<?php
interface Shape
{
  public function calculateArea();
}
class Circle implements Shape
{
  private $radius;
  public function __construct($radius)
  {
    $this->radius = $radius;
  }
  public function calculateArea()
  {
    return pi() * $this->radius * $this->radius;
  }
}
class Rectangle implements Shape
{
  private $length;
  private $width;

  public function __construct($length, $width)
  {
    $this->length = $length;
    $this->width = $width;
  }
  public function calculateArea()
  {
    return $this->length * $this->width;
  }
}

$circle = new Circle(6);
echo $circle->calculateArea();

$rectangle = new Rectangle(4, 5);
echo $rectangle->calculateArea();

?>