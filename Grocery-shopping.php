<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Grocery Shopping</title>
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
   <link rel="stylesheet" href="Grocery-shopping.css">
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
            <h1 class="py-3">Grocery Shopping</h1>
            <p>
               <span>Healthy eating</span> starts at the <span>grocery store</span>. But <span>successful shopping</span><span> isn’t</span> always as <span>simple</span> as it seems. Your <span>goal</span>? To get the <span>best deals</span> on the <span>healthiest</span>, <span>tastiest</span> food. <span>Use</span> asp
                shopping list to help you stay focused on buying <span>foods</span> that <span>fit your meal plan</span> and budget.<br> <br>
               Tips to set you up for success:
               <ul class="pl-3">
               <li><span> Plan a week’s</span> worth of meals before you go grocery shopping.</li>

<li>Check what you already have on hand so you <span>don’t buy what you don’t need</span>.</li>
<li>Make a <span>shopping list</span> based on your <span>weekly meal plan</span>.</li> <li><span>Organize your list </span>by store section for quick and easy shopping.</li>
<li>You know this one: <span>don’t shop hungry</span> so you’re not tempted to buy foods that aren’t on your shopping list.</li>
<li>Shop the <span>outside aisles</span> for fresh fruit, vegetables, dairy or dairy alternatives, meat, fish, poultry, and eggs.</li>
<li>Shop the <span>inside aisles for healthy options</span> such as beans, lentils, flavored vinegars, spices, tuna fish, olive oil, and frozen fruit and vegetables (without sauce).</li>
<li>Be <span>wary of food claims </span>like “lower in fat” or “reduced sugar”; it may still not be a healthy choice.</li> 
               </ul>
            </p>
        </div>
        <div class="col-md-3">
            <img class="img" src="../CSS/images/eat_well_2.png" alt="">
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