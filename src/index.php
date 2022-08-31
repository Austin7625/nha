<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width,initial-scale=0">      <title>NHA - Coach C</title>
      <link rel="icon" type="image/x-icon" href="./img/nha-logo.png">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <!-- Schema.org markup for Google+ -->
      <meta itemprop="name" content="NHA - Coach C" />
      <meta itemprop="description" content="Description of Site" />
      <meta itemprop="image" content="Social Share Image Path" />
      <!-- Twitter Card data -->
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:site" content="@publisher_handle" />
      <meta name="twitter:title" content="NHA - Coach C" />
      <meta name="twitter:description" content="Description" />
      <meta name="twitter:creator" content="@author_handle" />
      <meta name="twitter:image" content="Social Share Image Path" />
      <meta name="twitter:data2" content="Black" />
      <meta name="twitter:label2" content="Color" />
      <!-- Open Graph data -->
      <meta property="og:title" content="NHA - Coach C" />
      <meta property="og:description" content="Description of Site" />
      <meta property="og:type" content="article" />
      <meta property="og:url" content="Social Share Image Path" />
      <meta property="og:image" content="" />
      <meta property="og:site_name" content="NHA - Coach C" />
      <link rel="stylesheet" href="../src/css/style.css" type="text/css">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    </head>
   <body>
       <main>
          <!-- Main Navigation -->
      <?php
      $path ="./_includes/nav.php";
         require_once $path;
         ?>
         <!-- End Navigation -->
         <!-- Main Contents -->
         <div class="container-fluid mt-5">
            <h1 class="text-center">NHA</h1>
            <div class="row bg-grey mt-5">
               <div class="col-12 col-lg-6">
                  <img src="./img/placeholder.png" class="img-fluid" alt="Coach C Logo">
               </div>
               <div class="col-12 col-lg-6 align-self-center">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam leo urna, condimentum non ultrices at, ultricies vel metus. Praesent a tellus lobortis, convallis mauris non, molestie augue. Sed lacinia est vitae magna iaculis, a sodales lectus pulvinar. Phasellus sed rhoncus libero. Vestibulum nec dictum neque. Proin ligula nibh, sagittis sagittis velit vel, eleifend aliquet magna. Etiam fringilla tellus ac orci accumsan, sed elementum ipsum rutrum. Integer ac tincidunt nisi, vel euismod erat. Aenean ac ornare leo. Quisque fermentum, enim a laoreet consequat, purus tellus egestas leo, id euismod dolor arcu a dolor. Sed ac quam vitae neque commodo ultrices porta sit amet massa. Aenean dignissim nunc consequat, dignissim est eu, lobortis ante. Pellentesque et consequat lectus. Praesent hendrerit in turpis quis imperdiet.</p>
               </div>
            </div>
         </div>
         <!-- End Cotnents -->
         <!-- Footer  -->
            <?php
            $path ="./_includes/footer.php";
               require_once $path;
               ?>
            <?php /*
               <p class="bg-success p-3 text-center">
                   <?php
                  date_default_timezone_set("America/New_York");
                  echo "Hello World, The time is" . " " . date("h:i:sa");
                  ?>
            </p>
            */ ?>
            <!-- End Footer -->
      </main>
   </body>
</html>
