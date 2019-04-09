<?php
$colors = array("Japan"=>"+81","Mexico"=>"+52","USA"=>"+1","India"=>"+91","Korea"=>"+82");


echo '<table border="1">';
echo '<tr><th>COUNTRY</th><th>CODE</th></tr>';
foreach ($colors as $key=>$value){
       echo '<tr>';
       echo '<td>'.$key.'</td>';
       echo '<td>'.$value.'</td>';
       echo '</tr>';
}
echo '</table>';


?>