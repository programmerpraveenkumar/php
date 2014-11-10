<html>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    
    <head></head>
<body>
<?php
function getHTML($url,$timeout)
{ 
    try{
       $ch = curl_init($url); // initialize curl with given url
       curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]); // set  useragent
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
     curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout); // max. seconds to execute
      // curl_setopt($ch, CURLOPT_FAILONERROR, 1); // stop when it encounters an error
        return @curl_exec($ch);

    }
    catch(Exception $e){
        die($e->getMessage());
    }
}
$dom=new DOMDocument();
//for(){
$data=getHTML('http://www.justknow.in/Trichy/Classified-Profiles/AMC+Service+Provider/ct-274','50');
////$data=  getHTML('http://localhost/php/dom/index.html','50');
//echo $data;die();
@$dom->loadHTML($data);
//$doc = new DomDocument();
//$doc->loadHTML($html);
$xpath = new DomXpath($dom);
$entries=$xpath->query('/html/body//div');            
//$entries=$dom->getElementById('centerside');

foreach ($entries as $entry){         
    switch($entry->getAttribute('class')){
        //bprofile_img_div allpad
        case "bprofile_head":
            //echo 'Shop Name:'.$dom->saveHTML($entry);
            echo 'Shop Name '.$entry->nodeValue.'</br>';
            $link=$xpath->query('.//a[@class="bprofile_head_link"]',$entry);
            echo 'Link '.$link->item(0)->getAttribute('href').'</br>';                        
        break;
        case "width100p_floatleft bprofile_content_div":            
            //echo $dom->saveHTML($entry);
            echo 'Address '.$entry->nodeValue.'</br>';
            $phone=$xpath->query('.//span[@class="pno_blue"]',$entry);
            echo 'Contact No '.$phone->item(0)->nodeValue.'</br>';                        
            $phon=$xpath->query('.//img',$entry);                        
            //echo 'Image Url <img src="'.$phon->item(0)->getAttribute('src').'"/> </br>';            
        break;        
    }
//    $main=$xpath->query('//div[@class]',$entry);            
//    echo $main->item(0)->getAttribute('class').'</br>';
//    if($main->item(0)->getAttribute('class')=='bprofile_head')
//        echo $main->item(0)->nodeValue.'</br>';
//    if($main->itegetAttribute('class')=='bprofile_head'){
//            echo  'shop name='.$entry->nodeValue.'</br>';
//            echo  'Link='.$main->getAttribute('href').'</br>';          
//    }
}
   //else if($entry->getAttribute('class')=='width100p_floatleft bprofile_content_div'){     
//       $address=$xpath->query('//div[@class="bprofile_address allpad"]',$entry);
//       echo  'Address</br>'.$address->item(0)->nodeValue.'</br>';       
//       $image=$xpath->query('//img',$entry);            
//       echo 'Image src='. $image->item(0)->getAttribute('src').'</br>';
//       $mobile=$xpath->query('//span[@class="pno_blue"]',$entry);
//       echo 'Phone no='. $mobile->item(0)->nodeValue.'</br>';
//       echo '<img src="'.$image->item(0)->getAttribute("src").'" />';
    //}
        
//}
die('');
//$getdata=$dom->getElementById("source");
$getda=$dom->getElementsByTagName('div');
//echo $dom->saveHTML($getdata);
//$getdata=$dom->getElementsByTagName('a');
//if(!$getdata){
//    echo 'error';
//}
////echo $getdata->item(1);
//echo $getda->length;
////echo $getdata->item(1)->;
////echo $getdata->nodeValue;
//echo '<pre>';
$dompath=new DOMXPath($dom);

foreach($getda as $val){
    //$classes=array('bprofile_head_link','bprofile_head','width100p_floatleft bprofile_content_div','width100p_floatleft pay_list_sumemnu');
    $classes=array('bprofile_head','width100p_floatleft bprofile_content_div');
    $head=$val->getAttribute('class');       
    if(in_array($head,$classes)){ 
        if($head=='bprofile_head'){
            $dompath->query('',$val);
        }
            //echo $val->nodeValue.'--'.$val->getAttribute('href').'</br>';
    }
             //echo $val->nodeValue.'--'.$val->getAttribute('href').'</br>';
        //echo html($dom->saveHTML($val));
    
}
function html($data){
    return html_entity_decode($data);
}
//view-source:http://www.justknow.in/Trichy/Profiles/Fusion+Systems/pd-6674/ct-274/ky-AMC+Service+Provider/pfd-classified/tb-tab12
?>
    
    </body>
</html>