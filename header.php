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
    <header class="header_section ">
      <div class="container-fluid pr-0">
        <nav class="navbar navbar-expand-lg custom_nav-container py-0 " >
          <a class="navbar-brand p-0" style="width:154px" href="index.php">
            <span>
             <img src="images/New_Logo-logo-removebg-preview.png" class="w-75" alt="" srcset="">
            </span>
          </a>
          <button class="navbar-toggler bg-secondary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-dark"></span>
           
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              
              <ul class="navbar-nav ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home </a>
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
                <li class="nav-item back-green" style="border-radius: 0px 0px 0px 35px;">
                  <a class="nav-link" href="#"> Login</a>
                </li>
              </ul>
              <div class="user_option back-green" style="padding: 27px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    </div>
<script>
  "use strict";

let navlist = document.querySelectorAll('.nav-item');

for (let i = 0; i < navlist.length; i++) {
	navlist[i].addEventListener('click', function() {
		for (let x = 0; x < navlist.length; x++) {
			if (navlist[x] == this) {
				navlist[x].classList.add('active');
			} else {
				navlist[x].classList.remove('active');
			}
		}
	});
}
</script>
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