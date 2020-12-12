<?

class Dress{
    private $color="red";
    public function getColor(){
        return $this->color;
    }
}
$dress1=new Dress();
echo $dress1->getColor();
?>