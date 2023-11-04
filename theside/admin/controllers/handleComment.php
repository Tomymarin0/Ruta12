<?php

require_once "../checkauth.php";

require_once "../../php/repositories/CommentRepository.php";
require_once "../../php/repositories/ResponseRepository.php";
require_once "../../php/services/obtenerHost.php";
$comments_repository = new CommentRepository();
$response_repository = new ResponseRepository();


$comment_id = $_POST["form-id"];
$response= $_POST["form-data"];
$state = $_POST["form-status"];
$section_id = $_POST["form-section"];
$username = $_SESSION["usuario"];
$name = $_SESSION["name"];


if ($_POST['form-status'] == 'Aceptar') {
        $comments_repository->update($comment_id,3);
    if($response != ""){
        $response_repository->persist_response($response,$comment_id,$username,$name);
    }
    header("Location: ". getHost() ."/admin/app/mailbox.php?section=".$section_id."&comentario=".$comment_id."&status=1");
} else if ($_POST['form-status'] == 'Rechazar') {
    $comments_repository->delete($comment_id);
    header("Location: ". getHost() ."/admin/app/mailbox.php?section=".$section_id."&comentario=".$comment_id."&status=2");
} else {
    echo "Ocurrió un error";
}



