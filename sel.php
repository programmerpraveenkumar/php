 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php

/* <meta http-equiv="content-type" content="text/html; charset=UTF-8">
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//header("content-type: text/html charset=UTF-8");
$con=mysqli_connect('localhost','root','','data');
$data=$con->query("SELECT * FROM data.computer_dealers");
while($res=$data->fetch_object()){
    echo $res->name.$res->address.'</br>';
}