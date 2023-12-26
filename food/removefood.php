<?php


if($_SERVER["REQUEST_METHOD"]=="POST"){

    $recipe=$_POST['remove-recipe'];


    $conn=new mysqli("localhost","root","Naveen_2001","canteen");
    $sql="delete from food where recipe='$recipe';";
    if($conn -> query($sql)){
        echo "Removed Successfully";
    }



}


?>