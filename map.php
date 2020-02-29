

<!DOCTYPE html>
<html>
  <head>
    <title>GOOGLE Autocomplete</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyDMAYAZDPh2hVwUqQxpOk4LcvcW1jU73vI"></script>
<script>

var searchInput = 'search_input';

$(document).ready(function () {
    var autocomplete;
    autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
        types: ['geocode'],
    });
	
    google.maps.event.addListener(autocomplete, 'place_changed', function () {
        var near_place = autocomplete.getPlace();
        document.getElementById('loc_lat').value = near_place.geometry.location.lat();
        document.getElementById('loc_long').value = near_place.geometry.location.lng();
		
        document.getElementById('latitude_view').innerHTML = near_place.geometry.location.lat();
        document.getElementById('longitude_view').innerHTML = near_place.geometry.location.lng();
    });
});


$(document).on('change', '#'+searchInput, function () {
    document.getElementById('latitude_input').value = '';
    document.getElementById('longitude_input').value = '';
	
    document.getElementById('latitude_view').innerHTML = '';
    document.getElementById('longitude_view').innerHTML = '';
});
</script>
  </body>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
    </style>
  </head>
  <body>
<div class="container">
           <form class="form-horizontal" method="POST" action="save.php">

<!-- Autocomplete location search input --> 
<div class="form-group">
    <label>Location:</label>
    <input type="text"  required autocomplete='no' class="form-control" name="place_name" id="search_input" placeholder="Type address..." />
    <input type="hidden" name="loc_lat" id="loc_lat" />
    <input type="hidden" name="loc_long" id="loc_long" />
</div>

<!-- Display latitude and longitude -->
<div class="latlong-view">
    <p><b>Latitude:</b> <span id="latitude_view"></span></p>
    <p><b>Longitude:</b> <span id="longitude_view"></span></p>
</div>
<label>
Name of the city</label>
 <select name="city" required class="selectpicker">
  <option>Mumbai</option>
  <option>Ketchup</option>
  <option>Surat</option>
  <option>Jaipur</option>
</select>
<br />
<br />
<label>
Select Month</label>
 <select  name="month"required class="selectpicker">
  <option>January</option>
  <option>February</option>
  <option>March</option>
  <option>April</option>
  <option>May</option>
  <option>June</option>
  <option>July</option>
  <option>August</option>
  <option>September</option>
  <option>October</option>
  <option>November</option>
  <option>December</option>
</select>
<br />
<br />

               	<label for="time_in" class="col-sm-1 control-label">Time </label>
<div class="col-sm-3">
                  		<div class="bootstrap-timepicker">
                    		<input type="text" autocomplete="off" class="  form-control timepicker" id="time_in"  name="time">
                    	</div>
                    	</div>
				<br />
				<br />
				
				            <div class="col-sm-3">
	<button type="submit" class="btn btn-primary btn-flat align-center " name="add"><i class="fa fa-save"></i> Save</button></div>
            	</form>

 </div>
 </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>

  <script type="text/javascript" src="  https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
<script>
   //Timepicker
  $('.timepicker').timepicker({
    showInputs: false
  })
  </script>
</html>

