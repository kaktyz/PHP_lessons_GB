<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Product</title>
  <link rel="stylesheet" href="css/style.css">
  <!--
    <script defer src="/js/fontawesome-free-5.0.6/svg-with-js/js/fontawesome-all.min.js"></script> -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <script src="js/jquery-3.3.1.js"></script>
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
        <a href="basket.html"><img src="img/basket.svg" alt="basket"></a>
      </div>
      <div class="my_acc">
        <a href="#">
          <h4 id="my_acc_txt">My Account</h4> <img id="my_acc_down_arrow" src="img/down_arrow.png" alt="arrow down"> </a>
      </div>
    </div>
  </header>
<!--  Корзина-->
  <div id="basket_wrapper" class="conteiner"></div>
  <nav>
    <ul class="conteiner menu_nav">
      <li class="menu_nav_a"><a href="main.php" class="menu_nav_a">home</a></li>
      <li class="menu_man menu_nav_a"> <a href="#" id="border_nav">man</a>
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
  <div class="new_arrivals_BG">
    <section class="new_arrivals conteiner">
      <h1>NEW ARRIVALS</h1>
      <article class="bread_crumb">
        <ul>
          <li><a href="#" class="bread_crumb_link">HOME</a></li>
          <li><a href="#" class="bread_crumb_link">MEN</a></li>
          <li><a href="#" class="bread_crumb_link_color">NEW ARRIVALS</a></li>
        </ul>
      </article>
    </section>
  </div>
  <main class="main_product conteiner">
    <nav class="left_nav">
      <ul>
        <li><a href="#" class="left_nav_link"><h4>CATEGORY</h4><i class="fas fa-caret-down"></i></a>
          <ul class="left_nav_in">
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Bags</a></li>
            <li><a href="#">Denim</a></li>
            <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
            <li><a href="#">Jackets &amp; Coats</a></li>
            <li><a href="#">Pants</a></li>
            <li><a href="#">Polos</a></li>
            <li><a href="#">Shirts</a></li>
            <li><a href="#">Shoes</a></li>
            <li><a href="#">Shorts</a></li>
            <li><a href="#">Sweaters &amp; Knits</a></li>
            <li><a href="#">T-Shirts</a></li>
            <li><a href="#">Tanks</a></li>
          </ul>
        </li>
        <li><a href="#" class="left_nav_link"><h4>BRAND</h4><i class="fas fa-caret-down"></i></a></li>
        <li><a href="#" class="left_nav_link"><h4>DESIGNER</h4><i class="fas fa-caret-down"></i></a></li>
      </ul>
    </nav>
    <section class="main_right">
      <article class="top_filter">
        <div class="top_filter_top">
			  <div class="tranding_now">
				<h4>TRANDING NOW</h4>
				<ul>
				  <li class="tranding_now_link">
					<h6><a href="#">Bohemian</a></h6></li>
				  <li class="tranding_now_link">
					<h6><a href="#">Floral</a></h6></li>
				  <li class="tranding_now_link">
					<h6><a href="#">Lace</a></h6></li>
				  <li class="tranding_now_link">
					<h6><a href="#">Floral</a></h6></li>
				  <li class="tranding_now_link">
					<h6><a href="#">Lace</a></h6></li>
				  <li class="tranding_now_link">
					<h6><a href="#">Bohemain</a></h6></li>
				</ul>
			  </div>


			<div class="size">
			  <h4>SIZE</h4>
			  <ul>
				<li><input type="checkbox">XXS</li>
				<li><input type="checkbox">XS</li>
				<li><input type="checkbox">S</li>
				<li><input type="checkbox">M</li>
				<li><input type="checkbox">L</li>
				<li><input type="checkbox">XL</li>
				<li><input type="checkbox">XXL</li>
			  </ul>
			</div>
			<div class="price">
				<h4>PRICE</h4>	
			</div>
        </div>
        <div class="top_filter_bot">
        	<div class="top_filter_bot_sort_div">
				<a href="#" class="top_filter_bot_sort">Sort By</a>
				<a href="#" class="top_filter_bot_name">Name<i class="fas fa-caret-down"></i></a>
        	</div>
        	<div class="top_filter_bot_show_div">
				<a href="#" class="top_filter_bot_show">Show</a>
				<a href="#" class="top_filter_bot_numbers">09<i class="fas fa-caret-down"></i></a>
        	</div>
        </div>
      </article>
      <article class="cards">
			   <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/Products/Prod_img_1.jpg" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3></div>
                    <div class="product_prise">
                        <h3>$52.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="321" data-price="52"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                 <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="321" data-price="52"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
                
            </div>
               <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/Products/Prod_img_2.jpg" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$62.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="322" data-price="62"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="322"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
               <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/Products/Prod_img_3.jpg" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$72.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="323" data-price="72"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                 <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="323"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
               <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/Products/Prod_img_4.jpg" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$82.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="324" data-price="82"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="324"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
               <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/Products/Prod_img_5.jpg" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$92.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="325" data-price="92"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="325"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>                
            </div>
               <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/Products/Prod_img_6.jpg" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$102.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="326" data-price="102"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="326"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
               <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/Products/Prod_img_7.jpg" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$202.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="327" data-price="202"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="327"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
               <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/Products/Prod_img_8.jpg" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$302.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="328" data-price="302"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="328"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
               <div class="product_1">
                <a href="#" class="product_1_link"> <img src="img/Products/Prod_img_9.jpg" alt="Mango  People  T-shirt">
                    <div class="product_dscr">
                        <h3>Mango  People  T-shirt</h3> </div>
                    <div class="product_prise">
                        <h3>$402.00</h3> </div>
                </a>
                <div class="add_to_cart">
                    <a href="123" class="add_to_cart_link" data-id="329" data-price="402"> <img class="add_to_cart_img" src="img/add_2_cart.png" alt="add_2_cart">
                        <h5>Add To Cart</h5> </a>
                </div>
                <div class="add_to_cart remove_from_cart">
                    <a href="123" class="remove_from_cart_link" data-id="329"> <i class="fa fa-ban" aria-hidden="true"></i>
                        <h5>Remove from cart</h5> </a>
                </div>
            </div>
      </article>
      <article class="bot_nav">
          <div class="bot_nav_pager_current">
              <ul>
                  <li><a href="#" class="bot_nav_pager_current_links"><i class="fas fa-angle-left"></i></a></li>
                  <li><a href="#" class="bot_nav_pager_current_links">1</a></li>
                  <li><a href="#" class="bot_nav_pager_current_links">2</a></li>
                  <li><a href="#" class="bot_nav_pager_current_links">3</a></li>
                  <li><a href="#" class="bot_nav_pager_current_links">4</a></li>
                  <li><a href="#" class="bot_nav_pager_current_links">5</a></li>
                  <li><a href="#" class="bot_nav_pager_current_links">6</a></li>
                  <li class="no_P"><a href="#" class="bot_nav_pager_current_links">....20</a></li>
                  <li><a href="#" class="bot_nav_pager_current_links"><i class="fas fa-angle-right"></i></a></li>
              </ul>
          </div>
          <div class="link_view_all"><a href="#" class="link_view_all_link">View all</a></div>
      </article>
       </section>
  </main>
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
  <footer>
    <div class="footer_conteiner conteiner">
      <div class="copywrite">
        <p>© 2017 Brand All Rights Reserved.</p>
      </div>
      <div class="footer_img"> <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-linkedin-in"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-google-plus-g"></i></a>        </div>
    </div>
  </footer>

</body>
</html>
