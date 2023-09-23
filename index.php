<?php

if (isset($_POST['order'])) {

  $username = $_POST['name'];
  $phone = $_POST['phone'];
  $ofood = $_POST['food'];
  $afood = $_POST['afood'];
  $address = $_POST['adddress'];
  $message = $_POST['message'];

  $error = "";

  if (empty($username) || empty($phone) || empty($ofood) || empty($address)) {
    $error = "Please fill required fields";
  }

  else{

    $conn =  mysqli_connect("localhost", "root", "");

    mysqli_select_db($conn, "food");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO `cartt`( `user_name`, `user_phone`, `or_food`, `ad_food`, `address`, `message`) VALUES ('$username','$phone','$ofood','$afood','$address','$message')";

    $food = mysqli_query($conn, $query);
    

    header('location:cart.php');
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kitchen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

  <!-- <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/> -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" /> -->

  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
</head>

<body>
  <header>
    <a href="#" class="logo"><i class="fas fa-utensils"></i>Kitchen.</a>

    <nav class="navbarr">
      <a class="active" href="#home">Home</a>
      <a href="#dishes">Dishes</a>
      <a href="#menu">Menu</a>
      <a href="#review">Review</a>
      <a href="#order">Order</a>
      <a href="#about">about</a>
    </nav>

    <div class="icon">
      <i class="fas fa-bars" id="bars"></i>
      <i class="fas fa-search" id="search-icon"></i>
      <a href="#" class="fas fa-heart"></a>
      <a href="#" class="fas fa-shopping-cart"></a>
      <a class="fas fa-person" id="login" name="login" href="register.php">login</a>

    </div>
  </header>

  <form action="" id="search-form">
    <input type="search" placeholder="SEARCH HERE..." name="search-box" id="search-box" />
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
  </form>

  <!-- Special dishesssss  -->
  <section class="home" id="home">
    <div class="swiper-container home-slider">
      <div class="swiper-wrapper wrapper">
        <div class="slide swiper-slide">
          <div class="content">
            <span>our special dishes</span>
            <h3>Burger</h3>
            <p>Lorem ipsum dolor sit amet consectetur a</p>

            <a href="#" class="btn">Order now</a>
          </div>
          <div class="images">
            <img src="burger2.png" alt="" />
          </div>
        </div>

        <div class="slide swiper-slide">
          <div class="content">
            <span>our special dishes</span>
            <h3>Burger</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>

            <a href="#" class="btn">Order now</a>
          </div>
          <div class="images">
            <img src="burger2.png" alt="" />
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="content">
            <span>our special dishes</span>
            <h3>chiken winges</h3>
            <p>Lorem ipsum dolor sit amet</p>

            <a href="#" class="btn">Order now</a>
          </div>
          <div class="images">
            <img src="chikn.png" alt="" />
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="content">
            <span>our special dishes</span>
            <h3>spicy noodles</h3>
            <p>Lorem ipsum dolor sit amet consectetur a</p>

            <a href="#" class="btn">Order now</a>
          </div>
          <div class="images">
            <img src="nnnnn.png" alt="" />
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="content">
            <span>our special dishes</span>
            <h3>Chicken</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <a href="#" class="btn">Order now</a>
          </div>
          <div class="images">
            <img src="tdr.png" alt="" />
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="content">
            <span>our special dishes</span>
            <h3>Chicken</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <a href="#" class="btn">Order now</a>
          </div>
          <div class="images">
            <img src="ee.png" alt="" />
          </div>
        </div>
      </div>

      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- Special dishesssss end -->

  <!-- popular Dishesssss -->

  <section class="dishes" id="dishes">
    <h3 class="sub-heading">Our dishes</h3>
    <h1 class="heading">Popular dishes</h1>

    <div class="box-container">
      <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="tdr.png" alt="" />
        <h3>Tasty Salad</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>

        <span>$20.99</span>
        <a href="#" class="btn">Add to cart</a>
      </div>

      <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="tdr.png" alt="" />
        <h3>Tasty Salad</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>

        <span>$20.99</span>
        <a href="#" class="btn">Add to cart</a>
      </div>

      <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="tdr.png" alt="" />
        <h3>Tasty Salad</h3>
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>

        <span>$20.99</span>
        <a href="#" class="btn">Add to cart</a>
      </div>
    </div>
  </section>
  <!-- Dishesssss enddddd -->

  <!-- About section........ -->

  <section class="about" id="about">
    <h3 class="sub-heading">about us</h3>
    <h1 class="heading">why choose us?</h1>
    <div class="row">
      <div class="image">
        <img src="nnnnn.png" alt="" />
      </div>

      <div class="content">
        <h3>Best food in the country</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse,
          pariatur ipsum. Cumque fugiat voluptatibus ut perferendis iusto iste
          labore, deserunt ipsum tenetur accusamus consequuntur corporis
          asperiores similique ratione porro laborum?
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea,
          quibusdam? A itaque quia voluptates? Veritatis explicabo vero
          dolores commodi unde? Iste itaque vitae ipsa non iure? Atque natus
          laborum laboriosam.
        </p>
        <div class="icons-container">
          <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <span>free delivery</span>
          </div>
          <div class="icons">
            <i class="fas fa-dollar-sign"></i>
            <span>easy payment</span>
          </div>
          <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 service</span>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- About section end........ -->


  <!-- Menu section -->

  <section class="menu" id="menu">

    <h3 class="sub-heading">our menu</h3>
    <h1 class="heading">today's special food</h1>

    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="burger3.jpg" alt="">
          <a href="" class="fas fa-heart"></a>

        </div>
        <div class="content">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>

          </div>
          <h3>Delicious food</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, corrupti?</p>
          <a href="" class="btn">add to cart</a>
          <span class="price">$99.7</span>

        </div>

      </div>


      <div class="box">
        <div class="image">
          <img src="burger3.jpg" alt="">
          <a href="" class="fas fa-heart"></a>

        </div>
        <div class="content">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>

          </div>
          <h3>Delicious food</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, corrupti?</p>
          <a href="" class="btn">add to cart</a>
          <span class="price">$99.7</span>

        </div>

      </div>



      <div class="box">
        <div class="image">
          <img src="burger3.jpg" alt="">
          <a href="" class="fas fa-heart"></a>

        </div>
        <div class="content">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>

          </div>
          <h3>Delicious food</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, corrupti?</p>
          <a href="" class="btn">add to cart</a>
          <span class="price">$99.7</span>

        </div>

      </div>



      <div class="box">
        <div class="image">
          <img src="burger3.jpg" alt="">
          <a href="" class="fas fa-heart"></a>

        </div>
        <div class="content">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>

          </div>
          <h3>Delicious food</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, corrupti?</p>
          <a href="" class="btn">add to cart</a>
          <span class="price">$99.7</span>

        </div>

      </div>



      <div class="box">
        <div class="image">
          <img src="burger3.jpg" alt="">
          <a href="" class="fas fa-heart"></a>

        </div>
        <div class="content">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>

          </div>
          <h3>Delicious food</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, corrupti?</p>
          <a href="" class="btn">add to cart</a>
          <span class="price">$99.7</span>

        </div>

      </div>



      <div class="box">
        <div class="image">
          <img src="burger3.jpg" alt="">
          <a href="" class="fas fa-heart"></a>

        </div>
        <div class="content">
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>

          </div>
          <h3>Delicious food</h3>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus, corrupti?</p>
          <a href="" class="btn">add to cart</a>
          <span class="price">$99.7</span>

        </div>

      </div>


    </div>


  </section>




  <!-- Menu section end -->


  <!-- Review section  -->

  <section class="review" id="review">
    <h3 class="sub-heading">customer's review </h3>
    <h1 class="heading">what they say</h1>





  </section>


  <!-- Review section end  -->


  <!-- Order section -->


  <section class="order" id="order">

    <h3 class="sub-heading">order now </h3>
    <h1 class="heading">free and fast</h1>

    <form action="" method="post">
      <div class="inputbox">

        <div class="input">

          <span>your name</span>

          <input type="text" name="name" placeholder="enter your name">


        </div>


        <div class="input">

          <span>your number</span>

          <input type="number" name="phone" placeholder="enter your number">


        </div>

        <div class="input">

          <span>Your order</span>

          <input type="text" name="food" placeholder="your order">


        </div>

        <div class="input">

          <span>additional food</span>

          <input type="text" name="afood" placeholder="extra with food">


        </div>

      </div>

      <div class="inputbox">



        <div class="input">

          <span>your address</span>

          <textarea name="adddress" id="adddress" placeholder="Enter you address" cols="30" rows="10"></textarea>

        </div>

        <div class="input">

          <span>your message</span>

          <textarea name="message" id="message" placeholder="Enter you address" cols="30" rows="10"></textarea>

        </div>


      </div>
      <span style="color: red; font-size: 1.5rem;"><?php echo $error ?> </span> <br>

      <input type="submit" value="order now" name="order" class="btn">

    </form>



  </section>


  <!-- Order section end -->

  <!-- footer -->

  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>location</h3>
        <a href="">Pakistan</a>
        <a href="">India</a>
        <a href="">United kingdom</a>
        <a href="">France</a>
        <a href="">Germany</a>
      </div>
      <div class="box">
        <h3>quick links</h3>
        <a href="">home</a>
        <a href="">dishes</a>
        <a href="">order</a>
        <a href="">review</a>
        <a href="">about</a>
        <a href="">menu</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="">+92-23-42323</a>
        <a href="">+429-876576677</a>
        <a href="">abc@gmail.com</a>
        <a href="">LAhore pakistan</a>

      </div>

      <div class="box">
        <h3>Follow us</h3>
        <a href="">Facbook</a>
        <a href="">Twitter</a>
        <a href="">Intsagram</a>
        <a href="">TikTok</a>

      </div>

    </div>
    <div class="credit">copyright @ 2023 <span>WEB ENINEERS</span></div>

  </section>





  <script src="scripttt.js"></script>

  <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>