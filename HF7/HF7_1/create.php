<?php
require "db.php";

$sql="CREATE TABLE items(
    id INT NOT null PRIMARY Key AUTO_Increment,
    title varchar(10),
    price double(5,2),
    category char(10),
    image varchar (40)
                
                
)";
if($conn->query($sql)===TRUE){
    echo "Table created successfully";
}else{
    echo "Error creating table:" .$conn->error;
}
$conn->close();
