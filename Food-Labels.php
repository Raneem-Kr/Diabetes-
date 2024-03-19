<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food Labels</title>
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
   <link rel="stylesheet" href="Food-Labels.css">
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



<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1 class="py-3">Food Labels</h1>
            <p>
              Understanding the <span>Nutrition Facts label</span> on food items can <span>help you</span> make <span>healthier choices</span>. The <span>label </span> <span>breaks down</span> the amount of <span>calories, carbs, fat, fiber, protein, and vitamins</span> per serving of the food, making it easier to compare the nutrition of similar products. Be sure to <span>look at different brands</span> of the same <span>foods—nutrition information can differ</span> a lot. For example, <span>one brand</span> of tomato sauce may have <span>more calories</span> and sugar <span>than another brand</span> for the same serving size.</p>
              <p>In general, <span>eat</span> more <span>foods</span> that are <span>higher in vitamins</span>, <span>minerals</span> (such as calcium and iron), and <span>fiber</span>. Eat <span> fewer foods </span>that are <span>higher in added sugars, saturated fat, and sodium</span> (salt), and <span>avoid trans </span>fat. Keep in mind that the % Daily Value of each nutrient, such as total fat of 10% in the example below, is based on eating 2,000 calories a day. You may eat fewer or more calories a day depending on your age, gender, activity level, current weight, and whether you’re trying to lose or maintain your weight.</p>
               <ol class="pl-3 numbers">
               <li>Check the  <span>Serving size</span> first. All the numbers on this label are for a 2/3-cup serving.</li>

<li>This package has <span>8 servings</span>. If you eat the <span>whole</span> thing, you are eating <span>8 times the amount</span> of calories, carbs, fat, etc., shown on the label.</li>
<li>Choose foods with <span> more fiber, vitamins, and minerals</span>.</li> <li>Choose foods with <span> lower calories, saturated fat, sodium, and added sugars.</span> Avoid trans fat.
</li> 
               </ol>
            </p>
        </div>
        <div class="col-md-3">
            <img class="img" src="../CSS/images/food-label-mobile.png" alt="">
        </div>
    </div>
    


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
    <!-- External Scripts -->
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
    </div>
</body>
</html>