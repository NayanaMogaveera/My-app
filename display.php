  
  <?php
    $con=mysqli_connect('localhost','root','','database1');
    if(!$con)
    {
      echo 'not connected to server';
      
    }
$result = mysqli_query($con,"SELECT * FROM movies");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Display</title>
 <style>
  div.transbox {
  margin: 40px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
       div.background {
  background: url(img2.jfif) repeat;
  border: 2px solid black;
}

      table, td, th {
  border: 1px solid black;
  border-collapse: collapse;
  border-spacing: 5px;
}
th, td {
    padding: 10px;

}
th {

background-color: #FFB500;
font-size: 20px;
font-family: georgia,garamond,serif;color: black;font-style: bold;
}
td {

background-color: #FDDF95;

}
button {
        display: inline-block;
        background-color: #7b38d8;
        border-radius: 10px;
        border: 4px double #cccccc;
        background-color:blue;
        text-align: center;
        font-size: 20px;
        padding: 15px;
        width: 100px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
        cursor: pointer;
        margin: 10px;
      }


    </style>
 </head>
<body>
  <div class="background">
  <div class="transbox">
  <?php
      if (mysqli_num_rows($result) > 0) {
  ?>
<center>
  <div class="table">
  <table>
  <tr>
   <div class="th">
    <th>Movie_name</th>
    <th>Actor</th>
    <th>Actress</th>
    <th>Year_of_release</th>
    <th>Director</th></div>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["movie_name"]; ?></td>
    <td><?php echo $row["actor"]; ?></td>
    <td><?php echo $row["actress"]; ?></td>
    <td><?php echo $row["year_of_release"]; ?></td>
    <td><?php echo $row["director"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<a href="insert.php"><button type="button" name="Isert">Insert</button></a>
  <a href="Link.php"><button type="button" name="Home">Home</button></a>
</center>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
</center>
 </body>
</html>