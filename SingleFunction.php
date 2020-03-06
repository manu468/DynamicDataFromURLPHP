<?php 
//echo "Hola Manoj";
//$id;
//$name;

//$id=$_GET['id'];
// $id = isset($_GET['id']) ? $_GET['id'] : '';
//$name=$_GET['name'];
// $name = isset($_GET['name']) ? $_GET['name'] : '';
//echo "hi $id and $name";
function is_Manoj($id,$name){
//     global $id;
//     global $name;
// $id = isset($_GET['id']) ? $_GET['id'] : '';
// $name = isset($_GET['name']) ? $_GET['name'] : '';
  
    echo "Hola Again $name your id is $id<br />\n";
}



if(function_exists($_GET['f'])){
   
//     // echo $id;
   
//     // echo $name;
$id = isset($_GET['id']) ? $_GET['id'] : '';
$name = isset($_GET['name']) ? $_GET['name'] : '';
   $_GET['f']($id,$name);
}
 ?>


