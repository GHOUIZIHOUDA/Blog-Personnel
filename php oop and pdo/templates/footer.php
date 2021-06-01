<?php
  require_once('templates/header.php');
  require_once('C:/xampp/htdocs/php oop and pdo/classes/Article.php');
  $articles = new Articles();
?>
<footer class=" text-white fixed-bottom" style="background-color: #caced1;">
  <!-- Grid container -->
  <div class="container p-2" style="height:80px">
    <!-- Section: Images -->
    <section class="" style="heght:70px;">
      <div class="row">
        <?php $articles = new Articles(); ?>
        <?php if($articles->getLastArticles()) : ?>
          <?php foreach($articles->getLastArticles() as $article) : ?>
            <div class="col-2">
              <div class="card bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" style="height: 70px">
                <div class="card" style="height: 70px">
                  <img class="card-img-top " src="asset/img/<?= $article['img']; ?>" alt="Card image cap" style="height: 70px">  
                  <a href="#!">
                    <div class="card-body mask" style="background-color: rgba(251, 251, 251, 0.2); width:auto; height: 70px;">
                      <br><h6 class="card-title text-center" style="font-size: 8px"><?= "<strong>".$article['title']."</strong>"; ?></h6><br>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else : ?>
          <p> Article is empty</p>
        <?php endif; ?>
      </div>
    </section>
    <!-- Section: Images -->
  </div>
  <!-- Grid container -->
  <!-- Copyright -->
  <div class=" p-3 " style="background-color: #2f4357;">
    <div class=" text-center">
      © 2021 Copyright:
      <a class="text-white" href="index.php">Blog Personnel</a>
    </div>  
  </div>
  <!-- Copyright -->

</footer>



















    
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>