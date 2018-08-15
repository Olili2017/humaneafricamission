<?php 
namespace Components;

use Errors\Error;
use Engine\Database;
use Engine\Config;
use Engine\Template;
use Components\Table;

class Page {
    private $title = null,
            $description = null,
            $aurthor = null,
            $url = null,
            $content = array(),
            $_db = null;

    public function __construct($title){
        $this->title = $title;
        $this->_db = Database::getInstance();
        //$this->getPageContent();
    }   

    public function getPageTitle(){
        return $this->title;
    }

    public function getPageContent(){
        $output = "";
        if(!$this->getPageTitle()){
            $home = new Template(DOCUMENT_ROOT."/views/home.tpl");
            /*
            $users = array(
                array("username" => "monk3y", "location" => "Portugal")
                , array("username" => "Sailor", "location" => "Moon")
                , array("username" => "Treix!", "location" => "Caribbean Islands")
            );

            $table = new Table("Users", $users);
            $home->set("content", $table->render());*/
            return $home->output();
        }
        
        $res = $this->_db->get('pages',array("label","=",$this->getPageTitle()));

        if(!count($res->results())){
            $error = new Error(404,"Page not Found");
            $error = $error->getErrorPage();
            $output .= $error;
        }else{
            var_dump($res);
        }
        return $output;
    }
}

?>