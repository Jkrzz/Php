<?
class Dress{
    const BLUE= "blue";
    public function getColor(){
        return self::BLUE;
    }
}
echo Dress::BLUE;
?>