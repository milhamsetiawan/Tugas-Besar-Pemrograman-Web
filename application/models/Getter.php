<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getter extends CI_Model {
    public function getIDbyResi($resi)
    {
        return $this->db->select('id')->where(['nomor_resi' => $resi])->get('orderlogistik')->result();
    }
    public function getDataOrder($id)
    {
        $q = "SELECT orderlogistik.*,routes.id as routesID,routes.kota_pengirim,routes.kota_penerima,routes.fare,ho.id as hoID , ho.message FROM `orderlogistik` INNER JOIN routes on orderlogistik.routes = routes.id INNER JOIN historyorder as ho on orderlogistik.id = ho.idOrder WHERE orderlogistik.id = '$id'";
        return $this->db->query($q)->result();
    }
    public function getDataOrderByResi($resi)
    {
        $q = "SELECT orderlogistik.*,routes.id as routesID,routes.kota_pengirim,routes.kota_penerima,routes.fare,ho.id as hoID , ho.message FROM `orderlogistik` INNER JOIN routes on orderlogistik.routes = routes.id INNER JOIN historyorder as ho on orderlogistik.id = ho.idOrder WHERE orderlogistik.nomor_resi = '$resi'";
        return $this->db->query($q)->result();
    }
    public function getAllDataOrder()
    {
        $q = "SELECT *,orderlogistik.id as ORID  FROM `orderlogistik` INNER JOIN routes on orderlogistik.routes = routes.id";
        return $this->db->query($q)->result();
    }

}