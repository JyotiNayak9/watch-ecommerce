<!DOCTYPE html>
<html lang="en">

<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/17ed295021.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="main">
        <section class="navigation">
            <div class="navbar">
                    <h2 class="logo"> WaTch LaNe</h2>               
                <div class="menu">
                    <ul>
                        <li> <a href="index.html">Home</a></li>
                        <li> <a href="about1.html">About Us</a></li>
                        <li> <a href="topproducts.html">Top Product</a></li>
                        <li> <a href="hotproduct.html">Hot Product</a></li>
                        <li> <a href="mycart.php"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a></li>
                        <li> <a href=""><i class="fa-solid fa-user"></i></a></li>
                    </ul>
                </div>

                <div class="search">
                    <input class="srch" type="search" name="" placeholder="Type To Text ">
                    <a href="#"> <button class="btn">Search</button> </a>
                </div>
            </div>
            <div class="content">
                    <div class="title">
                        <h1>Get a classy watch on <br><span>WatchLane!</span></h1>
                    </div>
                    <div class="editor">
                        <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque
                            atque brbrbrbrbrb quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus
                            a quae totam ipsa illum minus laudantium?

                        </p>
                    </div> 
            <button class="cn"><a href="#">JOIN US</a></button>
        </div>
            <div class="form">
                <h2>Login Here</h2>
                <input type="email" name="email" placeholder="Enter your text">
                <input type="password" name="" placeholder="Enter password">
                <button class="btnn"> <a href="#">Login</a></button>

                <p class="link">Don't Have an account <br>
                    <a href="#">Sign up </a>here
                </p>
                <p class="liw">Log in with</p>

                <div class="icon">
                    <a href="#"><i class="fa-brands fa-facebook fa-2x"></i></a>
                    <a href="#"> <i class="fa-brands fa-instagram fa-2x"></i></a>
                    <a href="#"> <i class="fa-brands fa-google fa-2x"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a>
                </div>
            </div>
        </section>
        <section class="section-2">
            <div class="inner-container-2">
                <h1>Our Top Picks</h1>
                <div class="cards-container">
                    <form action="mycart.php" method="post">
                    <div class="card">
                        <img class="card-image" src="images/Casio.jpg" alt="">
                        <h2>Fossil Version 3 - Unisex - Leather strap</h2>
                        <h3>$20,000</h3>
                        <button class="card-btn">More</button>
                        <button class="card-btn" name="cart">Add To Cart</button>
                        <input type="hidden" name="Item_name" value="Fossil Version 3">
                        <input type="hidden" name="Price" value="20000">
                    </div>
                </form>
                <form action="mycart.php" method="post">
                    <div class="card">
                        <img class="card-image" src="images/fasttracksmart.jpg" alt="">
                        <h2>Timex-Modern Smart Watch</h2>
                        <h3>$20,000</h3>
                        <button class="card-btn">More</button>
                        <button class="card-btn" name="cart">Add To Cart</button>
                        <input type="hidden" name="Item_name" value="Timex-Modern Smart watch">
                        <input type="hidden" name="Price" value="15000">
                    </div>
                </form>
                   <form action="mycart.php" method="post">
                    <div class="card">
                        <img class="card-image" src="images/Fossil.jpg" alt="">
                        <h2>Modern Women Classical Watch</h2>
                        <h3>$20,000</h3>
                        <button class="card-btn">More</button>
                        <button class="card-btn" name="cart">Add To Cart</button>
                        <input type="hidden" name="Item_name" value="Modern women classical">
                        <input type="hidden" name="Price" value="12000">
                    </div>
                </form>
                <form  action="mycart.php" method="post">
                    <div class="card">
                        <img class="card-image" src="images/fossildigital.jpg" alt="">
                        <h2>Kids Version - 3 Gen z Watch </h2>
                        <h3>$20,000</h3>
                        <button class="card-btn">More</button>
                        <button class="card-btn" name="cart">Add To Cart</button>
                        <input type="hidden" name="Item_name" value="Kids Version 3">
                        <input type="hidden" name="Price" value="5000">
                    </div>
                </form>
                </div>
            </div>
        </section>
        <section id="banner">
            <h4>Offers!!</h4>
            <h2>Upto <span>25% Off</span> - On First Purchase</h2>
            <button>Explore Now</button>
        </section>
    </div>  
    <section class="review">
        <h2>Customer review</h2>
        <form class="rev" action="review.php" method="post">
            <div class="formgroup">
                <label>Username</label>
                <input type="text" name="username" class="formcont">
            </div>
            <div class="formgroup">
                <label>Contact Email</label>
                <input type="text" name="email" class="formcont">
            </div>
            <div class="formgroup">
                <label>Comments</label>
                <textarea name="comment" class="formcont"></textarea>
            </div>
            <button type="submit" class="btnn" value="submit">Submit</button>               
        </form>
    </section>
    <footer>
        <div class="col">
           
            <h4>Contact</h4>
            <p><strong>Address:</strong> Balkumari, lalitpur</p>
            <p><strong>Phone:</strong> 01-2222222</p>
            <p><strong>Hours:</strong>9:00 - 18:00, Sun - Fri</p>
            <p><strong>Email:</strong>watchlane124@gmail.com</p>
        </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="index.html">Home</a>
            <a href="about1.html">About us</a>
            <a href="topproducts.html">Top Products</a>
            <a href="hotproduct.html">Hot Product</a>
        </div>
        <div class="col">
            <h4>My account</h4>
            <a href="#">Sign in</a>
            <a href="#">View cart</a>
            <a href="#">Help</a>
        </div>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="i">
                <a href="#"><i class="fa-brands fa-facebook fa-1x"></i></a>
                <a href="#"> <i class="fa-brands fa-instagram fa-1x"></i></a>
                <a href="#"> <i class="fa-brands fa-twitter fa-1x"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin fa-1x"></i></a>
                <a href="#"><i class="fa-brands fa-pinterest" ></i></a>
        </div>
    </footer>
</body>

</html>