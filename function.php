<?php


function db_query($query) {

$host = "localhost"; 
$user = $_COOKIE['user'];
$pwd = $_COOKIE['passwd'];
$bd = "db_2223_CTrabajo_junibaso";

    $connection = mysqli_connect($host, $user,$pwd, $bd);
    $result = mysqli_query($connection,$query);

    return $result;
}

function edit($tblname,$form_data,$field_id,$id){
	$sql = "UPDATE ".$tblname." SET ";
	$data = array();

	foreach($form_data as $column=>$value){

		$data[] =$column."="."'".$value."'";

	}
	$sql .= implode(',',$data);
	$sql.=" where ".$field_id." = ".$id."";
	return db_query($sql); 
    ;
}
function select_id($tblname,$field_name,$field_id){
	$sql = "Select * from ".$tblname." where ".$field_name." = ".$field_id."";
	$db=db_query($sql);
	$GLOBALS['row'] = mysqli_fetch_object($db);
	return $sql;

}
?>