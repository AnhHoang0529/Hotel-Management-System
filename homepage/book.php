<?php include 'Header.php';

?>

<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<h3>Reservation</h3>
<form role="form" method="post" action="connect.php">
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="Name" name="name">
        </div>
        <div class="form-group">
            <input type="email" class="form-control"  placeholder="Email" name="mail">
        </div>
        <div class="form-group">
            <input type="Phone" class="form-control"  placeholder="Phone" name="phone">
        </div>        
        <div class="form-group">
            <div class="row">
            <div class="col-xs-4">
            <select class="form-control" name="room_type">
              <option>Type of Rooms</option>
              <option>Single Room</option>
              <option>Double Room</option>
              <option>Deluxe Room</option>
            </select>
            </div>
            <div class="col-xs-4">
            <select class="form-control" name="adult">
              <option>No. of Adult</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
            </div>
                <div class="col-xs-4">
            <select class="form-control" name="children">
              <option>No. of Children</option>
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
            </select>
            </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
            <div class="col-xs-4">
                <label for="datein">Check-in Date</label>
              <input type='date' placeholder="dd-mm-yyyy" name='datein'>
            </div>
            <div class="col-xs-4">
                <label for="dateout">Check-out Date</label>
              <input type='date' placeholder="dd-mm-yyyy" name='dateout'>
            </div>
          <div class="col-xs-4">
              <input type="number" min ="1" name="days_of_stay" placeholder="Days of Stay" class="form-control">
            </div>
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control"  placeholder="Message" rows="4" name="message"></textarea>
        </div>
        <button class="btn btn-default">Submit</button>
    </form>    
</div>
</div>  
</div>


<?php include 'footer.php'; ?>

