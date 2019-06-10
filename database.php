<?php   
 //database.php  
 class Databases{  
      public $con;  
      public $error;  
      public function __construct()  
      {  
           $this->con = mysqli_connect("127.0.0.1:3306", "root", "", "testing");  
           if(!$this->con)  
           {  
                echo 'Database Connection Error ' . mysqli_connect_error($this->con);  
           }  
      }  
      public function required_validation($field)  
      {  
           $count = 0;  
           foreach($field as $key => $value)  
           {  
                if(empty($value))  
                {  
                     $count++;  
                     $this->error .= "<p>" . $key . " is required</p>";  
                }  
           }  
           if($count == 0)  
           {  
                return true;  
           }  
      }  

        public function UserRegister($username, $password, $email)
        {  
            //$password = md5($password);  
            $query = "INSERT INTO users(username, password, email) values('".$username."','".$password."','".$email."')" or die(mysql_error()); 
            $result = mysqli_query($this->con, $query);  
            return $query;  

            }  

      public function can_login($table_name, $where_condition)  
      {  
           $condition = '';  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           /*This code will convert array to string like this-  
           input - array(  
                'id'     =>     '5'  
           )  
           output = id = '5'*/  
           $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
           $result = mysqli_query($this->con, $query);  
           if(mysqli_num_rows($result))  
           {  
                return true;  
           }  
           else  
           {  
                $this->error = "Wrong Data";  
           }  
      }   
      
      public function isUserExist($emailCheck)
      {  
        $query = "SELECT * FROM users WHERE email = '".$emailCheck."'";  
        $result = mysqli_query($this->con, $query);  
        if(mysqli_num_rows($result))  
           {  
                return true;  
           }  
           else  
           {  
                return false;    
           }  
    }
 }  
 ?>  