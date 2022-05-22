<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server,$username,$password,$database,"3307");

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo"";

    session_start ( ) ; 
    if ( isset ( $_POST['login'])) { 
        $email = $_POST ['email'] ;
        $pass = $_POST ['password'] ;
    
        $query="SELECT * FROM users WHERE `email`='$email' AND `password`='$pass' ";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result, MYSQLI_ASSOC);


        if(mysqli_num_rows($result)==1){
            header("location:admin.php");
        }
        else{
            ?>
            <html>
                <h1>Either email or password is incorrect...!</h1>
                <a href="login.php" ><button >Back to login page</button></a>
            </html>
            <?php
        }
        // var_dump(mysqli_num_rows($result));
        // die();
    }    
    
    if(isset($_POST['jobsubmit'])){
        $cname=$_POST['cname'];
        $pos=$_POST['position'];
        $jdesc=$_POST['jdesc'];
        $skill=$_POST['skills'];
        $ctc=$_POST['ctc'];

        $sql="INSERT INTO `jobs`(`cname`, `position`, `jdesc`, `skills`, `CTC`)
        VALUES ('$cname','$pos','$jdesc','$skill','$ctc')";

        if(mysqli_query($conn,$sql)){
            header("location:jobs.php");
        }
        else{
            echo "Failed to post the job $sql . " . mysqli_error($conn);
        }
    }

    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['phone_no'];
        $pass= $_POST['password'];
        $cpass= $_POST['cpassword'];
    
        if($pass==$cpass){
            $query="SELECT * FROM users WHERE `email`='$email' OR `phone_no`='$number' ";
            $result=mysqli_query($conn,$query);
            $row=mysqli_fetch_array($result, MYSQLI_ASSOC);


            if(mysqli_num_rows($result)<1){
                $sql = "INSERT INTO `users` (`name`,`email`,`phone_no`,`password`,`cpassword`)
                        VALUES('$name','$email','$number','$pass','$cpass')";
            
                if(mysqli_query($conn,$sql)){
                    header("location:admin.php");
                }
                else{
                    ?>
                    <script>
                        aler("Error: Could not able to execute $sql . ".mysqli_error($conn));
                    </script>
                    <?php
                }
            }
            elseif(mysqli_num_rows($result)>=1){
                ?>
                <html>
                    <h1>You are already registered with this number or email.</h1>
                    <a href="login.php" ><button >Go to login page</button></a>
                </html>
                <?php
            }
        }
        else{
            ?>
            <html>
                <h1>Incorrect confirm password...!</h1>
                <a href="register.php" ><button >Back to signup page</button></a>
            </html>
            <?php
        }
    }
    
    if(isset($_POST['applied'])){
        $name=$_POST['name'];
        $apply=$_POST['apply'];
        $qual=$_POST['qual'];
        $year=$_POST['year'];

        $sql= "INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) 
                VALUES ('$name','$apply','$qual','$year')";
        mysqli_query($conn,$sql);
        header("location:candidates.php");
    }

    mysqli_close($conn);

    ?>