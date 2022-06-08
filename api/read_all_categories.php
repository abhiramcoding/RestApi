<?php
//header
header('Access-Control-Allow-Origin:*');
header('Content-Type:applicaton/json');

//initialize our api
include("../core/initialize.php");

//instantiate post
$category=new Category($db);
//blog post query
$result=$category->read();
//get num row
$num=$result->rowCount();

if($num >0){
$category_arr= array();
$category_arr['data']=array();
while($row=$result->fetch(PDO::FETCH_ASSOC)){
 extract($row);
 $category_item=array(
     'id'=>$id,
     'name'=>$name,
     'created_at'=>$created_at,
 );
 array_push($category_arr['data'],$category_item);
}
//Convert to Json and output
echo json_encode($category_arr);

}
else{
    echo json_encode(array('message'=>'No pcategory is  found...'));
    
}



?>