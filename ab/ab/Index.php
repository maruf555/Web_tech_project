<?php ?>
<html>
<head>
    <title>Home</title>
	<link href='css/style.css' rel='stylesheet'>
</head>

<body>
    <header>
	   <div class="row">
		<ul class="main-nav1">
		    
		</ul>
	    </div>
		
		<div class="neon1">
		  <input name="" type="text">
            <input value="Search" type="button">
	    </div>	
	 </header>
	 <div class="logo_menu">
	    <div class="neon">
		    <h3 data="neon">abash.com</h3>
	    </div>
		
		<div class="row">
		<ul class="main-nav">
		    <li class="active"><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="#">contuct us</a></li>
			<li><a href="post.php">Post ad</a></li>
			<li><a href="login.php">Login</a></li>
			
		</ul>
		</div>
		</div>
		
		<div class="div3">
		    <ul>
			   <li><a href="#">most popular ad</a></li>
			   <li><a href="#">search filter </a></li>>
			   <input name="" type="text">
               <input value="Search" type="button"> 
		</div>
		
		
	       <div class="slider">
              
                  <img class="mySlides" src="img/1.jpg">
				  <img class="mySlides" src="img/2.jpg">
				  <img class="mySlides" src="img/3.jpg" >
				  <img class="mySlides" src="img/4.jpg" >
				  <img class="mySlides" src="img/5.jpg">
			
            </div>
			
			
			
		<div class="product_area">
		  <ul>
		      <li>
			      <a href="">
				      <div class="single_product">
					      <img src="img/1.jpg" />
						  <div class="single_product_text">
						     <h2>Home</h2>
						      <p>price:5000000taka</p>
						  </div>
					  </div>
				  </a>
			  </li>
			  <li>
			      <a href="">
				      <div class="single_product">
					      <img src="img/8.jpg" />
						  <div class="single_product_text">
						     <h2>home</h2>
						      <p>price:75000</p>
						  </div>
					  </div>
				  </a>
			  </li>
			  
			  <li>
			      <a href="">
				      <div class="single_product">
					      <img src="img/6.jpg" />
						  <div class="single_product_text">
						     <h2>apartment</h2>
						      <p>price:520000taka</p>
						  </div>
					  </div>
				  </a>
			  </li>
			  <li>
			      <a href="">
				      <div class="single_product">
					      <img src="img/9.jpg" />
						  <div class="single_product_text">
						     <h2>apartment</h2>
						      <p>price:450000taka</p>
						  </div>
					  </div>
				  </a>
			  </li>
			  <li>
			      <a href="">
				      <div class="single_product">
					      <img src="img/10.jpg" />
						  <div class="single_product_text">
						     <h2>apartment</h2>
						      <p>price:65000taka</p>
						  </div>
					  </div>
				  </a>
			  </li>
			  <li>
			      <a href="">
				      <div class="single_product">
					      <img src="img/12.jpg" />
						  <div class="single_product_text">
						     <h2>apartment</h2>
						      <p>price:38000taka</p>
						  </div>
					  </div>
				  </a>
			  </li>
			   <li>
			      <a href="">
				      <div class="single_product">
					      <img src="img/13.jpg" />
						  <div class="single_product_text">
						     <h2>apartment</h2>
						      <p>price:35000taka</p>
						  </div>
					  </div>
				  </a>
			  </li>
			   <li>
			      <a href="">
				      <div class="single_product">
					      <img src="img/14.jpeg" />
						  <div class="single_product_text">
						     <h2>apartment</h2>
						      <p>price:67000taka</p>
						  </div>
					  </div>
				  </a>
			  </li>
			  
		  </ul>
		</div>	
			
			
			
			
			
			
			
			
			
			
			
			

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
	           
</body>

	<footer class="footer">
		
		<div class="call_us">

			<a href="tel:+8801761867763" class="call" title="call now"><img src="img/contact.png"></a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#" class="call"><img src="img/facebook.png" title="facebook"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#" class="call"><img src="img/email.png" title="email"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#" class="call"><img src="img/twitter.png" title="twitter"></a>&nbsp;&nbsp;&nbsp;&nbsp;

		</div>
		

		<div class="fo">
			<h1>Copyright Abash.com</h1>
			
		</div>

		
	</footer>
</html>