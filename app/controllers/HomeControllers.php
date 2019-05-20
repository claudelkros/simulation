<?php
Class HomeControllers{

    public function index(){
        session_start();
        session_destroy();
        $folder = $_SERVER['DOCUMENT_ROOT'];
        require_once($folder.'/simulation/ressources/views/index.php');   
    }

    public function response(){
        $folder = $_SERVER['DOCUMENT_ROOT'];
        require_once($folder.'/simulation/ressources/views/pages/response.php');   
    }

    public function detection(){

        $folder = $_SERVER['DOCUMENT_ROOT'];
        require_once($folder.'/simulation/ressources/views/pages/detection.php');   
    }

    public function intimidation(){
        session_start();
        if(!isset($_SESSION['compteur'])){
            $_SESSION['compteur'] = 0;
        }
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $comp = $_SESSION['compteur'] +=1 ;
            if($comp > 3){
                $error_message = "Nous avons remarquez vos tentative d'accéder a un contenu protégé";
                $error_descript = "Vous avez essayer plusieurs fois des noms et mot de passe différent a plusieurs reprise. nous vous surveillons.";
            }
            $folder = $_SERVER['DOCUMENT_ROOT'];
            require_once($folder.'/simulation/ressources/views/pages/intimidation.php');
        }else{
            $folder = $_SERVER['DOCUMENT_ROOT'];
            require_once($folder.'/simulation/ressources/views/pages/intimidation.php');
        }
        
        
    }

    public function prevention(){
        $val = "' OR '1'='1";
        $val2 = "'--";
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            if(strpos($_POST['username'], $val) == TRUE || strpos($_POST['username'], $val2) == TRUE || strpos($_POST['password'], $val2) == TRUE || strpos($_POST['password'], $val) == TRUE){
                $error_message = "Les identifiants utiliser contient des valeurs ayant pour objectifs forcer l'accès au système ";
                $error_descript = "Veuillez éviter cela s'il vous plaît. Ceci est un avertissement";
            }
            $folder = $_SERVER['DOCUMENT_ROOT'];
            require_once($folder.'/simulation/ressources/views/pages/prevention.php');   
        }else{
            $success_message = "les identifiants sont correctes ";
            $success_descript = "Continuer afin d'observer le comportement du parfeu";
            
        }
        $folder = $_SERVER['DOCUMENT_ROOT'];
            require_once($folder.'/simulation/ressources/views/pages/prevention.php');   
    }

}
