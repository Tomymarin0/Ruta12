<?php
require_once "./template.php";
require_once __DIR__ . "/../../php/clases/Slider.php";
require_once __DIR__ . "/../../php/services/FileUploader.php";
require_once __DIR__ . "/../../php/config.php";
require_once __DIR__ . "/../../php/services/obtenerHost.php";

$position = $_GET["position"];
$Slider = new Slider();
$slider = $Slider->searchSlider($position);
$fileUploader = new FileUploader();
$errorMessage = null;
$succesMessage = null;

if(isset($_POST["title"]) || isset($_POST["introduction"]) || isset($_POST["link"]) || isset($_FILES['file'])){

  if(isset($_POST['title']))   $Slider->setTitle($_POST["title"]);
  if(isset($_POST['subtitle'])) $Slider->setSubtitle($_POST["subtitle"]);
  if(isset($_POST['introduction'])) $Slider->setIntroduction($_POST["introduction"]);
  if(isset($_POST['link'])) $Slider->setLink($_POST["link"]);

  if(isset($_FILES['file'])) {
    if($_FILES['file']["error"] !== 4){
      $file = $_FILES['file'];
      
      if($file['error'] === 0) {  
        $oldPath = $Slider->getFilePath();
        $response = $fileUploader->addFile($file , $oldPath);

        if($response["error"]) $errorMessage = $response["message"];
        else {
          $Slider->setFilePath($response["newPath"]);
        }
      }
      else  $errorMessage = "Error desconocido al momento de subir el archivo";
  }
}

  // save es un metodo que rotarna null en caso de exito , caso contrario retorna un mensaje de error
  if(empty($errorMessage)) $errorMessage = $Slider->save();

  if(empty($errorMessage)) {
    $succesMessage = "Seccion modificada exitosamente";
    $slider = $Slider->searchSlider($position);
  }
}

?>

<div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item active"><?=$slider['title']?></span>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5"><?=$slider['title']?></h4>
        </div>
        <div class="br-pagebody pd-x-20 pd-sm-x-30 pd-b-20">
      <?php
            if($succesMessage)
            {
              echo '
              <div class="alert alert-success" role="alert">
                Se actualizo el slider correctamente
              </div>
              ';
            }
            if($errorMessage) { 
              echo '
              <div class="alert alert-danger" role="alert">
                  ' . $errorMessage .'
              </div>
              ';
            }
      ?>
      <?php
      $filePath = $slider['file_path'];
      if($fileUploader->isImage("../../" . $filePath)) {
      ?>
      <div style="text-align:center">
      <img src="<?=getHost() . '/' . $filePath;?>" class="img-fluid" width="540" height="300">
      </div>
      <?php 
      }
      else {
      ?>
      <div style="text-align:center">
      <video width="600" height="400" autoplay loop muted width="540" height="300">
      <source src="<?=getHost() . '/' . $filePath;?>" autoplay>
      </video>
      </div>
      <?php
      }
      ?>
      
      <form class="row g-3" method="post" action="slider.php?position=<?=$position;?>" enctype="multipart/form-data">
          <div class="col-md-12">
              <label for="validationCustom01" class="form-label">Titulo</label>
              <input type="text" class="form-control" id="validationCustom01" value="<?=$slider['title']?>" name="title" required minlength=5 maxlength=300>
          </div>
          <div class="col-md-12">
              <label for="validationTextarea" class="form-label">Subtitluo</label>
              <textarea class="form-control" id="validationTextarea" placeholder="Introducion de la nota" name="subtitle" required minlength=5 maxlength=1000><?=$slider['subtitle']?></textarea>
          </div>
          <div class="col-md-12">
              <label for="validationTextarea" class="form-label">Introduccion</label>
              <textarea class="form-control" id="validationTextarea" placeholder="Bloque de texto a de la nota" name="introduction" required minlength=5 maxlength=3000><?=$slider['introduction']?></textarea>
          </div>
          <div class="col-md-12">
              <label for="validationTextarea" class="form-label">Link del boton</label>
              <textarea class="form-control" id="validationTextarea" placeholder="Bloque destacado a de la nota" name="link" required minlength=5 maxlength=3000><?=$slider['link']?></textarea>
          </div>
          <div class="col-md-12">
            <br>
            <input name="file" type="file">
          </div>
          <div class="col-12">
            <br>
            <button id="sendButtom" class="btn btn-primary btn-submit-personal" type="submit">Actualizar Slider</button>
          </div>
      </form>
      <!-- start you own content here -->

      </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
<?php 
require_once "./templateFinal.php";
?>