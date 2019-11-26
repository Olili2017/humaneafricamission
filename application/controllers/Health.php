<?php 

class Health extends CI_Controller {

    private $title ="Education";

    public function index(){
        $this->load->helper("url");
        $this->load->view(
            "health"
        );
    }

}

?>