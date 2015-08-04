<?php

require 'pclib/pclib.php';
require 'FileStorage.php';

$app = new App('test');

//form has been sent...
if ($_POST) {
	$storage = new FileStorage('storage_directory');

	$entity = array(100,1); /*Entity ID, Entity type. Ex: product_id,type=product */

  foreach ($storage->postedFiles() as $file) {
    try {
      $storage->saveFile($entity, $file);
    }
    catch (Exception $e) {
      $storage->deleteEntity($entity);
      $app->error('Upload error.');
    };
  };
}

?>