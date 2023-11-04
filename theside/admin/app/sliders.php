<?php
require_once "./template.php";
require_once __DIR__ . "/../../php/services/FileUploader.php";
require_once __DIR__ . "/../../php/repositories/SliderRepository.php";

$sliderRepository = new SliderRepository();
$sliders = $sliderRepository->findAll();
$sliders = $sliderRepository->ordenarArray($sliders);
$fileUploader = new FileUploader();

?>

    <div class="br-mainpanel">
      <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <span class="breadcrumb-item active">Sliders</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagebody pd-x-20 pd-sm-x-30 pd-b-20">
        <div class="row">
            <?php
            foreach($sliders as $slider) {
            ?>
            <div class="col-sm-4 grabbable" data-position="<?=$slider->getPosition();?>" data-index="<?=$slider->getId();?>">
                <div class="card" style="margin-top: 20px;">

                <?php
                $filePath = $slider->getFilePath();
                if($fileUploader->isImage("../../" .  $filePath)) {
                ?>
                <img src="<?=getHost() . '/' . $filePath;?>" class="card-img-top" width="200" height="200">
                <?php 
                }
                else {
                ?>
                <video class="card-img-top" width="200" height="200" autoplay loop muted>
                <source src="<?=getHost() . '/' . $filePath;?>" autoplay>
                </video>
                <?php
                }
                ?>
                
                
                
                <div class="card-body">
                    <h5 class="card-title"><?=$slider->getTitle();?></h5>
                    <p class="card-text"><?=$slider->getIntroduction();?></p>
                    <a href="slider.php?position=<?=$slider->getPosition();?>" class="btn btn-primary">Editar</a>
                </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
      </div><!-- br-pagebody -->
    </div><!-- br-mainpanel -->

    <script type='text/javascript'>
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
              url: window.location.protocol + "//" + window.location.host + '/admin/controllers/sliders/change_position.php',
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
<?php 

require_once "./templateFinal.php";
?>