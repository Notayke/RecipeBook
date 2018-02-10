<?php

$title = "Страница не найдена";

include(PATH."include/headHTML.php");
include(PATH."include/navHTML.php");
?>
	
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12" style="padding: 80px;">
				<div class="alert alert-danger" role="alert">
				  <span style="margin-top: 6px;float: left;display: block;">Страница которую Вы запросили не найдена!</span>
				  <a class="btn btn-danger" style="float: right;" href="<?=URL?>">На главную</a>
				  <div class="clearfix"></div>
				</div>
			</div>
		</div>
</div>
	
<?php
include(PATH."include/footerHTML.php");

?>