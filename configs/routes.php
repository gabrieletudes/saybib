<?php
return [
    'default' => 'GET/home/page',
    'connect' => 'GET/getLogin/auth',
    'logout_user' => 'GET/getLogout/auth',
    'connect_user' => 'POST/postLogin/auth',
    'index_book' => 'GET/index/books',
    'update_book' => 'POST/postUpdate/books',
    'update_info' => 'GET/getUpdate/books',
    'delete_book' => 'POST/delete/books',
    'create_book' => 'POST/create/books',
    'index_author' => 'GET/index/authors',
    'update_author' => 'POST/update/authors',
    'update_info' => 'GET/getUpdate/authors',
    'delete_author' => 'POST/delete/authors',
    'create_author' => 'POST/create/authors'
];