<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->model('fruitModel');
	}

	public function index()
	{
		$data["pagename"] = "index";
		$data["items"] = $this->db->get('fruit_table')->result();
		$this->load->view('welcome_message',$data);
	}

	public function showList(){
		$data["pagename"] = "index";
		$data["items"] = $this->db->get('fruit_table')->result();
		$this->load->view('welcome_message',$data);
	}

	public function detail(){

		$data["pagename"] = "detail";
		$data["items"] = $this->fruitModel->getDetail($this->uri->segment(3));
		$this->load->view('detailView',$data);
	}

	public function add(){
		$this->load->view('addForm');
	}

	public function addAction(){
		$fruit = array(
        'name' => $_REQUEST["name"],
        'color' => $_REQUEST["color"]
			);

		$this->db->insert('fruit_table', $fruit);
		// Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
		header("location:/index.php/welcome/showList");
	}

}
?>
