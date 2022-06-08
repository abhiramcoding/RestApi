<?php
//header
header('Access-Control-Allow-Origin:*');
header('Content-Type:applicaton/json');
header('Access-Control-Allow-Method: DELETE');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Access-Control-Allow-Origin,Content-Type,Access-Control-Allow-Method,Authorization,X-Requested-With');


//initialize our api
include("../core/initialize.php");

//instantiate post
$post=new Post($db);

//get raw posted data 
$data=json_decode(file_get_contents("php://input"));
$post->id=$data->id;
//Delete post
if($post->delete()){
echo json_encode(array('message'=>'Post Deleted...'));
}
else{
    echo json_encode(array('message'=>'Post Not Deleted...'));
}
?>