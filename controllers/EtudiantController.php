<?php 
class EtudiantController extends Controller
{
    public function __construct()
    {
        $this->folder="commons";
        $this->layout="default";
       // $this->validator = new Validator();

    }

    public function listeEtudiant()
    {
        $this->view="listerEtudiant";
        $this->render();

    }

    public function ajoutEtudiant()
    {
       // $this->folder=""
       $this->view="createEtudiant";
       $this->render();
    }

    public function getListEtudiant()
    {
        echo json_encode(array("d1"=>1,"f1"=>2));
    }
}