<?php
    include 'classes/Article.php';

    $articles = new Articles();

    if(isset($_POST['submit'])) {
        $title= $_POST['article-title'];
        $description= $_POST['article-description'];
        $author= $_POST['article-author'];
        $content= $_POST['article-content'];
        $image= $_POST['article-image'];
        $date= $_POST['article-date'];

        $articles->addArticle($title, $description, $content, $image, $date, $author);
        header("location: {$_SERVER['HTTP_ORIGIN']}/PHP OOP AND PDO/dashboard1.php");

    }else if(isset($_POST['update'])) {
        $id=$_GET['id'];
        $title=$_POST['article-title'];
        $description= $_POST['article-description'];
        $author= $_POST['article-author'];
        $content= $_POST['article-content'];
        $image= $_POST['article-image'];
        $date= $_POST['article-date'];
        
        $articles->updateArticle($title, $description, $content, $image, $date, $author, $id);
        header("location: http://localhost/php oop and pdo/dashboard1.php");
    } else if($_GET['send']==='del') {
        $id = $_GET['id'];

        $articles->delArticle($id);
        header("location: {$_SERVER['HTTP_ORIGIN']}/PHP OOP AND PDO/dashboard1.php");

    }

?>