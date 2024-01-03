
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Near BY Hire</title>
    <link rel="stylesheet" href="sass/nby.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="script.js"></script>
<script src="java/index.js"></script>


</head>
<body>
    
    <header>
        <nav class="navbar">
            <div class="logo">
        <a href="#home">Near By Hire<span>.</span></a></div>
            <ul class="links">
                <li> <a href="index.php">Home</a></li>
                <li> <a href="service.php">Services</a></li>
                <li> <a href="#">About Us</a></li>
                <li> <a href="#catloglinks">Contact</a></li>
            </ul>
            

        <!-- <div class="search-icons"><i class="bx bx-search"></i></div> -->
        <div class="login-btn"><i class='bx bxs-user' ></i></div>
        <div class="toggle_btn"><i class='bx bx-menu'></i></div>

        <!-- dropdown -->
        <div class="dropdown open">
            <li> <a href="#home">Home</a></li>
            <li> <a href="services.php">Services</a></li>
            <li> <a href="">About Us</a></li>
            <li> <a href="#catloglinks">Contact</a></li>
           <li><a href= "#"><i class="bx bx-search"></i></a></li>
           <li> <a href=""><i class='bx bxs-user' ></i></a></li>
        </div>
        </nav> 

    </div>
    </header>

    <div class="blur-bg-overlay"></div>

    <!-- home ssection after header navbar -->
    <section class="home" id="home">
        <div class="content">
           <h4>Discover Your Next Hire Just Around the Corner with Near by Hire.</h4>
           <p>Uncover local talent effortlessly. Your go-to platform for connecting with skilled professionals and finding job opportunities right in your neighborhood.</p>
               <div class="base">
           <a href="service.php" class="btn"> Book Now</a>
           </div>

    <!-- <section for search btn pups up and close --> 
    <div class=" login-popup">
            <span class="close-btn material-symbols-outlined">close</span>
       
        <div class="login-box">
            <div class="classice-primary">
             <h3> Login as:</h3>
             <ul>
             <li> <a href="adminpage.php" id="admin-link"> Admin</a></li>
             <li> <a href="loginform.php" id="login-link">User</a></li>
             <li> <a href="loginform.php" id="signup-link">Employee</a></li>             </ul>
             </div>
       </div>
   </div>


    </div>  
</section>

    
    <!-- section of our servercies started here -->
     <section class="services-container">
        <h1 class="services-primary">Our Services</h1>
        <h2>Our complete portfolio of services is intended to enhance your experience<br> by delivering seamless solutions and outstanding support. </h2>
        <div id="services">

            <div class="box">
                <img src=" img/commercial.jpg" alt="no img">
                <h3>Cleaning</h3>
                <p>In view of Russia's military action against the Ukrainian people, being concerned about ensuring that European funds In view of Russia's military action against the Ukrainian people,  </p>
                    <a herf="services.php" class="slink">Learn more <i class='bx bx-right-arrow-alt'></i></a>
            </div>
            
            <div class="box">
                <img src=" img/chef.jpg" alt="no img">
                <h3> Kitchen </h3>
                <p>In view of Russia's military action against the Ukrainian people, being concerned about ensuring that European funds In view of Russia's military action against the Ukrainian people, </p>
                    <a herf="services.php" class="slink">Learn more <i class='bx bx-right-arrow-alt'></i></a>
            </div>

            <div class="box">
            <img src=" img/elder.jpg" alt="no img">
                <h3> Care Taker </h3>
               <p>In view of Russia's military action against the Ukrainian people, being concerned about ensuring that European funds In view of Russia's military action against the Ukrainian people,</p>
                 <a herf="services.php" class="slink">Learn more <i class='bx bx-right-arrow-alt'></i></a>
            </div>

            <div class="box">
            <img src=" img/handy.jpg" alt="no img">
            <h3>Handy Services </h3>
               <p>In view of Russia's military action against the Ukrainian people, being concerned about ensuring that European funds In view of Russia's military action against the Ukrainian people,</p>
                 <a herf="services.php" class="slink">Learn more <i class='bx bx-right-arrow-alt'></i></a>
            </div>

        
       
        </div>
    </section> 

        <!-- section of who we are started here -->
   <section class="collaboration-container" id="collaboration-container">
       <div class="collaboration-primary">
        <h2>What Our Client Have To Say? </h2>
        <p> We are a collaboration of Non Govt. and<br> professionals working to ensure that <br> government spending is done
            fairly,<br>  openly, efficently, and creates the best<br>  value for money and best outcomes for <br> Europe.
            We are working at the national and <br>EU levels to advance the principles of <br> openness in spending of funds, <br>
            procurement, and company owership <br>within the Eu.
        </p>
        <a herf="services.php" class="btncon">See More
            <i class='bx bx-right-arrow-alt'></i></a>
     </div>
         <div class="collaboration">
            <div class="columitems">
            <div class="box">
                <div class="images">
                <img src="img/who1.png" alt="no img">
                <h3>Adriana Homolova</h3>
            </div>
            </div>
            <div class="box">
                <div class="images2">
               <img src="img/who3.png" alt="no img">
               <h3>Karolis Granickas</h3>
                </div>
           </div>
        </div>  
            <div class="column">
                <div class="box">
                    <div class="images1">
                    <img src="img/who2.png" alt="no img">
                    <h3>Sandor Lederer</h3>
                </div>
                </div>
            
            <div class="box">
                <div class="images3"> 
                <img src="img/who4.png" alt="no img">
                <h3>Zara Montgomery</h3>
            </div> 
        </div>
        </div>
    </div>
    </section>  


    <!-- section for join the team and looking for job class as call out -->
<section class="call-outs home-container" data-track-location="Card">
    <div class="call-out">
     <p class="home-badge home-badge--teal">Looking for work?</p>
     <h3 class="home-type-subheading margin-t-32">Find your next opportunity</h3>
     <p class="call-out__copy">Join our team to ensure that you have discovered a profession that you are interested in.
    </p>
 
     <div class="call-out__actions">
       <a class="btn2 btn2--large" data-track-cta="Find work" href="/jobs">Find work</a>
       <a class="btn2 btn2--white btn2--hover-bordered btn2--large" data-track-cta="Get discovered" href="/signup/new"></a>
     </div>
   </div>
 
   <div class="call-out">
     <p class="home-badge home-badge--pink">Here for join us?</p>
     <h3 class="home-type-subheading margin-t-32">Discover trending designs</h3>
     <p class="call-out__copy">Browse and save your favorite design projects for endless inspiration.</p>
 
     <div class="call-out__actions">
       <a class="btn2 btn2--large" data-track-cta="Create profile" href="/signup/new">Create my profile</a>
       <a class="btn2 btn2--white btn2--hover-bordered btn2--large" data-track-cta="Browse designs" href="/shots">Browse designs</a>
     </div>
   </div>
 </section>

    <!-- section for contact us -->
<section class="contact">
        <h1 class="primary-center">Contact Us</h1>
        <h4>If you have any further inquires, please let us know by</br> filling the form below</h4>
        <div id="contact-box">
            <form action="">
                <div class= "form-group">
                    <label for="textname" >First name</label>
                    <input type="text" name="name" id="name" >
                </div>
                <div class="form-group">
                  <label for="textname">Last name</label>
                    <input type="text" name="name" id="name">
                </div>

                <div class="form-group">
                    <label for="textname">Email</label>
                    <input type="email" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="textname">Message</label>
                    <textarea name="message" id="message" cols="10" rows="4"></textarea>
                </div>
                <div class="btncon">
                    <button>Submit</button>
                </div>
            </form>
        </div>
    </section>  

      <!-- <footer> -->
     <section class="catloglinks" id="catloglinks">
            <div class="footer">
                <div class="main">
                    <div class="catlog-socials">
                        <h2>Near By Hire</h2>
                        <p>We are a collaboration of non-government</br> organization and professionals working to</br> ensure that government spending.</p>
                        <div class="social">
                        <a herf="#"><i class='bx bxl-twitter'></i></a>
                        <a herf="#"><i class='bx bxl-linkedin' ></i></a>
                        <a herf="#"><i class='bx bxl-youtube' ></i> </a>
                        </div>
                    </div>
                    <div class="catmedic"></div>

                    <div class="linksres">
                    <div class="col">
                        <h4> Services</h4>
                        <ul>
                            <li><a herf="services.php">Cleaning</a></li>
                            <li><a herf="services.php">Kitchen</a></li>
                            <li><a herf="services.php">Care Taker</a></li>
                            <li><a herf="services.php">Handy</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4>Quick Links </h4>
                        <ul>
                            <li><a herf="#">Terms & COnditions</a></li>
                            <li><a herf="#">Privacy & Policy</a></li>
                        </ul>
                    </div>
                    <div class="col">
                        <h4> Contact Us</h4>
                        <ul>
                            <li><a herf="#">132-379-076</a></li>
                            <li><a herf="#">Nearbyhire@mysite.com</a></li>
                            <li><a herf="#">Naxcal stress 011, Kathmandu </a></li>
                        </ul>
                    </div>
                </div>
                </div>
                    </div>
                </div>
            </div>
        </section> 

 <!-- section for homepage -->
    <!-- <section class="top-page">
        <div class="top-arrow">
          <a href="#home" class="topbtn">
            <i class='bx bx-up-arrow-alt' ></i>
              </a>
        </div>
     </section> -->

 <!-- last footer of the section -->
   <!-- <footer>
    <div class="last-footer">
        <div class="copy-left">
        <p class="copyright"> Terms and Condition</p>
        </div>
        <div class="copy-right">
            <h3>Creative </br> Common</h3>
        </div>
        </div>
   </footer> -->


    <script>
         const toggleBtn = document.querySelector('.toggle_btn')
         const toggleBtnIcon = document.querySelector('.toggle_btn i')
         const dropDown = document.querySelector('.dropdown')

            toggleBtn.onclick = function () {
       dropDown.classList.toggle('open');
       const isOpen = dropDown.classList.contains('open');

  if (isOpen) {
    toggleBtnIcon.classList.remove('bx-menu');
    toggleBtnIcon.classList.add('bx-x');
  } else {
    toggleBtnIcon.classList.remove('bx-x');
    toggleBtnIcon.classList.add('bx-menu');
  }
};


    </script>
</body>
</html>

<?php

?>