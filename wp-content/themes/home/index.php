<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package home
 */

get_header();
?>

	<div class="sect">
	<div class="sect1">
	  	<div class="row">

		    <div class="col-lg-4 col-md-6 order-sm-1 order-md-1 order-1 order-lg-0">
		    	<div class="d-flex flex-column align-items-sm-center align-items-lg-start align-items-md-start">
		    		<div class="el1">
					 	<img src="<?php echo get_template_directory_uri();?>/img/user icon.png" id="user_icon">
					 	<span>HELLO, YOU CAN</span>
					 	<a class="login" href="#">LOGIN</a>
					 	<span> OR </span>  
					 	<button type="button" class="register">REGISTER</button>
					</div>
					<div class="el2">
					 	<p><img src="<?php echo get_template_directory_uri();?>/img/phone icon.png" id="phone_icon">
					 	<span>Customer Service : +88 888 888 888</span></p>
					</div>
				 	<form class="el3">
					  <input type="text" placeholder="SEARCH">
					  <button type="submit" id="button_serch"><img src="<?php echo get_template_directory_uri();?>/img/search icon.png" id="search_icon"></button>
					</form>
				</div>	
		    </div>
		    
		    <div class="d-flex col-lg-3 col-md-12 justify-content-center align-items-center"><img src="<?php echo get_template_directory_uri();?>/img/logo.png"></div>
		    
		    <div class="col-lg-5 col-md-6 order-md-1 order-sm-1 order-1">
		    	<div class="d-flex flex-column align-items-sm-center align-items-lg-end align-items-md-end">
			      	<div class="row justify-content-end">
			      		<div class="r_el1">
				    		<div class="col"><img src="<?php echo get_template_directory_uri();?>/img/wishlist icon.png" id="wishlist_icon">WISHLIST:4</div>
				    	</div>
				    	<div class="r_el2">
			    			<div class="col"><img src="<?php echo get_template_directory_uri();?>/img/cart icon.png" id="cart_icon">SHOPPING CART: <span style="color:#cd222a; font-weight: bold;">$ 345.00</span></div>
			    		</div>
			    	</div>

			    	<div class="row d-flex flex-md-row align-items-sm-center align-items-lg-end align-items-md-end">			
			    		<div class="col-md-6 col-lg-6 col-sm-6 ">
			    			<div class="good">
			    				<div class="good_img"><img src="<?php echo get_template_directory_uri();?>/img/placehold.png" id="placehold_icon"></div>
			    				<div class="good_text"><div class="good_text1">FLAT SHOES</div><div class="good_text2">$ 189.00</div></div>
			    				<div class="good_close"><img src="<?php echo get_template_directory_uri();?>/img/x.png" id="x_icon"></div>
			    			</div>

			    		</div>
			    		<div class="col-md-6 col-lg-6 col-sm-6 ">
			    			<div class="good">
			    				<div class="good_img"><img src="<?php echo get_template_directory_uri();?>/img/placehold.png" id="placehold_icon"></div>
			    				<div class="good_text"><div class="good_text1">FLAT SHOES</div><div class="good_text2">$ 189.00</div></div>
			    				<div class="good_close"><img src="<?php echo get_template_directory_uri();?>/img/x.png" id="x_icon"></div>
			    			</div>
			    		</div>
		    		</div>
	    		</div>
	    		<div class="d-flex flex-sm-column flex-lg-row flex-xl-row align-items-sm-center  align-items-md-end align-items-lg-end align-items-xl-end justify-content-xl-end justify-content-lg-end">
		    		<div class="col-auto" style="padding: 0 0;">
						<button id="btn_1"><img src="<?php echo get_template_directory_uri();?>/img/plus icon copy.png"> SHOW ALL PRODUCTS</button>
		    		</div>
		    		<div class="col-auto" style="padding: 0 0;">
						<button id="btn_2"><img src="<?php echo get_template_directory_uri();?>/img/checkout icon.png"> CHECK OUT</button>
		    		</div>
				</div>	
		    
		    </div>
		
		</div>	
	</div>
	<div class="sect2">
			<nav class="row justify-content-center">
	  			<a class="nav-link" href="#">JACKETS</a>
	  			<a class="nav-link" href="#">SWEATERS</a>
	  			<a class="nav-link" href="#">DRESSES</a>
	  			<a class="nav-link" href="#">SKIRTS</a>
	  			<a class="nav-link" href="#">PANTS</a>
	  			<a class="nav-link" href="#">SHORTS</a>
	  			<a class="nav-link" href="#">SHOES</a>
	  			<a class="nav-link" href="#">ACCESSORIES</a>
			</nav>
			<div class="line"></div>	
	</div>
	<div class="sect3">		
		
			<div class="row justify-content-center align-items-sm-center align-items-xl-end" style="margin: auto;">			
				<div class="col-lg-12 col-md-12 col-xl-6" style="padding-left: 0px; padding-right: 0px;">
					<div class="row justify-content-xl-end justify-content-sm-center">
						<div class="col-md-auto col-sm-auto" id="photo_1">
							<div id="el_photo_1">
								<div style="text-align: center; font-weight:bold; font-size: 30pt; ">MAY</div>
								<div style="text-align: center; font-size: 18pt; ">Collection</div>
								<button id="btn_el_photo_1" type="button" class="register">See Products</button>
							</div>
						</div>
						<div class="col-md-auto col-sm-auto">
							<div class="col" id="photo_4"><img src="<?php echo get_template_directory_uri();?>/img/4.png"></div>
							<div class="col" id="photo_2"><img src="<?php echo get_template_directory_uri();?>/img/2.png"></div>
						</div>
					</div>
				</div>
				<div class="d-flex flex-column justify-content-xl-start col-xl-6 col-lg-12 col-md-12 justify-content-md-center  align-items-md-center align-items-xl-start align-items-sm-center"style="padding-left: 0px; padding-right: 0px;">
					<div class="col-auto " id="photo_3">
						<div id="el_photo_3">
							<div style="text-align: center; font-weight:bold; font-size: 30pt; ">MAY</div>
							<div style="text-align: center; font-size: 18pt; ">Collection</div>
							<button id="btn_el_photo_3" type="button" class="register">See Products</button>
						</div>
					</div>
					<div class="col-auto" id="photo_5"><img src="<?php echo get_template_directory_uri();?>/img/5.png"></div>
				</div>
			</div>
					
	</div>
	<div class="sect4">
		<div class="row justify-content-center">			
			<div class="col-auto" id="FEATURED"><span style="font-weight: bold; font-size: 48pt;">FEATURED</span><img src="<?php echo get_template_directory_uri();?>/img/arrow down.png" style="margin-bottom: 25px; margin-left: 15px;"></div>
			<div class="col-auto" id="ARRIVALS"><span style="font-weight: lighter; font-size: 48pt;">ARRIVALS</span><img src="<?php echo get_template_directory_uri();?>/img/arrow down.png" style="margin-bottom: 25px; margin-left: 15px;"></div>		
		</div>
		<div style="text-align:center;"><span>“Whoever said money can’t buy happiness simply didn’t know WHERE TO SHOP”</span></div>
		
		<div class="products">
			<div class="row justify-content-center">
				<div id="container_box" class="col-auto"style="padding-left: 0px; padding-right: 0px;">
					<div class="box">
						<img src="<?php echo get_template_directory_uri();?>/img/pr1.png">
						<hr id="line2">
						<div class="pr_name">BLAZER SLIMFIT</div>
						<div class="pr_price">$279,00</div>
						<div class="cart_hover">
							<button type="button" class="btn_hover1">DETAIL</button>
							<button type="button" class="btn_hover2">ADD TO CART</button>
							<div class="hr_hover"></div>
							<div class="wishlist_hover"><img src="img/wishlist icon.png" id="wishlist_icon"><span>ADD TO WISHLIST</span></div>
						</div>
					</div>
				</div>
				<div id="container_box" class="col-auto"style="padding-left: 0px; padding-right: 0px;">
					<div class="box">
						<img src="<?php echo get_template_directory_uri();?>/img/pr2.png">
						<hr id="line2">
						<div class="pr_name">SLIM PANTS</div>
						<div class="pr_price">$279,00</div>
						<div class="cart_hover">
							<button type="button" class="btn_hover1">DETAIL</button>
							<button type="button" class="btn_hover2">ADD TO CART</button>
							<div class="hr_hover"></div>
							<div class="wishlist_hover"><img src="<?php echo get_template_directory_uri();?>/img/wishlist icon.png" id="wishlist_icon"><span>ADD TO WISHLIST</span></div>
						</div>
					</div>
				</div>
				<div id="container_box" class="col-auto"style="padding-left: 0px; padding-right: 0px;">
					<div class="box">
						<img src="<?php echo get_template_directory_uri();?>/img/pr3.png">
						<hr id="line2">
						<div class="pr_name">SWEATSHIRT</div>
						<div class="pr_price">$279,00</div>
						<div class="cart_hover">
							<button type="button" class="btn_hover1">DETAIL</button>
							<button type="button" class="btn_hover2">ADD TO CART</button>
							<div class="hr_hover"></div>
							<div class="wishlist_hover"><img src="<?php echo get_template_directory_uri();?>/img/wishlist icon.png" id="wishlist_icon"><span>ADD TO WISHLIST</span></div>
						</div>
					</div>
				</div>
				<div id="container_box" class="col-auto"style="padding-left: 0px; padding-right: 0px;">
					<div class="box">
						<img src="<?php echo get_template_directory_uri();?>/img/pr4.png">
						<hr id="line2">
						<div class="pr_name">FORMAL BLOUSE</div>
						<div class="pr_price">$279,00</div>
						<div class="cart_hover">
							<button type="button" class="btn_hover1">DETAIL</button>
							<button type="button" class="btn_hover2">ADD TO CART</button>
							<div class="hr_hover"></div>
							<div class="wishlist_hover"><img src="<?php echo get_template_directory_uri();?>/img/wishlist icon.png" id="wishlist_icon"><span>ADD TO WISHLIST</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center" style="padding-bottom: 30px;">
				<div id="container_box" class="col-auto"style="padding-left: 0px; padding-right: 0px;">
					<div class="box">
						<img src="<?php echo get_template_directory_uri();?>/img/pr5.png">
						<hr id="line2">
						<div class="pr_name">WOMEN ARMY PANTS</div>
						<div class="pr_price">$279,00</div>
						<div class="cart_hover">
							<button type="button" class="btn_hover1">DETAIL</button>
							<button type="button" class="btn_hover2">ADD TO CART</button>
							<div class="hr_hover"></div>
							<div class="wishlist_hover"><img src="<?php echo get_template_directory_uri();?>/img/wishlist icon.png" id="wishlist_icon"><span>ADD TO WISHLIST</span></div>
						</div>
					</div>
				</div>
				<div id="container_box" class="col-auto"style="padding-left: 0px; padding-right: 0px;">
					<div class="box">
						<img src="<?php echo get_template_directory_uri();?>/img/pr6.png">
						<hr id="line2">
						<div class="pr_name">SUMMER PANTS</div>
						<div class="pr_price">$279,00</div>
						<div class="cart_hover">
							<button type="button" class="btn_hover1">DETAIL</button>
							<button type="button" class="btn_hover2">ADD TO CART</button>
							<div class="hr_hover"></div>
							<div class="wishlist_hover"><img src="<?php echo get_template_directory_uri();?>/img/wishlist icon.png" id="wishlist_icon"><span>ADD TO WISHLIST</span></div>
						</div>
					</div>
				</div>
				<div id="container_box" class="col-auto"style="padding-left: 0px; padding-right: 0px;">
					<div class="box">
						<img src="<?php echo get_template_directory_uri();?>/img/pr7.png">
						<hr id="line2">
						<div class="pr_name">COLLAR CHIFFON</div>
						<div class="pr_price">$279,00</div>
						<div class="cart_hover">
							<button type="button" class="btn_hover1">DETAIL</button>
							<button type="button" class="btn_hover2">ADD TO CART</button>
							<div class="hr_hover"></div>
							<div class="wishlist_hover"><img src="<?php echo get_template_directory_uri();?>/img/wishlist icon.png" id="wishlist_icon"><span>ADD TO WISHLIST</span></div>
						</div>
					</div>
				</div>
				<div id="container_box" class="col-auto"style="padding-left: 0px; padding-right: 0px;">
					<div class="box">
						<img src="<?php echo get_template_directory_uri();?>/img/pr8.png">
						<hr id="line2">
						<div class="pr_name">SLIM JEANS</div>
						<div class="pr_price">$279,00</div>
						<div class="cart_hover">
							<button type="button" class="btn_hover1">DETAIL</button>
							<button type="button" class="btn_hover2">ADD TO CART</button>
							<div class="hr_hover"></div>
							<div class="wishlist_hover"><img src="i<?php echo get_template_directory_uri();?>/mg/wishlist icon.png" id="wishlist_icon"><span>ADD TO WISHLIST</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="more_product"  style="padding-top: 35px;">
			<a id="a_load_more_product" href="#"><img src="<?php echo get_template_directory_uri();?>/img/plus icon copy.png" style="filter: invert(1); width: 20px; padding-bottom: 6px;">
			LOAD MORE PRODUCTS</a>
		</div>
	</div>
	<div class="sect5">
		<div class="categori">
			<div class="categori_text">CATEGORI</div>
			<div class="categori_menu">
				<div class="row justify-content-center">
		  			<div class="col-auto"><a class="nav-link" href="#">JACKETS</a></div>
		  			<div class="col-auto"><a class="nav-link" href="#">T-SHIRTS</a></div>
		  			<div class="col-auto"><a class="nav-link" href="#">SKIRTS</a></div>
		  			<div class="col-auto"><a class="nav-link" href="#">PANTS</a></div>
		  			<div class="col-auto"><a class="nav-link" href="#">SHOES</a></div>
		  			<div class="col-auto"><a class="nav-link" href="#">ACCESSORIES</a></div>
				</div>
			</div>
		</div>
	</div>
	<div class="sect6">
		<div class="latest_viewed_text">
			<span>LATEST VIEWED</span>
		</div>
		<div class="latest_viewed_products">
			<div class="row justify-content-center">	
				<div class="col-auto"style="padding-left: 0px; padding-right: 0px;">
					<div class="box2">
						<img src="<?php echo get_template_directory_uri();?>/img/pr4.png">
						<hr id="line2">
						<div class="pr_name">FORMAL BLOUSE</div>
						<div class="pr_price">$279,00</div>
					</div>
				</div>			
				<div class="col-auto"style="padding-left: 0px; padding-right: 0px;">
					<div class="box2">
						<img src="<?php echo get_template_directory_uri();?>/img/pr4.png">
						<hr id="line2">
						<div class="pr_name">FORMAL BLOUSE</div>
						<div class="pr_price">$279,00</div>
					</div>
				</div>				
				<div class="col-auto"style="padding-left: 0px; padding-right: 0px;">
					<div class="box2">
						<img src="<?php echo get_template_directory_uri();?>/img/pr4.png">
						<hr id="line2">
						<div class="pr_name">FORMAL BLOUSE</div>
						<div class="pr_price">$279,00</div>
					</div>
				</div>
				<div class="col-auto"style="padding-left: 0px; padding-right: 0px;">
					<div class="box2">
						<img src="<?php echo get_template_directory_uri();?>/img/pr4.png">
						<hr id="line2">
						<div class="pr_name">FORMAL BLOUSE</div>
						<div class="pr_price">$279,00</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<div class="footer_hr"><hr><img src="<?php echo get_template_directory_uri();?>/img/logo copy.png" id="footer_image"></div>

<?php

get_footer();
