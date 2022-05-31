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
body { background-color:#101522; padding-top: 60px;}
.hover-item{color:#f82249;}
.hover-item:hover{background-color:white; color:#101522;}
.hover-button{background-color:#f82249;}
.hover-button:hover{background-color:#f82249; opacity: .6}
.hover-text{color:#f82249;}
.hover-text:hover{color:#f82249; opacity: .6}
.card { 
        box-shadow: 0 0 30px 0;
        background: #161d2f !important;
        backdrop-filter: blur(10px);
        border-radius: 15px;
        border: 2px solid rgb(195,195,195);
    }
</style>

</head>

<body>
    
<div class="container w-50 p-5" >

    <!-- Pills navs -->

    <!-- Pills navs -->

    <!-- Pills content -->
    <div class=" w-100 p-3 card card-body" >
        <div  role="tabpanel" aria-labelledby="tab-login">
            <form>
                <div class="text-center mb-3" style="font-size:15px; color:rgb(195,195,195);">
                    <p class="text-center">Sign in with:</p>
                    <button type="button"   class="btn btn-link btn-floating mx-1 hover-item">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button"  class=" btn btn-link btn-floating mx-1 hover-item ">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1 hover-item ">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <!-- <button type="button" class="btn btn-link btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button> -->
                </div>

                <p class="text-center" style="font-size:15px; color:rgb(195,195,195);">or:</p>

                <!-- Email input -->
                <div class="form-outline mb-1">
                <label class="form-label" for="loginName"><span style="font-size:15px; color:rgb(195,195,195);">Email or Username</span></label>
                    <input type="email" id="loginName" class="form-control" />
                    
                </div>

                <!-- Password input -->
                <div class="form-outline mb-1">
                <label class="form-label" for="loginPassword"><span style="font-size:15px; color:rgb(195,195,195);">Password</span></label>
                    <input type="password" id="loginPassword" class="form-control" />
                    
                </div>

                <!-- 2 column grid layout -->
                <div class="row mb-1">
                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-3 mb-md-0" style="font-size:15px; color:rgb(195,195,195);">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                            <label class="form-check-label" for="loginCheck"> Remember me </label>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex justify-content-center hover-text" >
                        <!-- Simple link -->
                        <a href="#!"><span style="font-size:15px; color:#f82249;">Forget Password?</span></a>
                    </div>
                </div>

                <!-- Submit button -->
                <input type="submit"  class=" btn btn-primary btn-block mb-3 hover-button" name="login" value="Login">

                <!-- Register buttons -->
                <div class="text-center" style="font-size:15px; color:rgb(195,195,195);">
                <p>Not a member?</p>

                <a href="<?= base_url() ?>/Register"><span style="font-size:15px; color:#f82249;">Sign Up</span></a>
                </div>
            </form>
        </div>
    </div>
    <!-- Pills content -->
</div>

</body>

<?= $this->endSection(); ?>
