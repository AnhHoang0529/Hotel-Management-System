<!DOCTYPE html>
<?php include 'Header.php';?>


<!-- banner -->
<div class="banner">  
    <div id="Banner" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active"><img src="images/photos/banner1.png" class="img-responsive" alt="slide"></div>                
            <div class="item  height-full"><img src="images/photos/banner2.png"  class="img-responsive" alt="slide"></div>
            <div class="item  height-full"><img src="images/photos/banner3.png"  class="img-responsive" alt="slide"></div>
            <div class="item  height-full"><img src="images/photos/banner4.png"  class="img-responsive" alt="slide"></div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#Banner" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
        <a class="right carousel-control" href="#Banner" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
   
    </div>
    
    <div class="w3-padding w3-display-middle w3-hide-small" style="width:65%;opacity:0.9">
    <div class="w3-container w3-2020-ash">
      <h2><i class="fa fa-bed w3-margin-right"></i>VIRESORT</h2>
    </div>
    <div class="w3-container w3-white w3-padding-16">
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> Check In</label>
            <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckIn" required>
          </div>
          <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> Check Out</label>
            <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY" name="CheckOut" required>
          </div>
        </div>
        <div class="w3-row-padding" style="margin:8px -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-male"></i> Adults</label>
            <input class="w3-input w3-border" type="number" value="1" name="Adults" min="1" max="6">
          </div>
          <div class="w3-half">
            <label><i class="fa fa-child"></i> Kids</label>
          <input class="w3-input w3-border" type="number" value="0" name="Kids" min="0" max="6">
          </div>
        </div>
        <button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i> Search availability</button>
      </form>
    </div>
    </div>
</div>

<div class="w3-content" style="max-width:1532px;">

  <div class="w3-container w3-margin-top" id="rooms">
    <h3>Rooms</h3>
  </div>
  
  <div class="w3-row-padding">
    <div class="w3-col m3">
      <label><i class="fa fa-calendar-o"></i> Check In</label>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY">
    </div>
    <div class="w3-col m3">
      <label><i class="fa fa-calendar-o"></i> Check Out</label>
      <input class="w3-input w3-border" type="text" placeholder="DD MM YYYY">
    </div>
    <div class="w3-col m2">
      <label><i class="fa fa-male"></i> Adults</label>
      <input class="w3-input w3-border" type="number" placeholder="1">
    </div>
    <div class="w3-col m2">
      <label><i class="fa fa-child"></i> Kids</label>
      <input class="w3-input w3-border" type="number" placeholder="0">
    </div>
    <div class="w3-col m2">
      <label><i class="fa fa-search"></i> Search</label>
      <button class="w3-button w3-block w3-2020-ash">Search</button>
    </div>
  </div>

  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="images/photos/room_single.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <br>
        <h3>Single Room</h3>
        <h6 class="w3-opacity">From $99</h6>
        <p>Single bed</p>
        <p>15m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
        <button class="w3-button w3-block w3-2020-ash w3-margin-bottom"><a href="book.php">Choose Room</a></button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="images/photos/room_double.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
          <br>
        <h3>Double Room</h3>
        <h6 class="w3-opacity">From $149</h6>
        <p>Queen-size bed</p>
        <p>25m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-cutlery"></i></p>
        <button class="w3-button w3-block w3-2020-ash w3-margin-bottom"><a href="book.php">Choose Room</a></button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="images/photos/room_deluxe.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
          <br>
        <h3>Deluxe Room</h3>
        <h6 class="w3-opacity">From $199</h6>
        <p>King-size bed</p>
        <p>40m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i> <i class="fa fa-glass"></i> <i class="fa fa-cutlery"></i></p>
        <button class="w3-button w3-block w3-2020-ash w3-margin-bottom"><a href="book.php">Choose Room</a></button>
      </div>
    </div>
  </div>

<!-- services -->
<div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/12.png" class="img-responsive" alt="slide"></div>                
                <div class="item  height-full"><img src="images/photos/13.png"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/14.png"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/15.png"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Rooms<a href="room.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/7.png" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/8.png"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/9.png"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/10.png"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/11.png"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Services<a href="service.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4">
            <!-- RoomCarousel -->
            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/1.png" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/2.png"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/3.png"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/4.png"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/5.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/6.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- RoomCarousel-->
            <div class="caption">Food and Drinks<a href="food.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div>
<!-- services -->
 


<?php include 'footer.php';?>
