<?php
error_reporting(E_ALL);
ini_set('display_errors',E_ALL);

function validate_name($name)
{
    if (preg_match ("/^[a-zA-z]*$/", $name) && strlen($name) < 40 ) {  
      return true ;
    }else{
      return false ;
    }
}

function validate_tele($tele){

    if(preg_match('/^\+212[0-9]{9,9}$/',$tele)){
    
        return true ;
    }else{
        return false ;
    }


}




function validate_text($text){
    if(strlen($text)<3000){
        return true;

    }else{
        return false;
    }
}

function validate_hex($hex)
{
    if( preg_match("/^[a-f0-9]{1,100}$/is", $hex)){
        return true ;
    }else{
        return false ;
    }
}







?>