<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sip_calculator.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
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
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />

<link rel="stylesheet" type="text/css" href="css\neww.css">
<link rel="stylesheet" type="text/css" href="css\new.css">
<link rel="stylesheet" type="text/css" href="css\benefit.css">

</head>
<body>

<div class="hero_area">
    <!-- header section strats -->
    <?php require_once "header.php"; ?>
    <!-- end header section -->
  </div>

    <div class="container-fluid">
    <section class="how_section layout_padding">
    <div class="heading_container">
      <h2>
        SIP Calculator 
      </h2>
    </div>
<div class="row how_container">
  <div class="col-12 col-md-7">
  <div class="outer_div">
          <div class="inner_div row">
              <div class="col-6">Money Per month(₹)</div>
              <div class="col-6 slider_box">
                  <input class="text_input" id="textValue" value="500" onkeyup="setWattValue()" />
              </div>
            <div class="col-12">
               <input title="Tooltip on top" value="500" min="500" max="200000" step="500" type="range"
                      class="form-range col-8" id="watts" />
                  <span id="showValue"  class="hide-span">500</span>
            </div>
          </div>
      </div>
      <div class="outer_div">
          <div class="inner_div row">
              <div class="col-6">Interest Rate(%)</div>
              <div class="col-6 slider_box">
                  <input class="text_input" id="textValue2" value="1" onkeyup="setVoltValue()" />
              </div>
            <div class="col-12">
                  <input title="Tooltip on top" value="1" min="1" max="30" step="1" type="range" class="form-range col-8"
                      id="volts" />
                  <span id="showValue2" class="hide-span">1</span>
            </div>
          </div>
      </div>
  <div class="outer_div">
          <div class="inner_div row">
              <div class="col-6">Year(s)</div>
              <div class="col-6 slider_box">
                  <input class="text_input" id="textValue3" value="1" onkeyup="setYearValue()" />
              </div>
            <div class="col-12">
                  <input title="Tooltip on top" value="1" min="1" max="30" step="1" type="range" class="form-range col-8"
                      id="years" />
                  <span id="showValue3"  class="hide-span">1</span>
            </div>
          </div>
      </div>

      <div class="outer_div outer_div2 row"  style="position: relative">
          <div class="text-center col-6 col-md-4">
              <div class="display_result" id="showInvested">1,20,000</div>
              <div class="result_text">Invested</div>
          </div>
          <div class="text-center col-6 col-md-4">
              <div class="display_result" id="showReturn">1,20,000</div>
              <div class="result_text">Returns</div>
          </div>
          <div class="text-center col-12 col-md-4">
              <div class="display_result" id="showAmps">1,20,000</div>
              <div class="result_text">Total</div>
          </div>
      </div>
</div>
  
  <div class="col-12 col-md-5 chartDiv" style="">
    <canvas id="myChart"></canvas>
    <!-- <span class="credit">Created By: <strong><a href="https://www.linkedin.com/in/rupam-basak-a24423115/" target="_blank">RUPAM BASAK</a></strong></span> -->
  </div>
</div>


</section>
    </div>

  <!-- info section -->
  <?php require_once "footer.php" ?>

<script src="js/sip_calculator.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</body>
</html>