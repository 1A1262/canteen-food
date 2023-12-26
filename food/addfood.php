<?php


if($_SERVER["REQUEST_METHOD"]=="POST"){

    $recipe=$_POST['recipe-name'];
    $price=$_POST['recipe-price'];
    $image=$_POST['recipe-image'];


    $conn=new mysqli("localhost","root","Naveen_2001","canteen");
    $sql="insert into food(recipe,price,image) values('$recipe',$price,'$image');";
    if($conn -> query($sql)){
        echo "Added Successfully";
    }



}


?>