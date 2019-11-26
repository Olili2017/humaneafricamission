<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->helper('url');
		$this->load->view('home');
	}

	public function contact_send(){
		$mail_from_email = $this->input->post('email');
		$mail_from_name = $this->input->post('name');
		$mail_from_phone = $this->input->post('phone');
		$mail_message = $this->input->post('message');

		$this->load->library('email');
		$this->email->from($mail_from_email, $mail_from_name);
		$this->email->to('info@humaneafricamission.org');
		$this->email->subject('Web Contact form');
		$this->email->message($mail_message);

		//Send mail
		if($this->email->send())
			$this->session->set_flashdata("email_sent","Email sent successfully.");
		else
			$this->session->set_flashdata("email_sent","Error in sending Email.");

		$this->load->helper('url');
		$this->load->view('home');
	}
}
