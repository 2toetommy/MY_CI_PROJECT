This is my FIRST model and not sure were to go from here to test if its working or not.
Please have patiance i am new only doing this for 8 days.

I am loading this on login page just for simplicity, as page hasnt been ccs at all easyer to see what im testing.
load URL helper ~
load my servurity view ~ it Doctype and BASEPATH
Load View_login ~
load model_sl ~
call check() from model_sl ~


~~~~~~~~~~~~~~~~~~~~~~
~ my site controller ~
~~~~~~~~~~~~~~~~~~~~~~


function login(){
	$this->load->model('model_sl');
	$data['name'] = $this->model_sl->check();


	$this->load->helper("url");
	$this->load->view("view_security");
	$this->load->view("view_login", $data);
	



}

~~~~~~~~~~~~~~~~~~~~~~
~ model_sl			 ~
~~~~~~~~~~~~~~~~~~~~~~

<?php
class Model_sl extends CI_Model {

	public function check() {

		$query = $this->db->get('username');
		$input = $this->input->get('username', TRUE);

		foreach ($query->result() as $row) {
			$data[] = $row;

			
		}
		return $data;
	}	
	
}

?>

~~~~~~~~~~~~~~~~~~~~~~
~ view_login.php     ~
~~~~~~~~~~~~~~~~~~~~~~
/* echos out username in from tabel*\

<?php foreach ($name as $r) {
	echo '<br><h1>' . $r->tusername . '</h1>';
}
			
?>
