<?php  include 'includes/header.php';  ?>

<div class="breadcrumbs">
    <div class="container2" data-aos="fade-left" data-aos-delay="100">
        <h2>Our Prices</h2>
    </div>  
</div>
<div class="divider_1">
<div class="display_box">
<div class="treatment-container">
        <h2>Pilot Training</h2>
        <select id="mySelect" onchange="myFunction()">
            <option value="0,00">
            Select...
  <option value="6000,00">
            Flight Hours Only
  <option value="9500,00">
            Flight Hours and Theory
  <option value="15,000">Full Training(Private)
        </select>

</div>
<div class="treatment1-container">
        <h2>Pilot Advanced Training</h2>
        <select id="mySelect1" onchange="myFunction1()">
            <option value="0,00">
            Select...
  <option value="16,500">
            Flight Hours Only
  <option value="20,000">
            Flight Hours and Theory
  <option value="25,500">
            Full Training (Private)
        </select>
</div>
<div class="treatment2-container">
        <h2>Flight Attendant</h2>
        <select id="mySelect2" onchange="myFunction2()">
            <option value="0,00">
            Select...
  <option value="2500,00">
            Theory Only
  <option value="4750,00">
            Full Course
  <option value="8350,00">
            Full Course (Deluxe Package)
        </select>
</div>
<div class="treatment3-container">
        <h2>Flight Instruction</h2>
        <select id="mySelect3" onchange="myFunction3()">
            <option value="0,00">
            Select...
  <option value="11,500">
            Theory
  <option value="14,999">
            Full Course
  <option value="15,500">
            Full Course with Exam
        </select>
</div>
    <br />
<div class="btTotalNextWrapper">
    <div class="btQuoteTotal">
        <span class="btQuoteTotalText">Total</span>
        <span class="btQuoteTotalCurrency">€</span>
        <span id="display"></span>
    </div>
</div>
</div>
<div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
            <img src="images/pilot_dream.jpg" class="img-fluid" alt="">
          </div>
</div>

<?php  include 'includes/footer.php';  ?>