<?php
function _index() {
	$index = new View(APP_PATH.'views/index.php');

  	$view = new View(APP_PATH.'views/base.php');
  	$view->set('main_section',$index->fetch());
  	$view->dump();
}