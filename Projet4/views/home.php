<!DOCTYPE html>
<html lang="en">

<?php include("components/head.php") ?>

<body>
  <?php include("components/header.php") ?>
  <section class="containers">
    <div class="column1">
      <div class="Introduction">
        <div class="Photo">
          <img src="../images/JFroche.jpg" alt="JFrochePortrait">
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
    </div>
    <div class="column2">
      <h1>
        Bienvenue sur le Blog de Jean Forteroche
      </h1>
      <div class="ArticleList">
        <?php foreach ($Posts as $post) : ?>
          <div class="Articles">


            <div class="ArticleDescription">
              <h2><a href="index.php?action=article&id=<?php echo $post['id']; ?>"><?php echo $post['titre']; ?></a></h2>

              <p><?php echo substr_replace($post['message'], "...", 400); ?>
              </p>
            </div>
          </div>
        <?php endforeach ?>
      </div>

    </div>
  </section>





  <!-- Code injected by live-server -->

</body>

</html>