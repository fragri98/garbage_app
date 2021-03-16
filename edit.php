<!--edit users table -->

<?php
require_once 'connect.php';
require_once 'header.php';
?>

<div class="container">
	<?php
	if(isset($_POST['update'])){
		if( empty($_POST['waste_type']) || empty($_POST['waste_day']) || empty($_POST['start_at']) || empty($_POST['end_at'])) {
			echo "Please fillout all required fields";
		}else{
			$waste_type  = $_POST['waste_type'];
			$waste_day  	= $_POST['waste_day'];
			$start_at 	= $_POST['start_at'];
			$end_at 	= $_POST['end_at'];
			$sql = "UPDATE users SET waste_type='{$waste_type}', waste_day = '{$waste_day}', start_at = '{$start_at}', end_at = '{$end_at}' WHERE user_id=" . $_POST['userid'];
			if( $con->query($sql) === TRUE){
				echo "<div class='alert alert-success'>Successfully updated</div>";
			}else{
				echo "<div class='alert alert-danger'>Error: There was an error while updating day info</div>";
			}
		}
	}

	$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
	$sql = "SELECT * FROM users WHERE user_id={$id}";
	$result = $con->query($sql);

	if($result->num_rows < 1){
		header('Location: index.php');
		exit;
	}

	$row = $result->fetch_assoc();
	?>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		<div class="box">
			<h4><i class="glyphicon glyphicon-calendar"></i>&nbsp;MODIFY Day</h4>
			<form action="" method="POST">
				<input type="hidden" value="<?php echo $row['user_id']; ?>" name="userid">
				<label for="waste_type">Waste Type</label>
				<input type="text" id="waste_type"  name="waste_type" value="<?php echo $row['waste_type']; ?>" class="form-control"><br>
				<label for="waste_day">Day</label>
				<select type="text"  name="waste_day" id="waste_day" value="<?php echo $row['waste_day']; ?>" class="form-control">
					<option>Monday</option>
					<option>Tuesday</option>
					<option>Wednesday</option>
					<option>Thursday</option>
					<option>Friday</option>
					<option>Saturday</option>
					<option>Sunday</option>
				</select><br>
				<label for="start_at">start at</label>
				<select type="text"  name="start_at" id="start_at" value="<?php echo $row['start_at']; ?>" class="form-control">
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
				<label for="end_at">end at</label>
				<select type="text"  name="end_at" id="end_at" value="<?php echo $row['end_at']; ?>" class="form-control">
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
				<br>
				<input type="submit" name="update" class="btn btn-success" value="Update">
			</form>
		</div>
	</div>
</div>
</div>

<?php

 require_once 'footer.php';
