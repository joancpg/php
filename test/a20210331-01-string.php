
<?php

$name="Shin";

echo"Hello $name <br>

<h2>pui-pui - </h2>

";
//""中間可換行



$b=<<<MYSTR

165514


MYSTR;
//<<<開頭打啥~結尾就打啥~株間可以夾字串~結尾要再行才會生效

echo $b;


echo "abc\ndef\\aaa\"---<br>";

echo'abc
def\\aaa\'---<br>';
//如果是單引號只能讀到\\跟\'至兩個意義~其他換行直接換~打成府號沒有用














