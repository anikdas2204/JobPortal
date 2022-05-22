<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
    <link rel="stylesheet" href="jobstyle.css">
    <title>Career</title>
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
    <div class="container" >
        <div class="jumbotron" style="background-color:rgba(211, 211, 211, 0.459)">
            <h1> &nbsp;&nbsp; &nbsp;&nbsp; Jobs</h1>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 Avaialable jobs matching your skills</p>
        </div>
        <div class="row">
            <?php
                $server='localhost';
                $username='root';
                $password='';
                $database='jobs';
                $conn= mysqli_connect($server,$username,$password,$database,"3307");
                $sql="select cname,jdesc,position,CTC,skills from jobs";
                $result=mysqli_query($conn,$sql);
                if($result->num_rows>0)
                {
                    while($rows=$result->fetch_assoc())
                    {
                        echo '
                        <div class="col-lg-4 col-md-4 col-sm-6" id="box">
                        <h3 style ="text-align:center;">'.$rows['cname'].'</h3>
                        <h4 style ="text-align:center;">'.$rows['position'].'</h4>
                        <p style ="color:black;text-align:justify;">'.$rows['jdesc'].'</p>
                        <p style ="color:black ;"> <b> Skills Required : </b>'.$rows['skills'].'</p> 
                        <p style ="color:black ;"> <b> CTC : </b>'.$rows['CTC'].'</p>
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="exampleModal">
                            Apply Now
                        </button>
                        </div>
                        ';
                    }
                }
                else
                {
                    echo"";
                }
            ?>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" >
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModal" >Apply for the job</h5>
                    <!-- <button type="button" class="close" data-dismiss="modal hide fade" aria-label="Close">
                    <span aria-hidden="true">&times;</span> -->
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="config.php">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Applying For</label>
                        <input type="text" class="form-control" name="apply">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Qualification</label>
                        <input type="text" class="form-control" name="qual">
                    </div>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Year of Passing</label>
                        <input type="text" class="form-control" name="year">
                    </div>
                </div>
                    <div class="modal-footer">
                    <button id='closeModal' type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>                    <button type="submit" name="applied" class="btn btn-primary">Apply</button>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>    
    </div> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
