<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">

    <title>Hello, world!</title>
  </head>
  <body>
	
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	   <a class="navbar-brand" href="#">Книга Рецептов</a>
	   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	   <span class="navbar-toggler-icon"></span>
	   </button>
	   <div class="collapse navbar-collapse" id="navbarColor01">
		  <ul class="navbar-nav mr-auto">
			 <!--<li class="nav-item active">
				<a class="nav-link" href="#">Главная<span class="sr-only">(current)</span></a>
			 </li> -->
		  </ul>
		  <form class="form-inline">
			 <input class="form-control mr-sm-2" type="text" placeholder="Login" aria-label="Login">
			 <input class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Password">
			 <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Войти</button>
		  </form>
	   </div>
	</nav>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 cont-left">
				<form class="form-inline">
				  <div class="form-group mx-sm-3 mb-2">
					<input type="search" class="form-control" id="search" placeholder="Картошка">
				  </div>
				  <button type="submit" class="btn btn-danger mb-2">Искать</button>
				</form>
				<ul class="nav flex-column">
				  <li class="nav-item">
					<a class="nav-link active" href="#">Первые блюда</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Вторые блюда</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Закуски</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Десерты</a>
				  </li>
				</ul>
			</div>
			<div class="col-md-9 cont-center">
			
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
				  <label class="btn btn-secondary active">
					<input type="radio" name="options" id="option1" autocomplete="off" checked>По рейтингу
				  </label>
				  <label class="btn btn-secondary">
					<input type="radio" name="options" id="option2" autocomplete="off">Новые
				  </label>
				  <label class="btn btn-secondary">
					<input type="radio" name="options" id="option3" autocomplete="off">Старые
				  </label>
				</div>
				
				<div class="clearfix"></div>
				
				<div class="card" style="width: 30%; float: left; margin-left: 20px;margin-top: 20px;">
				  <img class="card-img-top" src="img/1.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Армянский плов</h5>
					<p class="card-text">Несколько лет назад мне посчастливилось побывать в Армении. Избранник подруги, истинный армянин, нахваливал свой страну и обычаи...</p>
					<a href="#" class="btn btn-outline-danger">Смотреть</a>
				  </div>
				</div>
				<div class="card" style="width: 30%; float: left; margin-left: 20px;margin-top: 20px;">
				  <img class="card-img-top" src="img/2.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Плов «Тахчин»</h5>
					<p class="card-text">Тахчин — блюдо иранской кухни, покоряющее сердца и вкусовые рецепторы любителей плова. Но, в отличие от последнего, тахчин...</p>
					<a href="#" class="btn btn-outline-danger">Смотреть</a>
				  </div>
				</div>
				<div class="card" style="width: 30%; float: left; margin-left: 20px;margin-top: 20px;">
				  <img class="card-img-top" src="img/3.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Дрожжевое тесто для пиццы</h5>
					<p class="card-text">Согласитесь, итальянская кухня с каждым днем становится всё популярней. Когда мы хотим побаловать себя чем-то эдаким, идем в ближайший итальянский...</p>
					<a href="#" class="btn btn-outline-danger">Смотреть</a>
				  </div>
				</div>
				<div class="card" style="width: 30%; float: left; margin-left: 20px;margin-top: 20px;">
				  <img class="card-img-top" src="img/2.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Плов «Тахчин»</h5>
					<p class="card-text">Тахчин — блюдо иранской кухни, покоряющее сердца и вкусовые рецепторы любителей плова. Но, в отличие от последнего, тахчин...</p>
					<a href="#" class="btn btn-outline-danger">Смотреть</a>
				  </div>
				</div>
				<div class="card" style="width: 30%; float: left; margin-left: 20px;margin-top: 20px;">
				  <img class="card-img-top" src="img/3.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Дрожжевое тесто для пиццы</h5>
					<p class="card-text">Согласитесь, итальянская кухня с каждым днем становится всё популярней. Когда мы хотим побаловать себя чем-то эдаким, идем в ближайший итальянский...</p>
					<a href="#" class="btn btn-outline-danger">Смотреть</a>
				  </div>
				</div>
				<div class="card" style="width: 30%; float: left; margin-left: 20px;margin-top: 20px;">
				  <img class="card-img-top" src="img/1.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Армянский плов</h5>
					<p class="card-text">Несколько лет назад мне посчастливилось побывать в Армении. Избранник подруги, истинный армянин, нахваливал свой страну и обычаи...</p>
					<a href="#" class="btn btn-outline-danger">Смотреть</a>
				  </div>
				</div>
				<div class="card" style="width: 30%; float: left; margin-left: 20px;margin-top: 20px;">
				  <img class="card-img-top" src="img/1.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Армянский плов</h5>
					<p class="card-text">Несколько лет назад мне посчастливилось побывать в Армении. Избранник подруги, истинный армянин, нахваливал свой страну и обычаи...</p>
					<a href="#" class="btn btn-outline-danger">Смотреть</a>
				  </div>
				</div>
				<div class="card" style="width: 30%; float: left; margin-left: 20px;margin-top: 20px;">
				  <img class="card-img-top" src="img/3.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Дрожжевое тесто для пиццы</h5>
					<p class="card-text">Согласитесь, итальянская кухня с каждым днем становится всё популярней. Когда мы хотим побаловать себя чем-то эдаким, идем в ближайший итальянский...</p>
					<a href="#" class="btn btn-outline-danger">Смотреть</a>
				  </div>
				</div>
				<div class="card" style="width: 30%; float: left; margin-left: 20px;margin-top: 20px;">
				  <img class="card-img-top" src="img/2.jpg" alt="Card image cap">
				  <div class="card-body">
					<h5 class="card-title">Плов «Тахчин»</h5>
					<p class="card-text">Тахчин — блюдо иранской кухни, покоряющее сердца и вкусовые рецепторы любителей плова. Но, в отличие от последнего, тахчин...</p>
					<a href="#" class="btn btn-outline-danger">Смотреть</a>
				  </div>
				</div>
				
				<div class="clearfix"></div>
				
				<nav style="margin: 20px;" aria-label="Page navigation example">
				  <ul class="pagination">
					<li class="page-item"><a class="page-link" href="#">Previous</a></li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">Next</a></li>
				  </ul>
				</nav>

			
			</div>
			
		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>