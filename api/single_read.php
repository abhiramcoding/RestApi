<?php
//header
header('Access-Control-Allow-Origin:*');
header('Content-Type:applicaton/json');

//initialize our api
include("../core/initialize.php");

//instantiate post
$post=new Post($db);
//blog post query
$post->id=isset($_GET['id'])?$_GET['id']: die();
$result=$post->read_single();
$post_arr=array(
    'id'=>$post->id,
    'title'=>$post->title,
    'body'=>$post->body,
    'author'=>$post->author,
    'category_id'=>$post->category_id,
    'category_name'=>$post->category_name
);

//Convert to Json and output
echo json_encode($post_arr);


// else{
//     echo json_encode(array('message'=>'No post found...'));
    
// }



?>