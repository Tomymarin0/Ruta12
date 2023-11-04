<?php
require_once "./template.php";
require_once __DIR__ . "/../../php/repositories/SectionRepository.php";

$page = 1;
if(!empty($_GET["page"])) $page = $_GET["page"];

$sectionRepository = new SectionRepository();
$sections = $sectionRepository->findPagination($page , "fecha_realizado");
$totalPages = $sectionRepository->totalPages();
?>


    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
            <span class="breadcrumb-item active">Notas</span>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Notas</h4>
        </div>
        <div class="br-pagebody pd-x-20 pd-sm-x-30 pd-b-20">
            <a style="margin-bottom: 2%;"class="btn btn-primary" href="section.php" role="button">Crear una nota</a>
            <br>
            <div class="row">
                <?php
                foreach($sections as $section) {
                ?>
                <div style="margin-top: 20px;" class="col-sm-6 section" data-index="<?=$section->getId();?>">
                    <div class="card">
                        <!-- <img src="..." class="card-img-top" alt="..."> -->
                        <div class="card-body">
                            <h5 class="card-title text-large"><?=$section->getTitle();?></h5>
                            <p class="card-text text-large"><?=$section->getIntroduction();?></p>
                            <a href="#" class="btn btn-secondary delete" data-index="<?=$section->getId();?>">Eliminar</a>
                            <a href="section.php?id=<?=$section->getId();?>" class="btn btn-primary">Editar</a>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>

            <br/><br/>
            <ul style='float:right;' class="pagination">
                <?php
                if($page > 2) $numbersOfPreviusPages = 2;
                else if($page > 1) $numbersOfPreviusPages = 1; 
                else $numbersOfPreviusPages = 0;

                if($totalPages > $page + 1) $numbersOfNextsPages = 2;
                else if ($totalPages > $page) $numbersOfNextsPages = 1;
                else $numbersOfNextsPages = 0;

                for ($i=$numbersOfPreviusPages; $i > $numbersOfPreviusPages - $numbersOfPreviusPages; $i--) { 
                    $previousPage = $page - $i; 
                    echo '<li class="page-item"><a class="page-link" href="sections.php?page=' . $previousPage .'">' . $previousPage . '</a></li>';
                }
                echo '<li class="active page-item"><a class="page-link" href="#">' . $page . '</a></li>';
                for ($i=0; $i < $numbersOfNextsPages; $i++) { 
                    $nextPage = $page + $i + 1;
                    echo '<li class="page-item"><a class="page-link" href="sections.php?page=' . $nextPage . '">' . $nextPage .'</a></li>';
                }
                ?>
            </ul>
        </div><!-- br-pagebody -->
    </div><!-- br-mainpanel -->


    <script>
    $('.delete').click(function(){
        if(!window.confirm("Esta seguro de querer borrar la nota ?")) return;
        const index = $(this).attr("data-index");
        $('.section').each(function () {
            if($(this).attr("data-index") === index) {
                $(this).remove();
                deleteSection(index);
            }
        })
    })


    function deleteSection(id) {
            $.ajax({
                url: window.location.protocol + "//" + window.location.host + '/admin/controllers/sections/delete_section.php',
                method: 'POST',
                dataType: 'text',
                data: {
                    section_id : id
                } ,
                success: function (data) { console.log(data); },
                error: function (jqXHR, textStatus, errorThrown) { errorFunction(); }
            });
        }
    </script>


<?php 

require_once "./templateFinal.php";
?>