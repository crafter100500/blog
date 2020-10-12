<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<div class="row">
		<div class="col-2">
			<?php 
				$connect = mysqli_connect("127.0.0.1", "root", "", "blog3");
				if ($connect == true) {
					echo "Соединение есть";
				}else{
					echo "Соединения отсутсвует";
				}
				$query = mysqli_query($connect, "SELECT * FROM users");

				echo "<h1>". "Hi " . $_GET['login'] ."</h1>";
				for ($i=0; $i < 4; $i++) { 
					$result = $query->fetch_assoc();
					echo "<h1 class='green'>". $result["name"] ."</h1>";
					echo "<p>". $result["email"] ."</p>";
					echo "<p>". "Автор:" .$result["phone"] ."</p>";
				}
			?>

		</div>
		<div class="col-10">
			<form action="pages.php" method="GET">

				<h1 class="" style="">Загаловок:</h1>
				<input name="title" class="form-control" style="width: 600px; margin-top: 20px;">

				<h1 class="" style="">Текст поста:</h1>
				<input name="text" class="form-control mt-3" style="width: 900px; height: 300px; ;  margin-top: 20px;">

				<h1 class="" style="">Автор:</h1>
				<input name="guy" class="form-control" style="width: 600px;  margin-top: 20px;">
				
				<button class="btn-success btn" style=" margin-top: 20px;">Создать пост</button>
			</form>
		</div>
	</div>
	
</body>
</html>