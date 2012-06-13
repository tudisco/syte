<?php
function _index() {

	$tag = ($_GET['tag'])?$_GET['tag']:false;

	$index = new View(APP_PATH.'views/index.php');
	if($tag) $index->set('tag',$tag);
  	$view = new View(APP_PATH.'views/base.php');
  	$view->set('main_section',$index->fetch());
  	$view->dump();
}