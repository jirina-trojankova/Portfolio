<?php 
mb_internal_encoding("UTF-8"); 
$say = ''; 
if (isset($_GET['success'])) 
    $say = 'Your e-mail has been sent I will get back to you ASAP.'; 
 
 
if ($_POST) { 
    if(isset($_POST['firstname']) && $_POST['firstname'] && 
    isset($_POST['lastname']) && $_POST['lastname'] && 
    isset($_POST['mail']) && $_POST['mail'] && 
    isset($_POST['phone']) && $_POST['phone'] && 
    isset($_POST['message']) && $_POST['message']) 
    { 
        $header = 'From:' . $_POST['email']; 
        $header .= "\nMIME-Version: 1.0\n"; 
        $header .= 'Content-Type: text/html; charset=\"utf-8\"\n'; 
        $address = 'jirina.trojankova@seznam.cz'; 
        $subject = 'New message from mailform?'; 
        $success = mb_send_mail($address, $subject, $_POST['email'], $header); 
        if ($success) { 
            header('Location: index.php?success=yes'); 
            exit; 
        } else 
            $say = 'Your e-mail has not been sent. Check the address.'; 
        } 
    else { 
        $say = 'Fill it correctly!'; 
    } 
 
} 
 
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/style.css">

</head>

<body>

    <header>
        <div class="d-flex justify-content-between">
        <div id="logo">
            <img src="/img/jt.svg" alt="My portfolio" width="50" height="50">
        </div>

        <div id="welcome">
            <h5>Welcome to my webpage!</h5>
        </div>
    </div>
            <div id="navbar">
                <nav>
                    <a href="#contact">Contact</a>
                    <a href="#about">About</a>
                    <a href="#portfolio">Portfolio</a>
                    <a href="#skills">Skills</a>
                    <a href="#home">Home</a>
                </nav>
            </div>



    </header>
    <section id="home">
    <main id="content" class="container">


        <div class="jumbotron">
            <div class="transbox">

                <h1>Hallo, I am
                    <strong>Jiřina Trojánková</strong>
                </h1>
                <h4>I’m a 
		    <strong>full-stack web developer</strong>
		</h4>

            </div>
        </div>

        <h4>I am full stack web develeper based in Prague, working with HTML, CSS, JS and PHP.</h4>
        <br/>
        <br/>
        <div class="row light_gray red container">
            <div class="col-6-sm col-md">
                <h4>Discover</h4>
                <p>Tell me about your project and we brainstorm together the features to create a plan for your product to launch.
                </p>
            </div>

            <div class="col-6-sm col-md">
                <h4>Design</h4>
                <p>We design the wireframe and agree together how to create the best experience for your users to present your
                    brand.
                </p>
            </div>

            <div class="col-6-sm col-md">
                <h4>Deploy</h4>
                <p>We prototype and develop your product. We work together intensily to incorporate your feedback.</p>
            </div>

            <div class="col-6-sm col-md">
                <h4>Be Ready</h4>
                <p>We deploy your product and now your website is ready to get the traction. Get out there and grow your audience.
                </p>
            </div>
        </div>
    </section>
        <br/>
        <br/>

        <section id="skills"  class="container">
        <br/>
        <br/>
        <br/>
            <h2>My skills</h2>
            <div id="my_progress">


                <div id="bar1" class="bar">HTML 80%</div>
                <div id="bar2" class="bar">CSS, Sass 70%</div>
                <div id="bar3" class="bar">JavaScript 70%</div>
                <div id="bar4" class="bar">React 60%</div>
                <div id="bar5" class="bar">jQuery 70%</div>
                <div id="bar6" class="bar">PHP 60%</div>
                <div id="bar7" class="bar">Laravel 60%</div>
                <div id="bar8" class="bar">UX 50%</div>
        </div>

            <script  src="/js/jquery-3.3.1.min.js"></script>
            <script src="/js/jquery.appear.js"></script>

            <script>
            $('#my_progress').appear();

function my_progress(barID, value) {
    $(barID).delay(500).animate({'width' : value}, 500);
}
$('#my_progress').on('appear', function(){
    my_progress('#bar1','80%');
    my_progress('#bar2','70%');
    my_progress('#bar3','70%');
    my_progress('#bar4','60%');
    my_progress('#bar5','70%');
    my_progress('#bar6','60%');
    my_progress('#bar7','60%');
    my_progress('#bar8','50%');
});
        </script>
        </section>
        




        <section id="portfolio" class="container">
        <br/>
        <br/>
        <br/>
            <h2>My Portfolio</h2>
            <div class="row">


                

               

                <article class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="light_gray_card  light_gray_clr">
                            <img class="card-img-top" src="http://satyr.io/300x200" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Journy</h5>
                                <p class="card-text">Platform where travellers and locals meet. Still in progress.</p>
                                <h6>Tech stack:</h6>
				<li class="badge badge-secondary">HTML 5</li>
                                    <li class="badge badge-secondary">CSS</li>
                                    <li class="badge badge-secondary">PHP</li>
                                    <li class="badge badge-secondary">Laravel</li>
                            </div>
                          </div>
                        <button type="button" class="btn">Let's see</button>                     
                    </div>
                </article>

                <article class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="light_gray_card  light_gray_clr">
                            <img class="card-img-top" src="http://satyr.io/300x200" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Drench</h5>
                                <p class="card-text">I love this game. It is not completely finished here yet.</p>
                                <h6>Tech stack:</h6>
                                <ul class="list-unstyled">
                                    <li class="badge badge-secondary">JavaScript</li>
                            </div>
                          </div>
                        <button type="button" class="btn">Let's see</button>                     
                    </div>
                </article>

                <article class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="light_gray_card  light_gray_clr">
                            <img class="card-img-top" src="http://satyr.io/300x200" alt="Card image cap">
                            <div class="card-body">
                               <h5 class="card-title">Generic hipster coffee</h5>
                                <p class="card-text">We created this fully responsive page during first winter hackathon in Coding Bootcamp Praha</p>
                                <h6>Tech stack:</h6>
                                <ul class="list-unstyled">
                                    <li class="badge badge-secondary">HTML 5</li>
                                    <li class="badge badge-secondary">CSS</li>
                                    <li class="badge badge-secondary">SASS</li>
                                    <li class="badge badge-secondary">gulp</li>
                                    <li class="badge badge-secondary">bootstrap</li>
                            </div>
                          </div>
                        <button type="button" class="btn">Let's see</button>                     
                    </div>
                </article>

                <article class="col-sm-6 col-md-6 col-lg-3">
                    <div class="card mb-4">
                        <div class="light_gray_card  light_gray_clr">
                            <img class="card-img-top" src="http://satyr.io/300x200" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">My first portfolio</h5>
                                <p class="card-text">And the last comes my old pages that I have made as a complete amateur. You can read something about me in Czech.</p>
                                <h6>Tech stack:</h6>
                                <ul class="list-unstyled">
                                    <li class="badge badge-secondary">HTML 5</li>
                                    <li class="badge badge-secondary">CSS</li>
                                    <li class="badge">PHP</li>
                            </div>
			  </div>
                        <button type="button" class="btn">Let's see</button>                     
                    </div>
                </article>
            </div>

        </section>
        <br/>
        <br/>



        <section id="about" class="container">
        <br/>
        <br/>
        <br/>
            <h2>About me</h2>
            <div class="about_me container">

                <div class="row">
                    <div class="image col-sm-6 col-md-5 col-lg-3">

                        <img src="/img/fotka2.jpg" alt="It’s me, Jiřina Trojánková" height="200px lg-300px" width="200px" >

                    </div>
                    <div class="my_text col-sm-6 col-md-7 col-lg-9">
                        <p>My name is Jiřina Trojánková. I am a full-stack web developer. I am
                            developing user interfaces in JavaScript and React and backend of my projects in PHP and Laravel. I enjoy learning new trends.</p>
                        <p>I am open to learning new technologies and enjoy working with people who are as passionate about all web-related as me.</p>
                        <p>I like travelling and I am based in Prague, Czech Republic.</p>
                        <p>I like horseriding, cycling and snowboarding. If I do not develop, you can also meet me trekking in the mountains.</p>
                        <p>Get in touch and let's create something great together.</p>
                    </div>
                </div>
            </div>
        </section>
        <br/>
        <br/>



        <section id="contact" class="container">
        <br/>
        <br/>
        <br/>
            <h2>Contact me</h2>

            <h4>Find me here:</h4>
<div id="contacts">

                <a href="https://github.com/jirina-trojankova" target="blank"><i class="fa fa-github"></i></a>
                <a href="https://www.linkedin.com/in/jirina-trojankova" target="blank"><i class="fa fa-linkedin-square"></i></a>

</div>



            <br/>
            <br/>

            <div class="light_gray red">
            <h4>Send me a message</h4> 
 
 <?php if ($say) echo '<p>' . htmlspecialchars($say) . '</p>'; 

 $firstname = (isset($_POST['firstname'])) ? $_POST['firstname'] : ''; 
 $lastname = (isset($_POST['lastname'])) ? $_POST['lastname'] : ''; 
 $email = (isset($_POST['email'])) ? $_POST['email'] : ''; 
 $phone = (isset($_POST['phone'])) ? $_POST['phone'] : ''; 
 $message = (isset($_POST['message'])) ? $_POST['message'] : ''; 

 ?> 



                <form method="POST" class="form-contact">

                    <div class="form-group">

                        <div class="row">
                            <div class="col">
                                <label for="firstname">First Name</label>
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name" value="<?= htmlspecialchars($firstname) ?>">
                            </div>

                            <div class="col">
                                <label for="lastname">Last Name</label>
                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name" value="<?= htmlspecialchars($lastname) ?>">
                            </div>
                        </div>
                        <br/>

                        <div class="row">
                            <div class="col">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" value="<?= htmlspecialchars($email) ?>">
                            </div>

                            <div class="col">
                                <label for="phone">Phone</label>
                                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone" value="<?= htmlspecialchars($phone) ?>">
                            </div>
                        </div>
                        <br/>

                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Your message" value="<?= htmlspecialchars($message) ?>"></textarea>
                        <br/>

                        <button type="button" class="btn btn-outline-dark">Send your message</button>
                    </div>
                </form>
            </div>
        </section>
        <br/>
        <br/>

    </main>

    <footer>
        <div class="center red">
            <h4>Nice to meet you!</h4>
        </div>
        <div class="d-flex justify-content-end">
        <p>Copyright &copy;Jiřina Trojánková 2018</p>
    </footer>
    <script  src="jquery-3.3.1.min.js"></script>
    <script>
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

// Select all links with hashes
$('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
          &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });

    </script>
</body>

</html>
