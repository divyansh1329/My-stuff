<?php
	session_start();
	$_SESSION['username'] = "Log in";
	//SIGN IN CODE
	if(isset($_SESSION["username"]) && isset($_POST['username']))
	{	
		$log_success = 2;
		$con = mysqli_connect("localhost","root","necro123","login");
		$uname = htmlspecialchars($_POST['username']);
		$get_data = mysqli_fetch_assoc(mysqli_query($con,"select * from data where username ='".$uname."';"));
		if(empty($get_data))
		{
			$new_user = "Looks like you don't have an account! Please create a new account";
		}
		else 
		{
			if($_POST["password"] == $get_data["password"])
			{
				$log_success =1;
			
				$_SESSION['username'] =  "Hello ".$get_data["firstname"]."!";
			}

			else 
			{
				$log_success =0;
				unset($_SESSION['username']);
			}
		}
		
	} else $show_on_page = "Login";
?>


<?php
	

	//CREATE NEW ACCOUNT CODE
	
	if(isset($_POST["username2"] )&& $_POST["username2"] !="" && $_POST["password2"] !="" && $_POST["firstname"] !="" && $_POST["lastname"] !="" && $_POST["email"] !="")
	{	
	$uname = htmlspecialchars($_POST["username2"]);
	$password = htmlspecialchars($_POST["password2"]);
	$fname = htmlspecialchars($_POST["firstname"]);
	$lname = htmlspecialchars($_POST["lastname"]);
	$email = htmlspecialchars($_POST["email"]);
	$con = mysqli_connect("localhost","root","necro123","login");
	$add = mysqli_query($con,"insert into data values ('".$uname."','".$password."','".$fname."','".$lname."','".$email."');");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<link rel="stylesheet" type="text/css" href="css/index.css">

<img src="./images/HACKATHON2.jpg" class="front">

<div class="mainDiv">
<div id = "align">
    <button class = "hvr-grow-rotate" onclick ="show()"> Sign up </button>
    <button class="hvr-grow-rotate" onclick="div_show()"><?php echo $_SESSION['username'];?></button> 
   
    </div>
	<p class="titleHead">PRINCIPLES  </p>
	<br/>
	<p class="titleHead">OF</p>
	<br/>
	<p class="titleFoot">DESIGN</p>
</div>
<div class="image_cntr"><a href="#page2"> <img src="images/down2.png" class="down"></a> </div>


<link href="css/popupform.css" rel="stylesheet">
<link href="css/button.css" rel="stylesheet">
<script src="js/popupform-js.js"></script>


<div id="abc" class="pop" >
<div id="popupContact" class="pop1">
<div class="cross_cntr"> <img src="images/cross.png" class="cross" onclick="div_hide()"> </div>
<form  id="form" method="post" name="form" class="pop2">
<h2>Log In</h2>
<hr>
<input type="text" id="name" name="username" placeholder="Enter username" type="text"><br/>


<input type="password" id="password" name="password" placeholder="Enter password">
<br/><br/>
<input type="submit"  id="submit" value="Submit">
</form>
</div>
</div>

<div id="abc2" class="pop" >
<div id="popupContact2" class="pop1" >
<div class="cross_cntr"> <img src="images/cross.png" class="cross" onclick="hide()"> </div>
<form id="form2" method="post" name="form" class="pop2">
	<h2>Sign Up</h2>
	<hr>
	<input type="text" id="name" name="username2" placeholder="Enter a username" class="inp"><br/>

	<input type="password" id="password" name="password2" placeholder="Enter a Password" class="inp"><br/>

	<input type="password" id="r_password" name="r_password" placeholder="Repeat the entered Password" onBlur="check_pass()" class="inp"><br/>
	<input type = "text" name= "firstname" placeholder = "Enter first name" class="inp" onClick="check_pass()"><br/>

	<input type = "text" name = "lastname" placeholder = "Enter last name" class="inp" ><br/>

	<input type="email" id="email" name="email" placeholder="Email" type="text" class="inp"><br/>
	<input type="submit"  id="submit" value="Submit" onclick = "check2()">
</form>
</div>
</div>




<div class="page2" id="page2">
	
<p>A composition may be an artwork,a website,an application or any other structured entity that is meant to be visually appealing.The principles of compositional design are like basic guidelines that are meant to be followed that help build the composition.</p>
	<p>The principles are used to create interest,harmony and unity to the elements in your composition.These are also effective to see if your composition has a good structure.</p>

</div>
<div class="image_cntr"><a href="#page3" > <img src="images/down2.png" class="down"></a ></div>

<div id="page3">
	<p class="headings"> BALANCE</p>
	<img src="images/balanc2.png" class="pic">
	<p class="content">It is a state of equalized tension and equilibrium, which may not always be calm.Balance is arranging elements so that no one part of a work overpowers, or seems heavier than any other part
	</p>
</div>
<div class="image_cntr"><a href="#page4"> <img src="images/down2.png" class="down"></a> </div>

<div id="page4">
	<p class="headings">CONTRAST</p>
	<img src="images/contrast.jpg" class="pic">
	<p class="content">Contrast is the juxtaposition of opposing elements.Contrast refers to the arrangement of opposite elements  in a piece so as to create visual interest, excitement and drama.</p>
</div>
<div class="image_cntr"><a href="#page5"> <img src="images/down2.png" class="down"></a> </div>

<div id="page5">
	<p class="headings">REPEATATION</p>
	<img src="images/repaet1.jpg" class="pic">
	<p class="content">Repeating visual elements or image tends to unify the total effect of a work of art as well as create rhythm. Repetition can take the form of an exact duplication , a near duplication, or duplication with variety.</p>
</div>
<div class="image_cntr"><a href="#page6"> <img src="images/down2.png" class="down"></a> </div>

<div id="page6">
	<p class="headings">HARMONY</p>
	<img src="images/harmony1.jpg" class="pic">
	<p class="content">Harmony  brings together a composition with similar units.Harmony in visual design means all parts of the visual image relate to and complement each other. </p>>
</div>
<div class="image_cntr"><a href="#page7"> <img src="images/down2.png" class="down"></a> </div>

<div id="page7" class="pages">
	<p class="headings">DOMINANCE</p>
	<img src="images/dominance.jpg" class="pic">
	<p class="content">Dominance through emphasis of one or more particular elements creates a focal point in your design. It’s where most people will instinctively go when first looking at your work.</p>
</div>
<div class="image_cntr"><a href="#page8"> <img src="images/down2.png" class="down"></a> </div>

<div id="page8" class="pages">
	<p class="headings">UNITY</p>
	<img src="images/unity1.jpg" class="pic">
	<p class="content">Relating the design elements to the the idea being expressed in a design reinforces the principal of unity. Unity occurs when all of the elements of a piece combine to make a balanced, harmonious, complete whole.</p>
</div>



	<br/>
	
	<div class="image_cntr"> <a href="#align"><img src="images/up3.png" class="down"> </a></div>

	<br/><br/><br/><br/>
</body>
</html>