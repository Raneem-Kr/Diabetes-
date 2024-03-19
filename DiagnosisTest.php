<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Diagnosis and Test</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="../CSS/style.css" />
      <link rel="stylesheet" href= "DiagnosisTest.css"/>
  </head>
  <body>
    <!--start Navbra-->
    <div class="container-fluid px-4">
      <div class="row">
        <div class="col-md-12">
        <?php 
          include('../includes/temp/navbar.php');
         ?>
        </div>
      </div>
    </div>

    <!--End Navbar-->

<!--start header-->
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h1>Diabetes Tests</h1>
                <h6>Tests for Type 1 Diabetes, Type 2 Diabetes, and Prediabetes</h6>
                <hr>
                <h3>Your doctor will have you take one or more of the following blood tests to confirm the diagnosis:</h3>
            </div>
        </div>
  

<div class="row">
<div class="col-md-6">
    <div class="box">
 <h3>A1C Test</h3>
 <p>The <span>A1C</span> test <span>measures</span> your <span>average blood sugar</span> level over the past <span>2</span> or <span>3 months</span>. An A1C <span> below 5.7%</span> is <span>normal</span>,<span> between 5.7 and 6.4% </span>indicates you have <span>prediabetes</span>, andsp
   6.5% or higher indicates you have <span>diabetes</span>.</p>
    </div>
</div>
<div class="col-md-6">
    <div class="box">
 <h3>Fasting Blood Sugar Test</h3>
 <p>This <span>measures </span>your <span>blood sugar</span> <span>after an overnight fast</span> (not eating). A fasting blood sugar level of <span> 99 mg/dL or lower is normal</span>, <span>100 to 125 mg/dL</span> indicates you have <span>prediabetes</span>, and <span> 126 mg/dL or higher</span> indicates you have <span>diabetes</span>.</p>
    </div>
</div>
<div class="col-md-6">
    <div class="box">
 <h3>Glucose Tolerance Test</h3>
 <p>This <span> measures</span> your <span>blood sugar before and after you drink a liquid that contains glucose</span>. You’ll fast (not eat) overnight before the test and have your blood drawn to determine your fasting blood sugar level. Then you’ll drink the liquid and have your blood sugar level checked 1 hour, 2 hours, and possibly 3 hours afterward. At 2 hours, a blood sugar level of <span> 140 mg/dL</span> or <span> lower</span> is considered <span>normal</span>, <span>140 to 199 mg/dL</span> indicates you have <span>prediabetes</span>, and <span>200 mg/dL or higher</span> indicates you have <span> diabetes.</span></p>
    </div>
</div>
<div class="col-md-6">
    <div class="box">
 <h3>Random Blood Sugar Test</h3>
 <p>This <span>measures</span> your <span>blood sugar</span> <span>at the time you’re tested</span>. You can take this test at <span>any time</span> and <span>don’t need to fast</span> (not eat) first. A blood sugar level of <span>200 mg/dL or higher </span>indicates you have <span>diabetes</span>.</p>
    </div>
</div>
</div>
    </div>
<div class="container-fluid  px-4 py-5">
  <div class="row">
    <div class="col-md-12">
      <table class="table text-center">
        <thead class="thead-green">
            <tr>
              <th>Result*</th>
              <th>A1C Test	</th>  
              <th>	Fasting Blood Sugar Test</th>  
             <th>Glucose Tolerance Test</th> 
             <th>Random Blood Sugar Test</th>
            </tr>
          
        </thead>
        <tr>
          <td>Diabetes</td>
          <td>6.5% or above</td>
          <td>126 mg/dL or above</td>
          <td>200 mg/dL or above</td>
          <td>200 mg/dL or above</td>
        </tr>
           <tr>
          <td>Prediabetes</td>
          <td>5.7 – 6.4%</td>
          <td>100 – 125 mg/dL</td>
          <td>140 – 199 mg/dL</td>
          <td>N/A</td>
        </tr>
           <tr>
          <td>Normal</td>
          <td>Below 5.7%</td>
          <td>99 mg/dL or below</td>
          <td>140 mg/dL or below</td>
          <td>N/A</td>
        </tr>
      </table>
    </div>
    </div>
</div>
    <div class="container-fluid mx-4">
 <div class="row">
  <div class="col-md-9">
  <h6>
*Results for gestational diabetes can differ. Ask your health care provider what your results mean if you’re being tested for gestational diabetes. Source: American Diabetes Association
      </h6>
  </div>
 </div>
    </div>


<div class="container-fluid px-4">
  <div class="row">
    <div class="col-md-12">
      <p class="ml-3">If your doctor thinks you have type 1 diabetes, your blood may also tested for autoantibodies (substances that indicate your body is attacking itself) that are often present in type 1 diabetes but not in type 2 diabetes. You may have your urine tested for ketones (produced when your body burns fat for energy), which also indicate type 1 diabetes instead of type 2 diabetes.</p>
    </div>
  </div>
</div>

    <div class="container-fluid px-4">
        <div class="row">

      <div class="col-md-4">
        <div class="content">
          <h3>
            Tests for Gestational Diabetes
          </h3>
          <p><span>Gestational diabetes</span> is <span>diagnosed </span>using <span>blood tests</span>. You’ll probably be tested between <span> 24 and 28 weeks of pregnancy</span>. If your risk is higher for getting gestational diabetes (due to having more risk factors), your doctor may test you earlier. Blood sugar that’s higher than normal early in your pregnancy may indicate you have type 1 or type 2 diabetes rather than gestational diabetes.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="content">
          <h3>
        Glucose Screening Test

          </h3>
          <p>This <span> measures</span> your <span>blood sugar at the time you’re tested</span>. You’ll <span>drink a liquid </span>that <span>contains glucose</span>, and then <span>1 hour later</span> your <span>blood will be drawn </span> to check your blood sugar level. A <span>normal result </span>is <span>140 mg/dL or lower.</span> If your level is <span> higher than 140 mg/dL</span>, you’ll need to <span> take a glucose tolerance </span>test.</p>
        </div>
      </div>
          <div class="col-md-4">
        <div class="content">
          <h3>
    Glucose Tolerance Test

          </h3>
          <p>This <span>measures</span> your <span>blood sugar</span><span> before and after you drink a liquid that contains glucose.</span> You’ll <span>fast (not eat) overnight</span> before the test and have your blood drawn to determine your fasting blood sugar level. <span>Then</span> you’ll <span>drink the liquid </span>and have your <span>blood sugar</span> level <span> checked 1 hour, 2 hours, and possibly 3 hours afterward</span>. Results can differ depending on the size of the glucose drink and how often your blood sugar is tested. Ask your doctor what your test results mean.</p>
        </div>
      </div>
    </div>
  </div>

<p class="source">CDC Centers for Disease Control and Prevention</p>

<!--start Footer section-->
    <footer class="mt-4 pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="pt-5">Diabetes</h2>
            <hr />
            <div class="text-center">
              <i class="fa-brands fa-facebook-f"></i>
              <i class="fa-brands fa-twitter"></i>
              <i class="fa-solid fa-house"></i>
              <i class="fa-brands fa-linkedin"></i>
            </div>
          </div>
          <div class="col-md-5 m-auto">
            <form action="">
              <input
                class="form-control"
                type="text"
                name="name"
                id=""
                placeholder="Name"
              />
              <br />
              <input
                class="form-control"
                type="email"
                name="email"
                id=""
                placeholder="E-mail"
              />
              <br />
              <textarea
                class="form-control"
                name=""
                id=""
                placeholder="Message"
              ></textarea>
            </form>
          </div>
        </div>
      </div>
    </footer>

    <!--end Footer section-->
  <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
      integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
      crossorigin="anonymous"
    ></script>
</body>
</html>