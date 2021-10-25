<?php
global $link;
function logDebug($mess){
	error_log( date('d.m.Y h:i:s') . " $mess \n", 3, "log.log");
}
function connect(){
	global $link;	
	$link = mysqli_connect('localhost', 'root', '', 'btl') or die ('Không thể kết nối tới database');
	if (!$link) {
	    die('<br/>Khong ket noi duoc: ');
	}	
	//mysql_select_db('kenhvtv', $link) or die('Could not select database.');
	mysqli_query($link,"SET CHARACTER SET 'utf8'");
}

function close(){
	global $link;
	mysqli_close($link);
}
function select_one($sql){
	$data = exec_select($sql);
	if (!$data) return null;
	return $data[0];
}
function exec_select($sql){
	global $link;
	logDebug("sql=[$sql]");//de fix bug
	connect();
	$ret = array();
	$res = mysqli_query($link, $sql) ;
	$row = array();
	//Lay loi sau khi thuc hien truy van
	$err = mysqli_error($link);
	//kiem tra
	if ($err){
		print("Khong the select duoc");
		logDebug("Khong the select duoc,ERROR=[" . $err . "]" );
		logDebug(  "COUNT=[0]" );
		return null;
	}
	
	//Khong co loi
	if ($res ){
		$i = 1;
		//lay tung dong ket qua
		while( $row = mysqli_fetch_array($res, MYSQLI_ASSOC) )
		{				
			$ret[]= $row ;
		}//echo "<pre>";print_r($ret);die();
		mysqli_free_result($res);
	}	
	close();
	return $ret;
}
function exec_update($sql){
	global $link;
	logDebug( "<!-- sql=[$sql] -->");//de fix bug
	connect();
	$res = mysqli_query($link,$sql) ;
	$row = array();
	//Lay loi sau khi thuc hien truy van
	$err = mysqli_error($link);
	//kiem tra
	if ($err){
		print("Khong the select duoc,ERROR=[" . $err . "]" );
		print(  "COUNT=[0]" );
		return -1;
	}
	$ret = mysqli_affected_rows($link);
	close();
	return $ret;
}
function sql_str($val){
	global $link;
	if($val === 0)  return '0' ;
	if($val === null) {
		return 'NULL';
	}	
	// if (get_magic_quotes_gpc()) return "" . mysqli_real_escape_string($link,stripslashes($val)) . "" ;
	return "" . mysqli_real_escape_string($link, $val)  . "" ;
}
?>
