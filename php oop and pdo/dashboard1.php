<?php
  require_once('./templates/header.php');
  include('./classes/Article.php');
  include './templates/navbar.php';
?>

<div style="margin-bottom:140px;" class="">
  <div class="lead container" style="margin-top:70px;">
    <h5 class=""><strong>Bonjour, Mme. GHOUIZI</strong></h5>
  </div>
  <!-- Button trigger modal -->
  <div class="container">
    <button type="button" class="my-3 btn btn-warning text-white " data-toggle="modal" data-target="#addArticleModal">
      Add New Article
    </button>
  </div>
  <div class="container">
    <table class="table table-striped table-responsive">
      <thead class="">
        <tr style="background-color:#2f4357">
          <th scope="col" class="text-center lead"><strong>ID</strong></th>
          <th scope="col" class="text-center lead"><strong>Title</strong></th>
          <th scope="col" class="text-center lead"><strong>Description</strong></th>
          <th scope="col" class="text-center lead"><strong>Author</strong></th>
          <th scope="col" class="text-center lead"><strong>Date</strong></th>
          <th scope="col" class="text-center lead"><strong>Actions</strong></th>
        </tr>
      </thead>
      <tbody class="">
        <div class="row ">
        <?php $articles = new Articles(); ?>
        <?php if($articles->getArticles()) : ?>
          <?php foreach($articles->getArticles() as $article) : ?>
            <tr >
              <th scope="row" class="text-center lead"><?="<strong>". $article['id_article']."</strong>"; ?></th>
              <td class="text-center lead"><?= "<strong>".  $article['title'] ."</strong>"; ?></td>
              <td class="text-center lead"><?= "<strong>". $article['description'] ."</strong>"; ?></td>
              <td class="text-center lead"><?= "<strong>". $article['author'] ."</strong>"; ?></td>
              <td class="text-center lead"><?= "<strong>". $article['date_poste'] ."</strong>"; ?></td>
              <td class="text-center lead">
                <a href="editForm.php?id=<?php echo $article['id_article']; ?>" class="text-primary text-center lead">Edit</a>
                <a href="article.process.php?id=<?php echo $article['id_article']?>&send=del" class="text-danger text-center lead">Delete</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <p> Article is empty</p>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>


<form method="POST" action="article.process.php" class="container">
  <div class="modal fade" id="addArticleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:30px;">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#2f4357;">
          <h5 class="modal-title" id="exampleModalLabel">Add New Article</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group container">
            <label for="title">Title : </label>
            <input type="text" class="form-control" id="title" name="article-title" placeholder="Enter title">
          </div>
          <div class="form-group container">
            <label for="description">Description :</label>
            <input type="text" class="form-control" id="description" name="article-description" placeholder="description">
          </div>
          <div class="form-group container">
            <label for="author">Author :</label>
            <input type="text" class="form-control" id="author" name="article-author" placeholder="author">
          </div>
          <div class="form-group container">
            <label for="content">Content :</label>
            <textarea type="text" class="form-control" id="content" name="article-content" placeholder="content"></textarea>
          </div>
          <div class="form-group container">
            <label for="image">Choose the article's image:</label>
            <input type="file" id="image" name="article-image" accept="image/png, image/jpeg">
          </div>
          <div class="form-group container">
            <input type="date" name="article-date">
          </div>
          <div class="form-group form-check container">   
          </div>
        </div>
        <div class="modal-footer" style="background-color:#2f4357;">
            <a href="dashboard1.php" type="button" class="btn btn-secondary">Close</a>
            <button type="submit" name="submit" class="btn btn-warning">Add Article</button>
          </div>
      </div>
    </div>
  </div>
</form>


<?php
  require_once('./templates/footer.php');
?>   

