<?= $this->extend("base");?>


<?= $this->section("content");?>
<!DOCTYPE html>

<head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"><!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <style>
body {background-color: #101522;
padding-top: 50px; }
.hover-item{color:#f82249;}
.hover-item:hover{background-color:white; color:#101522;}
.hover-button{background-color:#f82249;}
.hover-button:hover{background-color:#f82249; opacity: .6}

</style>

</head>

<body>
<div class="container w-50 p-5" >

    <!-- Pills navs -->
    <!-- Pills navs -->

    <!-- Pills content -->
    <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $cpass = $_POST['cpass'];

                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "electrogati";

                $conn = mysqli_connect($servername, $username, $password, $database);

                if(!$conn){
                    die("Can't connect to the server: ". mysqli_connect_error());
                }else{
                    $sql = "INSERT INTO `signup` (`username`, `email`, `pass`, `cpass`, `dt`) VALUES ('$username', '$email', '$pass','$cpass' , current_timestamp())";
                    $result = mysqli_query($conn, $sql);

                    if($result){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your entry has been submitted successfully!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>';
                    }
                    else{
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>';
                    }

                }
            }
        ?>
    <div class="  w-100 p-3" >
        <div  role="tabpanel" aria-labelledby="tab-register">
            <form action="/mobility/index.php" method="post">
                <div class="text-center mb-3" style="font-size:15px; color:rgb(195,195,195);">
                    <div class="text-center" >
                    <p class="text-center">Sign Up with:</p>
                </div>
                    <button type="button"  class="btn btn-link btn-floating mx-1 hover-item ">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button"  class="btn btn-link btn-floating mx-1 hover-item ">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button"  class="btn btn-link btn-floating mx-1 hover-item ">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <!-- <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button> -->
                </div>

                <p class="text-center" style="font-size:15px; color:rgb(195,195,195);">or:</p>

                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input type="text" id="username" name="username" class="form-control" />
                    <label class="form-label" for="username"> <span style="font-size:15px; color:rgb(195,195,195);">Username</span></label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email"  id="email" name="email" class="form-control" />
                    <label class="form-label"  for="email"><span style="font-size:15px; color:rgb(195,195,195);">Email</span></label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="pass" name="pass" class="form-control" />
                    <label class="form-label" for="pass"><span style="font-size:15px; color:rgb(195,195,195);">Password</span></label>
                </div>

                <!-- Repeat Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="cpass" name="cpass" class="form-control" />
                    <label class="form-label" for="cpass"><span style="font-size:15px; color:rgb(195,195,195);">Confirm Password</span></label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4" style="font-size:15px; color:rgb(195,195,195);">
                    <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                        aria-describedby="registerCheckHelpText" />
                    <label class="form-check-label" for="registerCheck">
                        I have read and agree to the terms
                    </label>
                </div>

                <!-- Submit button -->
                <button type="submit"  class=" btn btn-primary btn-block mb-3 hover-button">Sign Up</button>
            </form>
        </div>
    </div>
    <!-- Pills content -->
</div>
</body>

<?= $this->endSection(); ?>