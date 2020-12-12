<?

$arr= [
    'boo',
    'coo',
    'live',
    3.14
];
var_dump($arr);
echo '<br>';
$arr['foo']='foa';
var_dump($arr);
unset($arr['foo']);
echo '<br>';
var_dump($arr);
?>