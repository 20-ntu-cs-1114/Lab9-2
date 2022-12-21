<?php
class Loan{
    public $name;
    public $loanNumber;
    public $amountOfLoan;
    public function __construct($name,$loanNumber,$amountOfLoan){
        $this->name = $name;
        $this->loanNumber = $loanNumber;
        $this->amountOfLoan = $amountOfLoan;
    }
    public function print(){
        echo "Name: $this->name<br>Loan Number: $this->loanNumber<br>Amount of Loan: $this->amountOfLoan";
    }
}
class AutoLoan extends Loan{
    public $auto;
    public function __construct($name,$loanNumber,$amountOfLoan,$auto){
        $this->name = $name;
        $this->loanNumber = $loanNumber;
        $this->amountOfLoan = $amountOfLoan;
        $this->auto = $auto;
    }
    public function print(){
        echo "Name: $this->name<br>Loan Number: $this->loanNumber<br>Amount of Loan: $this->amountOfLoan<br>Loan: $this->auto<br>";
    }
    
}
class HomeLoan{
    public $home;
    public function __construct($name,$loanNumber,$amountOfLoan,$home){
        $this->name = $name;
        $this->loanNumber = $loanNumber;
        $this->amountOfLoan = $amountOfLoan;
        $this->home = $home;
    }
    public function print(){
        echo "Name: $this->name<br>Loan Number: $this->loanNumber<br>Amount of Loan: $this->amountOfLoan<br>Loan: $this->home<br>";
    }
}

$al = new AutoLoan("Ayyan",11,15000,"Auto");
$al->print();

echo "<br>Home Loan<br>";
$hl = new HomeLoan("Akbar",12,10000,"Home");
$hl->print();
?>
