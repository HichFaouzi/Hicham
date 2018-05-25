<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="theApp.css">
    <link rel="stylesheet" type="text/css" href="resolutie.css">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <link rel="stylesheet" type="text/css" href="slideshow.css">
    <link rel="stylesheet" type="text/css" href="features.css">
    <link rel="stylesheet" type="text/css" href="icon-grid.css">
    <link rel="stylesheet" type="text/css" href="pricing.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="products-grid.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  <body>
    <div id="app-container">
      
      <div id="menu">
        <ul>
          <li> <a href="#">De app</a></li>
          <li> <a href="#">Het idee</a></li>
          <li> <a href="#">De ontwerper</a></li>
          <li> <a href="#">Contact</a></li>
        </ul>
      </div>
      <div id="slideshow">
       <img src="app.jpg">
      </div>
      <div id="theApp">
        <div id="theApp-tekst">
            <h1 id="titel">
              De App
          </h1>
          <h1 id="subtitel">
            Waarom zou je het kopen?
          </h1>
          <p>
            AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
            aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
            aaaa
               AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
            aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
            aaaaaaaaaaaa
               AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
            aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
            aaaaaaaaaaaaaaaaaaaaaaa
          </p>
          <button onclick="document.getElementById('id01').style.display='block'"
            class="w3-button">
            <i class="fa fa-download" aria-hidden="true"></i> Download Applicatie
          </button>
          <div id="id01" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id01').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <h2>
        DOWNLOAD
      </h2>
      <p>
        Download the app in AppStore, Google Play or Microsoft Store.
      </p>
      <i class="fa fa-android" aria-hidden="true"></i> <i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i>
     <input class="w3-input" type="text" placeholder="Enter e-mail">
      <button type="button" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('download').style.display='none'">Fake Download</button>
    </div>
  </div>
</div>
          <p id="icon">
            Beschikbaar voor <i class="fa fa-android" aria-hidden="true"></i> <i class="fa fa-apple" aria-hidden="true"></i> <i class="fa fa-windows" aria-hidden="true"></i>
          </p>
        </div>
        <img id="theApp-img" src="img_app.jpg" alt="img">
      </div>
      <div id="resolutie">
           <div id="resolutie-tekst">
             <h1>
               Clarity
             </h1>
             <h2>
               Pixels, who?
             </h2>
             <p>
               AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
               AAAAAA
            aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
               aaaaaa
               aaaaaaaaaaaaaa
               AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
               AAAAAA
            aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
               aaaaaaa
               aaaaaaaaaaaaaa
             </p>
        </div>
        <div id="resolutie-img">
          <img src="app5.jpg">
        </div>
      </div>
      <div id="features">
          <h1>
            Features
        </h1>
        <p>
          Ths app is just so lorem ipsum.
        </p>
        <div class="centeredDiv2">
           <div id="icon-grid">
            <div id="bolt">
              <i class="fa fa-bolt" aria-hidden="true"></i>
              <p>
                Fast
              </p>
          </div>
          <div id="heart">
             <i class="fa fa-heart" aria-hidden="true"></i>
            <p>
              Loved
            </p>

          </div>
          <div id="camera">

            <i class="fa fa-camera" aria-hidden="true"></i> 
            <p>
              Clarity
            </p>
          </div>
          <div id="battery">
             <i class="fa fa-battery-full" aria-hidden="true"></i>
            <p>
              Power
            </p>

          </div>
              <div id="diamond">

            <i class="fa fa-diamond" aria-hidden="true"></i>
                <p>
                  Sharp 
                </p>
          </div>
          <div id="cloud">

             <i class="fa fa-cloud" aria-hidden="true"></i>
            <p>
              Cloud
            </p>
          </div>
          <div id="globe">

             <i class="fa fa-globe" aria-hidden="true"></i>
            <p>
              Global
            </p>
          </div>
          <div id="hd">

             <i class="fa fa-hdd-o" aria-hidden="true"></i>
            <p>
              Storage
            </p>
          </div>
             <div id="user">

             <i class="fa fa-user" aria-hidden="true"></i> 
               <p>
                 Safe
               </p>
          </div>
          <div id="shield">

             <i class="fa fa-shield" aria-hidden="true"></i>
            <p>
              Stabile
            </p>
          </div>
          <div id="wifi">

             <i class="fa fa-wifi" aria-hidden="true"></i>
            <p>
              Connected
            </p>
          </div>
          <div id="picture">
              <i class="fa fa-picture-o" aria-hidden="true"></i>
            <p>
              HD
            </p>

        </div>
      </div>
        </div>
       
      </div>
      <div id="pricing">
           <h1>
             Pricing
        </h1>
        <p>
          Choose a pricing plan that fits your needs
        </p>
        <div class="centeredDiv">
          <div id="products-grid">
          <div id="basic">
          <ul>
          <li class="titel"><h1>Basic</h1></li>
          <li class="selected"> <span>250</span> Photos </li>
          <li class="selected"> <span>10</span> Features </li>
          <li class="selected"> <span>No</span> Ads </li>
          <li class="selected"> <span>Office</span> hours Support </li>
          <li class="selected"> $25 </li>
          <li id="knop1"> <button> <i class="fa fa-download" aria-hidden="true"></i> Download </li></button>
        </ul>
        </div>
        <div id="premium">
          <ul>
           <li class="titel2"><h1>Premium</h1></li>
          <li class="selected"> <span>1000</span> Photos </li>
          <li class="selected"> <span>50</span> Features </li>
          <li class="selected"> <span>No</span> Ads </li>
          <li class="selected"> <span>Endless</span> Support </li>
          <li class="selected"> $99 </li>
            <li id="knop2"> <button> <i class="fa fa-download" aria-hidden="true"></i> Download </li></button>   
        </ul>
        </div>
        </div>
        </div>
        
        
        
      </div>
      <div id="footer">
        <i class="fa fa-facebook-official" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-snapchat" aria-hidden="true"></i>
        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <i class="fa fa-linkedin" aria-hidden="true"></i>
      </div>
    </div
  </body>
</html>