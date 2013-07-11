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
		$this->load->helper("url");
		$this->load->view("view_security");
		$this->load->view("view_login");
		$this->load->model('model_sl');
		$data = $this->model_sl->check();



	}

~~~~~~~~~~~~~~~~~~~~~~
~ model_sl			 ~
~~~~~~~~~~~~~~~~~~~~~~

<?php
class Model_sl extends CI_Model {

	public function check() {

		$this->db->select('id', 'username');
		$t = $this->db->get('username', TRUE); ##I do reconise my table name is same as a collum in the table **if this is a issue right away i will change **

		if($t->num_rows() > 0) {

			return TRUE;  ##return true so i can check in my next function that will be in this model
			echo "Debug: Username ".$t." found";

		} else {

			return FALSE;
			echo "Debug: Username not found";
		}

	}
}

?>

~~~~~~~~~~~~~~~~~~~~~~
~ view_login.php     ~
~~~~~~~~~~~~~~~~~~~~~~


<?php
##page contains nothing todo with this YET. I dont know how to use the mode here for debuging....See model_sl ^
?>