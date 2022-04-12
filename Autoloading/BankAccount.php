<?php
class BankAccount
{
  public $account_Number;
  public $Blannce;
  function deposit(){
     echo "You deposit to this account".$this->account_Number."to 20,000 <br>"; 
     
  }
  function withdraw(){
      echo"you withdraw ammount from this account". $this->account_Number;
      echo"and blance is".$this->Blannce;
    }
}
$account = new Bankaccount();
 $account->account_Number='7925146164';
 $account->Blannce='83,865';
 
 $account->deposit();
 $account->withdraw();
 
