<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fiori Restaurant</title>
  <meta name="keywords" content="Fiori, Italian cuisine, NYC, dinner, vegetarian, wine tastings, online reservations">
  <meta name="description" content="Fiori Restaurant is where traditional Italian cuisine meets modern style. Located in the heart of NYC, we offer exquisite dinners, a rich selection of vegetarian dishes, and regular wine tastings. Our restaurant is the perfect place for a romantic dinner or a gathering with friends. We invite you to make online reservations.">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <!--navbar-->
        <nav class="navbar navbar-dark navbar-background navbar-expand-md ">
            <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="ml-4 mr-2"  alt="Fiori Restaurant logo" > </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu">
                <span class="navbar-toggler-icon" ></span>
            </button>

            <div class="collapse navbar-collapse" id="main-menu">
                <ul class="navbar-nav ml-auto mr-3"> 
                    <li class="nav-item mx-3"> <a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item mx-3"> <a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item mx-3"> <a class="nav-link" href="menu.html">Menu</a></li>
                    <li class="nav-item mx-3"> <a class="nav-link" href="reservations.html">Reservations</a></li>
                    <li class="nav-item mx-3"> <a class="nav-link" href="events.html">Events</a></li>
                    <li class="nav-item mx-3"> <a class="nav-link" href="catering.html">Catering</a></li>
                    <li class="nav-item mx-3"> <a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </nav>
        <!--navbar-->
    </header>
<main>
    
            <?php
    $guests_number=$_POST['number-of-guests'];
    $plates_number=$_POST['number-of-plates'];
    $menu_type=$_POST['menu-type'];
    $date=$_POST['date'];
    $price=0;

    switch ($menu_type) {
        case 'standard':
            $price = 10;
            break;
        case 'vegetarian':
            $price = 12;
            break;
        case 'vegan':
            $price = 15;
            break;
        case 'glutenFree':
            $price = 17;
            break;
        default:
            echo "Invalid menu type selected.";
            exit;
    }



    $sum=$price*$guests_number*$plates_number;


echo<<<END
    <style>
    .back-link{
        text-decoration: none;
        color: var(--light-color);
        padding: 8px 16px;
        font-size: 18px;
        font-weight: bold;
    }
    .back-link:hover {
        color: black;
    }
    </style>



    <div class="centered-content">
        <h2>Order summary</h2><br/>
        <table  border="1" cellpadding="10" cellspacing="0"
        <tr>
            <td>Number of guests </td> 
            <td>$guests_number</td>
        </tr>
        <tr>
            <td>Number of plates</td>
            <td>$plates_number</td>
        </tr>
        <tr>
            <td>Menu type</td> 
            <td>$menu_type</td>
        </tr>
        <tr>
            <td>Date</td> 
            <td>$date</td>
        </tr>
        <tr>
            <td>Summary</td> 
            <td>$sum USD</td>
        </tr>
        </table>
        <br /> <a href="catering.html" class="back-link">Back</a>
    </div>
END;
   ?>


   
</main>
    <footer>
        <div class="container mt-5">
            <div class="row align-items-start ">
                <hr>
    
                <div class="col-lg-4 col-md-12 d-flex justify-content-center align-items-center">
                    <h5 class="mb-4" style="letter-spacing: 2px">Contact</h5>
                    <p><i class="fa-solid fa-house mr-3"></i>123 Broadway Avenue, NY 10003, US</p>
                    <p><i class="fa-solid fa-phone mr-3"></i>(000)123-345</p>
                    <p><i class="fa-solid fa-envelope mr-3"></i>fiori@gmail.com</p>
                </div>

                <div class="col-lg-4 col-md-12 d-flex justify-content-center align-items-center"  >
                    <h5 style="letter-spacing: 2px">Opening hours</h5>
                    <table class="table" style="color: var(--light-color) ; border-color: var(--light-color)">
                        <tbody>
                          <tr>
                            <td>Mon - Fri:</td>
                            <td>4pm - 10pm</td>
                          </tr>
                          <tr>
                            <td>Sat - Sun:</td>
                            <td>1pm - 1am</td>
                          </tr>
                        </tbody>
                      </table>
                </div>


                <div class="col-lg-4 col-md-12 d-flex justify-content-center align-items-center flex-row flex-lg-column">
                    <h5 class="mb-4" style="letter-spacing: 2px">Follow us</h5>
                    <a href="" target="_blank" class="text-reset mb-3 mx-3">
                        <i class="fab fa-facebook-f fa-2x"></i>
                    </a>
                    <a href="" target="_blank" class="text-reset mb-3 mx-3">
                        <i class="fa-brands fa-instagram fa-2x"></i>
                    </a>
                    <a href="" target="_blank" class="text-reset mx-3">
                        <i class="fa-brands fa-twitter fa-2x"></i>
                    </a>
                </div>

            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            <p>© 2024 Copyright:</p>
          </div>

    </footer>
</body>
</html>