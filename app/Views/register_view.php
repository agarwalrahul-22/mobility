<?php $page_session = \Config\Services::session(); ?>
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
.card { 
        box-shadow: 0 0 30px 0;
        background: #161d2f !important;
        backdrop-filter: blur(10px);
        border-radius: 15px;
        border: 2px solid rgb(195,195,195);
    }
    .text-danger{color:red;}
</style>

</head>

<body>
<div class="container w-50 p-5" >

    
    <div class="  w-100 p-3 card card-body" >
        
        
    <div  >
   
          <?php 
          if($page_session->getTempdata('success')):
            ?>
            <div class="alert alert-success"><?=$page_session->getTempdata('success');?></div>
          <?php
          endif;
          ?>  
          <?php 
          if($page_session->getTempdata('error')):
            ?>
            <div class="alert alert-danger"><?=$page_session->getTempdata('error');?></div>
          <?php
          endif;
          ?>  
           
                <?= form_open() ?>
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
                <div class="form-outline mb-1">
                <label class="form-label mb-1" for="registerUsername"> <span style="font-size:15px; color:rgb(195,195,195);">Username</span></label>
                    <input type="text" id="registerUsername" name="username" value='<?= set_value('username') ?>' class="form-control" />
                   <span class="text-danger">
                       <?= display_error(\Config\Services::validation(),'username');?>
                   </span>
                    
                </div>

                <!-- Email input -->
                <div class="form-outline mb-1">
                <label class="form-label mb-1"  for="registerEmail"><span style="font-size:15px; color:rgb(195,195,195);">Email</span></label>
                    <input type="email"  id="registerEmail"  name="email" value='<?= set_value('email') ?>'  class="form-control" />
                    <span class="text-danger">
                       <?= display_error(\Config\Services::validation(),'email');?>
                   </span>
                  
                </div>

                <!-- Password input -->
                <div class="form-outline mb-1">
                <label class="form-label mb-1" for="registerPassword"><span style="font-size:15px; color:rgb(195,195,195);">Password</span></label>
                    <input type="password" id="registerPassword"  name="password" value='<?= set_value('password') ?>' class="form-control" />
                    <span class="text-danger">
                       <?= display_error(\Config\Services::validation(),'password');?>
                   </span>
                   
                
                </div>

                <!-- Repeat Password input -->
                <div class="form-outline mb-1">
                <label class="form-label mb-1" for="registerRepeatPassword"><span style="font-size:15px; color:rgb(195,195,195);">Confirm Password</span></label>
                    <input type="password" id="registerRepeatPassword"  name="confirm_pass" value='<?= set_value('confirm_pass') ?>'  class="form-control" />
                    <span class="text-danger">
                       <?= display_error(\Config\Services::validation(),'confirm_pass');?>
                   </span>
                    
            </span> 
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
                <input type="submit"  class=" btn btn-primary btn-block mb-3 hover-button" name="save" value="Sign Up">
            
                <?= form_close() ?>
        </div>
    </div>
    <!-- Pills content -->
</div>
</body>

<?= $this->endSection(); ?>