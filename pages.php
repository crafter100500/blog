<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		}
		.green {
			color: green;
		}

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->

		<?php 
			$connect = mysqli_connect("127.0.0.1", "root", "", "blog3");

			if ($connect == true) {
				echo "Соединение есть";
			}else{
				echo "Соединения отсутсвует";
			}

			$query = mysqli_query($connect, "SELECT * FROM posts");
			
			
			
		?>

		<?php 
			$database = [
				["title"=>"Статья 1", "short_text"=>"text 1","img"=>"img/1.jpg","users"=>"users12",],
				["title"=>"Статья 2", "short_text"=>"text 2","img"=>"img/2.jpg","users"=>"users13",],
				["title"=>"Статья 3", "short_text"=>"text 3","img"=>"img/3.jpg","users"=>"users14",],
				["title"=>"Статья 4", "short_text"=>"text 4","img"=>"img/4.jpg","users"=>"users15",],
			]
		 ?>
	</div>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>

		<hr>
		<?php
			echo "<a href='http://12urok/". "admin.php"."'>" . 'Панель админа' . "</a>";
			echo "<h1 class='green'>". $_GET['title'] ."</h1>";
			echo "<h1 class='green'>". $_GET['text'] ."</h1>";
			echo "<h1 class='green'>". $_GET['guy'] ."</h1>";
		?>
		
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->

			 <?php 


				echo "<h1>". "Hi " . $_GET['login'] ."</h1>";
				for ($i=0; $i < 4; $i++) { 
					$result = $query->fetch_assoc();
					echo "<h1 class='green'>". $result["title"] ."</h1>";
					echo "<p>". $result["text"] ."</p>";
					echo "<img class='w-100' src=". $result["img"] .">";
					echo "<p>". "Автор:" .$result["author"] ."</p>";

			 		echo "<a href='http://12urok/". $i . "." ."php"."'>" . 'Расмотреть статью' . "</a>";
				}
			 ?>

		</div>
	</div>
</body>
</html>