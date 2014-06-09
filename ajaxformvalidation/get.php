<?php
function json($ayya){
    return json_encode($ayya);
}


function check(){
    if($_GET['email1']=='email'){
        return json(array("status"=>"exist","error"=>"Email1 is already taken"));    

    }
    elseif ($_GET['email2']=='email2'){
        return json(array("status"=>"exist","error"=>"Email2 is already taken"));    

    }
    else{
        return json(array("status"=>"ok","error"=>"Everything is ok"));    
    }

}
echo check();
?>