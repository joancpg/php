<pre>
<?php

$ar1 = [];

for($i=1;$i<=42;$i++){
    $ar1[]=$i;
}

shuffle($ar1);
//隨機排列弄亂

echo implode('-',$ar1);

//implode('中間接的符號',要接的東西);

?>
</pre>
