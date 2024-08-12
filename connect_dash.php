<?php
session_start();
if(isset($_POST['submit']))
{
    $username=$_POST['name'];
    $address=$_POST['address'];
    $age=$_POST['age'];
    $no_ofdays=$_POST['days'];
    $price=$_POST['price'];
    $car=$_POST['car'];
    
    
    
    $con=mysqli_connect('127.0.0.1','root','Aishu@0303','car');
    if($con==false)
    {
        echo "Error in database connection!!";
    }
    else{
        $insert="INSERT INTO `services`(`username`, `address`, `age`, `no_of_days`,`price`) VALUES ('$username','$address','$age','$no_ofdays','$price')";
            $row=mysqli_query($con,$insert);
            if($row==true)
            {
            ?>
                <script> alert("Booked Successfully");
                window.open('details.php','_self');</script>
            <?php
                $_SESSION['username']=$username;
                $_SESSION['address']=$address;
//                $_SESSION['username']=$data['username'];
//                $_SESSION['username']=$data['username'];
                $_SESSION['days']=$no_ofdays;
                $_SESSION['price']=$price;
                $_SESSION['car']=$car;
                
            }
            else{
                echo "error";
            }
            
    }
    
    
    
        
}
?>