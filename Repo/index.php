<?php
include('content/config.php');
if($_NoBase==1){
header("Location: installation/index.php"); 
}
else{
Echo("Base Exist Go Next Step");
}
?>