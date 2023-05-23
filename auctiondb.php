<?php
/*
$connection = mysqli_connect('localhost','root');
mysqli_select_db($connection,"onlineauctionsystem");
$username=$_POST['username'];
$password=$_POST['password'];
$answer=$_POST['answer'];

$sql="INSERT INTO 'login'('username','password','answer')values('$username','$password',$answer)";
mysqli_query($connection,$sql);           
echo "New record is inserted succefully";
*/
?>
<?php
/*
    $username=filter_input(INPUT_POST,'username');
    $password=filter_input(INPUT_POST,'password');
    $answer=filter_input(INPUT_POST,'answer');
    if(!empty($username))
    {
        if(!empty($password))
        {
            if(!empty($answer))
            {
                $host="localhost:3325";
                $dbusername="root";
                $dbpassword="";
                $dbname="onlineauctionsystem";
                $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
                if(mysqli_connect_error())
                {
                    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
                }
                else{
                    $sql="INSERT INTO login(username,password,security_ans)values('$username','$password','$answer')";
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
            else
            {
                echo "Security answer to be filled!";
                die();
            }
        }
        else{
            echo"Password should not be empty";
            die();
        }
    }
    else{
        echo "Username should not be empty";
        die();
    }
    */?>    
    <!----------------------------------------------->
    <?php
    session_Start();
    $Email=filter_input(INPUT_POST,'username');
    $phno=filter_input(INPUT_POST,'password');
    if(!empty($Email)||!empty($phno))
    {
            $host="localhost:3325";
                $dbusername="root";
                $dbpassword="";
                $dbname="bidding_db";
                $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
			//read from database
			$query = "select Mobile_no,Email from registration where Email = '$Email' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Mobile_no'] === $phno)
					{
						$_SESSION['username'] = $user_data['Email'];
						header("Location:bidding/");
						die();
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
    ?>
<?php
   /* $fname=filter_input(INPUT_POST,'fname');
    $lname=filter_input(INPUT_POST,'lname');
    $Email=filter_input(INPUT_POST,'mail');
    $phno=filter_input(INPUT_POST,'phno');
    if(!empty($fname)||!empty($lname)||!empty($Email)||!empty($phno))
    {
                $host="localhost:3325";
                $dbusername="root";
                $dbpassword="";
                $dbname="onlineauctionsystem";
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
*/
?>
 