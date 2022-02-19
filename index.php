<!DOCTYPE html>
<html lang="en">
<head>
  <title>ruzischools</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Ruzi developers">
  <meta name="description" content="Ruzi International schools official website-Best primary and secoundary school in Bayelsa state">
  <meta name="keywords" content="best, school, bayelsa, payfees, e-library, results, application">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="assets/css/ruzi_style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

  <!-- Navbar -->
  <nav class="navbar navbar-success navbar-fixed-top home-md home-sm">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#myPage">RUZI</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#myPage">HOME</a></li>
          <li><a href="#about">ABOUT</a></li>
          <li><a href="#contact">CONTACT</a></li>
          <li><a href="#payfees">PAY FEES</a></li>
          <li><a href="#schoolportal">SCHOOL PORTAL</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
              <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Admission</a></li>
              <li><a href="#">Check Result</a></li>
              <li><a href="#">PTA Meeting</a></li>
            </ul>
          </li>
          <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
        </ul>
      </div>
    </div>
  </nav>
  

  <!-- Container (About Section) -->
  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
        <br>
        <br>
        <h1 id="typewriter"></h1>
        <h2>Lorem ipsum dolor sit amet</h2>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4>
        <button class="btn btn-default btn-md">Read More</button>
      </div>
    </div>
  </div>

  <!-- Container (Enrollment Session) -->
  <div id="enroll" class="container-fluid text-center">
    <h2>Enroll in Our School</h2>
    <h4></h4>
    <br>
    <div class="row text-center slideanim">
      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="" alt="Pre School" width="400" height="300">
          <!--<p><strong>Paris</strong></p>
          <p>Yes, we built Paris</p>-->
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="" alt="Junior School" width="400" height="300">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="" alt="High School" width="400" height="300">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="" alt="Advance Studies" width="400" height="300">
        </div>
      </div>
    </div><br>
  </div>

  <!-- Container (Services Section) -->
  <div id="services" class="container-fluid text-center">
    <h2>Our Core Values</h2>
    <h4>Our Students Embody the following Qualities</h4>
    <br>
    <div class="row slideanim">
      <div class="col-sm-3">
        <span class="glyphicon glyphicon-heart logo-small"></span>
        <h4>LOVE</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-3">
        <span class="glyphicon glyphicon-certificate logo-small"></span>
        <h4>CERTIFIED</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-3">
        <span class="glyphicon glyphicon-star logo-small"></span>
        <h4 style="color:#303030;">BRILLIANCE</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
      <div class="col-sm-3">
        <span class="glyphicon glyphicon-wrench logo-small"></span>
        <h4 style="color:#303030;">HARDWORK</h4>
        <p>Lorem ipsum dolor sit amet..</p>
      </div>
    </div>
  </div>
  </div>

  <!-- Container (Contact Section) -->
  <div id="contact" class="container-fluid">
    <h2 class="text-center">CONTACT</h2>
    <br>
    <div class="row">
      <div class="col-sm-5">
        <p>Contact us and we'll get back to you within 24 hours.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span> Opposite Honni hills Hotel, Tombia-amassoma road, Odede Street.</p>
        <p><span class="glyphicon glyphicon-phone"></span> +234 08138097876</p>
        <p><span class="glyphicon glyphicon-envelope"></span> info@gmail.com</p>
      </div>
      <div class="col-sm-7 slideanim">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn pull-right" type="submit">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Google map-->
  <div style="width:100%">
    <div>
      <div id="map-container-google-1" class="col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4195.082070173294!2d6.355382609244614!3d4.954997547770418!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x106a017a4cecbf37%3A0xaf151e50ab9388a0!2sTombia%20Roundabout%20Bus%20Stop!5e0!3m2!1sen!2sng!4v1571232555638!5m2!1sen!2sng" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
  <!--Google Maps-->

  <footer class="container text-center">
    <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Copyright &copy 2019 <a href="https://www.ruzischools.com" title="Ruzi International School"> <strong style="color:#000040">RUZI &reg</strong></a> </p>
  </footer>

<script type="text/javascript" src="js/core.js"></script>
 <script>
    $(document).ready(function() {
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function() {

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });

      $(window).scroll(function() {
        $(".slideanim").each(function() {
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
          if (pos < winTop + 600) {
            $(this).addClass("slide");
          }
        });
      });
    })
  </script>
  <script type="text/javascript">
     function dw_getWindowDims() {
    var doc = document, w = window;
    var docEl = (doc.compatMode && doc.compatMode === 'CSS1Compat')?
            doc.documentElement: doc.body;
    
    var width = docEl.clientWidth;
    var height = docEl.clientHeight;
    
    // mobile zoomed in?
    if ( w.innerWidth && width > w.innerWidth ) {
        width = w.innerWidth;
        height = w.innerHeight;
    }
    
    return {width: width, height: height};
}

    function highlight(){
      $('#highlight').css('background-color','rgba(0,0,64,0.3)');
    }
    function empty(){
      $('#highlight').css('background-color','white');
      $('#highlight').remove();
    }
    const typewriter = new Typewriter('#typewriter', {
      loop: true,
    });
    var text1="Ruzi International schools";
    
    if(dw_getWindowDims().width < 768){
         text1="Ruzi int'l schools";

    }

       
    typewriter.typeString('<span id="highlight">'+text1+'</span>')
      .pauseFor(2500)
      .callFunction(highlight)
      .pauseFor(1000)
      .callFunction(empty)
      .typeString('<span id="highlight">we build</span>')
      .pauseFor(2500)
      .callFunction(highlight)
      .pauseFor(1000)
      .callFunction(empty)
      .typeString('excellent minds')
      .pauseFor(2500)
      .deleteAll()
      .typeString('with the fear of God')
      .pauseFor(2500)
      .start();
  </script>

</body>

</html>