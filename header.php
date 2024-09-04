<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
  <title>OFS</title>

<!-- slider stylesheet -->
<link rel="stylesheet" type="text/css"
  href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />
</head>
<body>
    <!-- header section strats -->

    <div class="container-fluid m-0 p-0">
    <header class="header_section">
      <div class="container-fluid pr-0">
        <nav class="navbar navbar-expand-lg custom_nav-container py-0">
          <a class="navbar-brand" href="index.html">
            <span>
              OrBiT
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about.php"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="how.php"> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sip_calculator.php">
                    <span>SIP Calculator</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php"> ContactUs</a>
                </li>
                <li class="nav-item bg-success" style="border-radius: 0px 0px 0px 35px;">
                  <a class="nav-link" href="#"> Login</a>
                </li>
              </ul>
              <div class="user_option bg-success" style="padding: 19.5px;">
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    </div>

<!-- new form -->

<div class="container">
<div class='wrap'>
  <div class='content'>
   
    <form action="/action_page.php" class="form-container ">
      <h1>Contact Us</h1>

      <label for="Name"><b>Name</b></label>
      <input type="text" placeholder="Name" name="name" required>

      <label for="Name"><b>Email</b></label>
      <input type="text" placeholder="E-mail" name="name" required>

      <label for="Name"><b>Subject</b></label>
      <input type="text" placeholder="Message" name="name" required>

      <button type="submit" class="btn sub">Submit</button>
      <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->
    </form>
  </div>
</div>
<a class='p-0 button button_pop' href='#' style="width: 80px;"><img src="images/rupee.png" class="img-fluid" alt="rupee.png"></a>
</div>



    
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>


<script>
      $('.button_pop').on('click', function(){
  $('.wrap, .button_pop').toggleClass('active');
  
  return true;
});

    </script>
</body>
</html>