<?php
require "db.php";

    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $title=$_POST['title'];
        $price=$_POST['price'];
        $category=$_POST['category'];
        $image=$_POST['image'];

        $sql="Update items set title='$title',price='$price',category='$category',image='$image'
        where id='$id'";

        $result=$conn->query($sql);

        if($result===True){
            echo "Sikeres";
        }else{
            echo "problem" . $conn->error();
         }
    }else{
        $id=$_GET['id'];
        $sql="SElECT * FROM items WHERE id=".$id ;
        $result=$conn->query($sql);
        $row=$result->fetch_assoc();
        $conn->close();
    }

?>


<input type="text"  name="title" value="<?php echo $row['title'];?>"><br>
    <input type="text"  name="price" value="<?php echo $row['price'];?>"><br>
    <input type="text"  name="category" value="<?php echo $row['category'];?>"><br>
    <input type="text" name="image" value="<?php echo $row['image'];?>"><br>
    <input type="submit" name="submit" value="Elkuld">


