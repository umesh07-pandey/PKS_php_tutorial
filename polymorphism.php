<!-- overriding concept in inheritance -->
<?php
class Animal
{
  public function sound()
  {
    echo "different animal has different soung";
  }
}
class Dogs extends Animal
{
  public function sound()
  {
    echo "the soung of animal is barks";
    parent::sound();
  }
}
$sounds = new Dogs();
$sounds->sound();

?>