<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {


	public function __construct(){
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library('image_lib');

	}


	public function index()
	{

		// moving data from controller to view

		$this->load->view('includes/header');
		$this->load->view('crud_view');
		$this->load->view('includes/footer');
	}


	public function write(){

		// login security
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['auth_id']	= $this->tank_auth->get_user_id();
		}

		// validation library: not autoloaded, so we must load this here or in a construct.
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('letter', 'Letter', 'required|min_length[4]');
		$this->form_validation->set_rules('description', 'Description', 'required|min_length[20]|max_length[800]');
		$this->form_validation->set_rules('address', 'Address', 'required|min_length[5]|max_length[20]');

		// upload file settings
		$config['upload_path'] = 'pictures';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		// $this->upload->initialize($config);


		if ($this->form_validation->run() == FALSE) {//validation not passed, either showing to user for the first time or errors

			$this->load->view('includes/header');
			$this->load->view('crud_write_view');
			$this->load->view('includes/footer');

		} else {//validaton has passed

			if ($this->upload->do_upload('file_name')) {
				// upload functionality
				$upload_data = $this->upload->data();

				// $config['image_library'] = 'gd2';
				// $config['source_image'] = 'pictures/'.$data['img'];
				// $config['create_thumb'] = TRUE;
				// $config['width'] = 350;
				// $config['height'] = 350;
				// $config['new_image'] ='pictures/thumb/'.$data['img'];

				// $this->load->library('image_lib', $config);
				$this->load->library('upload', $config);
				// $this->image_lib->initialize($config);
				// $this->image_lib->resize();
				// $data['thumbnail'] = $upload_data['raw_name'].'_thumb'.$upload_data['file_ext'];
				// get the info from the form; put that into an array to pass to the model.


				$data['file_name'] = $upload_data['file_name'];
				$data['letter'] = $this->input->post('letter');
				$data['description'] = $this->input->post('description');
				$data['address'] = $this->input->post('address');
				$data['phone'] = $this->input->post('phone');

				
				$this->load->model('crud_model');

				$this->crud_model->insert_letter($data);

				// using flashdata (part of the session library which we have autloaded)

				// flashdata: loads a session available for the next page load only
				$this->session->set_flashdata('message', 'Insert Successful');


				redirect('crud/write', 'location');
			} else {
							
				$this->load->view('includes/header');
				$this->load->view('crud_write_view');
				$this->load->view('includes/footer');
			}




		}

	} // end function write

	public function read(){

		$this->load->model('crud_model');
		$tmp['results'] = $this->crud_model->get_letters();

		// testing to see what is in the array.
			// echo "<pre>";
			// print_r($tmp);
			// echo "</pre>";

		$this->load->view('includes/header');
		$this->load->view('crud_read_view', $tmp);
		$this->load->view('includes/footer');

	} // end function read


	public function detail($id){
		// echo "The ID is $id";

		// add a bit of URL security
		if (!is_numeric($id)) {
			redirect('/', 'location');
		}

		$this->load->model('crud_model');
		$tmp['results'] = $this->crud_model->get_letter_detail($id);

		$this->load->view('includes/header');
		$this->load->view('crud_detail_view', $tmp);
		$this->load->view('includes/footer');

	} // end function detail


	public function edit($id){
		// add a bit of URL security
		if (!is_numeric($id)) {
			redirect('/', 'location');
		}

		// login security
		if (!$this->tank_auth->is_logged_in()) {
			redirect('/auth/login/');
		} else {
			$data['auth_id']	= $this->tank_auth->get_user_id();
		}


		$this->load->model('crud_model');
		// CHECK FOR OWNERSHIP OF THE ITEM
		$this->load->model('crud_model');

		if (!$this->crud_model->check_owner($id, $data['auth_id'])) {
			echo "Not your item";
			exit();
		}


		// validation library: not autoloaded, so we must load this here or in a construct.
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		$this->form_validation->set_rules('letter', 'Letter', 'required|min_length[4]');
		$this->form_validation->set_rules('description', 'Description', 'required|min_length[20]|max_length[800]');
		$this->form_validation->set_rules('address', 'Address', 'required|min_length[5]|max_length[20]');

		if ($this->form_validation->run() == FALSE) {//validation not passed, either showing to user for the first time or errors

			$tmp['results'] = $this->crud_model->get_letter_detail($id);
			$this->load->view('includes/header');
			$this->load->view('crud_edit_view', $tmp);
			$this->load->view('includes/footer');

		} else {//validaton has passed
			// echo "SUCCESS";

			// get the info from the form; put that into an array to pass to the model.
			$data['letter'] = $this->input->post('letter');
			$data['description'] = $this->input->post('description');
			$data['address'] = $this->input->post('address');
			$data['phone'] = $this->input->post('phone');

			// testing to see what is in the array.
				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";


			$this->crud_model->edit_letter($data, $id);
			// $this->crud_model->insert_letter($data);

			// using flashdata (part of the session library which we have autloaded)

			// flashdata: loads a session available for the next page load only
			$this->session->set_flashdata('message', 'Edit Successful');


			redirect("crud/detail/$id", 'location');
		}

	} // end function edit


	public function delete($id){
		$this->load->model('crud_model');
		$this->crud_model->delete_row($id);

		$this->session->set_flashdata('message', 'Delete Successful');

		redirect("crud/read/$id", 'location');
	} // end delete function




}
