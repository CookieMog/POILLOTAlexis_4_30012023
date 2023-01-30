<!DOCTYPE html>
<html lang="en">

<?php include("components/head.php") ?>

<body>
    <?php include("components/header.php") ?>
    <section class="containers">
        <section class="admincolumn1">

            <?php include("components/adminmenu.php") ?>

        </section>
        <section class="column2">
            <div class="Redaction">
                <form class="NewArticle" method="POST" action="index.php?action=update-post">

                    <h2>Editez votre Article</h2>
                    <div class="Articlecontainer">
                        <input type="hidden" name="id" value="<?php echo $singlePost['id']; ?>">
                        <label for="Title"><strong>Titre:</strong></label>
                        <input type="hidden" name="date" value="<?php echo $singlePost['date']; ?>">
                        <input type="text" placeholder="" name="titre" value="<?php echo $singlePost['titre']; ?>">


                        <label for="message"><strong>Votre Article:</strong></label>

                        <textarea name="message" rows=25 colls=150><?php echo $singlePost['message']; ?></textarea>
                    </div>

                    <button type="submit">Publier</button>
                </form>

            </div>
        </section>
    </section>

</body>

</html>