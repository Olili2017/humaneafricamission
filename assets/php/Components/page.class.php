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
            $db = new Database();
            $content = $db->get("content",array("content_page", "=", $res->first()->id));
            
            if(count($content->results())){
                //var_dump($content);
                $page = new Template(DOCUMENT_ROOT."/views/page.tpl");
                $page->set("title",$res->first()->title);
                if($res->first()->has_comments){
                    $comment_section = new Template(DOCUMENT_ROOT."/views/comment_form.tpl");
                    /*$page->set("comments_section",$comment_section->output());*/
                    $page->set("comment_section",$comment_section->output());
                }else{
                    $page->set("comment_section","");
                }
                return $page->output();
            }else{
                $no_content = new Error(404,"No content found", "No content has been created for this page yet. Please contact website admin at <a href='mailto:admin@humaneafricamission.org'>admin@humaneafricamission.org</a>");
                $no_content = $no_content->getErrorPage();
                return $no_content;
            }
        }
        return $output;
    }
}

?>