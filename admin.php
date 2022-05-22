<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
    <main>
    <div class="sidenav">
        <ul class="nav nav-pills sidenav-ul">
            <li class="nav-item">
                <a href="jobs.php" class="nav-link active" style="margin-left: 0px !important;">
                    Jobs
                </a>
            </li>
            <li>
                <a href="login.php" class="nav-link">
                    Candidates
                </a>
            </li>
            <li>
                <a href="contact.php" class="nav-link">
                    Contact
                </a>
            </li>
        </ul>
    </div>
    <div class="content">
        <p>
            <a href="postjob.php"><button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Post a Job
            </button></a>
        </p>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Position</th>
                <th scope="col">CTC</th>
                </tr>
            </thead>
            
            <?php
                $server='localhost';
                $username='root';
                $password='';
                $database='jobs';
                $conn= mysqli_connect($server,$username,$password,$database,"3307");
                $sql="select cname,position,CTC from jobs";
                $result=mysqli_query($conn,$sql);
                $i=1;
                if($result->num_rows>0){
                    while($rows=$result->fetch_assoc()){
                        echo "
                        <tbody>
                            <tr>
                                <td>".$i++."
                                <td>".$rows['cname']."
                                <td>".$rows['position']."
                                <td>".$rows['CTC']."
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
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

