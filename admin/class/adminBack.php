<?php
class adminBack{
    private $con;

    public function __construct()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "ecom";

        $this->conn = mysqli_connect($dbhost,$dbhost,$dbpass,$dbname);

        if(!$this->conn){
            die("Database Connection Error!");
        }
    }
    
    function admin_login($data){
        $admin_email = $data['admin_email'];
        $admin_pass = $data['admin_pass'];

        $query = "SELECT * FROM adminlog  WHERE admin_email='$admin_email' admin_pass='$admin_pass'";
        
        if(mysqli_query($this-conn,$query)){
            $result = $mysqli_query($this->conn,$query);
            $admin_info = mysqli_fetch_assoc($result);

            if($admin_info){
                header("location:dashboard.php");
                session_start();
                $_SESSION['ID'] = $admin_info['ID'];
                $_SESSION['adminEmail'] = $admin_info['admin_email'];
            }else{
                $errmsg = "Your username or Password is incorrect";
                return $errmsg;
            }
        }
    }

}

?>