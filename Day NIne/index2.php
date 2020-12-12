<?
class House{
    public $name="";
    public $color="white";
    public $window="Square";
public function welcome(){
   echo  "<pre>Welcome to $this->name's House.\n
And his house's color is $this->color. Its window is $this->window</pre>";
}
}
$house1=new House();
$house1->name="Mg Mg";
$house1->color="red";
$house1->window="circle";
$house1->welcome();
$house2=new House();
$house2->name="Zaw Zaw";
$house2->color="black";
$house2->welcome();

class Car{
    public $name="";
    public $color="white";
    public $enginePower=1;
public function carEngine(){
echo "$this->name's engine power is $this->enginePower hp. its color is $this->color ";
}
}
$car1=new Car();
$car1->name="mark II";
$car1->color="blue";
$car1->enginePower=4;
$car1->carEngine();

$car2=new Car();
$car2->name="crown";
$car2->color;
$car2->enginePower;
$car2->carEngine();
?>