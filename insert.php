<!doctype html>
<html>
<head>
<title>Insert Data</title>
<style>
     .button {
  padding: 10px 20px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: blue;
  border: none;
  border-radius: 10px;
  box-shadow: 0 5px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 10px #666;
  transform: translateY(4px);
}
      body{
     		background-image: url(img1.jpg);
     		background-repeat:no-repeat;
     		-webkit-background-size:cover;
        -o-background-size:cover;
        margin: 70px;
        -moz-background-size:cover;
        background-size:cover;
     	}

     input_group{
			margin: 10px 0px 10px 0px;
	}
	input_group label{
	display: block;
	text-align: left;
	margin: 3px;

}


input_group input{
	height: 30px;
	width: 94px;
	font-size: 24px;
	border-radius: 5px;
	width: 100%;
     		border: 2px solid #aaa;
     		border-radius: 4px;
     		margin: 8px 0;
     		outline-color: black;
     		padding: 8px;
     		box-sizing: border-box;
     		transition: 3s;
}


input[type="text"]{
	width:40%;
	border:2px solid #aaa;
	border-radius: 4px;
	margin: 8px;
	padding:8px;
	box-sizing: border box;
	transition: .3s;

}


div.transbox{
     		margin: 300px ;
     		background-color:black;
     		width: 40%;
     		height: 500px;
			color: black;
			text-align: left;
			border-radius: 10px 10px 10px 10px;
			padding: 20px;
     		border:1px solid blue;
     		opacity: 0.9;
     		filter: alpha (opacity=60);
     		
     	}
     	div.transbox{
     		margin: 5%;
     		font-weight: bold;
     		color:blue;
     		font-style: "title"
     	}
     	.form,.content{
		width: 30%;
		margin: 0px auto;
		padding: 20px;
		border: 1px solid #b04de;
		background: white;
		border-radius: 0px 0px 10px 10px;
	}
  </style>
</head>
<body>

	<center>
		<div class="transbox">
	<form action="insert.php" method="POST">
		<center>
	<div class="input_group">	
     

    	 <div class="input_group">
		<label> Enter Movie_Name</label></div>
		<input type="text" name="movie_name" placeholder="Please enter the movie_name" required>
	
		 <div class="input_group">
		<label>Enter Actor Name</label>	</div>
		<input type="text" name="actor" placeholder="Please enter the Actor name " required></br>

		<div class="input_group">
		<label>Enter Actress name</label></div>
		<input type="text" name="actress" placeholder="Please enter the Actress name" required></br>

		 <div class="input_group">
		<label>Enter  Year_of_release</label></div>

		<input type="date" name="year_of_release" placeholder="Please enter the Year of release" required></br>

		<div class="input_group">
		<label>Enter  Director name</label></div>
		<input type="text" name="director" placeholder="Please enter the Director name" required></br></center>

		<center><input type="submit" name="insert" value="insert" class="button"></button> 
				
		<a href="display.php"><input type="button"  name="Display" value="Display" class="button"></button></a></center>
		</div>
</div>
</div>
</form>

		<?php
		$con=mysqli_connect('localhost','root','','database1');
		if(!$con)
		{
			echo 'not connected to server';
		 	
		}

		 if(isset($_POST['insert']))
		 {
      		 
		 	 $movie_name=$_POST['movie_name'];
		 	 $actor=$_POST['actor'];
		 	 $actress=$_POST['actress'];
		 	 $year_of_release=$_POST['year_of_release'];
		 	 $director=$_POST['director'];
		 	 $qry="select * from movies where  movie_name='$movie_name'" ;
		 	 $result=mysqli_query($con,$qry);
		 	 if(mysqli_num_rows($result)!=0)
		 	 {
		 	 	
		 	 		echo "<script> alert('record exist');</script>";
		 	 		//echo $data["id"];		 	 	

		 	 }
		 	 else
		 	 {
	  //$sql="insert into movies(id,movie_name,actor,actress,year_of_realease,director)values($id,'$movie_name','$actor','$actress',$year_of_release,'$director')";
		 	 	$sql="insert into movies(movie_name,actor,actress,year_of_release,director)values('$movie_name','$actor','$actress','$year_of_release','$director')";
		 	 	if(mysqli_query($con,$sql))
                {
                        echo "<script> alert('Record inserted');</script>";



                }
                else
                {
                	echo "<script> alert('record not iserted');</script>";
                }
                
		 	}

		 }
		 	
		 
		 ?>
		
		

</body>
</html>