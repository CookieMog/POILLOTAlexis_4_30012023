<?php
require_once('./models/posts_model.php');


function add_post()
{

    // code

    // View
    require("./views/form_add_post.php");
}


function store_post()
{

    echo "store_post here1";

    if (isset($_POST) && !empty($_POST)) {

        $Post = new posts_model();
        $res = $Post->post($_POST);
        var_dump($Post);

        if ($res) {
            header("Location: http://projet4/index.php?action=add-post");
            $_SESSION['success'] = "Article Publié.";
        } else {
            $_SESSION['error'] = "Erreur lors de la publication.";
            header("Location: http://projet4/index.php?action=admin");
        }
    }
};

function edit_post()
{
    // On récupère l'ID du post
    $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
    if ($id == 0) {
        header("Location: http://projet4/index.php?action=admin");
    }

    // On match le post et l'ID
    $Post = new posts_model();
    $singlePost = $Post->getOnePostById($id);
    //ERROR Si il y a pas d'post redirection vers dashboard



    require("./views/edit_post.php");
}


function update_post()
{


    if (isset($_POST) && !empty($_POST)) {

        $id = htmlspecialchars($_POST['id']);
        $titre = htmlspecialchars($_POST['titre']);
        $message = htmlspecialchars($_POST['message']);
        $date = htmlspecialchars($_POST['date']);
        $Post = new posts_model();
        $res = $Post->updatePostById($id, $titre, $message, $date);


        if ($res) {
            $_SESSION['success'] = "Modification enregistrée.";
            header("Location: http://projet4/index.php?action=article&id=$id]");
        } else {
            $_SESSION['error'] = "Un problème est survenu.";
            header("Location: http://projet4/index.php?action=admin");
        }
    }
};
function delete_post()
{

    $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
    //ERROR Si il y a pas d'id redirection vers dashboard
    if ($id == 0) {
        header("Location: http://projet4/index.php?action=admin");
    }
    var_dump($id);

    $Post = new posts_model();
    $res = $Post->deletePostById($id);

    if ($res) {
        $_SESSION['success'] = "Article Supprimé";
    } else {
        $_SESSION['error'] = "Un problème est survenu.";
    }
    header("Location: http://projet4/index.php?action=admin");
};
