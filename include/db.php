<?php
function insert_data($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15){

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mini_projet";


try {

$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
  
$stm=$conn->prepare("insert into demande (nom,prenom,email,tele,aff,url,date_n,language_,prop,hex,cv,ip,pays,cour,lp) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ");

$stm->execute([$n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15]);

}catch(PDOException $e){
    echo $e->getMessage();
}











}
?>