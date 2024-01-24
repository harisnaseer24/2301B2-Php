<?php
// Objected Oriented Programming
// Class
// blueprint of an object.
// map of an object.


// Object
// instance of class.

//Access modifiers
// public - anyone can access.
// protected - owner and relatives can access. Anyone with pass can access.
// private - only owner can access.

// OOP Pillars
// 1. Inheritence

//Parent
class Devices{
    public $name, $price, $ram;
    protected $cpu;
    private $display;

public function SetDisplay($dvalue){
       //setting private property "display"
    $this->display=$dvalue;
}
public function ShowDisplay(){
   echo $this->display."<br>";

} 
}
// Child
class Mobile extends Devices{
public function ShowDetails(){
    echo "<h1>Showing Details of Mobiles:</h1>";
    //setting protected property "cpu"
    $this->cpu="g88";
    echo $this->name."<br>";
    echo $this->price."<br>";
    echo $this->ram."<br>";
    echo $this->cpu."<br>";
    $this->ShowDisplay();
}
}

$techno= new Mobile();
// Child Class object can  access Parent class properties and methods
$techno->name="Spark 20";
$techno->price=40000;
$techno->ram="8gb";
// cannot set protected property "cpu" from here.
// $techno->cpu="g88";

//setter function - object ka data provide krna.
$techno->SetDisplay("Amoled");

//getter function - object ka data lekar aana.
// $techno->ShowDetails();
// $techno->ShowDisplay();

$hp_pavillion= new Devices();
$hp_pavillion->name="Spark 20";
$hp_pavillion->price=40000;
$hp_pavillion->ram="8gb";
// Parent Class object can not access child class properties and methods
// $hp_pavillion->ShowDetails();

// 2. encapsulation
// Example: Data travel through secure path.

// 3. polymorphism
// Example: same function or same operator behaves differently as per situation.

// 4. abstraction
// Example: website admin, facebook user, money transfer.


//24-1-24

class User{
   public $email, $pass, $age;

   //Constructor- to initialize the object (non-parameterized)
//    public function __construct(){
//     $this->email="abc@gmail.com";
//     $this->pass="abc123";
//     $this->age=24;
//    }

   //Constructor- to initialize the object (parameterized)
   public function __construct($email="xyz@gmail.com",$pass="123",$age=18){
    $this->email=$email;
    $this->pass=$pass;
    $this->age=$age;
   }

   public function showuser(){
   echo $this->email."<br>";
   echo $this->pass."<br>";
   echo $this->age."<br>";
   }



}


// $user1= new User();
// $user1->showuser();

// $farhan= new User("farhan@gmail.com","abc123",24);
// $farhan->showuser();

if(isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];
$age=$_POST['age'];

//if user submit empty form then the expression would be : $newuser= new User("","","");
//so default values will not be applied.

$newuser= new User($email,$password,$age);
$newuser->showuser();

}


?>
<h1>Enter Details</h1>
<form action="" method="post">
    <input type="email" name="email" id=""><br>
    <input type="password" name="password" id=""><br>
    <input type="number" name="age" id=""><br>
    <input type="submit" name="submit" value="submit" id="">
</form>