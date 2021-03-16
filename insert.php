<!--insert data into the database -->

<?php
require_once 'connect.php';
require_once 'header.php';
?>

<div class="container">
	<?php
	if(isset($_POST['addnew'])){
		if( empty($_POST['waste_type']) || empty($_POST['waste_day']) || empty($_POST['start_at']) || empty($_POST['end_at']) ){
			echo "Please fillout all required fields";
		}else{
			$waste_type  = $_POST['waste_type'];
			$waste_day  	= $_POST['waste_day'];
			$start_at  	= $_POST['start_at'];
			$end_at  	= $_POST['end_at'];
			$sql = "INSERT INTO users(waste_type,waste_day,start_at,end_at) VALUES('$waste_type','$waste_day','$start_at','$end_at')";
			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully added new day</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while adding new day</div>";
			}
		}
	}
	?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="box">
				<h4><i class="glyphicon glyphicon-calendar"></i>&nbsp;ADD NEW DAY</h4>
				<form action="" method="POST">
					<label for="waste_type">Waste Type</label>
					<input type="text" id="waste_type"  name="waste_type" class="form-control"><br>
					<label for="waste_day">Waste day</label>
					<select id="waste_day"  name="waste_day" class="form-control">
						<option>Monday</option>
						<option>Tuesday</option>
						<option>Wednesday</option>
						<option>Thursday</option>
						<option>Friday</option>
						<option>Saturday</option>
						<option>Sunday</option>
					</select><br>
					<label for="start_at"><i class="glyphicon glyphicon-time"></i>&nbsp;Start at</label>
					<select  id="start_at"  name="start_at" class="form-control"><br>
						<option>7:00</option>
						<option>8:00</option>
						<option>9:00</option>
						<option>10:00</option>
						<option>11:00</option>
						<option>12:00</option>
						<option>13:00</option>
						<option>14:00</option>
						<option>15:00</option>
						<option>16:00</option>
						<option>17:00</option>
						<option>18:00</option>
						<option>19:00</option>
						<option>20:00</option>
					</select><br>
					<label for="end_at"><i class="glyphicon glyphicon-time"></i>&nbsp;End at</label>
					<select id="end_at"  name="end_at" class="form-control"><br>
						<option>7:00</option>
						<option>8:00</option>
						<option>9:00</option>
						<option>10:00</option>
						<option>11:00</option>
						<option>12:00</option>
						<option>13:00</option>
						<option>14:00</option>
						<option>15:00</option>
						<option>16:00</option>
						<option>17:00</option>
						<option>18:00</option>
						<option>19:00</option>
						<option>20:00</option>
					</select>
					<br>
					<br>
					<input type="submit" name="addnew" class="btn btn-success" value="Add New">
				</form>
			</div>
		</div>
	</div>
</div>

<?php
require_once 'footer.php';
