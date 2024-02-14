<?php
class DB{
    public $conn;
    private $host='localhost';
    private $user='root';
    private $password='';
    private $database='fswd_app';


function __construct()
{
    $connection=new mysqli($this->host,$this->user,$this->password,$this->database);
    if($connection->connect_errno)
    {
        die ('conncetion eroor_'.$connection->connect_error);
    }
    else{
        $this->conn=$connection;
      //  echo 'connection susseccful';
       // var_dump($this->conn);
    }
}

public function insert($query){
    $result=$this->conn->query($query);
    if($result)
    {
        echo 'data insert seccuessfuk';

    }
    else{ echo 'data did not insert';}
    return $result;


}
}

$db= new DB();
?>