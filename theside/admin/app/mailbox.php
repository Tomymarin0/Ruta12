<?php

require_once "../checkauth.php";
require_once "./template.php";

require_once "../../php/repositories/SectionRepository.php";
require_once "../../php/repositories/CommentRepository.php";


if(empty($_GET["section"])){
    $id = -1;
}
else
    $id = $_GET["section"];

if(!empty($_GET["comentario"])){
  $id_comentario = $_GET["comentario"];
}

$section_repository = new SectionRepository();
$comments_repository = new CommentRepository();

$sections = $section_repository->findAll();
$comments = $comments_repository->findAll();

$section_selected = new Section();

    switch($id){
        case -1: $section_selected->setTitle("Comentarios"); break;
        case "pendientes": $section_selected->setTitle("Pendientes"); break;
        case $id>=0: $section_selected->setTitle($section_repository->find($id)->getTitle()); break;
    }


if($id != 'pendientes') {
    $comments = array_filter($comments, function ($comment) use ($id) {
        return $comment->getSectionId() == $id || $id == -1;
    });}
else{
    $comments = array_filter($comments, function ($comment) use ($id) {
        return $comment->getStatus() == 1;
    });
}

$comentario = null;
if($id_comentario !== null)
  $comentario = $comments_repository->find($id_comentario);


?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
      <link rel="stylesheet" href="../css/buttons.css">
  </head>

  <body class="collapsed-menu email">


    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>Ruta12<span>]</span></a></div>
    <div class="br-subleft">


      <nav class="nav br-nav-mailbox flex-column">
        <a href="mailbox.php" class="nav-link <?php if(empty($_GET["section"])) echo "active" ?>"><i class="icon ion-ios-filing-outline"></i> Comentarios</a>
        <a href="mailbox.php?section=pendientes" class="nav-link <?php if($id == "pendientes") echo "active" ?>"><i class="icon ion-ios-folder-outline"></i> Pendientes</a>
      </nav>

      <div class="d-flex justify-content-between align-items-center mg-t-20 pd-x-10 bd-b pd-b-5">
        <h6 class="tx-uppercase tx-10 mg-b-0 tx-roboto tx-white-7">Blogs</h6>
      </div>

      <nav class="nav br-nav-mailbox flex-column">
        <?php
        foreach ($sections as $section){

            if( $id == $section->getId() )
                echo "<a href='mailbox.php?section=". $section->getId() ."' class='nav-link active'><i class='icon ion-ios-folder-outline'></i>". $section->getTitle() ."</a>";
            else
                echo "<a href='mailbox.php?section=". $section->getId() ."' class='nav-link'><i class='icon ion-ios-folder-outline'></i>". $section->getTitle() ."</a>";


        ?>


        <?php } ?>


      </nav>
    </div><!-- br-subleft -->

    <div class="br-mailbox-list">
      <div class="br-mailbox-list-header">
        <a href="" id="showMailBoxLeft" class="show-mailbox-left hidden-sm-up">
          <i class="fa fa-arrow-right"></i>
        </a>
        <h6 class="tx-inverse mg-b-0 tx-13 tx-uppercase"><?= $section_selected->getTitle(); ?><span class="tx-roboto">(<?= count($comments); ?>)</span></h6>
      </div><!-- br-mailbox-list-header -->
        <div class='br-mailbox-list-body '>
            <?php
            if(empty($comments)) return;
            $primer_comentario = array_slice($comments, 0, 1)[0];
          if($comentario == null) $comentario = $primer_comentario;

            foreach ($comments as $comment){
                if($comentario->getId() == $comment->getId() || ($primer_comentario->getId() == $comment->getId() && $id_comentario==-1))
                    echo "<div id='br-mailbox-list-item-" . $comment->getId() . "' class='br-mailbox-list-item  active'>";
                else
                    echo "<div id='br-mailbox-list-item-" . $comment->getId() . "' class='br-mailbox-list-item '>";
                    echo "<div class='d-flex justify-content-between mg-b-5'>";
                    echo "<div>
                        <i class='icon tx-warning active'></i>
                        <i class='icon'></i>
                      </div>";
                    echo "<span class='tx-12'>" . $comments_repository->getTimeDiff($comment) . "</span>";
                    echo "</div><!-- d-flex -->
                    <h6 class='tx-14 mg-b-10 tx-gray-800'>" . $comment->getUsername() . "</h6>
                    <p class='tx-12 tx-gray-600 mg-b-5'>" . $comments_repository->getPreMessage($comment) . "</p>
                    </div>";

            }?>
        </div>
    </div>



    <?php
        if(!empty($comments) ) {
            if($id_comentario == -1)
                $comentario = array_slice($comments, 0, 1)[0];

            echo "<div class='br-mailbox-body'>
      <div class='br-msg-header d-flex justify-content-between'>
        <div class='media align-items-center'>
          <img src='http://via.placeholder.com/280x280' class='wd-40 rounded-circle' alt=''>
          <div class='media-body mg-l-10'>
            <p class='tx-inverse tx-medium mg-b-0'>". $comentario->getUsername() ."</p>
            <p class='tx-12 mg-b-0'>
              <span id='tx-date'>". $comentario->getFechaRealizada() ."</span>
              <a href='' class='mg-l-5 tx-gray-500'><i class='icon ion-star'></i></a>
              <a href='' class='mg-l-5 tx-gray-500'><i class='icon ion-android-attach'></i></a>
            </p>
          </div><!-- media-body -->
        </div><!-- media -->
      </div><!-- br-msg-header -->
      <div class='br-msg-body'>
        <h6 class='tx-inverse mg-b-25 lh-4'>Comentario recibido desde el apartado de blogs</h6>

        <p id='br-msg-body-db'>". $comentario->getDescription() ."</p>

      </div><!-- br-msg-body -->

      ";
            echo  "<form method='post' action='../controllers/handleComment.php'>
                  <div class='pd-x-30 pd-b-30'>
                    <div class='row flex-row-reverse'>
                      <div class='col-md-9'>";
            if ($comentario->getStatus() == 2 || (empty($comentario->getResponse()) && $comentario->getStatus() == 3  )) echo "<textarea style='display: none' id='form-data' name='form-data' class='form-control ht-150' placeholder='Click to write message'></textarea>";
            else if(empty($comentario->getResponse()))
                        echo "<textarea id='form-data' name='form-data' class='form-control ht-150' placeholder='Escriba su respuesta'></textarea>";
            else
                        echo "<textarea id='form-data' name='form-data' class='form-control ht-150' placeholder='Escriba su respuesta'>". $comentario->getResponse()[0]->getDescription() ."</textarea>";
            echo  "            <input id='form-id' type='hidden' name='form-id' value='".$comentario->getId()."' >
                                <input id='form-section' type='hidden' name='form-section' value='". $id ."' >
                          <label for='form-data'></label>
                      </div><!-- col-9 -->
                      <div class='col-md-3 mg-t-30 mg-md-t-0'>
                          <div class='tx-center wd-60p'>";
            if($comentario->getStatus() == 1) {
                echo "                  <input id='form-status' class='button-input-submit' name='form-status' type='submit' value='Aceptar'>";
                echo "                  <input id='form-status' class='button-input-submit' name='form-status' type='submit' value='Rechazar'>";
            }else{
                echo "                  <input id='form-status' class='button-input-submit' name='form-status' type='hidden' value='Aceptar'>";
                echo "                  <input id='form-status' class='button-input-submit' name='form-status' type='hidden' value='Rechazar'>";
            }
            echo "              </div>
              </div>"; //<!-- col-3 -->
            echo "</div>"; // <!-- row -->
            echo "</div>";
            echo "</form>";
            echo "</div>";
        }

    ?>




    <!-- ########## END: MAIN PANEL ########## -->

    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>

    <script src="../js/bracket.js"></script>
    <script>
      $(function(){
        'use strict';

        // show only the icons and hide left menu label by default
        $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');

        $(document).on('mouseover', function(e){
          e.stopPropagation();
          if($('body').hasClass('collapsed-menu')) {
            var targ = $(e.target).closest('.br-sideleft').length;
            if(targ) {
              $('body').addClass('expand-menu');

              // show current shown sub menu that was hidden from collapsed
              $('.show-sub + .br-menu-sub').slideDown();

              var menuText = $('.menu-item-label,.menu-item-arrow');
              menuText.removeClass('d-lg-none');
              menuText.removeClass('op-lg-0-force');

            } else {
              $('body').removeClass('expand-menu');

              // hide current shown menu
              $('.show-sub + .br-menu-sub').slideUp();

              var menuText = $('.menu-item-label,.menu-item-arrow');
              menuText.addClass('op-lg-0-force');
              menuText.addClass('d-lg-none');
            }
          }
        });

        $('.br-mailbox-list').perfectScrollbar();

        $('#showMailBoxLeft').on('click', function(e){
          e.preventDefault();
          if($('body').hasClass('show-mb-left')) {
            $('body').removeClass('show-mb-left');
            $(this).find('.fa').removeClass('fa-arrow-left').addClass('fa-arrow-right');
          } else {
            $('body').addClass('show-mb-left');
            $(this).find('.fa').removeClass('fa-arrow-right').addClass('fa-arrow-left');
          }
        });
      });
    </script>
    <script type="text/javascript">
        function changeClass(evt){
            if(document.getElementsByClassName('br-mailbox-list-item active')){
                var list = document.getElementsByClassName('br-mailbox-list-item')
                for (let item of list) {
                    item.classList.remove("active")
                }
                evt.currentTarget.classList.add("active");


                let kk = {id: evt.currentTarget.getAttribute("idx")};

                fetch('../controllers/comentsController.php', {
                    method: 'POST',
                    headers: {
                        Accept: 'application.json',
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(kk),
                }).then(function (response) {
                    return response.json();
                })
                    .then(function (data) {
                        document.getElementsByClassName("tx-inverse tx-medium mg-b-0")[0].innerHTML = data[0];
                        document.getElementById("br-msg-body-db").innerHTML = data[1];
                        document.getElementById("tx-date").innerHTML = new Date(data[2]);
                        document.getElementById("form-id").setAttribute( "value", data[3] );
                        if (history.pushState) {
                            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?comentario=' + data[3] + '&section=<?=$id; ?>';
                            window.history.pushState({path:newurl},'',newurl);
                        }

                        var list = document.getElementsByClassName("button-input-submit")
                        document.getElementById("form-data").style.display = "block";
                        if(data[4] !== 1){
                            for (let item of list) {
                                item.type = "hidden";
                            }
                            if(data[4] === 3 && data[6] != null)
                                document.getElementById("form-data").innerHTML = data[6];
                            else
                                document.getElementById("form-data").style.display = "none";

                        }
                        else{
                            for (let item of list) {
                                item.type = "submit";
                            }
                            document.getElementById("form-data").innerHTML = '';
                            document.getElementById("form-data").style.display = "block";
                        }
                    })
                    .catch(function (error) {
                        console.error(error);
                    })
            }
        }

        window.onload = function(){
            <?php
             foreach ($comments as $comment){
                 echo "document.getElementById('". "br-mailbox-list-item-" . $comment->getId() ."').addEventListener( 'click', changeClass);";
                 echo "document.getElementById('". "br-mailbox-list-item-" . $comment->getId() ."').setAttribute( 'idx', ". $comment->getId() .");";
             }
            ?>
        }
    </script>
    <script type="text/javascript">
        const button = document.querySelector('.button-input-submit');
        const submit = document.querySelector('.submit-input-submit');

        function toggleClass() {
            this.classList.toggle('active-input-submit');
        }

        function addClass() {
            this.classList.add('finished-input-submit');
        }

        button.addEventListener('click', toggleClass);
        button.addEventListener('transitionend', toggleClass);
        button.addEventListener('transitionend', addClass);
    </script>
    <script type="text/javascript">
        // Get the snackbar DIV
        var x = document.getElementById("snackbar");

        // After 3 seconds, remove the show class from DIV
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    </script>
  </body>
</html>
