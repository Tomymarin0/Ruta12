<?php
require_once "./template.php";
require_once __DIR__ . "/../../php/repositories/SectionRepository.php";
require_once __DIR__ . "/../../php/services/FileUploader.php";
require_once __DIR__ . "/../../php/services/obtenerHost.php";
require_once __DIR__ . "/../../php/clases/Section.php";

$sectionId = null;
if(isset($_GET["id"])) $sectionId = $_GET["id"];

$sectionRepository = new SectionRepository();
$fileUploader = new FileUploader();

$section = null;
if($sectionId) $section = $sectionRepository->find($sectionId);
else $section = new Section();

$fileSections = $section->getFileSections();

?>

    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item active">Nota <?=$section->getTitle()?></span>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5"><?=$sectionId ? "" :  "Nueva nota";?></h4>
        </div>
        <div class="br-pagebody pd-x-20 pd-sm-x-30 pd-b-20">
            <?php
            if(isset($_COOKIE['response']))
            {
                if($_COOKIE['response'] === "exito")
                    echo '
                    <div class="alert alert-success" role="alert">
                      Se actualizo la nota correctamente
                    </div>
                    ';
                else 
                echo '
                <div class="alert alert-danger" role="alert">
                    ' . $_COOKIE['response'] .'
                </div>
                ';
            }
            ?>
            <div class="row">
                <?php
                if(!empty($fileSections)) {
                foreach($fileSections as $fileSection) {
                ?>
                <div class="col-sm-2 files grabbable" data-index="<?=$fileSection->getId();?>" data-position="<?=$fileSection->getPosition()?>">
                    <div class="card">
                        <?php
                        $filePath = $fileSection->getFilePath();
                        if($fileUploader->isImage("../../" .  $filePath)) {
                        ?>
                        <img src="<?=getHost() . '/' . $filePath;?>" class="card-img-top" width="180" height="100">
                        <?php 
                        }
                        else {
                        ?>
                        <video class="card-img-top" autoplay loop muted width="180" height="100">
                        <source src="<?=getHost() . '/' . $filePath;?>" autoplay>
                        </video>
                        <?php
                        }
                        ?>
                        <div class="card-body">
                            <a href="#" data-index="<?=$fileSection->getId();?>" class="btn btn-secondary delete">Eliminar archivo</a>
                        </div>
                    </div>
                </div>
                <?php
                }}
                ?>
            </div>

            <form id="formOk" class="row g-3" method="post" action="../../php/validators/SectionValidator.php?id=<?=$section->getId();?>" enctype="multipart/form-data">
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Titulo</label>
                    <input type="text" class="form-control" id="validationCustom01" value="<?=$section->getTitle()?>" name="title" required minlength=5 maxlength=300>
                </div>
                <div class="col-md-12">
                    <label for="validationTextarea" class="form-label">Introduccion</label>
                    <textarea class="form-control" id="validationTextarea" placeholder="Introducion de la nota" name="introduction" required minlength=5 maxlength=1000><?=$section->getIntroduction()?></textarea>
                </div>
                <div class="col-md-12">
                    <label for="validationTextarea" class="form-label">Bloque de texto A</label>
                    <textarea class="form-control" id="validationTextarea" placeholder="Bloque de texto a de la nota" name="text_block_a" required minlength=5 maxlength=3000><?=$section->getTextBlockA()?></textarea>
                </div>
                <div class="col-md-12">
                    <label for="validationTextarea" class="form-label">Bloque destacado A</label>
                    <textarea class="form-control" id="validationTextarea" placeholder="Bloque destacado a de la nota" name="featured_block_a" required minlength=5 maxlength=3000><?=$section->getFeacturedBlockA()?></textarea>
                </div>
                <div class="col-md-12">
                    <label for="validationTextarea" class="form-label">Bloque de texto B</label>
                    <textarea class="form-control" id="validationTextarea" placeholder="Bloque de texto b de la nota" name="text_block_b" required minlength=5 maxlength=3000><?=$section->getTextBlockB()?></textarea>
                </div>
                <div class="col-md-12">
                    <label for="validationTextarea" class="form-label">Bloque destacado B</label>
                    <textarea class="form-control" id="validationTextarea" placeholder="Bloque destacado b de la nota" name="featured_block_b" required minlength=5 maxlength=3000><?=$section->getFeacturedBlockB()?></textarea>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Introducción link</label>
                    <input type="text" class="form-control" id="validationCustom02" value="<?=$section->getIntroductionLink();?>" name="introduction_link" minlength=5 maxlength=300>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Link</label>
                    <input type="url" class="form-control" id="validationCustom02" value="<?=$section->getLinkSection();?>" name="links" minlength=5 maxlength=1000>
                </div>
                <div class="col-md-12">
                    <br>
                    <input name="files[]" type="file" multiple>
                </div>
                <div class="col-12">
                    <br>
                    <button id="sendButtom" class="btn btn-primary btn-submit-personal" type="submit"><?=$sectionId ? "Actualizar nota" :  "Crear nota";?></button>
                </div>
            </form>
            <div id="loading" style="float: right; display: none;" class="spinner-border text-success"></div>
        </div><!-- br-pagebody -->
    </div><!-- br-mainpanel -->


    <script>
        $("#formOk").submit(function( event ) {
            $("#sendButtom").css('display','none');
            $("#loading").css("display" , "block");
        });
    </script>
    
    <script>
        $(document).ready(function () {
        $('div.row').sortable({
            update: function (event, ui) {
                    $(this).children().each(function (index) {
                        if ($(this).attr('data-position') != (index+1)) {
                            $(this).attr('data-position', (index+1)).addClass('updated');
                        }
                    });

                    saveNewPositions();
            }
        });
        });
        function saveNewPositions() {
            var positions = [];
            $('.updated').each(function () {
                positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
                $(this).removeClass('updated');
            });
            $.ajax({
                url: window.location.protocol + "//" + window.location.host + '/admin/controllers/sections/change_position.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    update: 1,
                    positions: positions
                }  ,
                success: function (data) { console.log(data); },
                error: function (jqXHR, textStatus, errorThrown) { errorFunction(); }
            });
        }
    </script>

    <script>
        const params = new URLSearchParams(window.location.search)
        $('.delete').click(function(){
            if(!window.confirm("Esta seguro de querer borrar el archivo ?")) return;
            const index = $(this).attr("data-index");
            $('.files').each(function () {
                if($(this).attr("data-index") === index) {
                    $(this).remove();
                    deleteFile(index);
                }
            })
        })


        function deleteFile(id) {
                $.ajax({
                    url: window.location.protocol + "//" + window.location.host + '/admin/controllers/sections/delete_file.php',
                    method: 'POST',
                    dataType: 'text',
                    data: {
                        file_id : id,
                        section_id : params.get("id")
                    } ,
                    success: function (data) { console.log(data); },
                    error: function (jqXHR, textStatus, errorThrown) { errorFunction(); }
                });
            }
    </script>
<?php 

require_once "./templateFinal.php";
?>