<h3>Online conference registration</h3>

<form method="post" action="">
    <label for="fname"> First name:
        <input type="text" name="firstName">
    </label>
    <br><br>
    <label for="lname"> Last name:
        <input type="text" name="lastName">
    </label>
    <br><br>
    <label for="email"> E-mail:
        <input type="text" name="email">
    </label>
    <br><br>
    <label for="attend"> I will attend:<br>
        <input type="checkbox" name="attend[]" value="Event1">Event 1<br>
        <input type="checkbox" name="attend[]" value="Event2">Event2<br>
        <input type="checkbox" name="attend[]" value="Event3">Event2<br>
        <input type="checkbox" name="attend[]" value="Event4">Event3<br>
    </label>
    <br><br>
    <label for="tshirt"> What's your T-Shirt size?<br>
        <select name="tshirt">
            <option value="P">Please select</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>
    </label>
    <br><br>
    <label for="abstract"> Upload your abstract<br>
        <input type="file" name="abstract"/>
    </label>
    <br><br>
    <input type="checkbox" name="terms" value="">I agree to terms & conditions.<br>
    <br><br>
    <input type="submit" name="submit" value="Send registration"/>
<?php
    $firstname=$_POST['firstName'];
    $lastname=$_POST['lastName'];
    $email=$_POST['email'];
    $accepted=1;
    if(!empty($_POST['firstName'])&&!empty($_POST['lastName'])&&!empty($_POST['email'])){
        echo "$firstname" . "<br>";
        echo "$lastname" . "<br>";
        echo "$email" . "<br>";

    }
    else{
        $accepted=0;
        echo "Nem toltottel ki mindent mezot";

    }
    if(isset($_POST['attend'])){
        echo "Events: ";
        foreach ($_POST['attend'] as $value){
            echo "$value" . "<br>";
        }
    }
    else{
        $accepted=0;
        echo "Jeloljon be egy esemenyt";
    }
    if($_POST['tshirt']=="P"){
        echo "Nem valasztottal polot <br>";
    }
    else{
        echo "Ilyen meretu polot valasztottal:" . $_POST['tshirt'] ." <br>";
    }

    if(isset($_POST['terms'])&&$accepted==1){
        echo "sikeres kitoltes<br>";
    }
    else if(!isset($_POST['terms'])){

        echo "nem egyezett bele a felhaszlaasi feltetelekbe <br>";
    }
    else{
        echo "valamit nem toltottel ki <br>";
    }



