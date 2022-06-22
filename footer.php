    <?php   include('admin/email_sender.php'); ?>
    
    <div class="footer">
       <div class="footer-content">
           <div class="footer-section about">
               <h1 class="logo-text"><span>Assumptionist</span>Fathers</h1>
               <p>We are religious living in apostolic community. Faithful to our founder, 
                   Fr d’Alzon, we choose out of love for Jesus Christ, 
                   to work for the coming of God’s Kingdom in us and around us.
               </p>
                <div class="contact">
                   <span><i class="fas fa-phone"></i> &nbsp; +254706571995</span>
                   <span><i class="fas fa-envelope">inform@gmail.com</i></span>
                </div>
                <div class="socials">
                    <a href="https://web.facebook.com/Augustinians-of-Assumption-East-Africa-356738085100336" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
           </div>
           <div class="footer-section links">
               <h2>Quick Links</h2>
               <br>
                    <ul>
                        <a href="index.php"><li>Home</li></a>
                        <a href="href="#" data-bs-toggle="modal" data-bs-target="#AboutModal""><li>About</li></a>
                        <a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#ApostolateModal" ><li>Apostolates</li></a>
                        <a href="vocation.php" ><li>Vocation_Office</li></a>
                        <a href="contact.php"><li>Contacts</li></a>
                      <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><li>Support-Mission</li></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"> 
                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#donateVocation">Vocation</a></li>
                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#donateVocation">Formation</a></li>
                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#donateVocation">Parishes</a></li>
                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#donateVocation">Apostolate for people living with desabilities</a></li>
                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#donateVocation">Further studies</a></li>
                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#donateVocation">Other</a></li>
                        </ul> 
                      </div>
                        <a href="admin/aalogin.php"><li>Login</li></a>
                        <a href="#"><li>Admin</li></a>
                    </ul>
           </div>
           <div class="footer-section contact_form">
               <h2>Contact us</h2>
               <form action="admin/email_sender.php" method="POST" name="form">
                   <input type="text" name="name" class="text-input contact-input" placeholder="Your name...">
                   <input type="email" name="email" class="text-input contact-input" placeholder="email address...">
                   <input type="text" name="phone" class="text-input contact-input" placeholder="Your phone please... ">
                   <textarea name="msg" rows="3" cols="70" placeholder="message..." ></textarea>                   
                   <button type="submit" name="submit" class="btn btn-big" >                       
                       Send
                   </button>

                   <?php   

                    

                    ?>

               </form>
           </div>
       </div>
    <div class="footer-bottom">
           <strong>  &copy; AssumptionistsEA.com | System developper: Dieudonne Kathembo Tsongo a.a </strong>
       </div>
   </div>
        

    <script src="assets/js/main.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<?php 
  include('modals/formation.php');
  include('modals/formation2.php');
  include('modals/modal_about_us.php');
  include('modals/modal_apostolate.php');
  include('modals/module_contacts.php');
 ?>


