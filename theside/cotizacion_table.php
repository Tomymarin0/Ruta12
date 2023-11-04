<?php
require_once __DIR__ . "/php/repositories/CotizacionRepository.php";

$cotizacionRepository = new CotizacionRepository();
$cotizaciones = $cotizacionRepository->findAll();

$url = "https://bna.com.ar/Cotizador/MonedasHistorico";

$curl = curl_init();
 
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
 
$data = curl_exec($curl);
 
curl_close($curl);


?>
<link rel="stylesheet" href="css/personal.css">
<div style="width:100%"> 
    <div class="tabSmall">
        <ul class="nav-personal nav-tabs-personal">
            
                <li id="billetes_boton" class="active-personal"><a data-toggle="tab">Cotización Billetes</a><div class="arrow-personal"></div></li>
                <li id="divisas_boton"><a data-toggle="tab">Cotización Divisas</a><div class="arrow-personal"></div></li>


        </ul>
                        
        <div class="tab-content-cotizacion">
            
                <div class="tab-pane-personal fade in active-personal" id="billetes">
            
                <table class="table cotizacion">
                    <thead>
                        <tr>
                          <!-- Aca va la fecha -->
                        <th class="fechaCot"></th>
                        <th>Compra</th>
                        <th>Venta</th>
                        </tr>
                    </thead>
                    <tbody>

                            <tr>
                            <td class="tit">Dolar U.S.A</td>
                            <td>175,2500</td>
                            <td>183,2500</td>
                            </tr>
                            <tr>
                            <td class="tit">Euro</td>
                            <td>183,7500</td>
                            <td>192,7500</td>
                            </tr>
                            <tr>
                            <td class="tit">Real *</td>
                            <td>3120,0000</td>
                            <td>3520,0000</td>
                            </tr>

                    </tbody>
                    </table>       
                    <!-- <a href="#" class="link-cotizacion" data-toggle="modal" data-target="#modalHistorico" id="buttonHistoricoBilletes">Ver histórico</a>
                    <div class="legal">Hora Actualización: 15:03</div> -->
                    <div class="legal">(*) cotización cada 100 unidades.</div>    
                               
      		</div>
            
                <div class="tab-pane-personal fade" id="divisas" style="display:none;">
                <table class="table cotizacion">
                    <thead>
                        <tr>
                          <!-- Aca va la fecha -->
                        <th class="fechaCot"></th>
                        <th>Compra</th>
                        <th>Venta</th>
                        </tr>
                    </thead>
                    <tbody>
                  
                            <tr>
                            <td class="tit">Dolar U.S.A</td>
                            <td>176.5800</td>
                            <td>176.7800</td>
                            </tr>
                            <tr>
                            <td class="tit">Libra Esterlina</td>
                            <td>212.2315</td>
                            <td>213.0022</td>
                            </tr>
                            <tr>
                            <td class="tit">Euro</td>
                            <td>187.7045</td>
                            <td>188.3591</td>
                            </tr>
                            <tr>
                            <td class="tit">Franco Suizos *</td>
                            <td>19088.2621</td>
                            <td>19136.1305</td>
                            </tr>
                            <tr>
                            <td class="tit">YENES *</td>
                            <td>131.9575</td>
                            <td>132.3155</td>
                            </tr>
                            <tr>
                            <td class="tit">Dolares Canadienses *</td>
                            <td>13027.2410</td>
                            <td>13060.7950</td>
                            </tr>
                            <tr>
                            <td class="tit">Coronas Danesas *</td>
                            <td>2522.1428</td>
                            <td>2542.3571</td>
                            </tr>
                            <tr>
                            <td class="tit">Coronas Noruegas *</td>
                            <td>1778.5747</td>
                            <td>1797.7607</td>
                            </tr>
                            <tr>
                            <td class="tit">Coronas Suecas *</td>
                            <td>1681.2956</td>
                            <td>1700.7210</td>
                            </tr>

                    </tbody>
                    </table>
                    <!-- <a href="#" class="link-cotizacion" data-toggle="modal" data-target="#modalHistorico" id="buttonHistoricoMonedas">Ver histórico</a> -->
                    <div class="legal">(*) cotización cada 100 unidades.</div>     
                    <div class="legal leyenda">El tipo de cambio de cierre de divisa es suministrado al público a fines informativos, como referencia de la cotización de la divisa en el mercado mayorista al final de cada día.</div>
            </div>
        </div>
    </div>
</div>

<script>
    const billetes_boton  = document.getElementById("billetes_boton");
    const billetes        = document.getElementById("billetes");
    const divisas_boton   = document.getElementById("divisas_boton");
    const divisas         = document.getElementById("divisas");

    billetes_boton.addEventListener("click" , () => {
      billetes_boton.classList.add("active-personal");
      divisas_boton.classList.remove("active-personal");
      billetes.classList.add("in");
      billetes.classList.add("active-personal");
      divisas.classList.remove("in");
      divisas.classList.remove("active-personal");
      billetes.style.display = "block";
      divisas.style.display = "none";
    });

    divisas_boton.addEventListener("click" , () => {
      divisas_boton.classList.add("active-personal");
      billetes_boton.classList.remove("active-personal");
      divisas.classList.add("in");
      divisas.classList.add("active-personal");
      billetes.classList.remove("in");
      billetes.classList.remove("active-personal");
      divisas.style.display = "block";
      billetes.style.display = "none";
    });
</script>