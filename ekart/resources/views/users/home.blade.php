
<style>body{background:#eee}.ratings i{font-size: 16px;color: red}.strike-text{color: red;text-decoration: line-through}.product-image{width: 100%}.dot{height: 7px;width: 7px;margin-left: 6px;margin-right: 6px;margin-top: 3px;background-color: blue;border-radius: 50%;display: inline-block}.spec-1{color: #938787;font-size: 15px}h5{font-weight: 400}.para{font-size: 16px}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="{{asset('css/main.css')}}"> 


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>

<div class="super_container">

	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918577/phone.png" alt=""></div>+91 9823 132 111</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918597/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">contact@bbbootstrap.com</a></div>
						<div class="top_bar_content ml-auto">
							
							<div class="top_bar_user">
								<div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div>
								<div><a href="#">Register</a></div>
								<div><a href="#">Sign in</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="#">BBB</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required="required" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown" style="display: none;">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="#">Computers</a></li>
													<li><a class="clc" href="#">Laptops</a></li>
													<li><a class="clc" href="#">Cameras</a></li>
													<li><a class="clc" href="#">Hardware</a></li>
													<li><a class="clc" href="#">Smartphones</a></li>
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918770/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="wishlist_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918681/heart.png" alt=""></div>
								<div class="wishlist_content">
									<div class="wishlist_text"><a href="#">Wishlist</a></div>
									<div class="wishlist_count">10</div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918704/cart.png" alt="">
										<div class="cart_count"><span>3</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="#">Cart</a></div>
										<div class="cart_price">$185</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							

							<!-- Main Nav Menu -->

							<div class="main_nav_menu">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
									
									<li><a href="blog.html">Products<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item has-children">
									<a href="#">Language<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Currency<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item">
									<a href="#">Home<i class="fa fa-angle-down"></i></a>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
										<li class="page_menu_item has-children">
											<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
											<ul class="page_menu_selection">
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
												<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											</ul>
										</li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item has-children">
									<a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
									<ul class="page_menu_selection">
										<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									</ul>
								</li>
								<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
								<li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
							</ul>
							
							<div class="menu_contact">
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570</div>
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="data:image/jpeg;base64,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"></div>
                <div class="col-md-6 mt-1">
                    <h5>Quant olap shirts</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                    <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                    <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to cart</button></div>
                </div>
            </div>
            <div class="row p-2 bg-white border rounded mt-2">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxASDxAPDw8QDxAPDw8QDw8PDw8PEA8QFhEWFhUVFRUYHSggGBonHRUVIjEhJSsrLi4uFx8zODMtQygtLisBCgoKDg0NGg8QGjQjHSU3Nzc3MTc4NzE3Ny0yKzcxLzc3Kzc3Ny83MzU3NzQwNTc4Njc2MjM3KzQzNTQyNTc3Lf/AABEIAOMA3gMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAAAQIDBgcIBQT/xABPEAABAwIDBQQDDAMLDQAAAAABAAIDBBEFEiEGEzFBUQcUImEycZIIIyRScoGRobHBwtIVQoIWRFNUYmNkc5Oy8BclM0ODhJSjs7TD0fH/xAAZAQEAAgMAAAAAAAAAAAAAAAAAAQMCBAX/xAAmEQEAAgECAwkBAAAAAAAAAAAAAQIRA5EhQcESFDFRgaGx0fAE/9oADAMBAAIRAxEAPwDeKIiAiIgIiICKHOABJIAAuSTYALBNqe1bDqTMyJ/fZxe0VO4GMHo+b0W+YGYjogzmaVrGue9zWMYC5z3ENa1oFySToB5rTu1/bMc5hwpjSASHVczCQ7+pjuPad7PNYBtdt3X4iS2aTdU97tpYbti0Omc8ZD69NLgBY01B91RtZiUc7pW4hVtfIc7iKiQNc43Buy+X5rWHJZXgHbXicFm1LYq5nWQbmX5nsFvpaSsFq4czbji3UeY5hfAGIOg8O7dcPcBv6aqgceJaIpmD5w4OPsr2GdsOCkXNTI3yNLUX+ppXNOG0plqYacv3e+miizkBwZneG5rc7Xus2/ydDdtlNY/K5oeAKUFwaY3PGYbwWd4bZeIug2/L2x4KBpUSv8m0s4/vNCx7F+3imaCKSinldydUOjhZ67NLifVosAZ2dXEbjU1NpHRtIFAHOjzvkaHOG99EGMXPLOOVysQxmi7tVPgzGQMDDmLN0XZo2vHhubel/wDEGWY52rYxUE2qe6s5R0rREB+2bvP0r4tm9ssTgkdUMrZ3vPhcKiR9QyRo1s5ryefMWI1sVi2TMbAHXhroF6TWhrQ0ckG+9gO1eGrc2mrgymqnODI3NuKeoJ4AE+g8nTKTrpYkmy2WuNXNWwNje1esow2GpBraZtgM7rVETejHn0x5O9oIOikWN7Nbc4dXWFPUt3p/e8vvU9/JjvS9bbjzWSICIiAiIgIiICIiAiKzV1UcUb5ZXtjjjaXve8hrWNAuSSguSSNa0ucQ1rQS5ziAGgcSSeAWs9re2KkgzRUDRWzC43ty2lYflcZP2dD8Za+7SNvZMRkMURdHQsd4Iz4XTuB0kkH2N5aE68MGa1B620W1NdXOJq6l72E6QtJZTt6WiGh9ZufNeNlV4BMqC2ApCrslkEMNlD4AdQbH6lWApQW6OcQue59MKgPy2vkOUi9+LHHnytwXrUGIUklzLH3cggAFrpM2hN/DD1AFj18l510J8vsQfbUYhT6FlO15Je0tFmBrbDK+7odSbnTllXyV72ShobTsgIdcuaWEu0IsbMaed1TfoFF0FEcTW8NT1UFXLKktQUKCFcsmVBZy/VqPWsw2Z7ScTosrRN3qEEXhqi6XTmGyXzt8tSB0WK2UEIOjdkO1Ggri2JxNJUusBDORlkd0jlGjvIGzj0WcrjfKL68FuPst7Sn548PxGTMHWZTVTz4s3BsUpPG/APOt7A3vdBuVERAREQEREBaS7cdqS+VuGQv97iyyVduD5TZ0cZ8miziOrm/FW3NosXZR0k9XJ6MEbn5bgF7v1WDzc4gD1rlGrqnyySTSuzSSvfJI7q97i5x+klBacqWlSSoagqCIFKCFICKQgIgUoIRSoQQpRSEEKLKqyhBTZFJRBCFFCCHHUKq2ljrfiqOaqBQdE9kO1bq2iMUz81TR5Y5HE3dLEQd3IepsC0nmWk81ni5g7OtoO44lBM42ikO4qOm6kIGY/JcGu9TT1XT6AiIgIi83aLGY6Okmq5fQhYXZQQC950YwX5ucQB60Gpu3faLNLFhsbvDFlnqbHQyEe9MPqBLrfymHktSL7MRrpJ5pKiZ2aWZ7pJCNBmJ4DoBwA5ABfI5BTdAVSVAKC6FUqAVUEEqVAU3QSFKgEJcdUAqEJVOYdUFaBUqQUFSgqQoJQQoS6IIKgqSVQSgXQFUXVQQVW68OC6K7HtpjV0G5ldmqKLLE8k3c+K3vTzzvYFpJ4lhPNc7tWVdnG0vcMQjlebU8o3NT0Ebjo/8AZcAfVm6oOmkUA31GoPAjmpQFojtq2q39SKCJ3vNI68xB0kqbWt5hgJHynO6BbX272iFBQTVNxvSN3TtdwfO4HJpzAsXEdGlcvPcSS5zi5ziXOcdS5xNyT5k6oKbqhxVTirTigpcVQHKolWHuQfWCqgVaYVWCguhbH7LqkGphoBBh1RHJJLJNLLTbyoyBhJs8vsB4WgeHmtbAr08BxCrglfJRF4ldC+Jzo4myuETyM1rg5dQNRqomJz4rKXrFZia5mefHht1bGwTFG4hiTKQU2FtpBUOnO5pGtn7vC4yMD5MxFiWxh3hANyOBsslf3eNra+aTAThb5H5HRYeXSvZ4srGvDyHSaWPh4g6LTOEPxClL3UsU8TpIHwOcKcuO6fbM0FzTl9Fuo10V/CK7EqaCalihkdT1AtLTy0zpYjyuGkeF3DUW4DoLIiY8ZNS1bTmtcb9WbU+BUslPQxRRxMOL41NUsDmNMgw6KQncsPENDA3hpqeq+iPaNsuLiipqPCHwmt3AaaJrpt02TLK7MH2uGte6+XksJoscxaKSllayQuoIHU9IH0gLYYy0NdYBou4gAFxuV6823+0DmuaA5mYEZ46ENe2/MHLofNRMT5sq6lIzmkT6z9vK2rFMzEq3uzqdkQqHsZGWXbGW+F4aLgAF4cfotop2OoxV4pR0pbC+MztlkMcdgY4gZHNdfkcmU/KXkQR1rBlbDPa5PihkcbnibkX4r6sPrcTglM8DJo5TE+LOKYEiN9swGZpsfCNeIVcUt28z+9m7qf1aXdY09OZiecY349qfjZses2Wo8UqaSvwxrBTtrBBiNOGsjAbE++fINAHNaB5iRh01Xn7N442bG5KOHD8PfT1FdOS+SlD5GwRRloLDfK1pEQIFuLydbrC9msSxTD3PdRsnj3rAx7TA97XAeibEekLmx8yrOAy19HIZqaGZkhifDnNO55a11rkXGjtBr61c5j19rtrzO6qpYqTD4qczvbHLDSBlQYmS+A7zNYXDRewGhPBYeUAtpwtpbpZQ5BBKocdFJKsTO0QSHK60r5oyr4KC80qoK20q4EG/OxfanvFJ3KV156NoDLnWSm4MPnl9E+WTqtjrlLZfG30VZDVx3O6f42D/AFkR0kZ84vboQDyXVFJUsljZLG4PjlY2SN41DmOALSPIghBoPto2iNRX91YfeaHweT6hwBkd8ws3yIf1WvytybYdkDnvlqaCe75HvlfT1B9J73Fzsko4ak6OB4+kFqXFsLqKWTc1UMkEmvhkbbMBxLT6Lx5tJCD4XK24qslWpPqQW3uXzSOV56ojgfI5scbHSSSODGMYC5z3E2AAHEoLtM64V9evtDsbVYaKYVeQPqo3yBjHZjFlLQWOPAu8Q4XHmvJQAV72CspDCd/Ubt7pC4tDXE5WgtbcgfynnTXxA3BC8BEGZxS0GbM+qbId6+U3iPie51xmuDe13W+V5K07uRB+HuuWsa7MxzgcoaL2txIzg247x3ksRRBnFHWUUcjpG1YzFhY33pwDRlY0aW1AyXA0F3O6q1FLRN3fw5zt3JvPEwkl12kknLxOU3PHxFYaoQZgw0IDQa1zg14k1jPicMgu45b5iGOu7jd5PRVwTUTcl6wOcyUyl26IL3XBudLXuDr/ACjayw1EGZCWiy5e+niT6DspJdG52YW8QO7ANzqHO11svnqaylia6WGqfLKIwyNhBsHZBGx3AAZQ6Q/tnoAsURBLShKhEAr46p2oC+0r6Jtl6t1C7FGxE0rJty52ua9tX2trHc5c3xtOSDyoyvoYV8sZV9hQfQ0q41Wmq4EFxby7DNoXTUstDIbuo8roSeLoJC7w/suBHqc0LU2zeyldXn4LA57L2dM/3uBnW7zxtzDbnyW6dhOzSOgJnlqHy1L4zG4xF0UTGFzXFrbeJ2rW6k8uAQZ+vkxTC4KmMw1MMc8Z/UkaHAHqL8D5jVfWiDTW13Yx6UuFyefdZ3/VHKfsf7QWo8VoJqaQwVET4JW6mORuV1uo5OHmLhdgrzscwKlrItzVwMnZyDx4mHqxw8TD5ggoOO5TrYLenYPsUI4v0tUMG9mBbRhw1jh4Ok8i7gD8X5SvSdhtL3pkjaqQ0mfNJTPbeRzdTkbMCLNOg4ZrX1vqtsQxNY1rGNDWsaGta0WDWgWAA5CyDUXuh6f3vD5fiy1Ed/lMY7/xrTC3v7oGK+H0rvi17AfIGnm+8D6VohBSiFEBSoUoChSoQFKhSgKFKhAUhQpCAV0z2V0jRgdEwtBbJC97mkXDhJI9xuDxBzfWuZ11RsDFlwnDW/0CkJ9ZhaT9qDQPa9sb+j67PAzLR1d3wAejE8W3kXlY6jyNv1SsKgcuudrdnIMQpJKScaOs6OQAF0Mo9F7fMfWCRzWvtl+xKCJwkxCfvRGu4ha6KH9p18zh5DL86DUuz2zdZXPyUcD5rEB8noxR/LkOg621PQFbl2S7HaaHLJiDhWS8dyLtpmnoRxk+ewPxVsmjpY4o2xQxsijYMrI42hjGjoANAryCiGJrGtYxrWMaA1rWgNa0DgABoAq0RAREQEREBERBgPbfFfBpHW/0dRSu9V5Qz8f1rnZdNdq8AfgtaD+qyKT2JmP/AArmQoIRFBQSpUJdAREQFKhSgFQigoJQKFIQJD4XHo1x+pdf4XDkp4Y7WyQxMt0swC31LkekizyMYRcPe1hHUOcBb612EEBERAREQEREBERAREQEREGOdozL4PiF+VJM72W5vuXLbl1Tt8L4TiItf4DVf9Fy5WdxPrKClQVKhARQiCpFCIJRQiAoREEhSFAUoPT2bZmrqNtr5qykBHUGoZoutlyfsc2+JUAPOuo/+4YusEBERAREQEREBERAREQEREGPdoc2TCMRde3wKoaPW6MtH2rll/ErpztUfbBa7zia32pGj71zG8oKVSpUFAREQFKhEEqERAREQSpCpUoPU2adauojwtXUev8AvDF1suPqKbJJG86Bksb79MrwfuXYKAiIgIiICIiAiIgIiICIiDD+1236Erbm2kFudz3iOw+c6Lmcrontwny4NI29t7UUzPXaQSW/5f1LnVxQQVCgpdAUqlLoJUqnMozIK0VGZSHIKlCi6XQVKQqbqQgTeg75LvsXZLOA9QXG0voO+SfsXYeHy54Yn/Hijd9LQUH0IiICIiAiIgIiICIiAiIg1d7oKS2H0rete0/RTz/+1oYrd/uhpPg1CzrUyP8AZiI/GtHlBBUEqCUJQFCKEEqERBKKEQSpVIXo0WHNk3QMrmumZK9too3MAjL8wL3ys8VoybW4Ob1QfCCpCyF2yUgdkL3glxaLx0YBI6HvWvLh1C+GtwfdOMbpJN4IXz2MMGTI3Nxeyd9iS2wFuJA0ug84LrHYyXPhmHv+NQ0jvpgYVyaF1P2cPvg+Gn+hQN9lgH3IMkREQEREBERAREQEREBERBpj3RMuuHM5Hvj/AJxuR95Wmitte6Hk+FUDeQp6g/TJGPwrUiAVFlKgoIUKVCAoUpZAREQF7OzdWxsoZLDHUMcS5kUrI3gy2AytzghpeAG3t6QZyuD4yn/HQoM0jeyTG6NjI91TTnCXmkY5wha2akp5HsyiwykvdfTW68fH8SjkDBDTQ0okZG+SOJkbSGkBzGOc0DNe+fhwMfNpvbFbmlZWOl8cbWl7d5llMsbQ1gaOOR1mG49EZwLZWg+XJIXOLnG7nEuceribkoIC6e7JZQ7BKEjlHIz2Znt+5cwBdJdicl8Epx8SWqaf+IkP3oM7REQEREBERAREQEREBERBz/7oGQ/pSBvJtBG72p5h+ELWS2F28vvjFgfRoqcerxyn71ru56oJUEqMxUXKCUVJJ8kzIKlCpuouf8BBcRW8xU3KD0cH7vvSaoOMQimIawuDnSiN26FxyL8vRe5jkeDCEmkdK+cVENmONQGOp8oz3LmjUn1EEm2g1xPMpuf8BBmM0eCGKdzHSNlDavcRuNSWOIlcKe5te5YAdbAE681FHDgmSDeSTB/d4jUi9QAKjdyGQNysP627ty+a5OIXKnMUHp4+2mE9qMl0G7jsTvLl+Xx3zgG9+mnRb17BJs2EOb/B1k7D84Y/8a52ueq357niT/N1U3pXud9NPCPwoNqIiICIiAiIgIiICIiAiIg8PGdkMOq5N7VUcM0lgN45tnkDQDMLFY7W9l+DZie5W04Nqato4dBJZSiDwqvs6woA2pXCwd++avoP5xeAdi8P/gD/AG9T+dEQWhsbQZiNwbf19R+dWP3IUOZ43BsLW9+qPzoiCuLY6gLrGA2t/D1H51f/AHFYf/Fz/b1H50RB9FJsNhrjrTE/7ep/OrkWwmGkuvTHRxA+EVPD20RBQzYbDd44d3Nhf98VP519lPsBhhvemPD+MVX51KIEWwGGF7QaZ1iQCO81X517Q7MsHuB3R3H+NVnU/wA55KEQerQdmODAE9xa7UenNUyf3nlZPguB0tIwx0kEdOxzszmxttmda1z1KIg9BERAREQEREH/2Q=="></div>
                <div class="col-md-6 mt-1">
                    <h5>Quant trident shirts</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                    <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                    <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">$14.99</h4><span class="strike-text">$20.99</span>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to cart</button></div>
                </div>
            </div>
            <div class="row p-2 bg-white border rounded mt-2">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="data:image/jpeg;base64,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"></div>
                <div class="col-md-6 mt-1">
                    <h5>Quant ruybi shirts</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>123</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                    <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                    <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to cart</button></div>
                </div>
            </div>
            <div class="row p-2 bg-white border rounded mt-2">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="data:image/jpeg;base64,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"></div>
                <div class="col-md-6 mt-1">
                    <h5>Quant tinor shirts</h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>110</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                    <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                    <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">$15.99</h4><span class="strike-text">$21.99</span>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to cart</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
		



