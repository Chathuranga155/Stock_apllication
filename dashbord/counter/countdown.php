<!DOCTYPE html >
<html >
<head>

<title>Countdown Timer</title>

</head>

<body>
<?php

$hostname= "sql206.byetcluster.com";
$username= "b33_30186218";
$password="6FLNAV2Pf2U8t8J";
$dbname = "b33_30186218_stockm";

$con = mysqli_connect($hostname,$username,$password,$dbname);
if (!$con)
  {
  echo "error";
  }



$result = mysqli_query($con,"SELECT * FROM stock ");

$numrow = mysqli_num_rows($result);

if ($numrow == 0)
{
	die('No record found.');
}

$row = mysqli_fetch_row($result);

$closedate = date_format(date_create($row[7]), 'm/d/Y H:i:s');
echo "Closing Date: " . $closedate;
?>
<p>Time Left:
<script language="JavaScript">
TargetDate = "<?php echo $closedate ?>";
BackColor = "palegreen";
ForeColor = "navy";
// CountActive = true;
CountStepper = -1;
// LeadingZero = true;
DisplayFormat = "%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";
FinishMessage = "Bidding closed!";
</script>
<script language="JavaScript" src="countdown.js"></script>
</p>

</body>
</html>
