<?= $this->extend("base"); ?>


<?= $this->section("content"); ?>

<div class="yash">

<section id="contact">

    <h1 class="section-header">Contact</h1>

    <div class="contact-wrapper">

    <!-- Left contact page --> 

      <form id="contact-form" class="form-horizontal" role="form">

        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
          </div>
        </div>
       <br>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
          </div>
        </div>
   <br>
        <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
        
        <button class="btn btn-danger send-button" id="submit" type="submit" value="SEND">
          <div class="alt-send-button">
            <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
          </div>
        
        </button>
        
      </form>
      
    <!-- Left contact page --> 
      
        <div class="direct-contact-container">
  
          <ul class="contact-list">
            <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Teacher Colony, Angur Bagicha Road Gondia, Maharashtra, 441614, India</span></i></li>
            
            <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">+917328867833</a></span></i></li>
            
            <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">Contact@Electrogati.Com  Corporateaffairs@Electrogati.Com</a></span></i></li>
            
          </ul>
  
          <hr>
          <ul class="social-media-list">
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-google" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>       
          </ul>
          <hr>
          
          

  
          <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>
  
        </div>
      
    </div>
    
  </section>  
  </div>

<?= $this->endSection(); ?>