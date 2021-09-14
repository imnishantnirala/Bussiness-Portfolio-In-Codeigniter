
<?php
  //database connection config
  $hostname="localhost";
  $db_user="root";
  $db_pass="";
  $db_name="innovative";
 
  $connection=mysqli_connect($hostname, $db_user, $db_pass, $db_name);
  if (mysqli_connect_errno()) {
    die("Error connecting to the Database");
  }
 
 
  $query="SELECT * FROM view_counter";
  $result=mysqli_query($connection, $query);
 
  if (!$result) {
    die("Retriving Query Error<br>".$query);
  }
 
  $total_visitors=mysqli_num_rows($result);
 ?>


 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Counter</title>

<style media="screen">
  .wrapper {
    height: 300px;
    width: 300px;
    background-color: skyblue;
    margin: auto;
    text-align: center;
    border: 1px solid white;
    box-shadow: 2px 2px 10px gray;
  }
 
  h1 {
    background-color: mediumseagreen;
    color: white;
    border-bottom: 2px; solid white;
  }
 
  h3 {
    font-size: 5em;
  }
 
  h1,h3 {
    padding: 20px;
    margin: 0;
  }
</style>
  </head>
  <body>
    <div class="wrapper">
      <h1>Visitor Count</h1>
      <h3><?php echo $total_visitors; ?></h3>
    </div>
  </body>
</html>
 
