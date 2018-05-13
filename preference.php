
<html>
    <head>
      <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" rel="stylesheet">
                </link>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/preference.css">
      

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


    </head>

    <body>
      <div class="nav">
      <nav class="navbar navbar-inverse bg-inverse">
                <a class="navbar-brand" href="#">
                    <img alt="" class="d-inline-block align-top" height="30" src="WandererLogo.png" width="30">
                    </img>
                </a>
            </nav>
        </div>
     
<div id="bootstrapOverride" class="container" >
  <div class="title">
    <p id="title">Pick Your Interests!</p>
    </div>
  

    <div class="row">
      
      <form method="post" enctype="multipart/form-data" action="MasonCopy.php">
      <div id="submit">
      <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
      <i class="material-icons right">send</i>
      </button>
    </div>
      <br>
       <label class="prefLabel" for="Amusement">
        <img src="https://img-aws.ehowcdn.com/750x428p/photos.demandstudios.com/getty/article/236/160/200393377-001.jpg" > 
        <div><span> Amusement Park <input type="checkbox" name="images[]" id="Amusement" value="amusement_park"></span></div>
      </label>
       <label class="prefLabel" for="aquarium">
        <img src="https://www.georgiaaquarium.org/images/default-source/default-album/penguins_1400x525_2.jpg?sfvrsn=1" > 
        <div><span> Aquarium <input type="checkbox" name="images[]"  id="aquarium" value="aquarium"></span></div>
      </label>
      <label class="prefLabel" for="art_gallery">
        <img src="https://d32dm0rphc51dk.cloudfront.net/IOHKf9_GfBThX1CrJpL-6Q/larger.jpg" > 
        <div><span> Art <input type="checkbox" name="images[]" id="art_gallery" value="art_gallery"></span></div>
      </label>
      <label class="prefLabel" for="bar">
        <img src="https://cdn.modernfarmer.com/wp-content/uploads/2017/08/beer-can-be-healthy.jpg" > 
        <div><span> Drinking <input type="checkbox" name="images[]"  id="bar" value="bar"></span></div>
      </label>
      <label class="prefLabel" for="bowling_alley">
        <img src="https://www.zodos.com/wordpress/wp-content/uploads/2014/03/openbowling_07.jpg" > 
        <div><span> Bowling <input type="checkbox" name="images[]" id="bowling_alley" value="bowling_alley"></span></div>
      </label>
      <label class="prefLabel" for="campground">
        <img src="https://recreation-acm.activefederal.com/assetfactory.aspx?did=7656" > 
        <div><span> Camping <input type="checkbox" name="images[]" id="campground" value="campground"></span></div>
      </label>
      <label class="prefLabel" for="casino">
        <img src="https://d1af89beukha9h.cloudfront.net/wp-content/uploads/2018/01/Casino-Gaming-Market-in-Philippines-thegem-blog-default.jpg" > 
        <div><span> Gambling <input type="checkbox" name="images[]" id="casino" value="casino"></span></div>
      </label>
      <label class="prefLabel" for="clothing_store">
        <img src="http://www.crystalandrusmorissette.com/wp-content/uploads/2016/12/iStock_000052027484_Large-e1448554779205.jpg" > 
        <div><span> Shopping<input type="checkbox" name="images[]" id="clothing_store" value="clothing_store"></span></div>
      </label>
      <label class="prefLabel" for="gym">
        <img src="https://cdn-ami-drupal.heartyhosting.com/sites/muscleandfitness.com/files/styles/full_node_image_1090x614/public/media/dumbbell-press-bench-man-workout-1109.jpg?itok=LJnrgpPv" > 
        <div><span> Working Out<input type="checkbox" name="images[]" id="gym" value="gym"></span></div>
      </label>
      <label class="prefLabel" for="zoo">
        <img src="http://svcdn.simpleviewinc.com/v3/cache/www_thisiscleveland_com/8D2E4309D5247A13FB0ECEDDC5DC0F37.jpg" > 
        <div><span> Zoo <input type="checkbox" name="images[]" id="zoo" value="zoo"></span></div>
      </label>
      <label class="prefLabel" for="stadium">
        <img src="http://www.trbimg.com/img-58910a9d/turbine/bal-ravens-announce-120-million-in-improvements-to-m-t-bank-stadium-20170131" > 
        <div><span> Sports <input type="checkbox" name="images[]" id="stadium" value="stadium"></span></div>
      </label>
      <label class="prefLabel" for="spa">
        <img src="https://2486634c787a971a3554-d983ce57e4c84901daded0f67d5a004f.ssl.cf1.rackcdn.com/lafayette-park-hotel/media/Lafayette-spa-header-59c144c3bf451.jpg" > 
        <div><span> Spa<input type="checkbox" name="images[]" id="spa" value="spa"></span></div>
      </label>
      <label class="prefLabel" for="restaurant">
        <img src="https://www.thewealthadvisor.com/sites/default/files/2017-12/41993-das-loft-sofitel-19to1.jpg" > 
        <div><span> Eating<input type="checkbox" name="images[]" id="restaurant" value="restaurant"></span></div>
      </label>
      <label class="prefLabel" for="night_club">
        <img src="https://media.pulseradio.net/media/transfer/img/articleimage/2016-03/clubbing.png" > 
        <div><span> Clubbing<input type="checkbox" name="images[]" id="night_club" value="night_club"></span></div>
      </label>
      <label class="prefLabel" for="museum">
        <img src="https://www.wien.info/media/images/dom-museum-wien-2017-ausstellungsansicht-19to1-1.jpeg" > 
        <div><span> Museum<input type="checkbox" name="images[]" id="museum" value="museum"></span></div>
      </label>
      <label class="prefLabel" for="movie_theater">
        <img src="https://www.gannett-cdn.com/-mm-/e57e321598c73bc42176fa4cc84c497f48725e03/c=0-101-2000-1231&r=x803&c=1600x800/local/-/media/2017/12/15/Wilmington/Wilmington/636489408776447783-121517-WIL-The-Cube-JM01.jpg" > 
        <div><span> Movies<input type="checkbox" name="images[]" id="movie_theater" value="movie_theater"></span></div>
      </label>

</form>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript" src="js/preference.js"></script>
    </body>
  </html>