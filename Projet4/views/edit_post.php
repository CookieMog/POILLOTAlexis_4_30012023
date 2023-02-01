<!DOCTYPE html>
<html lang="en">

<?php include("components/head.php") ?>

<body>
    <?php include("components/header.php") ?>
    <div class="containers">
        <div class="admincolumn1">

            <?php include("components/adminmenu.php") ?>

        </div>
        <div class="column2">
            <div class="Redaction">


                <form class="NewArticle" id="newArticle" method="POST" action="index.php?action=store-post">

                    <h2>Editez votre article</h2>
                    <div class="Articlecontainer">
                        <label for="Title"><strong>Titre:</strong></label>

                        <input type="text" placeholder="" name="Title" value=<?php $articleTitle ?>>
                        <label for="Subject"><strong>Votre Article:</strong></label>
                        <tinymce-editor api-key="0ki8kh44dpr0iupw97fjo8e0x3vrccw5i082axf6oco1elwv" name="Subject" value=<?php echo $articleText ?>>
                            <!--  <textarea name="Subject" rows=25 cols=150 value=<?php echo $articleText ?>></textarea> -->
                        </tinymce-editor>
                    </div>

                    <button type="submit">Publier</button>
                </form>

            </div>
        </div>
    </div>
    <script>
        tinymce.init({
            selector: 'tinymce-editor',
            setup: function(editor) {
                editor.setContent(<?php echo $articleText; ?>);
            }
        });
    </script>
</body>

</html>