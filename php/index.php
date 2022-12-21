<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="../paw-solid.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nixpets</title>

    <!--custom css files-->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/imgSlider.css">
    <link rel="stylesheet" href="../css/category.css">
    <link rel="stylesheet" href="../css/footerPage.css">


    <!--font awesome custom link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>

<body onLoad="showSlides()">
    <header>

        <!-----------Start nav_bar------------>
        <div class="wrapper">

            <!----------------------top nav_bar----------------------->
            <div class="top_nav">

                <!----------------------top left nav_bar---------------------->
                <div class="left">
                    <div class="logo">
    
                            <a href="#">
                                <svg viewBox="0 0 512 512" class="paw"><path d="M226.5 92.9c14.3 42.9-.3 86.2-32.6 96.8s-70.1-15.6-84.4-58.5s.3-86.2 32.6-96.8s70.1 15.6 84.4 58.5zM100.4 198.6c18.9 32.4 14.3 70.1-10.2 84.1s-59.7-.9-78.5-33.3S-2.7 179.3 21.8 165.3s59.7 .9 78.5 33.3zM69.2 401.2C121.6 259.9 214.7 224 256 224s134.4 35.9 186.8 177.2c3.6 9.7 5.2 20.1 5.2 30.5v1.6c0 25.8-20.9 46.7-46.7 46.7c-11.5 0-22.9-1.4-34-4.2l-88-22c-15.3-3.8-31.3-3.8-46.6 0l-88 22c-11.1 2.8-22.5 4.2-34 4.2C84.9 480 64 459.1 64 433.3v-1.6c0-10.4 1.6-20.8 5.2-30.5zM421.8 282.7c-24.5-14-29.1-51.7-10.2-84.1s54-47.3 78.5-33.3s29.1 51.7 10.2 84.1s-54 47.3-78.5 33.3zM310.1 189.7c-32.3-10.6-46.9-53.9-32.6-96.8s52.1-69.1 84.4-58.5s46.9 53.9 32.6 96.8s-52.1 69.1-84.4 58.5z" fill ="currentcolor" /></svg> <span>nixpet</span>
                            </a>
                    
                    </div>

                    <!----------------------Search bar---------------------->
                    <div class="search_wrap">
                        <div class="search_box">
                            <input type="text" name="" placeholder="Search" id="" class="search_text">
                            <div class="btn">
                                <div class="search_icon">
                                    <svg  viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352c79.5 0 144-64.5 144-144s-64.5-144-144-144S64 128.5 64 208s64.5 144 144 144z" fill ="currentcolor" /></svg>
                                </div>
                            </div>
                        </div>   
                    </div> 
                </div>
                
                <!----------------------top right nav_bar----------------------->
                <div class="right">
                    <div class="shopping_cart">
                        <a href="#">
                            <svg  viewBox="0 0 576 512"><path d="M24 0C10.7 0 0 10.7 0 24S10.7 48 24 48H76.1l60.3 316.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24-10.7 24-24s-10.7-24-24-24H179.9l-9.1-48h317c14.3 0 26.9-9.5 30.8-23.3l54-192C578.3 52.3 563 32 541.8 32H122l-2.4-12.5C117.4 8.2 107.5 0 96 0H24zM176 512c26.5 0 48-21.5 48-48s-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48zm336-48c0-26.5-21.5-48-48-48s-48 21.5-48 48s21.5 48 48 48s48-21.5 48-48z" fill ="currentcolor"/></svg>
                        </a>
                    </div>

                    <div class="user">
                        <a href="../php/registerForm.php">
                            <svg viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" fill ="currentcolor"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        
            <!-----------------------bottom nav_bar---------------------->
            <div class="bottom_nav">
                <ul>
                    <li><a href="#Shop">Shop</a></li>
                    <li><a href="#Pharmacy">Pharmacy</a></li>
                    <li><a href="#Brand">Brand</a></li>
                    <li><a href="#services">services</a></li>
                    <li><a href="#contact">contact</a></li>
                </ul>
            </div>
        </div>
        <!--End nav_bar-->

    </header>

    <main>

        <!--Image Slider Start-->
        <script src="../js/imgSlider.js"></script>
        <div class="img-slider">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">

                    <div class="slide first">
                        <img src="../images/01.jpg" alt="">
                    </div>

                    <div class="slide">
                        <img src="../images/02.jpg" alt="">
                    </div>

                    <div class="slide">
                        <img src="../images/03.jpg" alt="">
                    </div>

                    <div class="slide">
                        <img src="../images/04.jpg" alt="">
                    </div>

                    <!--automatic navigation start-->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>

                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>

            </div>
        </div>
        <!--Image Slider End-->

        <!--Category Slider Start-->
        <script src="../js/category.js" defer></script>
        <div class="category" >
            <div class="category-wrapper">
                <div class="carousel">
                    <ul class="imgHeader">
        
                        <i id="left" class="fa-solid fa-angle-left"></i>
                        <!--Image 01-->
                        <li class="item">
                            <div class="box">
                                <div class="slide-img carousel">
                                    <img src="../categoryImg/dog.jpg" alt="">
                                    <div class="overlay">
                                        <a href="../php/dogProducts.php" class="buy-btn">View Shop</a>
                                    </div>
                                </div>
                                <!--<div class="detail-box">
                                    <div class="type">
                                        <a href="#">Rebbed Cardigan</a>
                                        <span> Noe Arrival</span>
                                    </div>
                                    <a href="#" class="price">$23</a>
                                </div>-->
                            </div>
                        </li>
                        <!--End Image 01-->
        
                        <!--Image 02-->
                        <li class="item">
                            <div class="box">
                                <div class="slide-img carousel">
                                    <img src="../categoryImg/cat.jpg" alt="">
                                    <div class="overlay">
                                        <a href="../php/catProducts.php" class="buy-btn">View Shop</a>
                                    </div>
                                </div>
                                <!--<div class="detail-box">
                                    <div class="type">
                                        <a href="#">Rebbed Cardigan</a>
                                        <span> Noe Arrival</span>
                                    </div>
                                    <a href="#" class="price">$23</a>
                                </div>-->
                            </div>
                        </li>
                        <!--End Image 02-->
        
                        <!--Image 03-->
                        <li class="item">
                            <div class="box">
                                <div class="slide-img carousel">
                                    <img src="../categoryImg/fish.jpg" alt="">
                                    <div class="overlay">
                                        <a href="../php/fishProducts.php" class="buy-btn">View Shop</a>
                                    </div>
                                </div>
                                <!--<div class="detail-box">
                                    <div class="type">
                                        <a href="#">Rebbed Cardigan</a>
                                        <span> Noe Arrival</span>
                                    </div>
                                    <a href="#" class="price">$23</a>
                                </div>-->
                            </div>
                        </li>
                        <!--End Image 03-->
        
                        <!--Image 04-->
                        <li class="item">
                            <div class="box">
                                <div class="slide-img carousel">
                                    <img src="../categoryImg/birds.jpg" alt="">
                                    <div class="overlay">
                                        <a href="../php/birdProducts.php" class="buy-btn">View Shop</a>
                                    </div>
                                </div>
                                <!--<div class="detail-box">
                                    <div class="type">
                                        <a href="#">Rebbed Cardigan</a>
                                        <span> Noe Arrival</span>
                                    </div>
                                    <a href="#" class="price">$23</a>
                                </div>-->
                            </div>
                        </li>
                        <!--End Image 04-->
        
                        <!--Image 05-->
                        <li class="item">
                            <div class="box">
                                <div class="slide-img carousel">
                                    <img src="../categoryImg/smallPet.jpg" alt="">
                                    <div class="overlay">
                                        <a href="../php/smallPetProducts.php" class="buy-btn">View Shop</a>
                                    </div>
                                </div>
                                <!--<div class="detail-box">
                                    <div class="type">
                                        <a href="#">Rebbed Cardigan</a>
                                        <span> Noe Arrival</span>
                                    </div>
                                    <a href="#" class="price">$23</a>
                                </div>-->
                            </div>
                        </li>
                        <!--End Image 05-->
        
                        <!--Image 06-->
                        <li class="item">
                            <div class="box">
                                <div class="slide-img carousel">
                                    <img src="../categoryImg/reptile.jpg" alt="">
                                    <div class="overlay">
                                        <a href="../php/reptileProducts.php" class="buy-btn">View Shop</a>
                                    </div>
                                </div>
                                <!--<div class="detail-box">
                                    <div class="type">
                                        <a href="#">Rebbed Cardigan</a>
                                        <span> Noe Arrival</span>
                                    </div>
                                    <a href="#" class="price">$23</a>
                                </div>-->
                            </div>
                        </li>
                        <!--End Image 06-->
        
                        <!--Image 07-->
                        <li class="item">
                            <div class="box">
                                <div class="slide-img carousel">
                                    <img src="../categoryImg/horse.jpg" alt="">
                                    <div class="overlay">
                                        <a href="../php/horse_products.php" class="buy-btn">View Shop</a>
                                    </div>
                                </div>
                                <!--<div class="detail-box">
                                    <div class="type">
                                        <a href="#">Rebbed Cardigan</a>
                                        <span> Noe Arrival</span>
                                    </div>
                                    <a href="#" class="price">$23</a>
                                </div>-->
                            </div>
                        </li>
                        <!--End Image 07-->
        
                        <!--Image 08-->
                        <li class="item">
                            <div class="box">
                                <div class="slide-img carousel">
                                    <img src="../categoryImg/parentShop.jpg" alt="">
                                    <div class="overlay">
                                        <a href="../php/parentShopProducts.php" class="buy-btn">View Shop</a>
                                    </div>
                                </div>
                                <!--<div class="detail-box">
                                    <div class="type">
                                        <a href="#">Rebbed Cardigan</a>
                                        <span> Noe Arrival</span>
                                    </div>
                                    <a href="#" class="price">$23</a>
                                </div>-->
                            </div>
                        </li>
                        <!--End Image 08-->
                        <i id="right" class="fa-solid fa-angle-right"></i>
        
                    </ul>
                </div>
            </div>
        </div>
		<!--Category Slider End-->
		
    </main>



    <footer class="footer">

        <div class="footer-container">
            <div class="row">

                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment option</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

    </footer>

</body>
</html>