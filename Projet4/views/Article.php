<!DOCTYPE html>
<html lang="en">

<?php include("components/head.php") ?>

<body>
  <?php include("components/header.php") ?>
  <?php include("components/messages.php") ?>


  <section class="containers">
    <section class="column1">
      <div class="Introduction">
        <div class="Photo">
          <img src="../images/JFroche.jpg" />
        </div>
        <div class="Texte">
          <p>
            Lorem ipsum dolor sit amet. Ut praesentium tenetur et voluptas
            velit eos exercitationem voluptates et eaque quaerat a enim culpa?
            Sit veniam nihil sit beatae architecto et dolore voluptas quo
            excepturi dolorem eum internos facere nam omnis architecto sit
            aliquam sapiente. Ut omnis obcaecati id provident quas sed quia
            expedita vel cumque exercitationem.
          </p>
        </div>
      </div>
      <div class="socials">
        <i class="fa-brands fa-facebook fa-3x"></i><a href="#">Jean Forteroche</a>
        <i class="fa-brands fa-twitter fa-3x"></i><a href="#">JeanForterocheOF</a>
        <i class="fa-brands fa-tumblr fa-3x"></i><a href="#">Jean Forteroche</a>
      </div>
    </section>
    <section class="column2">
      <div class="ArticleBody">
        <div class="MainArticle">


          <div class="MainArticleText">

            <p>
              <?php echo htmlspecialchars_decode($singlePost['message']); ?>
            </p>
          </div>
        </div>
        <a href="index.php?action=add-comment&id=<?php echo $singlePost['id']; ?>" class="AddComment">Ajouter un commentaire</a>
        <?php foreach ($Comments as $comment) : ?>
          <div class="CommentContainer">
            <div class="ArticleCommentaires">
              <div class="CommentDescription">


                <h2>Auteur: <a href="#"><?php echo $comment['auteur']; ?></a></h2>
                <div class="Signal"><a href="index.php?action=signal&idComment=<?php echo $comment['id']; ?>&idPost=<?php echo $comment['posts_id']; ?>">Signaler</a></div>
                <h3>Commentaire:</h3>
                <p>
                  <?php echo $comment['message']; ?>
                </p>
              </div>


            </div>
          <?php endforeach ?>
          </div>
    </section>
  </section>





  <!-- Code injected by live-server -->

</body>

</html>