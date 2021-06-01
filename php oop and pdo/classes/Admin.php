<?php
include_once 'dbh.class.php';

class Admin extends Dbh
{
    public function login($email,$pass)
    {
        if(!empty($email) && !empty($pass))
        {
            $sql="SELECT * FROM user where email=? and passeword=?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$email, $pass]);
            $result = $stmt->fetch();
            
            if($stmt->rowCount()==1)
            {
                header("location:dashboard1.php");
                return $result;
            }
            else
            {
                echo '<script>alert("Incorrect email or passeword!")</script>';
            }
        }
        else
        {
            echo "<script>alert('please enter your email and passeword')</script>";
        }
    }
}
?>