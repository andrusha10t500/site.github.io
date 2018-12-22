<?php function id_tab(){
require_once 'connection.php';

$mysqli = new mysqli($host, $user, $password, $database);

$mysqli->real_query("SELECT id,users,photo FROM mix_podelki order by id desc limit 0,9;");

$res=$mysqli->use_result();

#$row = $res->fetch_assoc();

$array = array();
$index=0;
while($row = $res->fetch_assoc()){
    $array[$index] = $row['photo'];
    $index++;
    #echo $array[$index];
}
echo "<tr><td><img id='sv0' class='el' onmouseover='al(this.id)' onmouseout='la(this.id)' src='" . $array[0] . "' height=70 width=90 ></td><td><img id='sv1' class='el' onmouseover='al(this.id)' onmouseout='la(this.id)' src='" . $array[1] . "' height=70 width=90 ></td><td><img id='sv2' class='el' onmouseover='al(this.id)' onmouseout='la(this.id)' src='" . $array[2] . "' height=70 width=90 ></td></tr>
<tr><td><img id='sv3' class='el' onmouseover='al(this.id)' onmouseout='la(this.id)' src='" . $array[3] . "' height=70 width=90 ></td><td><img id='sv4' class='el' onmouseover='al(this.id)' onmouseout='la(this.id)' src='" . $array[4] . "' height=70 width=90 ></td><td><img id='sv5' class='el' onmouseover='al(this.id)' onmouseout='la(this.id)' src='" . $array[5] . "' height=70 width=90 ></td></tr>
<tr><td><img id='sv6' class='el' onmouseover='al(this.id)' onmouseout='la(this.id)' src='" . $array[6] . "' height=70 width=90 ></td><td><img id='sv7' class='el' onmouseover='al(this.id)' onmouseout='la(this.id)' src='" . $array[7] . "' height=70 width=90 ></td><td><img id='sv8' class='el' onmouseover='al(this.id)' onmouseout='la(this.id)' src='" . $array[8] . "' height=70 width=90 ></td></tr>";
}

include 'admin.html';
?>