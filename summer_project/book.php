<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>about</title>
    <!-- swiper css link-->
    <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- custom css file link-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
 <!-- header section starts-->
 <section class="header">
    <a href="index.php" class="logo">travel</a>
    <nav class="navbar">
        <a href="index.php" >Home</a>
        <a href="about.php" >About</a>
        <a href="package.php" >Package</a>
        <a href="book.php">Book</a>   
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
 </section>
 <!-- header section ends-->
 <div class="heading" style="background:url(header-bg.avif) no-repeat;background-size: 100%;">
    <h1>Book Now</h1>
 </div>
 <!--Booking section starts-->
 <section class="booking">
    <h1 class="heading-title">Book your Trip!</h1>
    <form action="book_form.php" method="post" class="book_form" onsubmit= "return conf();">
        <div class="flex">
            <div class="inputBox">
                <span>Name:</span>
                <input type="text" placeholder="Enter your name" name="name" id="user-name" required>
                <label  id="n" style="color:red;visibility:hidden;">Invalid name..!! Name length atleast 3 and contains only characters</label>
            </div>
            <div class="inputBox">
                <span>Email:</span>
                <input type="email" placeholder="Enter your mail_id" name="email" id="user-mail" required>
                <label  id="emi" style="color:red;visibility:hidden;">Enter valid Email id!</label>
            </div>
            <div class="inputBox">
                <span>Number:</span>
                <input type="number" placeholder="Enter your number" name="phone" id="user-phone" required>
                <label  id="num" style="color:red;visibility:hidden;">Enter India(10 digits,starts with 6/7/8/9) based phone number</label>
            </div>
            <div class="inputBox">
                <span>Address:</span>
                <input type="text" placeholder="Enter your Address" name="address" id="user-address" required>
            </div>
            <div class="inputBox">
                <span>Where to:</span>
                <input type="text" placeholder="Place you want to visit" name="location" id="user-location" required>
                <label  id="l" style="color:red;visibility:hidden;">Invalid location..!! Place length atleast 3 and contains only characters</label>
            </div>
            <div class="inputBox">
                <span>How many:</span>
                <input type="number" placeholder="No. of people" id="peo" name="people" required>
                <label  id="peo1" style="color:red;visibility:hidden;">Invalid data..!! Number greater than 0</label>
            </div>
            <div class="inputBox">
                <span>Arrivals:</span>
                <input type="date"  name="arrivals" id="date1" required >
                <label  id="date11" style="color:red;visibility:hidden;">Enter valid date!</label>
            </div>
            <div class="inputBox">
                <span>Leaving:</span>
                <input type="date"  name="leaving" id="date2" required>
                <label  id="date22" style="color:red;visibility:hidden;">Enter valid date!</label>
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
        <input type="reset" value="reset" class="btn" name="reset" onclick="return conform2();">
    </form>
 </section>
  <!--Booking section ends-->
 <!-- footer section starts-->
 <section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="index.php" ><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php" ><i class="fas fa-angle-right"></i>About</a>
            <a href="package.php" ><i class="fas fa-angle-right"></i>Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>  
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#" ><i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#" ><i class="fas fa-angle-right"></i>about us</a>
            <a href="#" ><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#" ><i class="fas fa-angle-right"></i>erms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#" ><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#" ><i class="fas fa-phone"></i> +111-222-333</a>
            <a href="#" ><i class="fas fa-envelope"></i> kasimkotaparvathi47@gmail.com</a>
            <a href="#" ><i class="fas fa-map"></i>AndhraPradesh, India - 400104</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#" ><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#" ><i class="fab fa-twitter"></i>twitter</a>
            <a href="#" ><i class="fab fa-instagram"></i>instagram</a>
            <a href="#" ><i class="fab fa-linkedin"></i>linkedin</a>
            </div>
    </div>
    <div class="credit">created by<span> Miss Parvathi Kasimkota</span>| All rights reserved!</div>
 </section>
 <!-- footer section ends-->
 <script type="text/javascript">
    function validate1(){
			var fn=document.getElementById("user-name").value;
            var n1=/[a-z,A-Z]$/;
			var nn1=document.getElementById("user-name").value.match(n1);
			if(!nn1 || fn.length<3){
					document.getElementById("user-name").style.border="2px solid red";
					document.getElementById("n").style.visibility="visible";
					return false;
			}
            var n2=/[6-9][0-9]{9}$/;
            var nn2=document.getElementById("user-phone").value.match(n2);
			var mb=document.getElementById("user-phone").value;
			if(!nn2 || mb.length!=10)
			{
				document.getElementById("user-phone").style.border="2px solid red";
				document.getElementById("num").style.visibility="visible";
				
				return false;
			}
            var loc=document.getElementById("user-location").value;
            var loc_n1=/[a-z,A-Z]$/;
			var loc_nn1=document.getElementById("user-location").value.match(loc_n1);
			if(!loc_nn1 || loc.length<3){
					document.getElementById("user-location").style.border="2px solid red";
					document.getElementById("l").style.visibility="visible";
					return false;
			}
            var peo_no=document.getElementById("peo").value;
            if(peo_no<1)
            {
					document.getElementById("peo").style.border="2px solid red";
					document.getElementById("peo1").style.visibility="visible";
					return false;
			}
            var d1=document.getElementById("date1").value;
            var d11=new Date(d1);
            var d11_Y=d11.getFullYear();
            var d11_M=d11.getMonth();
            var d11_D=d11.getDate();
			var s_d1=new Date();
            var s_d1_Y=s_d1.getFullYear();
            var s_d1_M=s_d1.getMonth();
            var s_d1_D=s_d1.getDate();
            if(d11_Y<s_d1_Y)
            {
                document.getElementById("date1").style.border="2px solid red";
				document.getElementById("date11").style.visibility="visible";
				return false;
            }
            else if(d11_Y==s_d1_Y)
            {
                if(d11_M<s_d1_M)
                {
                document.getElementById("date1").style.border="2px solid red";
				document.getElementById("date11").style.visibility="visible";
				return false; 
                } 
                else if(d11_M==s_d1_M)
                {
                    if(d11_D<=s_d1_D)
                    {
                        document.getElementById("date1").style.border="2px solid red";
				        document.getElementById("date11").style.visibility="visible";
				        return false; 
                    }
                } 
            }
            var d2=document.getElementById("date2").value;
            var d22=new Date(d2);
            var d22_Y=d22.getFullYear();
            var d22_M=d22.getMonth();
            var d22_D=d22.getDate();
			/* var s_d1=new Date();
            var s_d1_Y=s_d1.getFullYear();
            var s_d1_M=s_d1.getMonth();
            var s_d1_D=s_d1.getDate(); */
            if(d22_Y<d11_Y)
            {
                document.getElementById("date2").style.border="2px solid red";
				document.getElementById("date22").style.visibility="visible";
				return false;
            }
            else if(d22_Y==d11_Y)
            {
                if(d22_M<d11_M)
                {
                document.getElementById("date2").style.border="2px solid red";
				document.getElementById("date22").style.visibility="visible";
				return false; 
                } 
                else if(d22_M==d11_M)
                {
                    if(d22_D<=d11_D)
                    {
                        document.getElementById("date2").style.border="2px solid red";
				        document.getElementById("date22").style.visibility="visible";
				        return false; 
                    }
                } 
            }
    }
    function conform2()
		{
			var con=confirm("do you want to reset?");
			if(con)
			{
				return true;
			}
			else{
				return false;
			}
		}
    function conf()
		{
			var co=confirm("do you want to submit?");
			if(co)
			{
				return validate1();
        
			}
			if(!co)
			{
				return false;
			}
		}
</script>
    <!-- swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- custom js file link -->
    <script src="script.js"></script>
</body>
</php>
