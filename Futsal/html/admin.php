
<?php
	session_start();
	if (isset($_SESSION['userlogin'])) {
		header("location: ../html/admin.php");
	}
 
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION);
    header("location: ../userlogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="..\style\admin-style.css">

    <script src="https://kit.fontawesome.com/c63ef4dfe1.js" crossorigin="anonymous"></script>

	<title>Admin</title>
</head>
<body>
	<header class="header">
      <div class="container-custom">
      <nav class="nav">
        
          <a href="" class="logo"> <img src="..\img\logo.png"></a>
          <div  class="hamburger-menu">
             <i class="fas fa-bars"></i>
             <i class="fas fa-times"></i>
          </div>

          <ul class="nav-list">
            <li class="nav-item">
              <a href="../html/admin.php" class="nav-link"><i class="fas fa-home"></i>Dashboard</a>
            </li>
             <li class="nav-item">
              <a href="index.php?logout=true" class="nav-link"><i class="fas fa-sign-out-alt"></i>Log Out</a>
            </li>
            
          </ul>
        </div>
      </nav>
    </header>

	<section id="table-data">

		<h1>Booking List</h1>
		<?php 
		include('../deleteuser.php');

			$db = mysqli_connect('localhost', 'root', '', 'userbookings');
			$user_check_query = "SELECT * from users ORDER BY date";
			$result = mysqli_query($db, $user_check_query);
			 echo "<table class='container table table-hover'>"; // start a table 
			 echo "<thead>";
			 echo "<tr>
			 			<th>Name</th>
			 			<th>Lastname</th>
			 			<th>Phone Number</th>
			 			<th>Start time</th>
			 			<th>End time</th>
			 			<th>Date</th>
			 		</tr>";
			 echo "</thead";

				while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
					if($row['futsalname'] == 'shankhamul futsal'){
					
							echo "<tr>
									<td>" . $row['name'] . "</td>
									<td>" . $row['lastname'] . "</td>
									<td>" . $row['phonenum'] . "</td>
									<td>" . $row['time'] . "</td>
									<td>" . $row['endtime'] . "</td>
									<td>" . $row['date'] . "</td>
									<td><button class='btn btn-primary btn-delete'><a href='../deleteuser.php?delete=".$row['id']."'>Delete</a></button></td>
								</tr>";  
						}
							
						}




				echo "</table>"; //Close the table in HTML

				mysqli_close($db); // close out the database connection
						?>

	</section>


	<section id="add">
		 <div class="book-form">
		 	<?php



				$errors = array();


				//Connect to Database
				$db = mysqli_connect('localhost', 'root', '', 'userbookings') or die('could not connect');

				if ($_SERVER['REQUEST_METHOD'] == 'POST'){
					$username = $_POST['username'];
					$lastname = $_POST['lastname'];
					$email = $_POST['email'];
					$phonenum = $_POST['phonenum'];
					$time = $_POST['time'];
					$endtime = $_POST['endtime'];
					$date = $_POST['date'];
					$futsalname = $_POST['futsalname'];

				//check for already booked
					$user_check_query = "SELECT * FROM users WHERE time = '$time' or endtime = '$endtime' or date = '$date' LIMIT 1";
					$result = mysqli_query($db, $user_check_query);
					if ($row = mysqli_fetch_assoc($result)) {
						if ($row['time'] === $time) {
							if($row['endtime'] === $endtime){
								if($row['date'] === $date){

									array_push($errors, "Time is not available");
						}

						}
						}
						
					}



				if(count($errors) == 0){
				$query = "INSERT INTO users (name, lastname, email, phonenum, time, endtime, date, futsalname) VALUES ('$username', '$lastname', '$email', '$phonenum', '$time', '$endtime', '$date', '$futsalname')";

					mysqli_query($db,$query);
					header("location: ..\html\admin.php");
				}

				}



			?>

			<h1>Update</h1>


            <form method="POST" action="admin.php" class="container">
              <div class="row">
              <div class="col-md-6">
                <input type="text" name="username" placeholder = "Name" class="form-control">
              </div>

              <div class="col-md-6">
                <input type="text" name="lastname" placeholder="Last Name" class="form-control">
              </div>

              <div class="col-md-12">
                <input type="number" name="phonenum" placeholder="Phone Number" class="form-control">
              </div>

              <div class="col-md-12">
                <input type="email" name="email" placeholder="abc@gamil.com" class="form-control">
              </div>

              <div class="col-md-3">
                <input type="time" name="time" class="form-control">
              </div>

              <div class="col-md-3">
                <input type="time" name="endtime" class="form-control">
              </div>


              <div class="col-md-6">
                <input type="date" name="date" class="form-control">
              </div>

               <div class="col-md-12">
                <input type="text" name="futsalname" class="form-control" value="shankhamul futsal">
              </div>



              </div>

              <button class="btn btn-primary btn-update" type="submit" value="submit"> Save</button>

            </form>
          
       </div>
	</section>






	 <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script type="text/javascript" src="..\js\webpagenav.js"></script>
</body>
</html>