<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <link href="style.css" rel="stylesheet"></link>
  <script src="azzaba.js" ></script>
  <link rel="stylesheet" href="package/leaflet.css" />
  <script src="package/leaflet.js"></script>

  <title>Azzaba</title>
</head>

<body>
  <section class="header">
    <ul class="menu">
      <li><a href="#header" >Home</a></li>
      <li><a href="#map">Map</a></li>
      <li><a href="#sliders" >Monuments & History</a></li>
      <li><a href="" >Comments</a></li>
      <li><a href="">Contact US</a></li>
    </ul>
  </section>

  <div id="map"></div>

  <div class="inside">
    <h1>Azzaba City <font color="#F7C04A"><b>JEMMAPES</b></font>
    </h1>
  </div>

  <div class="button">
    <a class="watch" href="https://fb.watch/kST1cVfHdU/" target="_blank">Watch Now</a>
  </div>




 <section id="sliders">
  <!-- Slider 1 -->
<div class="slider" id="slider1"> 
  <!-- Slides -->
  <div style="background-image:url(azzaba1.jpg)"></div>
  <div style="background-image:url(azzaba2.jpg)"></div>
  <div style="background-image:url(azzaba4.jpg)"></div> 
  <div style="background-image:url(azzaba5.jpg)"></div>
  <div style="background-image:url(azzaba9.jpg)"></div>
  <div style="background-image:url(azzaba13.jpg)"></div>
    <!-- The Arrows -->
  <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
          <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
      </svg></i>
  <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
          <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path>
      </svg></i>
  <!-- Title Bar -->
  <span class="titleBar">
      <h1>Monuments</h1>
  </span>
</div>

<br>

<div class="row2Wrap">
  <!-- Slider 2 -->
  <div class="slider" id="slider2">

      <div style="background-image:url(azzaba3.jpg)"></div>
      <div style="background-image:url(azzaba10.jpg)"></div>
      <div style="background-image:url(azzaba11.jpg)"></div>
      <div style="background-image:url(azzaba12.jpg)"></div>

      <i class="left" class="arrows" style="z-index:2; position:absolute;">
          <svg viewBox="0 0 100 100">
              <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
          </svg>
      </i>
      <i class="right" class="arrows" style="z-index:2; position:absolute;">
          <svg viewBox="0 0 100 100">
              <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path>
          </svg>
      </i>
      <!-- Title Bar -->
      <!--     
      <span class="titleBar"> 
          <h1>I am like a leaf in the wind.</h1> 
          <p>Watch me soar!</p>
      </span> 
      -->
  </div>

  <!-- <h3>Individual slide text</h3> -->

  <!-- Slider 3 -->
  <div class="slider" id="slider3">
      <div style="background-image:url(azzaba6.jpg)">
          <span>
              <h2>Masjid Al Forqan</h2>
          </span>
      </div>
      <div style="background-image:url(azzaba7.jpg)">
          <span>
              <h2>Mosque alforqan</h2>
          </span>
      </div>
      <div style="background-image:url(azzaba8.jpg)">
          <span>
              <h2>Masjid dar Al Hijra (Best mosque in Azzaba)</h2>
          </span>
      </div>
      <!-- The Arrows -->
      <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100">
              <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
          </svg></i>
      <i class="right" class="arrows" style="z-index:2; position:absolute;">
          <svg viewBox="0 0 100 100">
              <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path>
          </svg></i>
      <!-- Title Bar -->
      <!--     <span class="titleBar">
      <h1>I am like a leaf in the wind.</h1> 
      <p>Watch me soar!</p>
  </span> -->
  </div>

</div>

 </section>


  <script>
    var map = L.map("map", {
      scrollWheelZoom: false
    }).setView([36.7411, 7.1117], 13);

    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors',
    }).addTo(map);
  </script>

</body>

</html>
