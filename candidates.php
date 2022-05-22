<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="candidates.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Jobs</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Job Portal</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="admin.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about.php">About us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="register.php">Sign up</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="content">
    <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Candidate Name</th>
                <th scope="col">Position</th>
                <th scope="col">Qualification</th>
                <th scope="col">Year Passout</th>
                </tr>
            </thead>
                <?php
                    $server='localhost';
                    $username='root';
                    $password='';
                    $database='jobs';
                    $conn= mysqli_connect($server,$username,$password,$database,"3307");
                    $sql="select name,apply,year,qual from candidates";
                    $result=mysqli_query($conn,$sql);
                    $i=1;
                    if($result->num_rows>0){
                        while($rows=$result->fetch_assoc()){
                            echo "
                            <tbody>
                            <tr>
                                <td>".$i++."
                                <td>".$rows['name']."
                                <td>".$rows['apply']."
                                <td>".$rows['qual']."
                                <td>".$rows['year']."
                            </tr>";
                        }
                    }
                    else{
                        echo"";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>