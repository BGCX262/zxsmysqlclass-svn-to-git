<?php
//这是一个封状了mysql数据库基本操作的类.
class mysqlClass{

//数据库连接函数mysqlConnect()
	function mysqlConnect(){
		$mysqlhost=array("host"=>"localhost","user"=>"acruxcn_zxs","pwd"=>"mmhhsx3685");
		$conn=mysql_connect($mysqlhost['host'],$mysqlhost['user'],$mysqlhost['pwd']) or die("数据库连接失败...");
		if($conn) echo "<1>.数据库连接成功!<br>";
	}
//数据库插入函数into()



}

//类测试程序
	$newConn=new mysqlClass();
	$newConn->mysqlConnect();
	echo "<br>";
?>