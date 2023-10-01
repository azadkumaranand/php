<?php
//access modifier
//three types of access modifier
//public, protected, private
class BankCredentials{
    public $bankName;
    protected $customerName;
    private $accountNumber;
    function __construct($bankName, $customerName, $accountNumber){
        $this->bankName = $bankName;
        $this->customerName = $customerName;
        $this->accountNumber = $accountNumber;
    }
}

$koshal = new BankCredentials("ICIC", "KOSHAL", '451545224551554');
echo "<h1>".$koshal->bankName."</h1>";
// echo "<h1>".$koshal->customerName."</h1>"; //show error
// echo "<h1>".$koshal->accountNumber."</h1>"; //show error

?>