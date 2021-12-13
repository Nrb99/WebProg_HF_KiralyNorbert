<?php
require "db.php";
$id=$_REQUEST['id'];
$sql = "DELETE FROM items WHERE id=$id";

if($conn->query($sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}
?>



