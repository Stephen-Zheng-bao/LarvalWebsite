
<x-app-layout>
<!DOCTYPE html>
<html lang=en;>
<head>
    
    <link rel="stylesheet" href="styles.css">
    <!-- Stylesheet for product stars -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>YazTec Peripherals & More !</title>
      
    <body>
    
        <header>
            <a href="#" class="brand">YazTec</a>
            <div class="family">
                <ul class="nav">
                    <li><a href="#">Home</ion-icon></a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="">Products</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#"><ion-icon name="cart-outline"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="people-circle-outline"></ion-icon></a>
                </ul>
    
    
                <div class="search">
                    <span class="ionicons">
                        <ion-icon name="search-outline" class="searchBtn"></ion-icon>
                        <ion-icon name="close-outline" class="closeBtn"></ion-icon>
                    </span>
                </div>
                <ion-icon name="menu-outline" class="menuToggle"></ion-icon>
            </div>
            <!-- <div class="searchArea">
                <input type="text" placeholder="Type here . . ."
            div> -->
        </header>
        <script>

            let header = document.querySelector('header');
    
            let searchBtn = document.querySelector('.searchBtn');
    
            let closeBtn = document.querySelector('.closeBtn');
    
            let searchArea = document.querySelector('.searchArea');
    
            let nav = document.querySelector('.nav');
    
            let menuToggle = document.querySelector('.menuToggle');
       
    
            searchBtn.onclick = function(){
    
                header.classList.remove('open');
    
                searchArea.classList.add('active');
    
                closeBtn.classList.add('active');
    
                searchBtn.classList.add('active');
    
                menuToggle.classList.add('hide');
    
            }
            closeBtn.onclick = function(){
    
                searchArea.classList.remove('active');
    
                closeBtn.classList.remove('active');
    
                searchBtn.classList.remove('active');
    
                menuToggle.classList.remove('hide');
            }
            menuToggle.onclick = function(){
    
                header.classList.toggle('open');
               
                searchArea.classList.remove('active');
               
                closeBtn.classList.remove('active');
               
                searchBtn.classList.remove('active');
            }
        </script>
       
    </body>
    
<div class="Header"> 
    <div class = "Main-Info">
    <img src="Images/Index3.jpg" width="1440" height="600">

  


            </section>

            <section id="Welcome">
    
                <div class="centered">
                    
                    <b><h4>Gaming Done Your Way</h4></b>
                    <p>Our products allow you to do what you do best!</p>
                    <button class="btn">Shop Here! &#8594; </button>
            </div>
            <section id="button">
        
            </section>
        </div>
    </div>
</div>
<div class="Welcome">
<h1><u> Explore Our Frequently Bought Below</u></h1>

<section id="Index_Products">
    <div class="Featured">
        <div class="col">
          <h2>Mouses</h2>
          <img src="Images/Prod1.jpg" width="100%" height="40%">
          <p> Razer Mouse <br>
            Price: £79.99  <br>
            <div id=Star>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            <i class="fa fa-shopping-cart" style="font-size:36px"></i>
             <br>
            <br>
        </div>
        <div class="col">
          <h2>Keyboards</h2>
          <img src="Images/Prod1.jpg" width="100%" height="40%">
          <p> Keyboard <br>
            Price: £79.99  <br>
            <div id=Star>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            </div>
            <i class="fa fa-shopping-cart" style="font-size:36px"></i>
        </div>
        <div class="col">
            <h2>Headsets</h2>
          <img src="Images/Prod1.jpg" width="100%" height="40%">
          <p> LED Headset<br>
          Price: £79.99  <br>
          <div id=Star>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
          </div>
          <i class="fa fa-shopping-cart" style="font-size:36px"></i>
        </div>
        <div class="col">
            <h2>Headsets</h2>
          <img src="Images/Prod1.jpg" width="100%" height="40%">
          <p> LED Headset<br>
          Price: £79.99  <br>
          <div id=Star>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
          </div>
          <i class="fa fa-shopping-cart" style="font-size:36px"></i>
        </div>
      </div>
    </div>

</section>
            

           



<div Section="News_Letter">
    <form action="action_page.php">
        <div class="News_Letter">
          <h2>Subscribe For Crazy Discounts</h2>
        </div>
      
          <input type="text" placeholder="Email address" name="mail" required><input type="submit" value="Subscribe">
   
        </div>
      </form>


</div>

    <footer>
        <div class="footer"> 
            
            <br>
            <br>
        <STYLE>A {text-decoration: none;} </STYLE>
        <p>Copyright © 2022 YazTec Incorporated UK & USA</p>





    </div>
    </footer>






    </div>


</body>








</html>

</x-app-layout>

