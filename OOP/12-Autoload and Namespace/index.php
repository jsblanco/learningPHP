<?php
//require_once 'UserController.php';
//require_once 'Post.php';
//require_once 'Category.php';
require_once 'autoload.php';

/*
$user = new User("Francisco", "maqui@email.com");
$post = new Post("Hello world!", "2020-05-14");
$category = new Category("Horror", "Ooooh, spooky!");

echo $user->email . '<br>';
echo $post->title . '<br>';
echo $category->name . '<br>';
*/

use DummyClasses\User, DummyClasses\Post;
use AdminPanel\User as AdminUser;

class MainNamespaces
{
    public $user;
    public $admin;
    public $category;
    public $post;

    public function __construct()
    {
        $this->user = new User("Francisco", "maqui@email.com");
        $this->admin = new AdminUser('Pedro', 'admin@email.com', 'admin');
        $this->post = new Post("Hello world!", "2020-05-14");
        $this->category = new DummyClasses\Category("Horror", "Ooooh, spooky!");
    }

    public function showClassConstants(){
        echo 'Class: '.__CLASS__.'<br>';
        echo 'Namespace: '.__NAMESPACE__.'<br>';
        echo 'Dir: '.__DIR__.'<br>';
        echo 'File: '.__FILE__.'<br>';
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return AdminUser
     */
    public function getAdmin(): AdminUser
    {
        return $this->admin;
    }

    /**
     * @param AdminUser $admin
     */
    public function setAdmin(AdminUser $admin): void
    {
        $this->admin = $admin;
    }

    /**
     * @return \DummyClasses\Category
     */
    public function getCategory(): \DummyClasses\Category
    {
        return $this->category;
    }

    /**
     * @param \DummyClasses\Category $category
     */
    public function setCategory(\DummyClasses\Category $category): void
    {
        $this->category = $category;
    }

    /**
     * @return Post
     */
    public function getPost(): Post
    {
        return $this->post;
    }

    /**
     * @param Post $post
     */
    public function setPost(Post $post): void
    {
        $this->post = $post;
    }

}

$main = new MainNamespaces();
echo $main->user->email . '<br>';
echo $main->admin->email . '<br>';
echo $main->post->title . '<br>';
echo $main->category->description . '<br>';

$main-> showClassConstants();

if (class_exists('DummyClasses\User')) echo 'Class User exists<br>';
$methods = get_class_methods($main);
$search = array_search('setUrl', $methods);
var_dump($search);
