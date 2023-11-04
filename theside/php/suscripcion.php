
<?php
if(isset($_COOKIE["status"])) {
    switch($_COOKIE["status"]){
        case 1: echo "<div class='show' id='snackbar'>Suscripición realizada con exito!</div>"; break;
        case 2: echo "<div class='show' id='snackbar'>Hubo un error al suscribirte</div>"; break;
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