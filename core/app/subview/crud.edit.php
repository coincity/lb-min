<div class="container">
<div class="row">
<div class="col-md-12">
<h1>USUARIOS</h1>
<h3>Nuevo Usuario</h3>
<div class="panel panel-default">
<div class="panel-heading">Nuevo</div>
<div class="panel-body">

<form method="post" action="./?action=users&sa=update">
	<?php 
	$user = UserData::getById($_GET["id"]);
	Bs::render_edit(schema::$table_user,$user); ?>
	<?=Bs::button('Actualizar','submit',"success"); ?>
</form>

</div>
</div>


</div>
</div>
</div>