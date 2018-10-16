<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Щя я тебя взломаю!)');
$app->initLayout('Centered');
$header = $app->add(['Header','Инструкция']);
$text = $app->add(['Text']);
$text->addParagraph('слева можешь запилить свой пароль,после того как сделаешь его,переходи по кнопке справа и я его взломаю');
$button = $app->add(['Button','пили пароль','teal large inverted','iconRight'=>'shield alternate']);
   $button->link(['password']);

$button1 = $app->add(['Button','можешь проверить','teal large inverted']);
      $button1->link(['you can try']);

$button1 = $app->add(['Button','попробую тебя взломать','teal large inverted','icon'=>'user secret']);
   $button1->link(['hacker']);
