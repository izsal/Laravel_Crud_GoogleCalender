<!DOCTYPE html>
<html lang="en">
<head>
  <title>Booking App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="card">
  <div class="card-header">
    Booking the Appoinment
  </div>
  <div class="card-body">
    <form action="{{ route('booking.store') }}" method="post">
    	@csrf

    	  <label for="fname">Appointment for:</label>
    	  <br>
		  <textarea name="name" id="" cols="20" rows="5"></textarea><br>
		  <label for="meeting_time">Choose a time for meeting: </label>
		  <br>
		  <input type="date" name="meeting_date">
		  <input type="time"  name="meeting_time">
		  <br><br>

		  <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</div>
</div>

</body>
</html>


