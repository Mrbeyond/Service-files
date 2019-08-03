<?php 
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$uname=$_POST["username"];
$pazk=$_POST["password"];
$pix=$_POST["profilepic"];


class Form{
public $dat;
public function connect(){
    $this->dat= mysqli_connect("localhost", "root", "", "visual");
    if(!$this->dat){
        die("Connection error, please try again");
    }else{echo "connection secured";}
}
public function dbpusher($user,$first,$last,$pazk,$pic){
    mysqli_query($this->dat, " INSERT into signup(username, firstname, lastname, password,profilepic) values('$user','$first','$last','$pazk','$pic') ");
}


}
$yewo= new Form;
$yewo->connect();
$yewo->dbpusher($uname,$fname,$lname,$pazk,$pix);





?>