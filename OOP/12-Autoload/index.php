<?php

//require_once 'user.php';
//require_once 'post.php';
//require_once 'category.php';
require_once 'autoload.php';


$user = new User("Francisco", "maqui@email.com");
$post = new Post("Hello world!", "2020-05-14");
$category = new Category("Horror", "Ooooh, spooky!");

echo $user->email . '<br>';
echo $post->title . '<br>';
echo $category->name . '<br>';