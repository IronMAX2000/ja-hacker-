<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Можешь начинать');
$app->initLayout('Centered');
if (isset($_ENV['CLEARDB_DATABASE_URL'])) {
      $db = \atk4\data\Persistence::connect($_ENV['CLEARDB_DATABASE_URL']);
  } else {
      $db = \atk4\data\Persistence::connect('mysql:host=127.0.0.1;dbname=for_colibri;charset=utf8', 'root', '');
    }
class Password extends \atk4\data\Model {
  public $table = 'password';
  function init() {
   parent::init();
    $this->addField('password',['type'=>'password']);
    $this->hasOne('password_id');
}
}
