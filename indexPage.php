<?php
$title="Список рецептов";
include(PATH."include/headHTML.php");
include(PATH."include/navHTML.php");
?>

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

<?php
include(PATH."include/footerHTML.php");
?>