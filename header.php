
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
                  <a class="nav-link" href="index">Home </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="about"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="how"> Services </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="sip_calculator">
                    <span>SIP Calculator</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact"> ContactUs</a>
                </li>
                <li class="nav-item back-green" style="border-radius: 0px 0px 0px 35px;">
                  <a class="nav-link" href="http://my-eoffice.com/client"> Login</a>
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
  <div class="close">
<div class='wrap'>
  <div class='content'>
   
    <form  class="form-container " action="https://api.web3forms.com/submit" method="POST">
      <h1>Contact Us</h1>
      <input type="hidden" name="access_key" value="b865bc48-b84d-4167-a332-39e83aa5cb48">
      <input type="hidden" name="from_name" value="Mission Control">
      <label for="Name"><b>Name</b></label>
      <input id="name" type="text" placeholder="Name" name="name" required>

      <label for="Name"><b>Email</b></label>
      <input type="text" placeholder="E-mail" name="email" id="email" required>

      <label for="Name"><b>Subject</b></label>
      <input for="phone" type="text" placeholder="Message" name="name" required>

      <button type="submit" class="btn sub">Submit</button>
      <!-- <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->
    </form>
  </div>
</div>
</div>
<button class="button button button_pop" id="button_pop">
<p class="button__text m-0">
    <span style="--index: 0;">C</span>
    <span style="--index: 1;">O</span>
    <span style="--index: 2;">N</span>
    <span style="--index: 3;">T</span>
    <span style="--index: 4;">A</span>
    <span style="--index: 5;">C</span>
    <span style="--index: 6;">T</span>
    <span style="--index: 7;"> </span>
    <span style="--index: 8;">U</span>
    <span style="--index: 9;">S</span>
    <span style="--index: 11;"> </span>
   
  </p>

<a class='p-0 button__circle' href='#' ><img src="images/rupee.png" class="img-fluid" alt="rupee.png"></a>

</button>
</div>


<script>

  
  
      $('.button_pop').on('click', function(){

  if($('.wrap, .button_pop').toggleClass('active'))
  $(this).removeClass('active');

else($(event.target).is('.wrap') || $(event.target).is('#button_pop')) {
      event.preventDefault();
      $(this).removeClass('active');
    }

  // return true;
});







    </script>

<style>
  .close{
    position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  /* width: 100%; */
  background-color: tranparent;
  opacity: 0;
  }
  </style>
