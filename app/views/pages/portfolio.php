<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio</title>
    
    <link rel="stylesheet" href="<?php echo URLROOT;   ?>/css/pages/portfolio.css">
    <!-- fontawesom kits 47 min -->
</head>
<body>
<div id="header" class="">
    <div class="container">
        <nav>
            <img src="<?php echo URLROOT;  ?>/img/portfolio/logo.png " class="logo">
            <ul>
                <li><a href="#header"> Home</a></li>
                <li><a href="#about"> About</a></li>
                <li><a href="#services">Services </a></li>
                <li><a href="#portfolio"> portfolio</a></li>
                <li><a href="#contact"> Contact</a></li>
                <i class="fas fa-times"  onclick="closemenu()"></i>
            </ul>
            <i class="fas fa-bars" onclick="openmenu()"></i>
        </nav>

        <div class="header-text">
            <p>Software Engineer</p>
            <h1>Hi,I'm <span>shehara </span><br> from Sri Lanka</h1>
        </div>
    </div>
</div>


<!-- -------about------ -->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="<?php echo URLROOT;   ?>/img/portfolio/user.png" alt="">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About me</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique quibusdam totam modi velit magnam incidunt quisquam, possimus eum rerum asperiores doloremque quod minima doloribus suscipit optio officia adipisci eaque nulla?</p>


                <div class="tab-titles">
                    <p class="tab-links active-link"  onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('Experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('Education')">Education</p>
                </div>

                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>UI?UX</span><br> Designing Web/Application Intefaces </li>
                        <li><span>web Development</span><br> web app Development</li>
                        <li><span>App Development</span><br> Building Android/ios apps </li>
                    </ul>
                </div>
                <div class="tab-contents" id="Experience">
                    <ul>
                        <li><span>2024-current</span><br> Designing Web/Application Intefaces </li>
                        <li><span>web Development</span><br> web app Development</li>
                        <li><span>App Development</span><br> Building Android/ios apps </li>
                    </ul>
                </div>
                <div class="tab-contents" id="Education">
                    <ul>
                        <li><span>UI?UX</span><br> Designing Web/Application Intefaces </li>
                        <li><span>web Development</span><br> web app Development</li>
                        <li><span>App Development</span><br> Building Android/ios apps </li>
                    </ul>
                </div>
           
            </div>
        
        
        </div>
    </div>
</div>

<!-- ----services-------- -->
<div id="services">
    <div class="container">
        <h1 class="sub-title">My services</h1>

        <div class="services-lists">
            <div>
                <!-- icon </> -->
                <h2>Web Design</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates quibusdam maxime accusantium tempora, voluptate aliquid odit earum minus voluptatem dolores officia vero vel deserunt necessitatibus! Similique omnis voluptatum harum dolor.</p>
                <a href="#">Learn more</a>
            </div>
            <div>
                <!-- icon  crop alt -->
                <h2>UI/UX Design</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates quibusdam maxime accusantium tempora, voluptate aliquid odit earum minus voluptatem dolores officia vero vel deserunt necessitatibus! Similique omnis voluptatum harum dolor.</p>
                <a href="#">Learn more</a>
            </div>
            <div>
                <!-- icon  app-store-->
                <h2>App Design</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates quibusdam maxime accusantium tempora, voluptate aliquid odit earum minus voluptatem dolores officia vero vel deserunt necessitatibus! Similique omnis voluptatum harum dolor.</p>
                <a href="#">Learn more</a>
            </div>
        </div>
    </div>
</div>



<!-- ----portfolio---- -->

<div id="portfolio">
    <div class="container">
        <h1 class="sub-title">My work</h1>
        <div class="work-list">
            <div class="work">
                <img src="<?php echo URLROOT;   ?>/img/portfolio/work-1.png" >
                <div class="layer">
                    <h3>Social Media App</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae velit magni explicabo odio necessitatibus nihil deleniti blanditiis officiis adipisci delectus t</p>
                    <!--   -->
                    <!-- external-link-alt  icon -->
                </div>
            </div>
            <div class="work">
                <img src="<?php echo URLROOT;   ?>/img/portfolio/work-2.png" >
                <div class="layer">
                    <h3> Music App</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae velit magni explicabo odio necessitatibus nihil deleniti blanditiis officiis adipisci delectus t</p>
                    <!--   -->
                    <!-- external-link-alt  icon -->
                </div>
            </div>
            <div class="work">
                <img src="<?php echo URLROOT;   ?>/img/portfolio/work-3.png" >
                <div class="layer">
                    <h3>online shopping  App</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae velit magni explicabo odio necessitatibus nihil deleniti blanditiis officiis adipisci delectus t</p>
                    <!--   -->
                    <!-- external-link-alt  icon -->
                </div>
            </div>
        </div>
        <a href="#" class="btn">See more</a>
    </div>
</div>


<!-- -----contact---- -->

<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact me</h1>
                <!-- after p tag put email icon -->
                <p>contact@mexample.com</p>
                <p>07771701812</p>
                <div class="social-icons">
                    <a href="url">fa</a>
                    <a href="">fac</a>
                    <a href="">fa</a>
                    <a href="">fa</a>
                </div>
                <a href="<?php echo URLROOT;   ?>/img/portfolio/my-cv.pdf" download class="btn btn2">Download CV</a>
            </div> 
            <div class="contact-rightt">
                <form action="">
                    <input type="text" name="Name" placeholder="Your name" required>
                    <input type="text" name="email" placeholder="Your email" required>
                    <textarea name="Message"  rows="6" placeholder="Your Message" ></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>
            </div> 
        </div>
    </div>
    <div class="copyright">
        <p>copyright @ shehara. All right reserved Made <i class="fa fa-heart"></i> by shehara</p>
    </div>
</div>



<script>
    var tablinks= document.getElementsByClassName("tab-links");
    var tabcontents= document.getElementsByClassName("tab-contents");

    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link")
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab")
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }
</script>

<script>

    var sidemenu= document.getElementById("sidemenu");

    function openmenu(){    
        sidemenu.style.right="0";
    }
    function closemenu(){
        sidemenu.style.right="-200px";
    }       
</script>

</body>
</html>