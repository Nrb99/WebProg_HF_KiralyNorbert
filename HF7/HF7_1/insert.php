<?php
require "db.php";

if(isset($_POST['submit'])) {
    if(isset($conn)) {
        $sql = "INSERT INTO items(title,price,category,image) 
        values('" . $_POST["title"] . "','" . $_POST["price"] . "','" . $_POST["category"] . "','" . $_POST["image"] . "')";
    if($conn->query($sql)){
        echo "Yess";
    }else{
        die ("Noooo   " . $conn->error);
    }

    }
}




?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
    <input type="text" placeholder="Write title here" name="title"><br>
    <input type="text" placeholder="Write price here" name="price"><br>
    <input type="text" placeholder="Write category here" name="category"><br>
    <input type="text" placeholder="Write img name here" name="image"><br>
    <input type="submit" name="submit" value="Elkuld">
</form>
