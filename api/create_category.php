<?php
//header
header('Access-Control-Allow-Origin:*');
header('Content-Type:applicaton/json');
header('Access-Control-Allow-Method:POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Access-Control-Allow-Origin,Content-Type,Access-Control-Allow-Method,Authorization,X-Requested-With');


//initialize our api
include("../core/initialize.php");

//instantiate Category
$category=new Category($db);

//get raw input Category data 
$data=json_decode(file_get_contents("php://input"));
$category->name=$data->name;
//created Category
if($category->create()){
echo json_encode(array('message'=>'New category Created...'));
}
else{
    echo json_encode(array('message'=>'Failed to Created Category...'));
}
?>