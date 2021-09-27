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
        echo "<h1>1.Feladat</h1>";
        function Datum($s){
            
            if ($s=='Monday'){
                echo "Ma Hetfo";
            }
            else if ($s=="Tuesday"){
                echo "Ma Kedd";
            }
            else if($s=="Wednesday"){
                echo "Ma Szerda";
            }
            else if ($s=="Thursday") {
                echo 'Ma Csutortok';
            
            }
            else if($s=="Friday"){
                echo "Ma Pentek";
            }
            else if($s=="Saturday"){
                echo 'Ma Szombat';
            }
            else {
                echo 'Ma Vasarnap';
            }
            
            
        }
        
        
        Datum(date("l"));
        echo '<br>';
        echo "<h1>2.Feladat</h1>";
                
        function Szamologep($operator,$szam1,$szam2){
            if($operator=="+"){
                echo $szam1+$szam2;
            }
            else if($operator=="-"){
                echo $szam1-$szam2;
            }
            else if ($operator=="*") {
                echo $szam1*$szam2;
            
            }
            else if($operator=="/"){
                echo $szam1/$szam2;
            }
            else{
                echo 'Nem jo az operator';
            }
        }
        Szamologep("/", 2, 3);
        echo '<br>';
        echo "<h1>3.Feladat</h1>";
        function osztoTabla(){
            for($i=1;$i<=10;$i++){
                for($j=1;$j<=10;$j++){
                   
                   echo round($i/$j, 2) . "    ";
                }
                echo '<br>';
                
            }
        }
        osztoTabla();
        echo '<br>';
        function osztoTabla2($szam){
            for($i=1;$i<=10;$i++){
                echo $szam*$i . "/" . $szam ."=" . $szam*$i/$szam; 
                echo '<br>';
            }
        }
        osztoTabla2(5);
        echo '<br>';
        echo '<h1>5.Feladat</h1>';
        
        
        
        
        function spongCase(string $szoveg){
            for($i=0;$i<strlen($szoveg);$i++){
                ucfirst($szoveg);
                if($i%2==0){
                    $szoveg[$i]= strtoupper($szoveg[$i]);
                }
            }
            echo $szoveg;
        }
        
        spongCase("Erdo kozepeben jarok");
        echo '<br>';
            
        echo '<h1>4.Feladat</h1>';
        function sakkTabla(){
            echo '<table width="400px" cellspacing="0px" cellpadding="0px" border="1px">';
            for($row=1;$row<=8;$row++)
            {
                echo "<tr>";
                for($column=1;$column<=8;$column++)
                {
                    $total=$row+$column;
                    if($total%2==0)
                        {
                            echo "<td height=35px width=30px bgcolor=#FFFFFF></td>";
                        }
                    else
                        {
                            echo "<td height=35px width=30px bgcolor=#000000></td>";
                        }
	}
                echo "</tr>";
            }
        }
        
        sakkTabla();
        
       
 
         
        ?> 
           
    </body>
</html>
