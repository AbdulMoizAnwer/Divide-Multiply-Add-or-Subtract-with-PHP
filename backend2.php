<?php 

if($_POST['Sum']=='Sum')
{
$var = $_POST['n1'];
$test = $_POST['n2'];
$result = $var + $test;
echo $result;
}
else if($_POST['min']=='Difference')
{
    $var = $_POST['n1'];
    $test = $_POST['n2'];
    $result = $var - $test;
    echo $result;
}
else if($_POST['Mult']=='Multiply')
{
    $var = $_POST['n1'];
    $test = $_POST['n2'];
    $result = $var * $test;
    echo $result;
}
else if($_POST['Div']=='Divide')
{
    $var = $_POST['n1'];
    $test = $_POST['n2'];
    $result = $var / $test;
    echo $result;
}
else{
    echo'wrong data';
}
?>
