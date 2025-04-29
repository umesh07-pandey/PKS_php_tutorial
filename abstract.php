<?php
abstract class vechile
{
  abstract public function start();
  abstract public function stop();
}

class bike extends vechile
{
  public function start()
  {
    echo "the bike is started"."\n";
  }
  public function stop()
  {
    echo "the bike is stoped" ."\n";
  }
}

class car extends vechile
{
  public function start()
  {
    echo "the car is started" ."\n";
  }
  public function stop()
  {
    echo "the car is stoped" ."\n";
  }
}

$objbike = new bike();
$objbike->start();

$objcar = new car();
$objcar->start();

$objbike->stop();
$objcar->stop();

?>