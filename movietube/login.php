<!DOCTYPE html>
<html>
  <head>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>MovieTube</title>
   <style>
   @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");
     *{
	 margin: 0;
	 padding: 0;
	 box-sizing: border-box;
	 font-family: "poppins",sans-serif;
	 }
	 header{
		 position: fixed;
		 top: 0;
		 left: 0;
		 width: 100%;
		 padding: 20px 100px;
		 background: transparent;
		 display: flex;
		 justify-content: space-between;
		 align-items: center;
		 z-index: 99;
	 }
	 .logo {
		 font-size: 2em;
		 color: #fff;
		 user-select: none;
	 }
	 .navigation{
		 position: relative;
		 color: #fff;
	 }
       .navigation a {
           color: #fff;
           font-weight: 500;
           font-size: 1.1em;
           margin-left: 40px;
           text-decoration: none;
       }
	   .navigation a::after{
		   content:'';
		   position: absolute;
		   left: 0;
		   bottom: -6px;
		   width: 100%;
		   height: 3px;
		   background: #fff;
		   border-radius: 5px;
		   transform-origin: right;
		   transform: scaleX(0);
		   transition: transform .5s;
	   }
           .navigation a:hover::after {
               transform-origin: left;
               transform: scaleX(1);
           }
       body {
           display: flex;
           justify-content: center;
           align-items: center;
           min-height: 100vh;
           background: url(https://cdn.wallpapersafari.com/97/87/uqlPnc.jpeg) no-repeat;
		   background-size: cover;
		   background-position: center;
       }
       .wrapper {
           width: 420px;
           background: transparent;
           border: 2px solid rgba(255,255,255,.2);
           backdrop-filter: blur(20px);
           box-shadow: 0 0 10px rgba(0,0,0,.2);
           color: #fff;
           border-radius: 10px;
           padding: 30px 40px;
       }
	 .wrapper h1{
	 font-size:36px;
	 text-align: center;
	 }
	 .wrapper .input-box{
		 position:relative;
	 width: 100%;
	 height: 50px;
	 
	 margin: 30px 0;
	 }
	 .input-box input{
	 width: 100%;
	 height: 100%;
	 background: transparent;
	 border: none;
	 outline: none;
	 border: 2px solid rgba(255,255,255,.2);
	 border-radius: 40px;
	 font-size:16px;
	 color: #fff;
	 padding: 20px 45px 20px 20px;
	 }
	 .input-box input::placeholder{
	 color: #fff;
	 }
	 .input-box i{
		 position: absolute;
		 right: 20px;
		 top: 50%;
		 transform: translateY(-50%);
		 font-size: 20px;
	 }
	 .wrapper .remember-forgot{
		 display: flex;
		 justify-content: space-between;
		 font-size: 14.5px;
		 margin-right: -15px 0 15px;
	 }
       .remember-forgot label input {
           color: #fff;
           margin-right: 3px;
       }
	   .remember-forgot a {
		   color: #fff;
		   text-decoration: none;
	   }
	   .remember-forgot a:hover{
		   text-decoration: underline;	  

	   }
	   .wrapper .btn{
		   width: 100%;
		   height: 45px;
		   background: #fff;
		   border: none;
		   outline: none;
		   border-radius: 40px;
		   box-shadow: 0 0 10px rgba(0,0,0,.1);
		   cursor: pointer;
		   font-size: 16px;
		   color: #333;
		   font-weight:600;

	   }
	   .wrapper .register-link{
		   font-size: 14.5px;
		   text-align: center;
		   margin-top: 20px 0 15px;
	   }
	   .register-link p a {
		   color: #fff;
		   text-decoration: none;
		   font-weight: 600;

	   }
	   .register-link p a:hover{
		   text-decoration: underline;
	   }
    </style>
  </head>
  <body>
  	<header>
  		<h2 class="logo">MovieTube</h2>
		  <nav class="navigation">
    <a href="home.php">Home </a>
    <a href="Movie.php">Movies</a>
    <a href="login.php">Login</a>
	<a href="crud.php">Crud</a>
</nav>
  	</header>
  	
  	<div class="wrapper">
  		<form action="">
  			<h1>Login</h1>
  			<div class="input-box"> <input type="text" placeholder="Username" required><i class='bx bxs-user'></i></div>
  			<div class="input-box"><input type="password" placeholder="password" required><i class='bx bxs-lock-alt'></i></div>
  			<div class="remember-forgot">
  				<label><input type="checkbox"> Remember me</label>
  				<a href="#">Forgot password?</a>
  			</div>
  			<button type="submit" class="btn">Login</button>
  			<div class="register-link">
  				<p>Don't have an account?<a href="#">Register</a></p>
  			</div>
  		</form>
  	</div>
  </body>
</html>