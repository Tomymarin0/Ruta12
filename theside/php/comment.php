
<?php
if(isset($_COOKIE["status_comment"])) {
    switch($_COOKIE["status_comment"]){
        case 1: echo "<div class='show' id='snackbar'>Tu comentario a sido enviado!</div>"; break;
        case 2: echo "<div class='show' id='snackbar'>Hubo un error al enviar el comentario</div>"; break;
        case 3: echo "<div class='show' id='snackbar'>Debe ingresar un email valido</div>"; break;
    }
}
?>

<script type="text/javascript">
    // Get the snackbar DIV
    var x = document.getElementById("snackbar");

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
</script>