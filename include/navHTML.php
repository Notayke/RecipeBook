<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	
	<a class="navbar-brand" href="#">Книга Рецептов</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="navbarColor01">
<!-- Личный кабинет -->		
		<ul class="navbar-nav ml-auto">
			<?php if(User::checkAuth()) {?>
				<div class="btn-group">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><?php echo $_SESSION['login'];?></span></a>
					<div class="dropdown-menu dropdown-menu-right">
						<button class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModal">Добавить рецепт</button>
					<div class="dropdown-divider"></div>
						<button class="dropdown-item" type="button" id="exit">Выход</button>
					</div>
				</div>
			<?php }?>
		</ul>
<!-- Авторизация -->
		<?php if(!User::checkAuth()) {?>
		    <form id="loginForm" class="form-inline">
				<input id="login" class="form-control mr-sm-2" type="text" placeholder="Login" aria-label="Login">
				<input id="password" class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Password">
				<button id="loginButton" class="btn btn-outline-danger my-2 my-sm-0" type="submit">Войти</button>
			</form>
		<?php }?>
		
	</div>

</nav>

<!-- Модальная форма для добавления рецепта -->

<!-- Скрипт генерации полей для ввода ингредиентов -->
<script>
var num = 2;
    function addIng() {
        var newdiv = document.createElement("div");
        newdiv.innerHTML = "<div class='form-group row'><div class='col-8'><div class='input-group mb-3'><div class='input-group-prepend'><span class='input-group-text' id='inputGroup-sizing-default'>"+ num++ +"</span></span></div><input type='text' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default'></div></div><div class='col-4'><div class='input-group'><input type='number' class='form-control' aria-label='Default' aria-describedby='inputGroup-sizing-default'><div class='input-group-append'><span class='input-group-text'>г</span></div></div></div></div>";
		 
		//newdiv.appendTo('div#quest');
         document.getElementById("parentId").appendChild(newdiv);
         return false;
  }
</script>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавить рецепт</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<h6 style="padding:10px 0px">Ингредиенты</h6>
		<div class="form-group row" >
			<div class="col-8">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text" id="inputGroup-sizing-default">1</span>
					</div>
					<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
				</div>
			</div>
			<div class="col-4">
				<div class="input-group">
					<input type="number" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
					<div class="input-group-append">
						<span class="input-group-text">г</span>
					</div>
				</div>
			</div>
		</div>
		<div id="parentId"></div>
		<div>
			<button type="button" class="btn btn-secondary btn-sm" onclick="addIng()" style="padding:2px 10px;"> + </button> 
		</div>
		<h6 style="padding:10px 0px">Рецепт приготовления</h6>
		<div class="input-group">
			<textarea class="form-control" aria-label="With textarea"></textarea>
		</div>
		<h6 style="padding:10px 0px">URL обучающего видео</h6>		
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon3">https://</span>
			</div>
			<input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
		</div>		
	</div>
      <div class="modal-footer">
        <button type="button" class="btn btn mb-2" data-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-danger mb-2">Принять</button>
      </div>
    </div>
  </div>
</div>