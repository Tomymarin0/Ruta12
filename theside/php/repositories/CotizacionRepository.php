<?php
require_once __DIR__. "/../repositories/BaseRepository.php";

class CotizacionRepository extends BaseRepository{

    public function __construct() {
        $this->table = "cotizaciones_billetes";
    }

    public function find($id) {
        return $this->baseFind($id);
    }
}