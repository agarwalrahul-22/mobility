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
    <div  >
        
        
        <div  role="tabpanel" aria-labelledby="tab-register">
            <form>
                <div class="text-center mb-3">
                    <div class="text-center">
                    <p>Sign up with:</p>
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

                <p class="text-center">or:</p>

                <!-- Name input -->
                <!-- <div class="form-outline mb-4">
                    <input type="text" id="registerName" class="form-control" />
                    <label class="form-label" for="registerName">Name</label>
                </div> -->

                <!-- Username input -->
                <div class="form-outline mb-4">
                    <input type="text" id="registerUsername" class="form-control" />
                    <label class="form-label" for="registerUsername">Username</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" id="registerEmail" class="form-control" />
                    <label class="form-label" for="registerEmail">Email</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="registerPassword" class="form-control" />
                    <label class="form-label" for="registerPassword">Password</label>
                </div>

                <!-- Repeat Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="registerRepeatPassword" class="form-control" />
                    <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
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