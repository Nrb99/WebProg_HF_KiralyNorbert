<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $tomb=[5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200'];
        
        for($i=0;$i<count($tomb);$i++){
            if(is_numeric($tomb[$i])){
                echo $tomb[$i] . ' Igen';
                echo '<br>';
            }
            else echo "nem";
            echo '<br>';
        }
         
    
        
        $orszagok=array("Magyarorszag"=>"Budapest","Romania"=>"Bukarest","Belgium"=>"Brussels","Austria"=>"Becs","Poland"=>"Warsaw");  
        foreach ($orszagok as $kulcs=>$ertek){     
            echo $kulcs . " fovarosa " . $ertek . "<br>";            
        }
        
        $napok = array(
    	"HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
    	"EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
    	"DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
        );

        
        foreach ($napok as $kulcs=>$ertek){
            echo $kulcs . " ";
            foreach ($ertek as $ertek2){
                echo $ertek2 . ",";
            }
            echo "<br>";
        }
        $szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');
       
        function toUpper(array $array){
            foreach($array as $value){
            $value = strtoupper($value);
            echo $value . " ";
            
            }
            echo '<br>';
           
        }
        toUpper($szinek);
           function toLower(array $array){
            foreach($array as $value){
            $value = strtolower($value);
            echo $value . " ";
            
            }
            echo '<br>';
        }
        toLower($szinek);
           
          
        
        
        ?>
    </body>
</html>
