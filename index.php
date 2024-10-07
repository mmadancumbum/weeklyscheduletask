<!DOCTYPE html>
<html lang="en">
<head>
  <title>Weekly Time Schedule</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  
  
<div style="text-align:center;padding-bottom:20px">
<h2>Weeklly schedule</h2>
  <form action="#">
    <label for="week">Select a week:</label>
    <input type="week" id="week" name="week" onchange=getWeekNumber()>
    <input type="submit" value="Submit">
  </form>
</div>

<center>
  <table class="table table-bordered center" style="width:80%" >
    <thead>
      <tr>
        <th>Sunday</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
      </tr>
    </thead>
    <!-- <div class="container"> -->
  
    <tbody>
    <!-- <div id="week123"></div> -->


<?php
$filename = "data.xml";

try {
    $xml = simplexml_load_file($filename);
    
    $week_no =  $_COOKIE["week_no"];

    foreach ($xml->$week_no as $Week14) 
    {

        foreach($Week14->Marketing_Team as $Marketing_Team)
        {
     ?>
            <tr>
                <td><b>Marketing Team</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php

            foreach($Marketing_Team as $emp)
            {
            ?>
                
                <tr>
                <td><?php echo $emp->sunday; ?></td>
                <td><?php echo $emp->monday; ?></td>
                <td><?php echo $emp->tuesday; ?></td>
                <td><?php echo $emp->wednesday; ?></td>
                <td><?php echo $emp->thursday; ?></td>
                <td><?php echo $emp->friday; ?></td>
                <td><?php echo $emp->saturday; ?></td>
              </tr>
        <?php

            }
        }

        foreach($Week14->Techno_Team as $Techno_Team)
        {
            ?>

            <tr>
                <td><b>Techno Team</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php

            foreach($Techno_Team as $emp)
            {
        ?>
                <tr>
                <td><?php echo $emp->sunday; ?></td>
                <td><?php echo $emp->monday; ?></td>
                <td><?php echo $emp->tuesday; ?></td>
                <td><?php echo $emp->wednesday; ?></td>
                <td><?php echo $emp->thursday; ?></td>
                <td><?php echo $emp->friday; ?></td>
                <td><?php echo $emp->saturday; ?></td>
              </tr>
        <?php

            }
        }

        foreach($Week14->Support_Team as $Support_Team)
        {

            ?>

            <tr>
                <td><b>Support Team</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            foreach($Support_Team as $emp)
            {
        ?>
                <tr>
                <td><?php echo $emp->sunday; ?></td>
                <td><?php echo $emp->monday; ?></td>
                <td><?php echo $emp->tuesday; ?></td>
                <td><?php echo $emp->wednesday; ?></td>
                <td><?php echo $emp->thursday; ?></td>
                <td><?php echo $emp->friday; ?></td>
                <td><?php echo $emp->saturday; ?></td>
              </tr>
        <?php

            }
        }

    }
    } catch (Exception $e) {
        echo "ERROR: " . $e->getMessage();
    }
    
    
    ?>

<!-- Including CSS file -->
<style>
    <?php include 'style.css'; ?>
</style>


      
    </tbody>
  </table>
</center>
<!-- </div> -->

</body>
</html>

<script>

function getWeekNumber()
{
    document.cookie = week_no + '=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    var val = document.getElementById("week").value;
    var lastDigit = val.toString().slice(-2);
    // alert('Week'+lastDigit);
    var week_no = 'Week'+lastDigit;
    document.cookie='week_no='+week_no;
    document.getElementById("week_no").innerHTML = 'Week no - ' + lastDigit;
}


    
</script>
