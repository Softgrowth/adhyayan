
<!DOCTYPE html>

<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>OFS</title>

<!-- popup form -->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


<!-- slider stylesheet -->
<!-- slider stylesheet -->
<link rel="stylesheet" type="text/css"
  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<link href="css/contact.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="css\neww.css">
<link rel="stylesheet" type="text/css" href="css\new.css">
<link rel="stylesheet" type="text/css" href="css\benefit.css">

</head>

<body>
  <div class="hero_area">


  <?php require_once "header.php"; ?>
    
    <!-- end header section -->

  </div>

  <!-- how section -->
  <section class="how_section layout_padding">
    <div class="heading_container">
      <h2 class="inner_text">
       Contact Us 
      </h2>
    </div>
    <div class="how_container">
    <form action="#" method="post">
  
  <p>Please take a moment to get in touch, we will get back to you shortly.</p>

  <div class="column">
    <label for="the-name">Your Name</label>
    <input type="text" name="name" id="the-name">

    <label for="the-email">Email Address</label>
    <input type="email" name="email" id="the-email">

    <label for="the-phone">Phone Number</label>
    <input type="tel" name="phone" id="the-phone">

    <label for="the-reason">How can we help you?</label>
    <select name="reason" id="the-reason">
    <option value="">Choose one</option>
    <option value="web">I need web design services</option>
    <option value="video">I need you to produce a video</option>
    <option value="3d">I need 3D polygon things</option>
  </select>
  </div>
  <div class="column">
    <label for="the-message">Message</label>
    <textarea name="message" id="the-message"></textarea>
    <label>
    <input type="checkbox" name="newsletter" value="yes"> Join our mailing list?
    </label>
    <input type="submit" class="bg-dark" value="Send Message">
  </div>
</form>
    </div>
  </section>
  <!-- end how section -->

    <!-- info section -->
    <?php require_once "footer.php" ?>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- owl carousel script 
    -->
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 0,
      navText: [],
      center: true,
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        0: {
          items: 1
        },
        1000: {
          items: 3
        }
      }
    });
  </script>
  <!-- end owl carousel script -->
</body>

</html>