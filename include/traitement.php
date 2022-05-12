<?php 
error_reporting(E_ALL);
ini_set('display_errors',E_ALL);
include "functions.php";
include "db.php";

$nom_err="";
$prenom_err="";
$email_err="";
$tele_err="";
$aff_err="";
$url_err="";
$date_err="";
$language_err="";
$prop_err="";
$hex_err="";
$cv_err="";
$ip_err="";
$pays_err="";
$cour_err="";
$lp_err="";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $valide=true;

    $nom=htmlspecialchars($_POST['nom']);
    $nom=stripslashes($nom);
    $prenom=htmlspecialchars($_POST['prenom']);
    $prenom=stripslashes($prenom);
    $email=htmlspecialchars($_POST['email']);
    $email=filter_var($email,FILTER_SANITIZE_EMAIL);
    $aff=htmlspecialchars($_POST['aff']);
    $aff=stripslashes($aff);
    $tele=htmlspecialchars($_POST['tele']);
    $tele=stripslashes($tele);
    $url=htmlspecialchars($_POST['url']);
    $URL=filter_var($url,FILTER_SANITIZE_URL);
    $date=htmlspecialchars($_POST['date']);
    
    $language=htmlspecialchars($_POST['language']);
    $language=stripslashes($language);
    $prop=htmlspecialchars($_POST['prop']);
    $prop=stripslashes($prop);
    $hex=htmlspecialchars($_POST['hex']);
    $hex=stripslashes($hex);
    $cv=htmlspecialchars($_POST['cv']);
    $cv=stripslashes($cv);
    $ip=htmlspecialchars($_POST['ip']);
    $ip=stripslashes($ip);
    $pays=htmlspecialchars($_POST['pays']);

    $cour=htmlspecialchars($_POST['cour']);
    $lp=htmlspecialchars($_POST['lp']);
    
    if(empty($nom)){
        $nom_err="*champ vide";
        $valide=false;
    }else{
        if(!validate_name($nom)){
            $nom_err="*nom non valide";
            $valide=false;
        }
    }
    if(empty($prenom)){
        $prenom_err="*champ vide";
        $valide=false;
    }else{
        if(!validate_name($prenom)){
            $prenom_err="*prenom non valide";
            $valide=false;
        }
    }
    if(empty($email)){
        $email_err="*champ vide";
        $valide=false;
    }else{
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $email_err="*email non valide";   
            $valide=false;  
        }
    }
    if(empty($tele)){
        $tele_err="*champ vide";
        $valide=false;
    }else{
        if(!validate_tele($tele)){
            $tele_err="* n tele non valide";
            $valide=false;
        }
    
    }
    if(empty($url)){
        $url_err="*champ vide";
        $valide=false;
    }else{
        if(!filter_var($url,FILTER_VALIDATE_URL)){
            $url_err="* url non valide";
            $valide=false;
        }
    }
    if(empty($date)){
        $date_err="*champ vide";
        $valide=false;
    }
    if(empty($language)){
        $language_err="*champ vide";
        $valide=false;
    }

    if(empty($prop)){
        $prop_err="*champ vide";
        $valide=false;
    }else{
        if(!validate_text($prop)){
            $prop_err="* taille max est 3000 c";
            $valide=false;
        }
    }

    if(empty($hex)){
        $hex_err="*champ vide";
        $valide=false;
    }else{
        if(!validate_hex($hex)){
            $hex_err="*hex non valide";
            $valide=false;
        }
    
    }

    if(empty($cv)){
        $cv_err="*champ vide";
        $valide=false;
    }else{
        if(!validate_text($cv)){
            $cv_err="* taille max est 3000 c";
            $valide=false;
        }
    }

    if(empty($pays)){
        $pays_err="*champ vide";
        $valide=false;
    }
    
    if(empty($cour)){
        $cour_err="*champ vide";
        $valide=false;
    }
    if(empty($lp)){
        $lp_err="*champ vide";
        $valide=false;
    }

    if(empty($aff)){
        $aff_err="*champ vide";
        $valide=false;
    }else{
        if(!validate_text($aff)){
            $aff_err="* taille max est 3000 c";
            $valide=false;
        }
    }

    if(empty($ip)){
        $ip_err="*champ vide";
        $valide=false;
    }else{
        if(!filter_var($ip,FILTER_VALIDATE_IP)){
            $ip_err="* @ip non valide";
            $valide=false;
        }
    }


    

    

    

    

    

    
    
    
    
    
    


    if($valide){

        if(insert_data($nom,$prenom,$email,$tele,$aff,$url,$date,$language,$prop,$hex,$cv,$ip,$pays,$cour,$lp)){
            $gen_err="essayer plus tard";
        }else{
            $notification="add";
        }

    }else{
       $gen_err="information non valide";
    }










}










?>