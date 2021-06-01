<?php
class blog_model extends CI_Model{
	public function get_post(){
		$this->load->database();
		// $query = $this->db->query('SELECT * FROM post');
		// return $query->result();
		$builder = $this->db->get('post');
		$query = $builder->result();
		return $query;
	}
	
	public function insert_post($judul, $konten){
		$this->load->database();
		$this->load->helper('url');
		$data = array(
			'judul' => $judul,
			'konten' => $konten
		);
		$this->db->insert('post',$data);
		// $this->db->query("INSERT INTO post (judul,konten) VALUES ('$judul', '$konten')");

	}

	public function delete_post($id){
		$this->load->database();
		$data = array(
			'id' => $id
		);
		$this->db->delete('post',$data);
		// $this->db->query("DELETE FROM post WHERE id = $id");
	}

	public function edit($id){
		$this->load->database();
		$data = array('id'=>$id);
		// $builder = $this->db->table('post');
		// $query = $builder->where('id',$data);
		$query = $this->db->get_where('post', $data);
		return $query->result();

	}

	public function update($id,$judul,$konten){
		$this->load->database();
		$data = array('judul' => $judul, 'konten'=> $konten);
		$this->db->where('id',$id);
		$this->db->update('post',$data);
	}

}
