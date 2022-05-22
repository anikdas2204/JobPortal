<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="postjobstyle.css">
    <title>Post a Job</title>
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
                <a class="nav-link " aria-current="page" href="index.php">Home</a>
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
         <form method="POST"  action="config.php">
            <div class="mb-3">
                <label for="companyName" class="form-label">Company Name</label>
                <input required type="text" class="form-control" id="companyName" name="cname" >
            </div>
            <div class="mb-3">
                 <label for="exampleInputPosition" class="form-label">Position</label>
                 <input required type="text" class="form-control" id="exampleInputPosition" name=position>
            </div>
            <div class="mb-3">
                <label for="jobDesc" class="form-label">Job Description</label>
                <textarea required type="text" rows="5" class="form-control" id="jdesc" name="jdesc"></textarea>
            </div>
            <div class="mb-3">
                 <label for="skills" class="form-label">Skills Required</label>
                 <input required type="text" class="form-control" id="skills" name="skills">
            </div>
            <div class="mb-3">
                 <label for="ctc" class="form-label">CTC</label>
                 <input required type="text" class="form-control" id="ctc" name="ctc">
            </div>
            <button type="submit" class="btn btn-primary" name="jobsubmit">Submit</button>
        </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>