<?php

setcookie('mycookie','my test 中文');

echo $_COOKIE['mycookie'];


//第一次會跑奇怪東西~後面就會正常