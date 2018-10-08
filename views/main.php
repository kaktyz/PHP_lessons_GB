<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <script src="js/jquery-3.3.1.js"></script>
    <!--    <script defer src="/js/fontawesome-free-5.0.6/svg-with-js/js/fontawesome-all.min.js"></script> -->
    <link rel="stylesheet" href="<?=TEMPLATES_DIR?>css/style.css">
    <script src="<?=TEMPLATES_DIR?>js/main.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="js/Bascket.js"></script>
</head>
<body>
<header class="conteiner">
        <div class="header_left">
            <div class="brand">
                <a href="main.php"> <img src="img/brand.png" alt="brand">
                    <h7>bran<span id="color_D">d</span></h7>
                </a>
            </div>
            <div class="sear4">
                <a class="browse_link" href="#">
                    <h4>Browse</h4> <i class="fas fa-sort-down"></i> </a>
                <div class="sear4_input">
                    <input type="text" placeholder="Search for Item...">
                    <button class="sear4_input_button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
        <div class="header_right">
            <div class="backet">
                <a href=""><img src="img/basket.svg" alt="basket"></a>
            </div>
            <div class="my_acc">
                <a href="#">
                    <h4 id="my_acc_txt">My Account</h4> <img id="my_acc_down_arrow" src="img/down_arrow.png" alt="arrow down"> </a>
            </div>
        </div>
    </header>
    <div id="basket_wrapper" class="conteiner"></div>
    <nav>
    <ul class="conteiner menu_nav">
      <li class="menu_nav_a"><a href="main.php" class="menu_nav_a" id="border_nav">home</a></li>
      <li class="menu_man menu_nav_a"> <a href="#">man</a>
        <div class="mega_menu_man">
          <div class="arrtop"></div>
          <div class="mega_menu_man_flex">
            <h4>man</h4>
            <ul>
              <li><a href="Product.php" class="mega_menu_man_links">Product</a></li>
              <li><a href="#" class="mega_menu_man_links">Tops</a></li>
              <li><a href="#" class="mega_menu_man_links">Sweaters</a></li>
              <li><a href="#" class="mega_menu_man_links">Coats</a></li>
              <li><a href="#" class="mega_menu_man_links">Blazers</a></li>
              <li><a href="#" class="mega_menu_man_links">Denim</a></li>
              <li><a href="#" class="mega_menu_man_links">Pants</a></li>
              <li><a href="#" class="mega_menu_man_links">Shorts</a></li>
              <li><a href="#" class="mega_menu_man_links">Accessories</a></li>
            </ul>
          </div>
          <div class="mega_menu_man_flex">
            <h4>man</h4>
            <ul>
              <li><a href="#" class="mega_menu_man_links">Dresses</a></li>
              <li><a href="#" class="mega_menu_man_links">Tops</a></li>
              <li><a href="#" class="mega_menu_man_links">Sweaters</a></li>
              <li><a href="#" class="mega_menu_man_links">Coats</a></li>
              <li>
                <a href="#"><img src="img/man_in_nav.png" alt="man"></a>
              </li>
            </ul>
          </div>
          <div class="mega_menu_man_flex">
            <h4>man</h4>
            <ul>
              <li><a href="#" class="mega_menu_man_links">Dresses</a></li>
              <li><a href="#" class="mega_menu_man_links">Tops</a></li>
              <li><a href="#" class="mega_menu_man_links">Sweaters</a></li>
              <li><a href="#" class="mega_menu_man_links">Coats</a></li>
              <li><a href="#" class="mega_menu_man_links">Blazers</a></li>
              <li><a href="#" class="mega_menu_man_links">Denim</a></li>
              <li><a href="#" class="mega_menu_man_links">Pants</a></li>
            </ul>
          </div>
        </div>
      </li>
      <li class="menu_nav_a"><a href="Single_page.php">women</a></li>
      <li class="menu_kids menu_nav_a"> <a href="#" class="menu_kids menu_nav_a">kids</a>
        <div class="mega_menu_kids">
          <div class="arrtop"></div>
          <div class="mega_menu_kids_flex">
            <h4>kids</h4>
            <ul>
              <li><a href="#" class="mega_menu_kids_links">Dresses</a></li>
              <li><a href="#" class="mega_menu_kids_links">Tops</a></li>
              <li><a href="#" class="mega_menu_kids_links">Sweaters</a></li>
              <li><a href="#" class="mega_menu_kids_links">Coats</a></li>
              <li><a href="#" class="mega_menu_kids_links">Blazers</a></li>
              <li><a href="#" class="mega_menu_kids_links">Denim</a></li>
              <li><a href="#" class="mega_menu_kids_links">Pants</a></li>
              <li><a href="#" class="mega_menu_kids_links">Shorts</a></li>
              <li><a href="#" class="mega_menu_kids_links">Accessories</a></li>
            </ul>
          </div>
          <div class="mega_menu_kids_flex">
            <h4>kids</h4>
            <ul>
              <li><a href="#" class="mega_menu_kids_links">Dresses</a></li>
              <li><a href="#" class="mega_menu_kids_links">Tops</a></li>
              <li><a href="#" class="mega_menu_kids_links">Sweaters</a></li>
              <li><a href="#" class="mega_menu_kids_links">Coats</a></li>
              <li><a href="#" class="mega_menu_kids_links">Blazers</a></li>
              <li><a href="#" class="mega_menu_kids_links">Denim</a></li>
            </ul>
          </div>
          <div class="mega_menu_kids_flex">
            <h4>kids</h4>
            <ul>
              <li><a href="#" class="mega_menu_kids_links">Dresses</a></li>
              <li><a href="#" class="mega_menu_kids_links">Tops</a></li>
              <li><a href="#" class="mega_menu_kids_links">Sweaters</a></li>
            </ul>
          </div>
        </div>
      </li>
      <li class="menu_nav_a"><a href="#" class="menu_nav_a">accoseriese</a></li>
      <li class="menu_nav_a"><a href="#" class="menu_nav_a">featured</a></li>
      <li class="menu_nav_a"><a href="Chekout.php" class="menu_nav_a">Chekout</a></li>
    </ul>
  </nav>
    <main>
        <div class="banner">
            <div class="banner_txt conteiner">
                <h1>the brand</h1>
                <h2>of luxerious <span id="fash">fashion</span></h2> </div>
        </div>
        <div class="img_blocks conteiner">
            <div class="img_blocks_left">
                <a href="#">
                    <div class="HD_man">
                        <div class="HD_man_txt">
                            <h3>HOT DEAL</h3>
                            <h2>FOR MEN</h2> </div>
                    </div>
                </a>
                <a href="#">
                    <figure class="HD_acc">
                        <figurecaption class="HD_acc_txt">
                            <h3>LUXIROUS & trendy</h3>
                            <h2>ACCESORIES</h2> </figurecaption>
                    </figure>
                </a>
            </div>
            <div class="img_blocks_right">
                <a href="#">
                    <figure class="HD_wman">
                        <figurecaption class="HD_wman_txt">
                            <h3>30% OFFER</h3>
                            <h2>WOMEN</h2> </figurecaption>
                    </figure>
                </a>
                <a href="#">
                    <figure class="HD_kid">
                        <figurecaption class="HD_kid_txt">
                            <h3>NEW ARRIVALS</h3>
                            <h2>WFOR KIDS</h2> </figurecaption>
                    </figure>
                </a>
            </div>
        </div>
        <div class="fet_items">
            <h2>Fetured Items</h2>
            <h4>Shop for items based on what we featured in this week</h4> </div>
        <div class="products conteiner">
            <div class="product_1">
                <a href="#" class="product_1_link"> <img class="product_1_img" src="img/product_1.png" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3></div>
                    <div class="product_prise">
                        <h3>$52.00</h3></div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="1" data-price="52"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="1"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
            <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/product_2.png" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$62.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="2" data-price="62"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="2"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
            <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/product_3.png" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$72.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="3" data-price="72"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="3"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
            <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/product_4.png" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$72.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="4" data-price="72"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="4"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
            <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/product_5.png" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$82.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="5" data-price="82"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="5"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
            <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/product_6.png" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$92.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="6" data-price="92"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="6"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
            <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/product_7.png" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$42.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="7" data-price="42"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="7"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
            <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/product_8.png" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$22.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="8" data-price="22"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="8"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
        </div>
        <div class="all_prod">
            <a href="#">
                <div class="all_prod_txt">
                    <h3>Browse All Product</h3></div> <img class="arrow_right" src="img/arrow_right.png" alt="arrow"> </a>
        </div>
        <div class="w_offer conteiner">
            <div class="w_offer_img">
                <h1>30% <span id="offer_id" >OFFER</span></h1>
                <h2>FOR WOMEN</h2> </div>
            <div class="offer_descr">
                <div class="deliv"> <img src="img/deliv_car.png" alt="delivery">
                    <div class="offer_descr_deliv_descr">
                        <h4>Free Delivery</h4>
                        <h5>Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</h5> </div>
                </div>
                <div class="deliv"> <img src="img/sales_w_offer.png" alt="sales">
                    <div class="offer_descr_sales_descr">
                        <h4>Sales & discountsy</h4>
                        <h5>Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</h5> </div>
                </div>
                <div class="deliv"> <img src="img/krown.png" alt="quality">
                    <div class="offer_descr_quality_descr">
                        <h4>Quality assurance</h4>
                        <h5>Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</h5> </div>
                </div>
            </div>
        </div>
        <section class="slider_plus_subscribe">
            <div class="slider_plus_subscribe_BG">
                <div class="slider_plus_subscribe_flex conteiner">
                    <article class="slider">
                        <figure class="slider"> <img class="slider_img" src="img/slider.png" alt="slider">
                            <figcaption class="slider_figcaption">
                                <h5>"Vestibuulum quis porttitor dui! Quisque viverra nunc mi, a ouvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium"</h5>
                                <div class="slider_caption">
                                    <h4>Bin Burhan</h4>
                                    <h7>Dhaka, BD</h7>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="subscribe">
                        <h3>SUBSCRIBE</h3>
                        <h4>FOR OUR NEWLETTER AND PROMOTION</h4>
                        <div class="subscribe_input_flex">
                            <input class="subscribe_input" type="email" placeholder="Enter Your Email"> <a href="#">Subscribe</a> </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="bot_nav conteiner">
            <div class="brand_discr ">
                <div class="brand">
                    <a href="#"> <img src="img/brand.png" alt="brand">
                        <h7>bran<span id="color_D">d</span></h7>
                    </a>
                </div>
                <h7> Objectively transition extensive data rather than cross functional solutions. Monotonectally syndicate multidiscipinary materials before go forward benefits. Intrinsicly syndicate an explanded array of processes and cross-unit partnerships. </h7>
            </div>
            <nav class="company"> <a href="#"><h4>COMPANY</h4></a>
                <ul class="company_ul">
                    <a href="#">
                        <li>Home</li>
                    </a>
                    <a href="#">
                        <li>Shop</li>
                    </a>
                    <a href="#">
                        <li>About</li>
                    </a>
                    <a href="#">
                        <li>How it Works</li>
                    </a>
                    <a href="#">
                        <li>Contact</li>
                    </a>
                </ul>
            </nav>
            <nav class="company"> <a href="#"><h4>INFORMATION</h4></a>
                <ul class="company_ul">
                    <a href="#">
                        <li>Terms & condition</li>
                    </a>
                    <a href="#">
                        <li>Privacy Policy</li>
                    </a>
                    <a href="#">
                        <li>How To By</li>
                    </a>
                    <a href="#">
                        <li>How To Sell</li>
                    </a>
                    <a href="#">
                        <li>Promotion</li>
                    </a>
                </ul>
            </nav>
            <nav class="company"> <a href="#"><h4>SHOP CATEGORY</h4></a>
                <ul class="company_ul">
                    <a href="#">
                        <li>Men</li>
                    </a>
                    <a href="#">
                        <li>Women</li>
                    </a>
                    <a href="#">
                        <li>Child</li>
                    </a>
                    <a href="#">
                        <li>Apparel</li>
                    </a>
                    <a href="#">
                        <li>Brows All</li>
                    </a>
                </ul>
            </nav>
        </section>
    </main>
    <footer>
        <div class="footer_conteiner conteiner">
            <div class="copywrite">
                <p>© 2017 Brand All Rights Reserved.</p>
            </div>
            <div class="footer_img"> <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-linkedin-in"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-google-plus-g"></i></a> </div>
        </div>
    </footer>
</body>
</html>