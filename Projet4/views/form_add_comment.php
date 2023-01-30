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


            <div class="CommentForm">
                <form class="NewComment" id="newComment" method="POST" action="index.php?action=store-comment">

                    <h2>Commentaire</h2>
                    <div class="Commentcontainer">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($_GET['id']) ?>">

                        <label for="title"><strong>Auteur:</strong></label>
                        <input type="text" placeholder="" name="Author" id="title" required>

                        <label for="subject"><strong>Votre Commentaire:</strong></label>
                        <tinymce-editor api-key="0ki8kh44dpr0iupw97fjo8e0x3vrccw5i082axf6oco1elwv" name="Subject">

                        </tinymce-editor>
                    </div>
                    <button type="submit" id="publishComment">Envoyer</button>
                </form>
            </div>

            </div>
        </section>
    </section>

    <script>
        let publishButton = document.getElementById('publishComment');
        let form = document.getElementById('newComment');
        publishButton.addEventListener('click', (e) => {
            event.preventDefault();
            if (confirm("Souhaitez-vous réellement publier ce commentaire ?")) {
                form.submit();
            }

        });
    </script>

    <!-- Code injected by live-server -->

</body>

</html>