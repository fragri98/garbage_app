<!--display all the records -->

<?php
require_once 'connect.php';
require_once 'header.php';

if( isset($_POST['delete'])){
	$sql = "DELETE FROM users WHERE user_id=" . $_POST['userid'];
	if($con->query($sql) === TRUE){
		echo "<div class='alert alert-success'>Successfully delete day</div>";
	}
}

$sql 	= "SELECT * FROM users";
$result = $con->query($sql);

if( $result->num_rows > 0){
?>

<div class="container">
	<div class="jumbotron table-responsive-md" style="width: 100%; overflow-x: auto;">
		<h4>List of all Days</h4>
		<table class="table table-bordered table-striped">
			<tr>
				<td>Waste Type</td>
				<td>Day</td>
				<td>Start at</td>
				<td>End at</td>
				<td width="70px">Delete</td>
				<td width="70px">EDIT</td>
			</tr>
			<?php
			while( $row = $result->fetch_assoc()){
				echo "<form action='' method='POST'>";	//added
				echo "<input type='hidden' value='". $row['user_id']."' name='userid' />"; //added
				echo "<tr>";
				echo "<td>".$row['waste_type'] . "</td>";
				echo "<td>".$row['waste_day'] . "</td>";
				echo "<td>".$row['start_at'] . "</td>";
				echo "<td>".$row['end_at'] . "</td>";

				echo "<td><input type='submit' name='delete' value='Delete' class='btn btn-danger' /></td>";
				echo "<td><a href='edit.php?id=".$row['user_id']."' class='btn btn-info'>Edit</a></td>";
				echo "</tr>";
				echo "</form>"; //added
			}
			?>
		</table>
		<?php
	  } else {
			echo "<br><br>No Record Found";
		}
		?>
	</div>
</div>

<?php
require_once 'footer.php';
