<?php
	$callback=$_GET['callback'];

	//查询数据库
	
		$arr=array(
			 "ok"=>1,
			 "info"=>array(

			 	array("id"=>1,"title"=>"请问1"),
			 	array("id"=>1,"title"=>"请问2"),
			 	array("id"=>1,"title"=>"请问3"),
			 	array("id"=>1,"title"=>"请问4"),
			 	array("id"=>1,"title"=>"请问5")

			 )

		);


	//转换json  $json-json_encode($arr)
		
		$json=json_encode($arr);


	//返回 echo $json
	//
	//如果用jsonp 跨域返回方式
	//
	//
	
	//echo $callback+"("+$json)
	//php中变量之间用点隔开
	
	echo $callback."(".$json.")";

	//echo $callback($json);

?>