<?php

	$list=array(
		array('id'=>1,'pid'=>2,'text'=>'See you again'),
		array('id'=>2,'pid'=>2,'text'=>'See you again'),
		array('id'=>3,'pid'=>4,'text'=>'See you again'),
		array('id'=>4,'pid'=>3,'text'=>'See you again'),
		array('id'=>5,'pid'=>4,'text'=>'See you again'),
		array('id'=>6,'pid'=>2,'text'=>'See you again'),
		array('id'=>7,'pid'=>1,'text'=>'See you again'),
		array('id'=>8,'pid'=>2,'text'=>'See you again'),
		array('id'=>9,'pid'=>4,'text'=>'See you again'),
		array('id'=>10,'pid'=>1,'text'=>'See you again'),
		array('id'=>11,'pid'=>3,'text'=>'See you again'),
		array('id'=>12,'pid'=>3,'text'=>'See you again'),
		array('id'=>13,'pid'=>4,'text'=>'See you again'),
		array('id'=>14,'pid'=>1,'text'=>'See you again'),
		array('id'=>15,'pid'=>3,'text'=>'See you again'),
		array('id'=>16,'pid'=>1,'text'=>'See you again'),
	);

	$type=$_GET['type'];

	$temp=array();
	foreach ($list as $key => $val) {
		if($type==$val['pid']){
			$temp[]=$val;
		}
	}
	
	echo json_encode($temp);

	// $temp=array();

	// $temp[0]='a';
	// $temp[1]='b';

	// print_r($temp);








