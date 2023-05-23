<?php
    $fname=filter_input(INPUT_POST,'fname');
    $lname=filter_input(INPUT_POST,'lname');
    $Email=filter_input(INPUT_POST,'mail');
    $phno=filter_input(INPUT_POST,'phno');
    if(!empty($fname)||!empty($lname)||!empty($Email)||!empty($phno))
    {
                $host="localhost:3325";
                $dbusername="root";
                $dbpassword="";
                $dbname="bidding_db";
                $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
                if(mysqli_connect_error())
                {
                    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
                }
                else{
                    $sql="INSERT INTO registration(Mobile_no,First_name,Last_name,Email)values('$phno','$fname','$lname','$Email')";
                    if($conn->query($sql))
                    {
                        echo "New Record Added Sucessfully";
                    }
                    else{
                        echo"Error:".$sql."<br>".$conn->error;
                    }
                    $conn->close();
                }
    }
    else{
        echo "Enter valid information!";
        die();
    }
?>
 