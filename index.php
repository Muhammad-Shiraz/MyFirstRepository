<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="media.css">
  <title>Document</title>
</head>

<body>
  <div class="container-fluid web" style="padding: 0;transition: 0.3s ease-in;">
    <!-- ==============Header=============== -->
    <header class="container-fluid">
      <div class="d-flex">
        <div class="header1 container">
          <div class="info d-inline-block"> <i class="fa-solid fa-user"></i> <a href="./Agent login/login.php"
              class="d-inline-block btn text-white text-align-center">Agent Login</a> </div>
          <div class="info d-inline-block"> <i class="fa-solid fa-user"></i> <a href="./Customer login/C login.php"
              class="d-inline-block btn text-white">Customer login</a> </div>
          <div class="info d-inline-block none"> <i class="fa-solid fa-file"></i>
            <p class="d-inline-block btn text-white">Not a member? <a href="./Register sign-in/sign in.php"><span>Register</span></a> </p>
          </div>
          <div class="info d-inline-block none">
            <p>Call us Now - 03124432912</p>
          </div>
        </div>
        <div class="header2 d-flex">
          <a href="https://web.facebook.com/" class="icon d-inline pr-2 "><i class="fa-brands fa-facebook"></i></a>
          <a href="https://web.facebook.com/" class="icon d-inline pr-2 "><i class="fa-brands fa-twitter"></i></a>
          <a href="https://web.facebook.com/" class="icon d-inline pr-2 "><i class="fa-brands fa-tumblr"></i></a>
          <a href="https://web.facebook.com/" class="icon d-inline pr-2 "><i class="fa-brands fa-pinterest"></i></a>
        </div>
      </div>
    </header>
    <!-- =================NAVBAR=============================== -->
    <section class="container-fluid " style="display:flow-root;transition: 0.3s ease-in;">
      <div class="logo" style="float: left;">
        <h1>F<span>I</span>VERR</h1>
      </div>
      <div class="search" style="float: right;"> <i class="fa-solid fa-search">
          <!-- <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-sm-0" type="submit">Search</button> -->
        </i> </div>
      <div class="hamburger">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="float:right ;">
          <span></span> <span></span> <span></span> </button>
        <nav class="navbar navbar-expand-lg sticky-top bg-transparent" style="float:right ;">
          <div class="container navDiv">
            <div class="collapse navbar-collapse bg-transparent nav-search  " id="navbarNav">
              <div class="nav2">
                <ul class="navbar-nav ">
                  <li class="nav-item active"> <a class="nav-link  ms-5  text-dark" aria-current="page" href="#Home">Home</a>
                  </li>
                  <li class="nav-item"> <a class="nav-link  ms-5  text-dark" aria-current="page" href="#destination">Destination</a>
                  </li>
                  <li class="nav-item"> <a class="nav-link  ms-5 text-dark" aria-current="page" href="#curses">Cruses</a> </li>
                  <li class="nav-item"> <a class="nav-link  ms-5  text-dark" href="#Special">Specials</a> </li>
                  <li class="nav-item"> <a class="nav-link  ms-5  text-dark" href="#holiday">Holidays</a> </li>
                  <li class="nav-item"> <a class="nav-link  ms-5  text-dark" href="#blog ">Blogs</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </section>
    <!-- ==============================Section_2================================ -->
    <section class="container-fluid section2" id="Home" style="padding: 0;transition: 0.3s ease-in;">
      <div class="container text-center">
        <div class="">
          <div class="hidding ">
            <h1 class="text-white"><span>T</span>o tra<span>v</span>el is to <span>L</span>ive</h1>
            <p class="text-white p-0">You Don,t Need Magic to Disappear.All you need is a destination. </p>
          </div>
          <div class="buttons">
            <input type="button" class="btn" value="SHOW ON THE MAP">
            <input type="button" class="btn bg-transparent text-white" value="MORE INFO">
          </div>
        </div>
      </div>
    </section>
    <!-- =======================SECTION-3============================= -->
    <section class="container-fluid section3" id="destination" style="display:flow-root;transition: 0.3s ease-in;">
      <div class="container d-flex SEC">
        <div class="sec3 ">
          <h5>Find your</h5>
          <h3>Holidays</h3>
        </div>
        <div class="sec4">
          <p style="display:inline ;">Where</p>
          <div class="input"> <i class="fa-solid fa-earth-asia"></i>
            <input type="search" name="" class="search2" id="" placeholder="Destination">
          </div>
          <p style="display:inline ;">When</p>
          <div class="input">
            <input type="date" name="" id="" required placeholder="Date">
          </div>
          <div class="btn2">
            <form action="#">
              <input type="button" class="btn " value="Search">
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!--========================SECTION 4===================-->
  <div class="container-fluid" id="Special" style="transition: 0.3s ease-in;">
    <div class="slider-h1" style="text-align: center;margin-top: 10px;margin-bottom: 10px;">
      <h1>Special offer</h1>
      <p>Best 2023 packages where people live to stay</p>
    </div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="card" style="width: 18rem;display: inline-block;margin: 10px"> <img
              src="./img/tim-swaan-eOpewngf68w-unsplash.jpg" class="card-img-top " alt="..." style="height: 190px">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;display: inline-block;margin: 10px">
            <img src="./img/salman-ahmad-NgzdlZSmsTg-unsplash.jpg" class="card-img-top " alt="..."
              style="height: 190px">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;display: inline-block;margin: 10px"> <img
              src="./img/cody-hiscox-Hp5Acad1H0k-unsplash.jpg" class="card-img-top " alt="..." style="height: 190px">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;display: inline-block;margin: 10px"> <img
              src="./img/karsten-wurth-rafblRbne3o-unsplash.jpg" class="card-img-top " alt="..." style="height: 190px">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;display: inline-block;margin: 10px"> <img
              src="./img/shazaf-zafar-eLkFUsR6WJg-unsplash.jpg" class="card-img-top " alt="..." style="height: 190px">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;display: inline-block;margin: 10px"> <img
              src="./img/karsten-wurth-rafblRbne3o-unsplash.jpg" class="card-img-top " alt="..." style="height: 190px">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
          <div class="card" style="width: 18rem;display: inline-block;margin: 10px"> <img
              src="./img/karsten-wurth-rafblRbne3o-unsplash.jpg" class="card-img-top " alt="..." style="height: 190px">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <!-- <img src="./img/karsten-wurth-rafblRbne3o-unsplash.jpg" class="d-block w-100" alt="..."> -->
        <!----------------------------card2------------->
        <!--<div class="carousel-item">
        <div class="card" style="width: 18rem;"> <img src="./img/salman-ahmad-NgzdlZSmsTg-unsplash.jpg" class="card-img-top " alt="..." style="height: 190px">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
      </div>
        <div class="card" style="width: 18rem;"> <img src="./img/salman-ahmad-NgzdlZSmsTg-unsplash.jpg" class="card-img-top " alt="..." style="height: 190px">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
      </div>
        <div class="card" style="width: 18rem;"> <img src="./img/salman-ahmad-NgzdlZSmsTg-unsplash.jpg" class="card-img-top " alt="..." style="height: 190px">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
      </div>
      </div>
        --------------------------card3-----------
    <div class="carousel-item">
        <div class="card" style="width: 18rem;"> <img src="./img/cody-hiscox-Hp5Acad1H0k-unsplash.jpg" class="card-img-top " alt="..." style="height: 190px">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
      </div>
        <div class="card" style="width: 18rem;">  <img src="./img/cody-hiscox-Hp5Acad1H0k-unsplash.jpg" class="card-img-top" alt="..." style="height: 190px">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
      </div>
        <div class="card" style="width: 18rem;">  <img src="./img/cody-hiscox-Hp5Acad1H0k-unsplash.jpg" class="card-img-top" alt="..." style="height: 190px">
        <div class="card-body">
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
      </div>
      </div>
-->
      </div>


      <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>

  </div>

  <!--=====================SECTION 5 =================-->
  <section class="container-fluid" id="holiday" style="padding: 0;transition: 0.3s ease-in;">
    <div class="section4">
      <div class="holi-hid">
        <h1>Holidays type</h1>
        <h6>get explore your dream</h6>
      </div>
      <div class="images">
        <div class="holiday" style="display:block;margin: 45px 19px 150px 15px;">
          <a href="#">
            <img src="img/Section 4/clipart1003088.png"
              style="border: 4px solid white;border-radius: 91px; padding: 27px 32px;display: block;">
            <p>Cruise</p>
          </a>
        </div>
        <div class="holiday" style="display:block;margin: 45px 19px 150px 15px;">
          <a href="#"><img src="img/Section 4/castle-256.png"
              style="border: 4px solid white;border-radius: 91px; padding: 38px 32px;display: block;">
            <p>City breake</p>
          </a>
        </div>
        <div class="holiday" style="display:block;margin: 45px 19px 150px 15px;">
          <a href="#"><img src="img/Section 4/[CITYPNG.COM]HD White Outline Heart PNG - 1198x1291.png"
              style="border: 4px solid white;border-radius: 91px; padding: 27px 32px;display: block;">
            <p>Honeymoon</p>
          </a>
        </div>
        <div class="holiday" style="display:block;margin: 45px 19px 150px 15px;"> <a href="#"><img
              src="img/Section 4/transparent-business-icon-management-icon-stopwatch-icon-5d7b901b892134.3524166215683789075617.png"
              style="border: 4px solid white;border-radius: 91px; padding: 27px 32px;display: block;">
            <p>Adventure</p>
          </a>
        </div>
        <div class="holiday holiday-img" style="display:block;margin: 45px 19px 150px 15px;;"> <a href="#"><img
              src="img/Section 4/PngItem_4764625.png"
              style="border: 4px solid white;border-radius: 91px;padding: 16px 26px;display: block; width: 163px;">
            <p>Safari</p>
          </a>
        </div>
        <div class="holiday" style="display:block;margin: 45px 19px 150px 15px;"> <a href="#"><img
              src="img/Section 4/clipart1003088.png"
              style="border: 4px solid white;border-radius: 91px; padding: 27px 32px;display: block;">
            <p>Beach</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- ===================================Section 6============================= -->
  <section class="container-fluid" style="padding: 61px 11px;transition: 0.3s ease-in;">
    <div style="text-align: center;">
      <h1>Happy Client</h1>
      <h5 style="color:#4c3f3f">what customer say about us and why love your service</h5>
    </div>
    <div>
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card" id="client" style="width: 32rem;display: inline-block;margin: 32px">
              <p>ipsum, dolor sit amet consectetur adipisicing elit. Libero, quo architecto! Ullam esse amet placeat,
                adipisci, quas, enim unde incidunt maxime praesentium ducimus veniam illo consequuntur! Eveniet dolor
                architecto reprehenderit</p>
              <div class="client-hid">
                <h5><span>Client Name</span></h5>
                <small>Lahore</small>
              </div>

            </div>
            <div class="card" id="client" style="width: 32rem;display: inline-block;margin: 32px">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem corrupti quam cum? Enim excepturi
                quia unde dolor quas veniam blanditiis fugiat, odit quam consequatur ab deleniti quis rerum aliquid
                obcaecati.</p>
              <div class="client-hid">
                <h5><span>Client Name</span></h5>
                <small>Lahore</small>
              </div>
            </div>
            <div class="card" id="client" style="width:32rem;display: inline-block;margin: 32px">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem corrupti quam cum? Enim excepturi
                quia unde dolor quas veniam blanditiis fugiat, odit quam consequatur ab deleniti quis rerum aliquid
                obcaecati.</p>
              <div class="client-hid">
                <h5><span>Client Name</span></h5>
                <small>Lahore</small>
              </div>
            </div>
            <div class="card" id="client" style="width: 32rem;display: inline-block;margin: 32px">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem corrupti quam cum? Enim excepturi
                quia unde dolor quas veniam blanditiis fugiat, odit quam consequatur ab deleniti quis rerum aliquid
                obcaecati.</p>
              <div class="client-hid">
                <h5><span>Client Name</span></h5>
                <small>Lahore</small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button> -->
    </div>
    </div>
  </section>
  <!-- ===========================section 7===================== -->
  <section class="container-fluid section7" id="curses">
    <div class="container section7-container" style="display: flex;padding: 0;transition: 0.3s ease-in;">
      <div class="newsletter">
        <h2>Newsletter</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat reiciendis
          iure qui dignissimos.</p>
        <div class="newsletter-search">
          <input type="search" name="" id="" placeholder="Subscribe">
          <input type="button" value="GO">
        </div>


      </div>
      <div class="latestNews" style="width: 821px;">
        <h2>Latest news</h2>
        <div class="latestNews-1">
          <img src="./img/salman-ahmad-NgzdlZSmsTg-unsplash.jpg" alt="" style="width: 33px;border: 1px solid white;">
          <p>Postformat Gallery:Multiple images</p>

        </div>
        <div class="latestNews-2">
          <img src="./img/shazaf-zafar-eLkFUsR6WJg-unsplash.jpg" alt=""
            style="height: 24px;width:33px;border: 1px solid white;">
          <p>Always is fun</p>
        </div>
      </div>
      <div class="Tags">
        <h2>Tags</h2>
        <div class="anchor">
          <a href="./Agent login/login.php" class="bg-transparent">Agent Login</a>
          <a href="./Customer login/C login.php" class="bg-transparent">Customer Login</a>
          <a href="#" class="bg-transparent">Not a member?</a>
          <a href="#" class="bg-transparent">Contact</a>
          <a href="#" class="bg-transparent">new</a>
          <a href="#" class="bg-transparent">Landscape</a>
          <a href="#" class="bg-transparent">Tags</a>
          <a href="#" class="bg-transparent">Nice</a>
          <a href="#" class="bg-transparent">Some</a>
          <a href="#" class="bg-transparent">Protrait</a>
        </div>
      </div>
      <div class="Address">
        <h2 style="color: aqua;">Address</h2>
        <p>40-foota bazar,Kot Abdul Malik,Lahore</p>
        <div class="Address-1">
          <span style="color:aqua;font-weight: bold;">E-mail :</span>
          <p>shirazshahzad2003@gmail.com</p>
        </div>
        <a href="https://web.facebook.com/" class="icon d-inline pr-2 " style="margin: 20px 10px;color: #fff;"><i
            class="fa-brands fa-facebook"></i></a>
        <a href="#" class="icon d-inline pr-2 " style="margin: 20px 10px; color:#fff;"><i
            class="fa-brands fa-twitter"></i></a>
        <a href="#" class="icon d-inline pr-2 " style="margin: 20px 10px; color:#fff;"><i
            class="fa-brands fa-tumblr"></i></a>
        <a href="#" class="icon d-inline pr-2 " style="margin: 20px 10px; color:#fff;"><i
            class="fa-brands fa-pinterest"></i></a>
      </div>
    </div>
  </section>
  <!-- ===========================footer======================== -->
  <footer>
    <div class="container-fluid" id="blog" >
      <div class="container foot-sec" style="padding: 14px;">
        <ul class="footer-ul">
          <li> <a class="foot-link" aria-current="page" href="#Home">Home</a> </li>
          <li> <a class="foot-link" aria-current="page" href="#destination">Destination</a></li>
          <li> <a class="foot-link" aria-current="page" href="#curses">Cruses</a> </li>
          <li> <a class="foot-link" href="#Special">Specials</a> </li>
          <li> <a class="foot-link" href="#holiday">Holidays</a> </li>
          <li> <a class="foot-link" href="#blog ">Blogs</a> </li>
        </ul>
        <p>Copyright &copy;shiraz.All right reserved</p>
      </div>
    </div>




  </footer>







  </div>





















  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>