    <?php   include('admin/email_sender.php'); ?>
    
    <div class="footer">
       <div class="footer-content">
           <div class="footer-section about">
               <h1 class="logo-text"><span>Assumptionist</span>Fathers</h1>
               <p>We are religious living in apostolic community. Faithful to our founder, 
                   Fr Emmanuel d’Alzon, we choose out of love for Jesus Christ, 
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
                        <a href="index.php">Home</a>
                        <a href="href="#" data-bs-toggle="modal" data-bs-target="#AboutModal">About</a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#ApostolateModal" >Apostolates</a>
                        <a href="vocation.php" >Vocation_Office</a>
                        <a href="contact.php">Contacts</a>
                      <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Support-Mission</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"> 
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Vocation">Vocation</a>
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Formation">Formation</a>
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Parishes">Parishes</a>
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#Shrines">Shrines</a>
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#SocialWork">Social work</a>
                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#OtherProjects">Other Projects</a>
                        </ul> 
                      </div>
                        <a href="login.php">Login</a>
                        <a href="#">Admin</a>
                    </ul>
           </div>
           <div class="footer-section contact_form">
               <h2>Contact us</h2>
               <form action="emails/send.php" method="post">
                    <input type="text" id="fname" name="firstname" class="text-input contact-input" placeholder="Enter your name...">
                   <input  id="email" type="email" name="email" class="text-input contact-input" placeholder="Enter Email...">
                   <input id="subject" name="subject" type="text" class="text-input contact-input" placeholder=" Enter Subject...">
                   <textarea id="body" rows="2" class="text-input contact-input" cols="70" name="message" placeholder="Message..." ></textarea>
                   <input  type="submit" value="submit" class="btn btn-big btn-warning" >
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
  include('modals/modal_about_us.php');
  include('modals/modal_apostolate.php');
  include('modals/module_contacts.php');
 ?>


