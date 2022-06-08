<?php
//header
header('Access-Control-Allow-Origin:*');
header('Content-Type:applicaton/json');
header('Access-Control-Allow-Method:POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Access-Control-Allow-Origin,Content-Type,Access-Control-Allow-Method,Authorization,X-Requested-With');


//initialize our api
include("../core/initialize.php");

//instantiate post
$post=new Post($db);

//get raw posted data 
$data=json_decode(file_get_contents("php://input"));
$post->title=$data->title;
$post->body=$data->body;
$post->author=$data->author;
$post->category_id=$data->category_id;

//created post
if($post->create()){
echo json_encode(array('message'=>'Post Created...'));
}
else{
    echo json_encode(array('message'=>'Post Not Created...'));
}
?>