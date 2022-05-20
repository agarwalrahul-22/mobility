<?= $this->extend("base");?>
<?= $this->section("content");?>
<head>
  <style>
 #hero {

 background: url(http://localhost/mobility/public/assets/img/back.jpg) top center;
background-size: cover;
width: 100% !important;
height: 100vh;
position: relative;
/* object-fit: fill; */
background-repeat: no-repeat;
}
.rent-form{
    overflow: auto;
}

  </style>
</head>
<link rel="stylesheet" href="<?= base_url() ?>/public/assets/css/sale.css">

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">

    <center class = "rent-form">
        <div class="form_wrapper">
            <h2 style="text-align:center; color:white;">ADD PRODUCT</h2>
            <form action="https://electrogati.com/sale" method="POST" >


                <div class="choice">

                    <div class="input_element"><input type="radio" value="sale" name="sale"> <span style="font-size:20px; color:white;"> SALE</span></div>
                    <div class="input_element"><input type="radio" value="rent" name="sale">  <span style="font-size:20px; color:white;"> RENT</span></div>

                </div>

                <div class="form_elements">

                    <div class="input_element">
                        <p>Brand Name</p>
                        <select name="brand" class="form-select" aria-label="Default select example">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>


                    <div class="input_element">
                        <p>Model Name</p>
                        <select name="model" class="form-select" aria-label="Default select example">
                            <option value="Volvo xc60">Volvo xc60</option>
                            <option value="Audi A4">Audi A4</option>
                            <option value="Opel vivaro e">Opel vivaro e</option>
                            <option value="Saab 1-4 gen1">Saab 1-4 gen1</option>
                        </select>
                    </div>




                    <div class="input_element">
                        <p>Variant<br> </p>
                        <select name="variant" class="form-select" aria-label="Default select example">
                            <option value="petrol">petrol</option>
                            <option value="diesel">diesel</option>
                            <option value="cng">cng</option>
                            <option value="electric">elctric</option>
                        </select>
                    </div>


                    <div class="input_element">
                        <p>Purchase Date </p>
                        <input type="date" name="purchaseDT" class="wide" placeholder=" type here...">
                    </div>


                    <div class="input_element">
                        <p>Chesis No.</p>
                        <input type="text" name="chesis" class="wide" placeholder=" type here...">
                    </div>





                    <div class="input_element">
                        <p>Driver available </p>
                        <select name="driver" class="form-select" aria-label="Default select example">
                            <option value="Yes/No">Yes/No</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>

                        </select>
                    </div>



                    <div class="input_element">
                        <p>Images (upto 3)</p>
                        <div class="mb-3">
                            <input name="images" class="form-control" type="file" id="formFileMultiple" multiple>
                        </div>
                    </div>


                    <div class="input_element" >
                        <p>Charges/Km</p>
                        <input type="text" name="perKM" class="wide" placeholder=" type here...">
                    </div>

                    <div class="input_element" >
                        <p>Driver Charges/Day</p>
                        <input type="text" name="DVRperDay" class="wide" placeholder=" type here...">
                    </div>

                    <div class="input_element" >
                        <p>Charges for vehicle/Day</p>
                        <input type="text" name="VHperDay" class="wide" placeholder=" type here...">
                    </div>

                    <div class="input_element" >
                        <p>Maintainance Charge/Trip</p>
                        <input type="text" name="MTNperTrip" class="wide" placeholder="type here...">
                    </div>



                </div>


                <input type="submit" class="update_btn" value="Update">


            </form>

        </div>
    </center>


    </div>
  </section><!-- End Hero Section -->

<?= $this->endSection(); ?>
