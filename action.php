<?php
include_once ('config.php');
include(LIB_PATH.DS.'db.php');

	// получаем переменные из формы
	$task=$_REQUEST['task'];
	$action=$_REQUEST['action'];
	$id=$_REQUEST['id'];

	if ($action=="add")
	{
		// добавление данных в БД 
		$sql="INSERT INTO tasks(task, date_add) VALUES ('$task', NOW())";
		$db->query($sql);
	}

	if ($action=="end")
	{
		// удаление базы гостевой
		$sql="UPDATE `tasks` SET `date_end` = NOW() WHERE `id` = '$id'";

		$db->query($sql);
	}

	header("Location: index.php");
?>