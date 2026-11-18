<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Bundesland;
use App\Models\Data;
use App\Models\Station;

class Main extends BaseController
{
    var $bundesland;
    var $station;
    var $data;
    
    public function __construct() {
        $this->bundesland = new Bundesland();
        $this->station = new station();
        $this->data = new data();
    }


    public function index() {
        return view ("index");
    }
    public function bundesland() {
        $data["bundesland"]= $this->bundesland->orderby("name", "asc")->findAll();
        return view("bundesland", $data);
    }
    public function stanice($bundesland) {
        $data["station"]=$this->station->orderby("place", "asc")->findAll();
        $data["stat"] = $this->bundesland->find($bundesland);
        echo view("stanice", $data);
    }


    public function station($bundesland) {
        $data["station"] = $this->station->where('bundesland', $bundesland)->findAll();
        $data["bundesland"] = $this->bundesland->where("id", $bundesland)->findAll();
        $data["stat"] = $this->bundesland->find($bundesland);
       
        echo view("station", $data);
    }
    public function mereni($station) {
        $data["mereni"] = $this->data->where("STATIONS_ID", $station)->findAll();
        $data["station"] = $this->station->find($station);
        echo view("mereni", $data);
    }
    public function informace($bundesland) {
        $data["bundesland"] = $this->station->where("bundesland", $bundesland)->findAll();
        $data["stat"] = $this->bundesland->find($bundesland);
        echo view("informace", $data);
    }

        public function smazat()
    {
        $data['stanice'] = $this->station->findAll();
        return view('smazat', $data);
    }

    public function smazatData()
    {
        $stanice = $this->request->getPost('station');
        $rok = $this->request->getPost('year');
        $mesic = $this->request->getPost('month');

        $od = "$rok-$mesic-01";
        $do = date('Y-m-d', strtotime("$od +1 month"));

        $this->data
            ->where('STATIONS_ID', $stanice)
            ->where('date >=', $od)
            ->where('date <', $do)
            ->delete();

        return redirect()->to(site_url('smazat'))
            ->with('success', 'Data byla smazána.');
    }
    
    public function mapa() {
        $data["station"] = $this->station->findAll();
        echo view("mapa", $data);
    }






    
}
