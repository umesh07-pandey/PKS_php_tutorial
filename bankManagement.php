<?php

class BankManagement
{
  private $pin = 1234;
  public $Amount = 0;
  public function __construct()
  {
    $this->pin = 1234;
    $this->Amount = 0;
  }
  public function Deposite()
  {
    echo "Please enter the Deposite amount:";
    $newAddAmount = (int) readline();
    $this->Amount += $newAddAmount;
    echo "the Amount is Deposite Successfully";

  }

  public function Withdraw()
  {
    echo "Please enter the Withdraw amount:";
    $withdrawAmount = readline();
    try {
      if ($this->Amount > $withdrawAmount) {
        $this->Amount -= $withdrawAmount;
        echo "the total balance in your account is :" . $this->Amount . "\n";

        echo "the Amount is Withdraw Successfully";
      } else {
        echo "insufficient Balance";
      }
    } catch (Exception $e) {
      echo "insufficient Balance";
    }

  }
  public function CheckBalance()
  {
    echo "the total balance in your account is :" . $this->Amount;

  }



  public function Start()
  {
    echo "Welcome to our Bank \n";
    echo "Please Enter your PIN Number: ";
    $pinNumber = readline();
    try {

      if ($this->pin == $pinNumber) {


        $status = true;
        while ($status) {
          $input = "
    Please Enter 1 for deposite:\n
    Please Enter 2 for withdraw:\n
    Please Enter 3 for ChechBalance:\n
    Please Enter 4 for Exit:\n
    ";
          echo $input;
          $operation = readline();

          switch ($operation) {
            case 1:
              echo "   Please Enter the deposite Amount:";
              $this->Deposite();
              break;
            case 2:
              echo "   Please Enter the withdraw Amount:";
              $this->Withdraw();
              break;
            case 3:
              echo " Total Remaining Balance:";
              $this->CheckBalance();
              break;

            case 4:
              $status = false;
              break;
            default:
              echo "Please enter the valid operation from 1 to 4";
          }
        }


      } else {
        echo "please enter a valid pin";
        self::Start();
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }
}

$obj = new BankManagement();
$obj->Start();
?>