<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uniquest</title>
    <link rel="stylesheet" href="<?php echo URLROOT;   ?>/css/pages/landing_page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <section class="header"  >
        <nav>
            <a href="landing_page.php"><img src="<?php echo URLROOT;   ?>/img/landing_page/logo.png" alt=""></a>
            <div class="nav-link" id="navlink">
            <i class="fa fa-times" aria-hidden="true"  onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Course</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" aria-hidden="true"  onclick="showMenu()"></i>
        </nav>
<div class="text-box">
    <h1>World's Biggest University</h1>
    <p>Making website is now one of the easiest thing in the world. You just need to learn HTML, CSS,<br>Javascript and you are good to go.
    </p>
    <a href="" class="hero-btn">Visit Us to know More</a>
</div>

 </section>
<!-- -----Course----- -->
<section class="course">
    <h1>Course we Offer</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>

    <div class="row">
        <div class="course-col">
            <h3>Intermediate</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, aut nisi adipisci rem amet libero! Iusto voluptates nihil, voluptatibus rerum delectus quos consequatur nostrum, est neque eos officia repellat amet.</p>
        </div>
        <div class="course-col">
            <h3>Degree</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, aut nisi adipisci rem amet libero! Iusto voluptates nihil, voluptatibus rerum delectus quos consequatur nostrum, est neque eos officia repellat amet.</p>
        </div>
        <div class="course-col">
            <h3>Post Graduation</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, aut nisi adipisci rem amet libero! Iusto voluptates nihil, voluptatibus rerum delectus quos consequatur nostrum, est neque eos officia repellat amet.</p>
        </div>
    </div>
</section>

<!-- ------Campus------ -->
<section class="campus">
    <h1>Our Global Campus</h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </p>

    <div class="row">
        <div class="campus-col">
            <img src="<?php echo URLROOT;   ?>/img/landing_page/london.png" alt="">
            <div class="layer">
                <h3>LONDON</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="<?php echo URLROOT;   ?>/img/landing_page/newyork.png" alt="">
            <div class="layer">
                <h3>NEW YORK</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="<?php echo URLROOT;   ?>/img/landing_page/washington.png" alt="">
            <div class="layer">
                <h3>WASHINGTON</h3>
            </div>
        </div>
    </div>

</section>

<!-- -------facilitises ------ -->

<section class="facilities">
    <h1>Our Facilities</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>


    <div class="row">
        <div class="facilities-col">
           <img src="<?php echo URLROOT;   ?>/img/landing_page/library.png" alt=""> 
           <h3>World Class Library</h3> 
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, odio magni. Quibusdam distinctio atque necessitatibus laboriosam neque reprehenderit culpa esse ipsum. Excepturi harum facere similique necessitatibus, in iure quisquam architecto?</p>
        </div>
        <div class="facilities-col">
           <img src="<?php echo URLROOT;   ?>/img/landing_page/basketball.png" alt=""> 
           <h3>largest Play Ground</h3> 
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, odio magni. Quibusdam distinctio atque necessitatibus laboriosam neque reprehenderit culpa esse ipsum. Excepturi harum facere similique necessitatibus, in iure quisquam architecto?</p>
        </div>
        <div class="facilities-col">
           <img src="<?php echo URLROOT;   ?>/img/landing_page/cafeteria.png" alt=""> 
           <h3>Tasty and Healthy Food</h3> 
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, odio magni. Quibusdam distinctio atque necessitatibus laboriosam neque reprehenderit culpa esse ipsum. Excepturi harum facere similique necessitatibus, in iure quisquam architecto?</p>
        </div>

    </div>
</section>

<!-- ------Testimonials------ -->

<section class="testimonials">
    <h1>What our Student Says</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>


    <div class="row">
        <div class="testimonials-col">
            <img src="<?php echo URLROOT;   ?>/img/landing_page/user1.jpg" alt="">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis hic quod quas magni nam amet facilis expedita fugit dolor! Eum nesciunt, modi odit doloremque vel nobis sequi ea sed porro.</p>
                <h3>Christine Berkley</h3>
                
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" ></i>
                <i class="fa fa-star" aria-hidden="true"></i>        
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
        </div>
        <div class="testimonials-col">
            <img src="<?php echo URLROOT;   ?>/img/landing_page/user2.jpg" alt="">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis hic quod quas magni nam amet facilis expedita fugit dolor! Eum nesciunt, modi odit doloremque vel nobis sequi ea sed porro.</p>
                <h3>David Martin</h3>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>                
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</section>


<!-- call to action -->

<section class="cta">
    <h1> Enroll For Our Various Online Courses <br>Anywhere From The World</h1>
    <a href="" class="hero-btn">CONTACT US</a>

</section>

<!-- footer -->

<section class="footer">
    <h4>About Us</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Totam et sunt sapiente maxime id necessitatibus consequuntur reprehenderit deserunt provident, <br>nisi laborum temporibus itaque suscipit eveniet unde, omnis dolorem ab! Quam?</p>
    <div class="icons">
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-linkedin" aria-hidden="true"></i>
    </div>
    <p>Made by <i class="fa fa-heart-o" aria-hidden="true"></i> by Easy  Tutorials</p>
</section>



    <!-- ------javascript for toggle menu ------ -->
    <script>
        var navlink = document.getElementById("navlink");
        function showMenu(){
            navlink.style.right="0";
        }
        function hideMenu(){
            navlink.style.right="-200px";
        }
    </script>
    
</body>
</html>