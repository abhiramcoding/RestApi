<?php
//header
header('Access-Control-Allow-Origin:*');
header('Content-Type:applicaton/json');
header('Access-Control-Allow-Method: PUT');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Access-Control-Allow-Origin,Content-Type,Access-Control-Allow-Method,Authorization,X-Requested-With');


//initialize our api
include("../core/initialize.php");

//instantiate post
$post=new Post($db);

//get raw posted data 
$data=json_decode(file_get_contents("php://input"));
$post->id=$data->id;
$post->title=$data->title;
$post->body=$data->body;
$post->author=$data->author;
$post->category_id=$data->category_id;

//created post
if($post->update()){
echo json_encode(array('message'=>'Post update...'));
}
else{
    echo json_encode(array('message'=>'Post Not update...'));
}
?>