<!--homepage -->

<?php
require_once 'header.php';
require_once 'connect.php';

$sql = "SELECT * FROM users";
$result = $con->query($sql);
?>

<div class="container">
  <div class="jumbotron">
    <h2>R&G APP</h2>
    <hr style="height:1px;background-color:#333333; margin-bottom:30px;">
    <h4>Recycling and Garbage Collection Schedule</h4>
    <p>R&G App helps you to mark down the recycling and garbage days. This allows you to respect the environment and make the world cleaner.</p>
    <h4>SELECT A DAY</h4>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Waste Type</th>
          <th>Day</th>
          <th>Start at</th>
          <th>End at</th>
        </tr>
      </thead>
      <?php
      echo "<form name='filterform' method='POST' action='index.php'>";
      echo "<select name='filter' id='filter' onchange='this.form.submit();' style='margin-bottom: 15px;'>";
      echo '<option value="">--- Select ---</option>';

      while ($row = $result->fetch_assoc()){
        echo "<option value='" . $row['waste_day'] ."'>" . $row['waste_day'] ."</option>";
      }
      echo "</select>";
      echo "</form>";
      $Search = ($_REQUEST['filter']);
      $query = "SELECT * FROM users WHERE waste_day='$Search'";
      $res = $con->query($query);
      while ($info = $res->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$info['waste_type'] . "</td>";
        echo "<td>".$info['waste_day'] . "</td>";
        echo "<td>".$info['start_at'] . "</td>";
        echo "<td>".$info['end_at'] . "</td>";
        echo "</tr>";
      }
      ?>
    </table>
  </div>
</div>

<?php
require_once 'footer.php';
?>
