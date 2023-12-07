<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styles/home.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    </head>

    <body>
        <section class="holder">
            <nav>
                <a href="home.html"><img src="images/vce.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hidemenu()"></i>
                    <ul>
                        <li><a href="home.html">HOME</a></li>
                        <li><a href="#notice_nav">NOTICE</a></li>
                        <li><a href="#course_nav">COURSES</a></li>
                        <li><a href="#gallery_nav">GALLERY</a></li>
                        <li><a href="#contact_nav">CONTACT</a></li>
                        <li><a href="login.php">LOGIN/LOGOUT</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" id="bar" onclick="dispmenu()"></i>
            </nav>
            <div class="text">
                <h1>College</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, temporibus esse placeat modi earum voluptatum. Impedit officia vitae exercitationem esse odit tempora sequi quidem illo debitis magnam aspernatur, id unde?</p>
                <a href="" class="btn-more">Not enough? Know more.! </a>
            </div>
        </section>

        <section class="holder" id="notice_nav">
                
            
        </section>

        <section class="course" id="course_nav">
            <h1>Learn</h1>
            <p>To build, To commnunicate, To achieve</p>
            <div class="row">
                <div class="c1">
                    <a href="courses.html"><img src="images/rand.png" alt="course_image"></a>
                    <h3>Computer Science and Engineering</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel in, corporis labore eaque dicta, debitis consequatur placeat ipsum porro aut harum quisquam odio accusamus voluptatibus fugiat quos culpa! Aliquid, et?</p>
                </div>
                <div class="c2">
                    <a href="courses.html"><img src="images/rand.png" alt="course_image"></a>
                    <h3>Computer Science and Engineering</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel in, corporis labore eaque dicta, debitis consequatur placeat ipsum porro aut harum quisquam odio accusamus voluptatibus fugiat quos culpa! Aliquid, et?</p>
                </div>
                <div class="c3">
                    <a href="courses.html"><img src="images/rand.png" alt="course_image"></a>
                    <h3>Computer Science and Engineering</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel in, corporis labore eaque dicta, debitis consequatur placeat ipsum porro aut harum quisquam odio accusamus voluptatibus fugiat quos culpa! Aliquid, et?</p>
                </div>
            </div>
        </section>

        <section class="gallery_view" id="gallery_nav">
            <div class="info">
                <h1>Gallery</h1>
            </div>
            <div class="gallery">
                <img src="images/basketball.png">
                <img src="images/library.png">
                <img src="images/cafeteria.png">
                <img src="images/about.jpg">
            </div>
        </section>

        <section class="contact" id="contact_nav">
            <div class="cont-1">
                <div class="card">
                    <h1>Write to us</h1>
                </div>
            </div>
        </section>
    
    <script src="script.js" type="text/javascript"></script>
    </body>
</html>
