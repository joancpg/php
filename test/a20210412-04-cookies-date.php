<div>
<?php

date_default_timezone_set('Asia/Taipei');
//法一

//echo date("Y-m-d H:i:s");
//法二

//用這個要去XAMPP的config 裡的PHP(php.ini)去搜尋timezone 改為[Date]
//date.timezone=Asia/Taipei 改玩重開改為stop 在重啟才會讀的到tiape林的時間不然會是柏林的時間(預設時間)
//若法二行不通~就用法一的程式碼直接改吧~法一不用重啟Apache~儲存有反應即

echo time(). '<br>';
echo date("Y-m-d H:i:s"). '<br>';
echo date("Y-m-d H:i:s", time() + 2592000). '<br>';
echo date("Y-m-d H:i:s", time() + 30*24*60*60). '<br>';

$t = strtotime('4/3/21');
echo $t. '<br>';
echo date("Y-m-d H:i:s", $t). '<br>';

?>
</div>



<!--要包div,不然他會亂跑位置-->
