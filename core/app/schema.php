<?php
class schema{
	public static $table_user = array(
		"id"=>array("key"=>"ai","label"=>"","form"=>"hidden","required"=>"","actions"=>""),
		"name"=>array("label"=>"Nombre","form"=>"text","required"=>"","actions"=>"add,edit"),
		"lastname"=>array("label"=>"Apellidos","form"=>"text","required"=>"","actions"=>"add,edit"),
		"username"=>array("label"=>"Nombre de Usuario","form"=>"text","required"=>"","actions"=>"add,edit"),
		"email"=>array("label"=>"Correo electronico","form"=>"text","required"=>"","actions"=>"add,edit"),
		"password"=>array("label"=>"Password","form"=>"password","required"=>"","actions"=>"add,edit")
	);

}

?>