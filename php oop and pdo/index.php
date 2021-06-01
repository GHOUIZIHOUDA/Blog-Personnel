<?php
  require_once('./templates/header.php');
  include('./classes/Article.php');
  include 'templates/navbar1.php';

  $articles = new Articles();
?>


<div class="row" style="margin-bottom:120px; margin-top:30px;">
  <?php $articles = new Articles(); ?>
  <?php if($articles->getArticle()) : ?>
    <?php foreach($articles->getArticle() as $article) : ?>
      <div class="col-md-12 mt-4">
        <div class="card">
          <div class="card-body" id="card-body">
            <img class="card-img-top" src="asset/img/<?= $article['img']; ?>" alt="Card image cap" style="height: 300px;"><br>
            <br><h5 class="card-title text-center box1" id="titre" style="font-size:24px; color:#293AA9;"><?="<strong>". $article['title']. "</strong>"; ?></h5><br>
            <p class="card-text text-justify strong" id="titre"><?= $article['content']; ?></p><br>
            <h6 class="card-subtitle text-muted text-right">Author: <?=$article['author']; ?></h6>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php else : ?>
    <p> Article is empty</p>
  <?php endif; ?>
</div>


<?php
  require_once('./templates/footer.php');
?>   

