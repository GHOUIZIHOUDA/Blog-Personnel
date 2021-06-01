<?php
    require_once('./templates/header.php');
    include 'classes/Article.php';
    include 'templates/navbar.php';

    $articles = new Articles();
    $article = $articles->editArticle($_GET['id']);
    $id= $article['id_article'];
    $title= $article['title'];
    $description= $article['description'];
    $author= $article['author'];
    $content= $article['content'];
    $image= $article['img'];
    $date= $article['date_poste'];

?>
<div style="margin-bottom:100px;">
  <div class="lead" style="margin-top:70px;">
    <h5 class=""><strong>Bonjour, Mme. GHOUIZI</strong></h5>
  </div>
  <div  class="text-black">
    <div class="row">
      <div class="col-md-7 mx-auto">
        <!--form input-->
        <form method="POST" action="article.process.php?id=<?= $id;?>" class="container">
          <div style="border: 1px solid #2f4357;">
            <div class="text-centre" style="background-color: #2f4357;">
              <br><h3 class="text-center text-black"><b>Edit Article</b></h3><br>
            </div><br>
            <div class="form-group container">
              <label for="title">Title : </label>
              <input type="text" class="form-control" id="title" name="article-title" placeholder="Enter title" value="<?= $title; ?>">
            </div>
            <div class="form-group container">
              <label for="description">Description :</label>
              <input type="text" class="form-control" id="description" name="article-description" placeholder="description" value="<?= $description; ?>">
            </div>
            <div class="form-group container">
              <label for="author">Author :</label>
              <input type="text" class="form-control" id="author" name="article-author" placeholder="author" value="<?= $author; ?>">
            </div>
            <div class="form-group container">
              <label for="content">Content :</label>
              <textarea type="text" class="form-control" id="content" name="article-content" placeholder="content"><?= $content; ?></textarea>
            </div>
            <div class="form-group container">
              <label for="article-image">L'image de l'article :</label>
              <img src="asset/img/<?= $image; ?>" style="width:40px; height:40px;">
              <libellé> <?="c:/xampp/htdocs/php oop and pdo/asset/img/".$image; ?></libellé>
            </div>
            <div class="form-group container">
              <label for="article-image">Choose the article's image:</label><br>
              <input type="file" id="image" name="article-image" accept="image/png, image/jpeg" value="<?= $image; ?>" />
            </div>
            <div class="form-group container">
              <input type="date" class="text-black" name="article-date" value="<?= $date; ?>">
            </div>
            <div class="form-group form-check container">   
            </div><br>
          </div>
          <div class="container mb-5" style="background-color: #2f4357;">
            <br><a href="dashboard1.php" type="button" class="btn btn-secondary">Close</a>
            <button type="submit" name="update" class="btn btn-warning">Update Article</button><br><br>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php
    require_once('./templates/footer.php');
?>