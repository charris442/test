<?php
  session_start();
?>
<doctype html>
  <html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./c
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Yeseva+One" rel="stylesheet">
    <link rel="icon" href="/images/logo2.png">
     <script type="text/javascript" src="/js/index.js"></script>
    
    <title>Pondner</title>
  
  </head>

  <body background="/images/background.png"> 
    <header>
      <iframe src="user.html" id="frame" style="border:1px solid black; display:none; border-radius: 20px; background-color: white; position: fixed; width: 80%; height: 80%; margin-top: 4%; margin-left: 10%;"> </iframe>

      <section id="home">
        <div class="container">
          <div id="navbar">
 
            <ul>
     
                <div id="login"><p onclick="document.getElementById('modala').style.display='block'"><input type='submit' name='a1' id="al" value="Login" style="color: white; box-sizing: unset; border-color: rgba(0,0,0,0); border: none; background-color: rgba(0,0,0,0); font-size: 20px; text-decoration: none;" onclick='setInput(this); return false;'>
                 </input></p>
 
              
            
<div id="modala" class="modal">
  
  <form class="modal-content 
               animate">


     <div class="imgcontainer">
       <span onclick="document.getElementById('modala').style.display='none'" class="close" id="close" title="Close login box" ><a onclick="document.getElementById('al').style.visibility='visible';">&times;</a></span>
      <img src="/images/logo.png" alt="Avatar" class="avatar" id="avatar">

    
    
    <div class="container">
     <form action="login.php" method="post">
       <input type="mailiud" placeholder="Enter Email" name="mailuid" id="enter">
       <input type="password" placeholder="Enter Password" name="password" id ="enter">      
      <button type="submit" id="button2" name="login">Login</button>
      </form>
     

    </div>
    
</div>            
    </div>
              </div>
                 <img src="/images/logo.png" id="logo">
                <li><a href="#product"><span class="highlight">Products</span></a></li>
                <li><a href="#about1"><span class="highlight">About</span></a></li>
                <li><a href="#contact"><span class="highlight">Contact Us</span></a></li></ul>
            
              </div>
        </div>
        
    </header>
      
    <div class="container">
      <div id="starter">
        <center>

          <h1>
            Create a website
          </h1>
          <h2>
            Click learn more to see our terms and conditions.
          </h2>
         <center> <button type="button home-button" id="button1"center><a href="terms.html">Learn More</a></center></button></center>
      </div>
    </div>
    </section>

    <div class="container">
      <div id="shop">
        <h1>PRODUCTS,<br> Our services, and<br> how they work</h1>
        <h2>We code every request you have so, the<br> pricing and depends on the time will how<br> much work was put in to the website, but<br> for the service fee it will be a $50 forward<br> pay. For more informations please <a href="terms.html"> <span style="color:bluelight">click here</span></a><br>          for the terms and conditions.</h2>
        <section id="product">
      </div>
    </div>

    <div class="container">
      <div id="shop2">
        <h1><center>Templates<br><a>If you don't want a custom site, you can buy a template for a cheaper price. All templates will be by made Ponder, and the list will grow as time goes on.</a>
          </center>
        </h1>
        <center><a href="https://cnichaelharris1.000webhostapp.com/index.html"><img src="/images/drgjk.png"><br><h4><a>$100 | <a href="">Buy </a> <a>/</a> <a>Pay plan</a></a>
          </h4>
          </a>
        </center>
      </div>
    </div>
    </section>

    
    <div id="aboutr">
      <div class="container">
        <div id="about">
          <h1>About us
            <h2>This entire site was created to make it where<br> you have a choice in what your site does and<br> looks like. It was made so you can have a<br> professionally made website for the lowest<br> market price we can provide.</h2>
          </h1>
        </div>
      </div>
    </div>
      <div class="container">
        <div id="about2">
          <h3>Our products are completely coded by Pondner. <br>Nothing Pondner sells will be on a different site.<br> If someone has a copy of our products please<br> contact us.
            <h4>About our <br>products</h4>
          </h3>
        </div>
      </div>
    
        <div class="container">   
          <div id="contacts">
            <center> <h1>CONTACT<br>US</h1><h2>contact us by email<br> sup.Pondner@gmail.com</a></center>
    </h2>
         <section id="contact"> 
        </div>
      </div>

      <footer>
 <p> Pondner, Copyright &copy; 2018</p>
</footer>
</section>
      <div id="fixedbutton">
        <a href="#home"><img src="/images/open.png"></a>
  

            
        </div>

      </div>


</body>

  </html>
