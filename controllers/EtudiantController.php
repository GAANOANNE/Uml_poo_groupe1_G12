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
        $this->dao = new EtudiantDao();
        $limit = 5;
        $offset = 0;
        if (isset($_POST['limit'])) {
            $limit = intval($_POST['limit']);
        }
        if (isset($_POST['offset'])) {
            $offset = intval($_POST['offset']);
        }
       $result = $this->dao->findAll($limit,$offset);
        // //$result->getAdresse();
        // $data=array();
        // foreach ($result as $resu) {
        //     $data[]=array("adresse"=> $resu-> getAdresse(), "telephone"=> $resu->getTelephone());
        // }
        //var_dump($result);
       // echo $result;
         echo json_encode($result, JSON_UNESCAPED_SLASHES);
       // echo htmlspecialchars(json_encode($result), ENT_QUOTES, 'UTF-8');
    }


    public function deleteEtudiant()
    {
        if(isset($_POST['id']))
        {
            $this->dao = new EtudiantDao();
            
            if($this->dao->delete($_POST['id']))
            {
                echo "success";
            }
            else 
            {
               echo "error";
            }
            
        }
        else
        {
            echo 'error';
        }
    }

    public function rechercheEtudiant()
    {
        $this->dao = new EtudiantDao();
        $result =$this->dao->search($_POST);

       echo json_encode($result);
    }
}