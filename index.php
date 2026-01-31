<?php
// PHP file converted from HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugar whisk</title>

    <!-- swiper link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- cdn icon link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file  -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

        :root{
            --black: #1B1722;
            --white : #F0F0F0;
            --box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
        *{
            font-family: 'Quicksand', sans-serif;
            margin: 0; padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: capitalize;
            transition: .2s linear;
        }
        html{
            font-size: 62.5%;   
            overflow-x: hidden;
            scroll-padding-top: 7rem;
            scroll-behavior: smooth;
        }
        html::-webkit-scrollbar{
            width: .8rem;
        }
        html::-webkit-scrollbar-track{
            background: transparent;
        }
        html::-webkit-scrollbar-thumb{
            background-color: var(--white);
            border-radius: 5rem;
        }

        .header{
            top: 0;right: 0;left: 0;
            background-color: var(--white);
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            padding: 1.4rem 7%;
            z-index: 999;
        }
        .header .logoContent{
            display: flex;
            align-items: center;
        }
        .header .logoContent .logo img{
            height: 4rem;
        }
        .header .logoContent .logoName {
            color: var(--black);
            font-size: 2rem;
            font-weight: bolder;
        }

        .header .navbar a{
            font-size: 2rem;
            margin-right: 3rem;
            color: var(--black);
            font-weight: bold;
        }
        .header .navbar a:hover{
            border-bottom: .1rem solid var(--black);
            padding-bottom: .4rem;
        }
        .header .icon i{
            font-size: 2rem;
            margin-right: 2rem;
            color: var(--black);
            cursor: pointer;
        }

        .header .search{
            display: none;
            top: 100%;
            margin: 1.5rem 7%;
            background-color: transparent;
            width: 50%;
            right: 0;
            height: 5rem;
            position:  absolute;

        }
        .header .search input{
            width: 100%;
            height: 100%;
            font-size: 1.5rem;
            background-color: var(--white);
            color: var(--black);
            margin-right: 7%;
            border-radius: 1rem;
            padding: 0.5rem 1rem;
            box-shadow: var(--box-shadow);
        }
        .header .search.active{
            display: inline-block;
        }
        #menu-bar{
            display: none;
        }


        .home {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: url(images/back.png) no-repeat;
            background-size: cover;
            background-position: center center;
        }
        .home .homeContent{
            width: 50%;
            float: left;
            text-align: center;
            padding: 4rem;
        }
        .home .homeContent h2{
            font-size: 7rem;
            font-weight: bolder;
            margin-bottom: 2rem;
            line-height: 7rem;
            color: var(--black);
            text-shadow: var(--box-shadow);
        }
        .home .homeContent p{
            font-size: 1.8rem;
            line-height: 2;
            margin-bottom: 2rem;
        }
        .home .homeContent .home-btn{
            height: 3rem;
        }
        .home .homeContent .home-btn button{
            font-size: 1.8rem;
            background-color: var(--black);
            color: var(--white);
            border-radius: .7rem;
            padding: .7rem 2.4rem;
            cursor: pointer;
        }
        .home .homeContent .home-btn button:hover{
            font-size: 2rem;
        }
        section{
            padding: 2rem 7%;
        }
        .heading{
            text-align: center;
            font-size: 2.6rem;
            margin-bottom: 3rem;
            color: var(--black);
        }

        .product .product-row{
            margin-bottom: 5rem;
            display: flex;
            align-items: center;
        }
        .product .product-row .box{
            display: flex;
            flex-direction: column;
            width: 50rem;
            background-color: var(--white);
            align-items: center;
            text-align: center;
            padding: 2rem;
            gap: 1.5rem;
            border-radius: 3rem;
            margin-right: 3rem;
        }
        .product .product-row .img img{
            height: 100%;
            width: 100%;
        }
        .product .product-row .img img:hover{
            transform: scale(1.1);
        }
        .product .product-row .content {
            margin-bottom: 4rem;
        }
        .product .product-row .product-content h3{
            font-size: 4rem;
            color: var(--black);
        }
        .product .product-row .product-content p{
            font-size: 1.5rem;
            line-height: 1.6;
            color: var(--black);
        }
        .product .product-row .product-content .orderNow{
            height: 3rem;
            margin-top: 2rem;
            margin-bottom: 3rem;
        }
        .product .product-row .product-content .orderNow button{
            font-size: 1.8rem;
            background-color: var(--black);
            color: var(--white);
            border-radius: .7rem;
            padding: .7rem 2rem;
            cursor: pointer;
        }
        .product .product-row .product-content .orderNow button:hover{
            font-size: 2rem;
        }

        .blogs{
            background: url(images/backGround.png) no-repeat;
            background-size: cover;
            background-position: center center;
        }
        .blogs  .blogs-row .box {
            display: flex;
            align-items: center;
            background-color: var(--white);
            flex-wrap: wrap;
        }
        .blogs .blogs-row .box .img{
            flex: 1 1 45rem;
        }
        .blogs .blogs-row .box .img img{
            width: 100%;
            padding: 5rem;
        }
        .blogs .blogs-row .box .content{
            flex: 1 1 45rem;
            padding: 2rem;
        }
        .blogs .blogs-row .box .content h3{
            font-size: 3.5rem;
            color: var(--black);
            text-shadow: var(--box-shadow);

        }
        .blogs .blogs-row .box .content p{
            font-size: 1.6rem;
            color: var(--black);
            padding: 1rem 0;
            line-height: 1.8;
            
        }
        .blogs .blogs-row .box .content a{
            font-size: 2rem;
            cursor: pointer;
        }
        .blogs .blogs-row .box .content a:hover{
            color: var(--black);
            text-shadow: var(--box-shadow);
        }
        
        .newsletter{
            background: url(images/new.jpg) no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
        }
        .newsletter form{
            max-width: 45rem;
            text-align: center;
            padding: 5rem 0;
        }
        .newsletter form h3{
            font-size: 3rem;
            color: var(--white);
            padding-bottom: .7rem;
        }
        .newsletter form .box{
            width: 100%;
            margin: .7rem 0;
            padding: 1rem 1.2rem;
            color: var(--black);
            border-radius: .5rem;
        }
        .newsletter form .box2{
            width: 30%;
            font-size: 1.5rem;
            margin-top: 1rem;
            padding: .5rem .5rem;
            color: var(--black);
            background: var(--white);
            border-radius: 3rem;
            cursor:pointer;
        }
        .newsletter form .box2:hover{
            color: var(--white);
            background-color: var(--black);
            outline: .1rem solid var(--white);
        }

        .review .review-row{
            display: flex;
            flex-direction: column ;
            align-items: center;
            
        }
        .review .review-row .box{
            width: 50%; 
            margin-bottom: 3rem;
            padding: 3rem;
            border-radius: 3rem;
            background-color: var(--white);
            box-shadow: var(--box-shadow);
        }

        .review .review-row .box .client-review{
            margin-bottom: 3rem;
        }
        .review .review-row .box .client-review p{
            text-align: center;
            font-size: 2.5rem;
            line-height: 1.5;
        }
        .review .review-row .box .client-info{
            display: flex;
            align-items: center;
        }
        .review .review-row .box .client-info .img{
            padding-right: 3rem;
        }
        .review .review-row .box .client-info .img img{
            width: 7rem;
            height: 7rem;
            clip-path: circle(50% at 50% 50%);
        }

        .review .review-row .box .client-info .clientDetailed h3{
            font-size: 2.5rem;

        }
        .review .review-row .box .client-info .clientDetailed p{
            font-size: 1.5rem;
        }

        .footer {
            background: url(images/backGround.png) no-repeat;
            background-size: cover;
            background-position: center center;
        }
        .footer .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
            gap: 1.5rem;
            padding: 2rem 1rem;
        }
        .footer .box-container .mainBox .content{
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }
        .footer .box-container .mainBox .content h1{
            font-size: 2rem;
            color: var(--black);
        }
        .footer .box-container .mainBox p{
            font-size: 1.7rem;
            line-height: 1.3;
            margin-bottom: 2rem;
        }
        .footer .box-container .box h3{
            font-size: 2.2rem;
            color: var(--black);
            padding: 1rem 0;
        }
        .footer .box-container .box a{
            display: block;
            font-size: 1.6rem;
            color: var(--black);
            padding: 1rem 0;
        }
        .footer .box-container .box a i{
            padding-right: .5rem;
            color: var(--black);
        }
        .footer .box-container .box a:hover i{
            padding-right: 2rem;
        }

        .footer .share{
            padding: 1rem 0;
            text-align: center;
        }
        .footer .share a{
            height: 4rem;
            width: 4rem;
            line-height: 4rem;
            font-size: 2rem;
            color: var(--white);
            background: var(--black);
            margin: 0 .3rem;
            border-radius: 50%;

        }
        .footer .share a:hover{
            background: var(--white);
            color: var(--black);
        }
        .footer .credit{
            font-size: 2rem;
            margin-top: 2rem;
            padding-bottom: 2rem;
            color: var(--black);
            text-align: center;
            
        }

        .swiper-pagination-bullet{
            background-color: var(--black);
        }
        .swiper-button-next{
            color: var(--black);
        }
        .swiper-button-prev{
            color: var(--black);
        }


        /* media queries for web responsive */

        @media (max-width:991px){
            html{
                font-size: 55%;
            }
            .header{
                padding: 1.3rem 3rem;
            }
            .home .homeContent{
                margin-left: 0;
                width: 80%;
            }
        }

        @media (max-width:768px) {
            #menu-bar{
                display: inline-block;
            }
            .header .navbar{
                position: absolute;
                top: 100%;
                right: -100%;
                width: 25rem;
                background-color: var(--white);
                height: 80vh;
            }
            .header .navbar.active{
                right: 0;
            }
            .header .navbar a{
                display: block;
                font-size: 2rem;
                color: black;
                margin: 1.5rem;
            }

            .home .homeContent{
                margin-left: 0;
                width: 90%;
            }
        }

        @media (max-width:600px){
            html{
                font-size: 50%;
            }
        }
    </style>
</head>

<body>

    <!-- header section start here  -->
    <header class="header">
        <div class="logoContent">
            <a href="#" class="logo"><img src="images/logo.png" alt=""></a>
            <h1 class="logoName">Cake by Tani's </h1>
        </div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#product">product</a>
            <a href="#blogs">blogs</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icon">
            <i class="fas fa-search" id="search"></i>
            <i class="fas fa-bars" id="menu-bar"></i>
        </div>

        <div class="search">
            <input type="search" placeholder="search...">
        </div>
    </header>
    <!-- header section end here  -->

    <!-- home section start here  -->
    <section class="home" id="home">
        <div class="homeContent">
            <h2>Delicious Cake for Everyone </h2>
            <p>Sweetness from Tani's Kitchen</p>
            <div class="home-btn">
                <a href="#"><button>see more</button></a>
            </div>
        </div>
    </section>

    <!-- home section end here  -->

    <!-- product section start here  -->
    <section class="product" id="product">
        <div class="heading">
            <h2>Our Exclusive Products</h2>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/chocolatecake.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Chocolate Cake</h3>
                        <p>Decadent chocolate chip cake loaded with gooey, melt-in-your-mouth chocolate chunks in every bite.</p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/marshmellow.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Marshmellow cake</h3>
                        <p>Marshmallow magic in every soft, sweet bite!
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/oreocake.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Oreo Cake</h3>
                        <p>Rich, creamy layers loaded with crunchy Oreo goodness!
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/rosieeengaged.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Rosieeengaged Cake</h3>
                        <p>Elegant rose-infused cake, perfect for a romantic engagement celebration.
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="swiper product-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/kidspecial.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Kidspecial Cake</h3>
                        <p>Fun, colorful, and full of sweet surprises—made just for little smiles!
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/cherrycake.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Cherry Cake</h3>
                        <p>Soft, buttery cake bursting with juicy cherry flavor in every bite!</p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/blueberrycake.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Blueberry Cake</h3>
                        <p>Moist and fluffy with bursts of fresh blueberry bliss!
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/cutecatcake.png" alt="">
                    </div>
                    <div class="product-content">
                        <h3>Cute Cat Cake</h3>
                        <p>Adorably sweet, this cute cat cake is purr-fect for any celebration!
                        </p>
                        <div class="orderNow">
                            <button>Order Now </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- product section end here  -->

    <!-- blogs section start here  -->
    <section class="blogs" id="blogs">

        <div class=" swiper blogs-row">
            <div class="swiper-wrapper">
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="images/blog-img1.png" alt="">
                    </div>
                    <div class="content">
                        <h3> Vanilla Cupcakes </h3>
                        <p> Classic vanilla cupcakes that are light, fluffy, and full of rich vanilla flavor.  
                            Topped with smooth, creamy frosting and a touch of sweetness in every bite.  
                            Perfect for parties, celebrations, or just a little everyday indulgence!  
                            Simple, elegant, and absolutely irresistible.</p>
        
                        <a href="#blogs" class="btn">learn more</a>
                    </div>
                </div>
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="images/blog-img2.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Caramel cake </h3>
                        <p>Indulge in the rich, velvety layers of caramel cake, perfectly balanced with a hint of sweetness.  
                            Each bite melts in your mouth, offering a luxurious blend of soft cake and smooth caramel frosting.  
                            A delightful treat for caramel lovers, ideal for any occasion.  
                            Decadent, buttery, and irresistibly delicious!</p>
                        <a href="#blogs" class="btn">learn more</a>
                    </div>
                </div>
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="images/blog-img3.png" alt="">
                    </div>
                    <div class="content">
                        <h3>kisses chocolate cake </h3>
                        <p>A dreamy chocolate cake filled with rich layers of smooth frosting and topped with sweet Hershey's Kisses.  
                            Each bite is a decadent blend of chocolatey goodness and a touch of sweetness.  
                            Perfect for chocolate lovers, this cake is a true indulgence!  
                            Sweet, irresistible, and filled with love in every slice.</p>
                        <a href="#blogs" class="btn">learn more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>


        </div>
    </section>

    <!-- blogs section ends here  -->

    <!-- newsletter section start here  -->

    <section class="newsletter">
        <form action="">
            <h3>subscribe for latest update</h3>
            <input type="email" name="" placeholder="enter your email" id="" class="box">
            <input type="button" value="subscribe" class="box2">
        </form>
    </section>
    <!-- newsletter section ends here  -->

    <!-- review section start here  -->
    <section class="review" id="review">
        <div class="heading">
            <h2>client review</h2>
        </div>


        <div class=" swiper review-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>"I had an amazing experience ordering from this cake website!  Highly recommend for anyone looking for quality and creativity in their cakes!"
                        </p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="images/Helly.png" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Helly Patel</h3>
                            <p>UI / UX designer</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>
"The cakes are absolutely divine! Perfectly baked with incredible flavors, I'm definitely coming back for more!"
                           </p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="images/priyanka.png" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Priyanaka Tiwari</h3>
                            <p>Microbiologist</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>"A fantastic experience from start to finish! The cakes are not only delicious but also beautifully crafted."
                            </p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="images/prachi.png" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Prachi Patel</h3>
                            <p>Student</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="client-review">
                        <p>
                        "Delicious cakes with the perfect blend of flavor and creativity. Highly recommend for any special occasion!"
                            </p>
                    </div>
                    <div class="client-info">
                        <div class="img">
                            <img src="images/vedangpatel.png" alt="">
                        </div>
                        <div class="clientDetailed">
                            <h3>Vedang Patel</h3>
                            <p>Hacker</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>

            </div>
        </div>
    </section>
    <!-- review section ends here  -->

    <!-- footer section start here  -->

    <footer class="footer" id="contact">
        <div class="box-container">
            <div class="mainBox">
                <div class="content">
                    <a href="#"><img src="images/logo.png" alt=""></a>
                    <h1 class="logoName"> Sweet Cake </h1>
                </div>

                <p>Sweetness from Tani's Kitchen</p>

            </div>
            <div class="box">
                <h3>Quick link</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i>Home</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>product</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>blogs</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>review</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>contact</a>

            </div>
            <div class="box">
                <h3>Extra link</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i>Account info</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>order item</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>privacy policy</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>payment method</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>our  services</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"> <i class="fas fa-phone"></i>+91 7984307408</a>
                <a href="#"> <i class="fas fa-envelope"></i>raniktiwari13@gmail.com</a>

            </div>

        </div>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>
        <div class="credit">
            created by <span>Rani and Tanvi </span> |all rights reserved ! 
        </div>
    </footer>

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file  -->
    <script>
        let navbar = document.querySelector('.navbar');
        document.querySelector('#menu-bar').onclick=() =>{
            navbar.classList.toggle('active');
        }

        let search = document.querySelector('.search');
        document.querySelector('#search').onclick=() =>{
            search.classList.toggle('active');
        }

        var swiper = new Swiper(".product-row", {
            spaceBetween: 30,
            loop:true,
            centeredSlides:true,
            autoplay:{
                delay:9500,
                disableOnInteraction:false,
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            breakpoints: {
              0: {
                slidesPerView: 1,
              },
              768: {
                slidesPerView: 2,
              },
              1024: {
                slidesPerView: 3,
              },
            },
          });
        var swiper = new Swiper(".blogs-row", {
            spaceBetween: 30,
            loop:true,
            centeredSlides:true,
            autoplay:{
                delay:9500,
                disableOnInteraction:false,
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            navigation:{
                nextE1 :".swiper-button-next",
                prevE1 :".swiper-button-prev",
            },
            breakpoints: {
              0: {
                slidesPerView: 1,
              },
              768: {
                slidesPerView: 1,
              },
              1024: {
                slidesPerView: 1,
              },
            },
          });

          var swiper = new Swiper(".review-row", {
            spaceBetween: 30,
            loop:true,
            centeredSlides:true,
            autoplay:{
                delay:9500,
                disableOnInteraction:false, 
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            breakpoints: {
              0: {
                slidesPerView: 1,
              },
              768: {
                slidesPerView: 2,
              },
              1024: {
                slidesPerView: 3,
              },
            },
          });
    </script>
</body>
</html>