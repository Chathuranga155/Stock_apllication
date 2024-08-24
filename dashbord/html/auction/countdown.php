<!DOCTYPE html>
<html>

<head>

  <title>Countdown Timer</title>

</head>

<body>
  <?php
  $con = mysqli_connect("sql206.byetcluster.com", "b33_30186218", "6FLNAV2Pf2U8t8J", "b33_30186218_stockm");
  if (!$con) {
    echo "error";
  }



 
   $query1 = "SELECT *  FROM stock";
   $result = mysqli_query($con, $query1);


   


$numrow = mysqli_num_rows($result);

if ($numrow == 0)
{
	die('No record found.');
}

$row = mysqli_fetch_row($result);
echo "Description: " . $row[1] . "<br />";
$closedate = date_format(date_create($row[7]), 'm/d/Y H:i:s');
echo "Closing Date: " . $closedate;
?>
<p>Time Left:
<script language="JavaScript">
TargetDate = "<?php echo $closedate ?>";
BackColor = "palegreen";
ForeColor = "navy";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
FinishMessage = "Bidding closed!";
</script>
<script language="JavaScript" src="../../js/countdown.js"></script>
</p>













</body>

</html>