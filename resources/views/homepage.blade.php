<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plant e-commerce website</title>

    <!--cdn swiper link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!--font awesome cdn link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    
<header>

    <div class = "header-1">
        <div class="share">
            <span>Follow us : </span>
            <a href="#" class = "fab fa-facebook-f"></a>
            <a href="#" class = "fab fa-twitter"></a>
            <a href="#" class = "fab fa-instagram"></a>
            <a href="#" class = "fab fa-linkedin"></a>
        </div>
    
        <div class="call">
            <span>Call us : </span>
            <a href="#">+123-456-789</a>  
        </div>
       
    </div>

    <div class="header-2">

        <a href="#" class="logo"><i class="fa-solid fa-leaf"></i> plantGA </a>
        {{-- <a href="#" class="logo"> <i class="fas fa-seedling"></i> plantGA </a> --}}
       
        <form action="" class="search-bar-container">
          <input type="search" id="search-bar" placeholder="search here...">
          <label for="search-bar" class="fas fa-search"></label>
        </form>

    </div>

    <div class="header-3">
        <a href="#" class="logo" id="header3-logo"> <i class="fa-solid fa-leaf"></i> plantGA </a>

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#category">Category</a>
            <a href="#product">Product</a>
            <a href="#deal">Deal</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="icons">
            <a href="#" class = "fas fa-shopping-cart"></a>
            <a href="#" class = "fas fa-heart"></a>
            <a href="/loginPage" class = "fas fa-user-circle" id="user-icon"></a>
        </div>
    </div>

</header>

<!--Header section ends-->

<!--Home section starts-->

<section class="home" id="home">
    
    <div class="swiper-container home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">

                <div class="box" style="background: url(assets/images/home-slider4.jpg);">
                    <div class="content">
                        <span>Upto %75 Off</span>
                        <h3>Plant Big Sale Special Offer</h2>
                        <a href="#" class="btn">shop now</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">

                <div class="box" style="background: url(assets/images/homeslider3.png);">
                    <div class="content">
                        <span>Upto %45 Off</span>
                        <h3>Plant Make People Happy</h3>
                        <a href="#" class="btn">shop now</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">

                <div class="box" style="background: url(assets/images/home-slider-1.jpg);">
                    <div class="content">
                        <span>Upto %65 Off</span>
                        <h3>Decorate Your Home Now</h3>
                        <a href="#" class="btn">shop now</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!--Home seciton ends-->

<!--banner section starts-->

<section class="banner-container">

    <div class="banner">
        <img src="assets/images/banner1.jpg" alt="">
        <div class="content">
            <span>New arrivals</span>
            <h3>House Plants</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="assets/images/banner2.jpg" alt="">
        <div class="content">
            <span>New arrivals</span>
            <h3>Office Plants</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>
</section>

<!--banner section ends-->


<!--Category section starts-->

<section class="category" id="category">

    <h1 class="heading"> Shop By Category</h1>

    <div class="box-container">

        <div class="box">
            <img src="assets/images/card-example.jpg" alt="">
            <div class="content">
                <h2>Plants For House</h2>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/card2.jpg" alt="">
            <div class="content">
                <h2>Plants For Office</h2>
                <a href="#" class="btn">shop now</a>
            </div>


        </div>

        <div class="box">
            <img src="assets/images/card3.jpg" alt="">
            <div class="content">
                <h2>Monstera</h2>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/images/card4.jpg" alt="">
            <div class="content">
                <h2>Plerandra</h2>
                <a href="#" class="btn">shop now</a>
            </div>
        </div>

    </div>
</section>

<!--Category section ends-->

<!--Product Section Starts-->

    <section class="product" id="product">
        <h1 class="heading">New products</h1>

        <div class="box-container">

            <div class="box">
                <span class="discount">-10%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
    
                <img src="assets/images/discount-1.jpg" alt="">
                <h3>Latest Plants</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="quantity">
                    <span> Quantity: </span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">£14.70 <span>£18.20</span></div>
                <a href="#" class="btn">Add To Cart</a>
            </div>
    
            <div class="box">
                <span class="discount">-7%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
    
                <img src="assets/images/discount-2.jpg" alt="">
                <h3>Latest Plants</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="quantity">
                    <span> Quantity: </span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">£14.70 <span>£18.20</span></div>
                <a href="#" class="btn">Add To Cart</a>
            </div>
    
            <div class="box">
                <span class="discount">-15%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
    
                <img src="assets/images/discount-3.jpg" alt="">
                <h3>Latest Plants</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="quantity">
                    <span> Quantity: </span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">£14.70 <span>£18.20</span></div>
                <a href="#" class="btn">Add To Cart</a>
            </div>
    
            <div class="box">
                <span class="discount">-30%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
    
                <img src="assets/images/discount-4.jpg" alt="">
                <h3>Latest Plants</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="quantity">
                    <span> Quantity: </span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">£14.70 <span>£18.20</span></div>
                <a href="#" class="btn">Add To Cart</a>
            </div>
    
            <div class="box">
                <span class="discount">-4%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
    
                <img src="assets/images/discount-5.jpg" alt="">
                <h3>Latest Plants</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="quantity">
                    <span> Quantity: </span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">£14.70 <span>£18.20</span></div>
                <a href="#" class="btn">Add To Cart</a>
            </div>
    
            <div class="box">
                <span class="discount">-50%</span>
                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-share"></a>
                    <a href="#" class="fas fa-eye"></a>
                </div>
    
                <img src="assets/images/discount-6.jpg" alt="">
                <h3>Latest Plants</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="quantity">
                    <span> Quantity: </span>
                    <input type="number" min="1" max="100" value="1">
                </div>
                <div class="price">£14.70 <span>£18.20</span></div>
                <a href="#" class="btn">Add To Cart</a>
            </div>


        </div>
       
    </section>
<!--Product Section Ends-->

<!--Deal Section Starts-->

<section class="deal" id="deal">
    <h1 class="heading">Deal Of The Day</h1>

    <div class="row">

        <div class="image">
            <img src="assets/images/happy-woman-holding-speech-bubble-presenting-against-white-background.png" alt="">
        </div>

        <div class="content">
            <h3 class="title">Don't Miss The Deal</h3>
            <p>There are many variator randomised words which don't look even slightly believable. </p>
            <div class="count-down">
                <div class="box">
                    <h3 id="days">00</h3>
                    <span>Day</span>       
                </div>
                <div class="box">
                    <h3 id="hours">00</h3>
                    <span>Hour</span>
                </div>
                <div class="box">
                    <h3 id="minutes">00</h3>
                    <span>Minute</span>
                </div>
                <div class="box">
                    <h3 id="seconds">00</h3>
                    <span>Second</span>
                </div>
            </div>

            <a href="#" class="btn">Check Out Deal</a>

        </div>
        
    </div>
</section>

<!--Deal Section Ends-->

<!--Icons section starts-->

<section class="icons-container">

    <div class="box">

        <div class="icon">
            <img src="assets/images/free-delivery_11153380.png" alt="">
            <div class="content">
                <h3>Free Shipping</h3>
                <p>Free Shipping On Order</p>
            </div>
        </div>
    
        <div class="icon">
            <img src="assets/images/secure-payment.png" alt="">
            <div class="content">
                <h3>Payment Secure</h3>
                <p>100% Secure Payment</p>
            </div>
        </div>
    
        <div class="icon">
            <img src="assets/images/money-back.png" alt="">
            <div class="content">
                <h3>100% Money Back</h3>
                <p>You've 30 Days To Return</p>
            </div>
        </div>
    
        <div class="icon">
            <img src="assets/images/technical-support.png" alt="">
            <div class="content">
                <h3>Support 24/7</h3>
                <p>Contact Us Anytime</p>
            </div>
        </div>

    </div>  

</section>
<!--Icons secion ends-->

<!--Contact section starts-->
<section class="contact" id="contact">
    <h1 class="heading">Get In Touch</h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12024.011339172574!2d29.005811248240395!3d41.11262915808746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab5bf15c34913%3A0x19571e96a2eaf2f6!2zTWFzbGFrLCBTYXLEsXllci_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1724751427498!5m2!1str!2str" 
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


        <form action="">
            <div class="inputBox">
                <input type="text" required>
                <label>Name</label>
            </div>
    
            <div class="inputBox">
                <input type="text" required>
                <label>Email</label>
            </div>
    
            <div class="inputBox">
                <input type="text" required>
                <label>Number</label>
            </div>
    
            <div class="inputBox">
                <textarea required name="" id="" cols="30" rows="10"></textarea>
                <label>Messages</label>
            </div>

            <input type="submit" value="Send Message" class="btn">

        </form>
    </div>
</section>
<!--Contact section ends-->

<!--Footer Section Starts-->
""
<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>About Us</h3>
            <p>Lorem ipsum type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>   
        </div>

        <div class="box">
            <h3>Branch Locations</h3>
            <a href="">Turkiye</a>
            <a href="">USA</a>
            <a href="">Japan</a> 
            <a href="">France</a> 
        </div>
        
        <div class="box">
            <h3>Quick Links</h3>
            <a href="">Home</a>
            <a href="">Category</a>
            <a href="">Product</a> 
            <a href="">Linkedin</a> 
            <a href="">Contact</a> 
        </div>

        <div class="box">
            <h3>Follow Us</h3>
            <a href="">Facebook</a>
            <a href="">Twitter</a>
            <a href="">Instagram</a> 
        </div>
    </div>

    <h1 class="credit">Created By <span> Shireen </span> | All Rights Reserved!</h1>
</section>

<!--Footer Section Ends-->

<!--cdn swiper js file link-->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
 <!--custom js file link-->
<script src="/js/script.js"></script>

</body>
</html>