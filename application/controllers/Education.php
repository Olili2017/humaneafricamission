<?php 

class Education extends CI_Controller {
    public function index(){
        //echo "education here";
        $this->load->helper('url');
        $this->load->view('education');
    }
}

?>