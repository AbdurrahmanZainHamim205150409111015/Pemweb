<?php
class Blog extends CI_Controller{
	public function index(){
		$this->load->helper('url');
		$this->load->model('blog_model');
		$posts = $this->blog_model->get_post();
		$data['posts'] = $posts;
		$this->load->view('read', $data);
	}

	public function create(){
		$this->load->helper('url');
		$this->load->view('blog_create');
	}

	public function create_process(){
		$judul = $this->input->post('judul');
		$konten = $this->input->post('konten');
		

		$this->load->helper('url');
		$this->load->model('blog_model');

		$this->blog_model->insert_post($judul,$konten);
		redirect(base_url(), 'refresh');
	}
	public function delete($id){
		$this->load->helper('url');
		$this->load->model('blog_model');

		$this->blog_model->delete_post($id);
		redirect(base_url(), 'refresh');
	}
	public function edit($id){
		$this->load->helper('url');
		$this->load->model('blog_model');
		$data['edits'] = $this->blog_model->edit($id);
		$this->load->view('blog_edit', $data);
	}
	public function edit_process(){
		$this->load->helper('url');
		$this->load->model('blog_model');
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$konten =$this->input->post('konten');
		$this->blog_model->update($id,$judul,$konten);
		redirect(base_url(),'refresh');
	}
}
