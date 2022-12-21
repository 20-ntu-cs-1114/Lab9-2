<?php
class Person{
    public $fName;
    public $lName;
    public $address;
    public $dob;
    public $cell;
    public function __construct($fname,$lname,$cell,$address,$dob){
        $this->fName = $fname;
        $this->lName = $lname;
        $this->cell = $cell;
        $this->address = $address;
        $this->dob = $dob;
    }
    public function print(){
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
    public function addContact(array &$contactList){
       array_push($contactList,$this);
        
    }
    public function searchByName($name){
        if($this->fName===$name || $this->lName===$name){
            $this->print();
        }
    }
    public function searchByCell($cell){
        if($this->cell==$cell){
            $this->print();
        }
    }
}

class Friend extends Person{
    public $institute;
    public $descipline;
    public function __construct($fname,$lname,$cell,$address,$dob,$institute,$descipline){
        $this->fName = $fname;
        $this->lName = $lname;
        $this->cell = $cell;
        $this->address = $address;
        $this->dob = $dob;
        $this->institute = $institute;
        $this->descipline = $descipline;
    }

}
class Collegue extends Person{
    public $designation;
    public $company;
    public function __construct($fname,$lname,$cell,$address,$dob,$designation,$company){
        $this->fName = $fname;
        $this->lName = $lname;
        $this->cell = $cell;
        $this->address = $address;
        $this->dob = $dob;
        $this->designation = $designation;
        $this->company = $company;
    }
}
class Relative extends Person{
    public $relation;
    public function __construct($fname,$lname,$cell,$address,$dob,$relation){
        $this->fName = $fname;
        $this->lName = $lname;
        $this->cell = $cell;
        $this->address = $address;
        $this->dob = $dob;
        $this->relation = $relation;
    }
}

$c1 = new Person("C1","D1","55","sdf","4-12-22");
$c2 = new Person("C2","D2","45","ghi","14-2-22");
$c3 = new Person("C3","D3","45","ghi","14-2-22");

// Adding in List
$contactList = array();
$c1->addContact($contactList);
$c2->addContact($contactList);
$c3->addContact($contactList);

// Searching by Name
$name = "C3";
foreach($contactList as $contact){
    $contact->searchByName($name);
    echo "<br>";
}

// Searching by Cell
$cell = "03012255658";
foreach($contactList as $contact){
    $contact->searchByCell($cell);
    echo "<br>";
}
?>