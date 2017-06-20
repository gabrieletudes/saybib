<?php
namespace Controller;
class Page
{
 function home(){
     return [
         'view' => 'indexbooks.php',
         'article'=>'show_article.php',
         'aside'=>'general_aside.php'];
 }
}