
<?php


$a = empty($_GET['a']) ? 3:intval($_GET['a']);
$b = empty($_GET['b']) ? 4:intval($_GET['b']);


echo $a + $b . '<br>';
// .為字串串接的意思
$c=[];

echo empty($c) ? '空的':'不是空的';






