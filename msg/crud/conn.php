<?php
   $mysql_server_name = 'localhost';//服务器名称
   $mysql_username = 'root';//链接数据库的用户名
   $mysql_password = '123';//密码
   $mysql_database = 'msgtable';//数据库名

   //链接数据库服务器并选择一个数据库
   $mysql =mysqli_connect($mysql_server_name,$mysql_username,$mysql_password);

   if(!$mysql){
    echo "数据库连接错误<br/>";
   }

  
?>
