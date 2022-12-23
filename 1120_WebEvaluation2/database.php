<?php
class Database{

    private $db_host="localhost";
    private $db_user="root";
    private $db_pass="";
    private $db_name="ammar";

    private $mysqli= "";
    private $result=array();
    private $conn=false;

    public function __construct()
    {
        if(!$this->conn){
            $this->mysqli=new PDO("mysql:host=$this->db_host;dbname=$this->db_name",$this->db_user,$this->db_pass);  
            $this->mysqli->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn=true;
            if($this->mysqli->errorCode()){
                array_push($this->result,$this->mysqli->errorCode());
                return false;
            }else{
                return true;
            }
        } 
    }

    //function to check if table exist in database or not
    public function table_exist($table){
        //query to get table from database
        $sql="SHOW TABLES FROM  $this->db_name LIKE '$table'";
        //running query
        $tableInDb=$this->mysqli->query($sql);
        //if tableInDb is successful
        if($tableInDb){
            //if tableInDb has exactly 1 result
            if($tableInDb->rowCount()==1){
                return true;
            }else{
                array_push($this->result,$table." does not exit in Database");
                return false;
            }
        }
    }

    //function to insert data into database
    public function insert($table,$params=array()){
        //check if table exist or not
        if($this->table_exist($table)){
            //It result in column names separated by commas e.g; id, student_name, age, city 
            $table_columns=implode("`,`",array_keys($params));
            //It results in values separated by commas e.g;  Values( 'Qaiser','78','Faisalabad')
            $table_values=implode("','",$params);
            // INSERT into students(student_name,age,city) Values( 'Qaiser','78','Faisalabad')
            $sql="INSERT  into `$table` (`$table_columns`) Values( '$table_values')";
            
            if($this->mysqli->query($sql)){
                array_push($this->result,$this->mysqli->lastInsertId());
                return true;
            }else{
                array_push($this->result,$this->mysqli->errorCode());
                return false;
            }
        }else{
            return false;
        }
    }

    
    public function select($table,$row="*", $join=null, $where=null, $order=null, $limit=null){
        if($this->table_exist($table)){
            $sql= "Select $row From `$table` ";
            if($join != null){
                $sql .=" JOIN $join";
            }
            if($where != null){
                $sql .="Where $where";
            }
            if($order != null){
                $sql .=" ORDER BY $order";
            }
            if($limit != null){
                echo $sql .="LIMIT 0,$limit"; 
            }
            $query= $this->mysqli->query($sql);
            if($query->rowCount() > 0){   
                return  $query;
                //return true;
            }
            else{
                echo "No Record Found!";
            }
        }else{
            return false;
        }
    }


    public function __destruct()
    {
        if($this->conn){
            if($this->mysqli=null){
                $this->conn=false;
                return true;
            }
        }else{
            return false;
        } 
    }
    
    public function get_result(){
        $val=$this->result;
        $this->result=array();
        return $val;
    }
}

?>