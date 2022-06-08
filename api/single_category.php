<?php
//header
header('Access-Control-Allow-Origin:*');
header('Content-Type:applicaton/json');

//initialize our api
include("../core/initialize.php");

//instantiate post
$category=new Category($db);
//blog post query
$category->id=isset($_GET['id'])?$_GET['id']: die();
$result=$category->read_single();
$category_arr=array(
    'id'=>$category->id,
    'name'=>$category->name,
    'created_at'=>$category->created_at
);

//Convert to Json and output
echo json_encode($category_arr);


// else{
//     echo json_encode(array('message'=>'No post found...'));
    
// }



?>