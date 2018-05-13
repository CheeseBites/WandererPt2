
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8"> </meta>
            <meta content="ie=edge" http-equiv="x-ua-compatible"></meta>
                <title>
                </title>
                <meta content="" name="description"> </meta>
                <meta content="width=device-width, initial-scale=1" name="viewport"></meta>
                <link href="css/MasonTest.css" rel="stylesheet" type="text/css"></link>
                <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" rel="stylesheet">
                </link>
                <link type="text/css" rel="stylesheet" href="css/preference.css"/>
       
        <script>


      var map;
      var infowindow;

      function initMap() {
        var pyrmont = {lat: 34.242352, lng: -118.528978};//User location

        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 14
        });

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          location: pyrmont,
          radius: 2500,//radius of how far from user
          type: [<?php
              if(isset($_POST['submit'])){
                $images=$_POST['images'];
                foreach($images as $image){
                  echo "'" . $image . "', ";
                }
              }
             ?>]//archetype
        }, callback);

            //here

      var ac = new google.maps.places.Autocomplete(
        (document.getElementById('autocomplete')), {
          types: ['geocode']
        });
    
      ac.addListener('place_changed', function() {
    
        var place = ac.getPlace();
    
        if (!place.geometry) {
          // User entered the name of a Place that was not suggested and
          // pressed the Enter key, or the Place Details request failed.
          window.alert("No details available for input: '" + place.name + "'");
          return;
        }
            
            pyrmont = {lat: place.geometry.location.lat(), lng: place.geometry.location.lng()};//User location

        map = new google.maps.Map(document.getElementById('map'), {
          center: pyrmont,
          zoom: 14
        });

        infowindow = new google.maps.InfoWindow();
        var service = new google.maps.places.PlacesService(map);
        service.nearbySearch({
          location: pyrmont,
          radius: 2500,//radius of how far from user
          type: [<?php
              if(isset($_POST['submit'])){
                $images=$_POST['images'];
                foreach($images as $image){
                  echo "'" . $image . "', ";
                }
              }
             ?>]//archetype
        }, callback);
      });


      }

      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      }

      function createMarker(place) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }

      function changeTitle(activity_id){
        var element = document.getElementById(activity_id).children;
    if(element[0].style.opacity != 0.4){
        element[0].style.opacity = 0.4;        
    }else{
        element[0].style.opacity = 1;
    }
}

function distanceSelector(id){
    var element = document.getElementById(id);
    var selectorElement = document.getElementById('mileSelector');

    selectorElement.innerHTML = element.innerHTML;
}
    </script>


    </head>
    <body>
    	<div class="nav">
    	<nav class="navbar navbar-inverse bg-inverse">
                <a class="navbar-brand" href="#">
                    <img alt="" class="d-inline-block align-top" height="30" src="WandererLogo.png" width="30">
                    </img>
                </a>
                		<div class="nav-list">
                        <a class="nav-item nav-link" href="#">
                            Profile
                        </a>
                        <a class="nav-item nav-link" href="preference.php">
                            Preferences
                        </a>
                    	</div>
            </nav>
        </div>


		

<div id="map"></div>
        
            
            <div id="locationField">
  <input id="autocomplete" placeholder="Enter your address"
          type="text"></input>
</div>

        <div class="container"> 
            
            <div class="grid">
                <div class="grid-sizer">
                </div>
                <div class="gutter-sizer">
                </div>
                <div class="grid-item ">
                    <img class= "myImg" alt="Some underlying Text" src="https://lh6.googleusercontent.com/proxy/VGB_zaqNzNbmGqhfyybaU5I3Cw_qbSUBCdQPea1srBYl6d-IGHwA6Kj94UGP4crooIizxR1uNPbJ_SVdhfQaJlAtmwnETw6SfU7ocnynPCwsolNgcz13EbEE2nj7BufmVQFJeWiEOjFtiPMFxdR1j9FryA=w408-h229-k-no"/>
                <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div class="grid-item">
                    <img class= "myImg" alt="Some underlying Text" src="https://lh5.googleusercontent.com/p/AF1QipMqtLH9nQEWOBKGoaQOzIo0p_naZ39AuKSEHR-3=w408-h544-k-no"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div class="grid-item">
                    <img class= "myImg" alt="Some underlying Text" src="https://lh5.googleusercontent.com/p/AF1QipPYQHWU5siLBbGQIj_lXUA7bWCh9XCvWPVl0Y--=w408-h272-k-no"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div class="grid-item ">
                    <img class= "myImg" alt="Some underlying Text" src="https://static1.squarespace.com/static/59cbf9d8c027d881a41307be/t/59e93275cf81e08c936381d7/1509471759204/yoga+studio-32.jpg?format=2500w"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div class="grid-item">
                    <img class= "myImg" alt="Some underlying Text" src="https://i0.wp.com/warriorpunch.com/wp-content/uploads/2012/12/Fancy-Boxing-Gym.jpg?resize=696%2C461"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div class="grid-item">
                    <img class= "myImg" alt="Some underlying Text" src="https://lh5.googleusercontent.com/p/AF1QipOQfJrLKV8zxoDtDpjIX4bwqvne1QVa6G980aPt=w408-h306-k-no"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div class="grid-item">
                    <img class= "myImg" alt="Some underlying Text" src="https://lh5.googleusercontent.com/p/AF1QipMpk7Fyrf1btAjKXX29Ex87IpgWpvH5tnJqbMc7=w408-h229-k-no"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div class="grid-item">
                    <img class= "myImg" alt="Some underlying Text" src="https://lh5.googleusercontent.com/p/AF1QipP2-T60lPJhGe3BvO7IPwO76saXPnCp-e6qMdg=w408-h229-k-no"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div class="grid-item">
                    <img class= "myImg" alt="Some underlying Text" src="https://lh6.googleusercontent.com/proxy/hly1KosFNE8m2t-650-gEaD9q1YFCoRLd1h-LS9QAQb962boB75nXhqgRFpR4jL-4jni1fMOADeTVo_T1vDkZfBEcj-of5JD7Fc8XEq2emcIElRr61kM59gGzhEs5pzU79JTRd2cwO--P3Hg4IvqEREcf0ChHg=w408-h228-k-no"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div class="grid-item">
                    <img class= "myImg" alt="Some underlying Text" src="https://icdn3.digitaltrends.com/image/walmart-cyber-monday-720x720.jpg?ver=1.jpg"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div class="grid-item">
                    <img class= "myImg" alt="Some underlying Text" src="https://media.glassdoor.com/l/b9/08/eb/08/target-store.jpg"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div class="grid-item">
                    <img class= "myImg" alt="Some underlying Text" src="https://res-5.cloudinary.com/westfielddg/image/fetch/c_lfill,f_auto,g_center,h_450,q_auto,w_1200/https://content.westfield.com/westfield-corp/us/centre/topanga/services/topanga-services-landing_895x396.jpg"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div  class="grid-item">
                    <img class= "myImg" alt="Some underlying Text" src="http://ktgy.com/wp-content/uploads/2016/01/Northridge-Fashion-Center-5-920x684.jpg"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div class="grid-item">
                    <img class= "myImg" alt="Some underlying Text" src="https://lh5.googleusercontent.com/p/AF1QipNOhjG0G0h1RwQgf-n-bT29s5pW7SjiGMPN1tXY=w408-h306-k-no"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div class="grid-item">
                    <img class= "myImg" alt="Some underlying Text" src="https://lh5.googleusercontent.com/p/AF1QipPKueXNcQueaUkkMORx9Rbyv6A3odEvdc7TUhxE=w408-h263-k-no"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
                <div class="grid-item">
                    <img class= "myImg" alt="Some underlying Text" src="https://lh5.googleusercontent.com/p/AF1QipPz6lHwY10Pz_qX2ZSzHgmKMBq4QpglLtaL099Z=w408-h306-k-no"/>
                    <div class="captionLayer"><p class = "caption"> Pico me Duck </p></div>
                </div>
            </div>


        </div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwsb5jZ-aewfHgbsYcuTCitr9CHPEDoa0&libraries=places&callback=initMap" async defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
        </script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js">
        </script>
        <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js">
        </script>

        <script src="js/MasonTest.js" async defer>
        </script>
    </body>
</html>