<?php

  require "includes/config.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200&display=swap" rel="stylesheet">

    <title><?php echo $config['title']; ?></title>
  </head>
  <body>
    
    <div class="container">
        
        <header class="blog-header py-3">
          <?php include "includes/header.php"; ?>
        </header>

        <?php 
    
         $articles = mysqli_query($connection, "SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 6  ");
         $art = mysqli_fetch_assoc($articles);

        ?>

        <div class="jumbotron p-4 p-md-5 text-white rounded bg block_main_article" style="background-image: url(../static/images/<?php echo $art['image'];?>);">

          <div class="col-md-6 px-0 rgba-black-strong">

            <h1 class="display-4 font-italic shadowd" style="z-index: 25;"><a href="#" class="text-white stretched-link" style="text-decoration: none; z-index: 25;"><?php echo $art['title'] ?></a></h1>
            <p class="lead my-3 shadow"><?php echo mb_substr($art['text'], 0, 96, 'utf-8') ?> </p>
            
          </div>

        </div>

       
        

        
      
        <div class="row mb-2">
          <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">Technology</strong>
                <h3 class="mb-0">Featured post</h3>
                <div class="mb-1 text-muted">Nov 12</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="stretched-link"></a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">Design</strong>
                <h3 class="mb-0">Post title</h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="stretched-link"></a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <main  class="container">
        <div class="row">
          <div class="col-md-8 blog-main">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
              Last topics
            </h3>
      
            <?php 
            
            while ( $art = mysqli_fetch_assoc($articles) ) {  ?>
            
            <div class="blog-post ">
            
              <div class="  " >
              <img class="card-img-top" src="static/images/<?php echo $art['image']; ?>" width="780 " height="255" style="background-size: cover;">
              </img>
                <div class="col-md px-0 rgba-black-strong">
                  <h2 class="blog-post-title mt-3 text-secondary">
                  <a class="stretched-link" href="/article.php?id=<?php echo $art['id']; ?>" style="color: black; text-decoration: none;">
                  <?php echo $art['title']; ?>
                  </a>
                  </h2>
                  <p class="blog-post-meta">January 1, 2020 by <a href="#">Mark</a></p>
                </div>
              </div>
      
              <p> <?php echo mb_substr($art['text'], 0, 300, 'utf-8')   . '...'; ?></p>
              <span class="badge badge-info mb-3">
                <?php 
                  $art_cat = false;
                  foreach ($categories as $cat) {
                    if( $cat['id'] == $art['articles_categories_id']) {
                      $art_cat = $cat;
                    break;
                    }
                  }
                  echo $art_cat['title'];
                ?>
              </span>
              <br>
              <a href="/" class="btn btn-sm buttonUI">Continue reading</a>
              <hr> 
            
            </div><!-- /.blog-post -->
            
            <?php
            }
            ?>

            <a class="btn btn-outline-dark" href="/pages/categories.php">All articles
                        </a>      
          </div><!-- /.blog-main -->
      
          <aside class="col-md-4 blog-sidebar">
           <?php include "includes/sidebar.php"; ?>
          </aside><!-- /.blog-sidebar -->
      
        </div><!-- /.row -->
      
      </main><!-- /.container -->
      
      <footer class="container flex-nowrap text-center blog-footer ">
        <div class=" text-muted align-items-center py-2 font-small">
          <hr>
          <b>&copy;</b> blogIT 2019 <br>
          All rights reserved
        </div>
      </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./bootstrap/js/src/dropdown.js"></script>
    <script src="/script/hamburger.js"></script>
  </body>
</html>