<!DOCTYPE html>
<html>
  <head>
    <title>Title of the document</title>
    <style>
      button {
        display: inline-block;
        background-color: #7b38d8;
        border-radius: 10px;
        border: 4px double #cccccc;
        background-color:blue;
        text-align: center;
        font-size: 28px;
        padding: 30px;
        width: 170px;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
        cursor: pointer;
        margin: 10px;
      }
      div.transbox{
     		margin: 300px ;
     		background-color:black;
     		width: 40%;
     		height: 250px;
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
     	 body{
     		background-image: url(logimg.jpg);
     		background-repeat:no-repeat;
     		-webkit-background-size:cover;
        -o-background-size:cover;
        -moz-background-size:cover;
        background-size:cover;
     	}
  </style>
</head>
<body>
	<div class="body">
	<div class="transbox">
		<form action="link.php" method="POST">
	<center>
		
		
<a href="insert.php"><button type="button" name="Isert">Insert</button></a><br>
	<a href="display.php"><button type="button" name="display">Display</button></a>

</center>
</div>
</div>
</body>

</html>
