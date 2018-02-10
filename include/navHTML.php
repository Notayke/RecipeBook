<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	   <a class="navbar-brand" href="#">Книга Рецептов</a>
	   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
	   <span class="navbar-toggler-icon"></span>
	   </button>
	   <div class="collapse navbar-collapse" id="navbarColor01">
		  <ul class="navbar-nav mr-auto">
		  <?php if(User::checkAuth()) {?>
			 <li class="nav-item">
				<a class="nav-link" href="#">Добавить рецепт</a>
			 </li>
			 <li class="nav-item">
				<a class="nav-link" id="exit" href="#">Выйти</a>
			 </li>
		  <?php }?>
		  </ul>
		  <?php if(!User::checkAuth()) {?>
		  <form id="loginForm" class="form-inline">
			 <input id="login" class="form-control mr-sm-2" type="text" placeholder="Login" aria-label="Login">
			 <input id="password" class="form-control mr-sm-2" type="password" placeholder="Password" aria-label="Password">
			 <button id="loginButton" class="btn btn-outline-danger my-2 my-sm-0" type="submit">Войти</button>
		  </form>
		  <?php }?>
	   </div>
	</nav>