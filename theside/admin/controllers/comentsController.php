<?php

header("Content-Type: application/json");

require_once "../../php/repositories/CommentRepository.php";
require_once "../../php/repositories/ResponseRepository.php";

$comments_repository = new CommentRepository();

$json = file_get_contents('php://input');

$datos = json_decode($json, false);

$datos = get_object_vars($datos);

$comment = $comments_repository->find($datos['id']);

$comment_response = $comment->getResponse();

$response = [$comment->getUsername(),$comment->getDescription(),$comment->getFechaRealizada(),$comment->getId(),$comment->getStatus()];

if ($comment_response != []){
    $response = array_merge($response,[$comment_response[0]->getUsername(),$comment_response[0]->getDescription(),$comment_response[0]->getFechaRealizada()]);
}

echo json_encode($response);
