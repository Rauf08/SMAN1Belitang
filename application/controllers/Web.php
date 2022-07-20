<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
												 			 $this->db->order_by('id_kat', 'DESC');
												 			 $this->db->limit(3);
		$data['v_berita']	 			 = $this->db->get_where('tbl_kat', "nama_kat='berita'")->result();
															 $this->db->order_by('id_kata_sambutan', 'ASC');
		$data['v_kata_sambutan'] = $this->db->get('tbl_kata_sambutan')->result();
		$data['judul_web']			 = "SMA NEGERI 1 BELITANG | Website Resmi SMA Negeri 1 Belitang Kabupaten OKU Timur";
		$this->load->view('web/header', $data);
		$this->load->view('web/index', $data);
		$this->load->view('web/footer', $data);
	}

	function galeri(){
												 $this->db->order_by('id_galeri', 'DESC');
		$data['v_galeri']  = $this->db->get('tbl_galeri');
		$data['judul_web'] = "Galeri SMA NEGERI 1 BELITANG | Website Resmi SMA Negeri 1 Belitang Kabupaten OKU Timur";
		$this->load->view('web/header', $data);
		$this->load->view('web/galeri', $data);
		$this->load->view('web/footer');
	}

	function hal_menu2($id=''){
		if ($id == '') {
			redirect('404');
		}
		$data['v_isi'] 		 = $this->db->get_where('tbl_isi',"id_isi='$id'")->row();
		if ($data['v_isi']->id_isi == '') {
			redirect('404');
		}
		$data['judul_web'] = $data['v_isi']->judul_isi."  SMA NEGERI 1 BELITANG";
		$this->load->view('web/header', $data);
		$this->load->view('web/hal_menu2', $data);
		$this->load->view('web/footer');
	}

	function kat($kat='', $id='', $offset=0){
		if ($kat == '') {
			redirect('404');
		}
		if ($id == '' or $id == 'hal' AND $kat != 'pedoman_ppdb') {
			// $data['v_kat'] 		 = $this->db->get_where('tbl_kat',"nama_kat='$kat'");
			$jml = $this->db->get_where('tbl_kat',"nama_kat='$kat'");
				 $config['base_url'] = base_url()."kat/$kat/hal";
				 $config['total_rows'] = $jml->num_rows();
				 $config['per_page'] = 12; /*Jumlah data yang dipanggil perhalaman*/
				 $config['uri_segment'] = 4; /*data selanjutnya di parse diurisegmen 3*/
				 /*Class bootstrap pagination yang digunakan*/
				 $config['full_tag_open'] = '<nav class="navigation pagination" role="navigation"><div class="nav-links">';
				 $config['full_tag_close'] ="</div></nav>";
				 $config['num_tag_open'] = "<a class='page-numbers'";
				 $config['num_tag_close'] = '</a>';
				 $config['cur_tag_open'] = '<span aria-current="page" class="page-numbers current" style="background-color:#222;">';
				 $config['cur_tag_close'] = "</span>";
				 $config['next_tag_open'] = "<a class='page-numbers'";
				 $config['next_tagl_close'] = "</a>";
				 $config['prev_tag_open'] = "<a class='page-numbers'";
				 $config['prev_tagl_close'] = "</a>";
				 $config['first_tag_open'] = '<a class="next page-numbers"';
				 $config['first_tagl_close'] = "</a>";
				 $config['last_tag_open'] = "<a class='prev page-numbers'";
				 $config['last_tagl_close'] = "</a>";

				 $this->pagination->initialize($config);

				 $data['halaman'] = $this->pagination->create_links();
				 /*membuat variable halaman untuk dipanggil di view nantinya*/
				 $data['offset'] 	= $offset;
				 										$this->db->where('nama_kat', "$kat");
														$this->db->order_by('id_kat', 'DESC');
				 $data['v_kat'] 	= $this->db->get('tbl_kat',$config['per_page'], $offset);

		  	if ($data['v_kat']->num_rows() == 0) {
		 			$judul = strtoupper(preg_replace('/[_-]/',' ', $kat));
					$data['v_nama_kat'] = $judul;
		 		}else {
					$judul = $data['v_kat']->row()->nama_kat." SMA NEGERI 1 BELITANG";
					$data['v_nama_kat'] = strtoupper(preg_replace('/[_-]/',' ', $kat));
				}
	 		$q = 'kat';
		}else {
			$data['v_kat'] 		 = $this->db->get_where('tbl_kat', array('nama_kat' => "$kat", 'url_kat'=>"$id"))->row();
			if ($data['v_kat']->id_kat == '') {
				redirect('404');
			}
			$judul = $data['v_kat']->judul_kat;
			$q = 'kat_detail';

			$data2 = array(
				'dibaca'	=> $data['v_kat']->dibaca + 1
			);
			$this->db->update('tbl_kat', $data2, array('url_kat' => "$id"));
		}
		// if ($this->db->get_where('tbl_kat',"nama_kat='$kat'")->row()->id_kat == '') {
		// 	redirect('404');
		// }
		$data['judul_web'] = $judul;
		$this->load->view('web/header', $data);
		$this->load->view('web/kat/'.$q, $data);
		$this->load->view('web/footer');
	}


	function pencarian($id='', $offset=0){
		if ($id == '') {
			redirect('404');
		}
		$id = preg_replace('/[-]/', ' ', $id);

						 $this->db->like('judul_kat', "$id", "after");
			$jml = $this->db->get('tbl_kat');
				 $config['base_url'] = base_url()."pencarian/$id";
				 $config['total_rows'] = $jml->num_rows();
				 $config['per_page'] = 12; /*Jumlah data yang dipanggil perhalaman*/
				 $config['uri_segment'] = 3; /*data selanjutnya di parse diurisegmen 3*/
				 /*Class bootstrap pagination yang digunakan*/
				 $config['full_tag_open'] = '<nav class="navigation pagination" role="navigation"><div class="nav-links">';
				 $config['full_tag_close'] ="</div></nav>";
				 $config['num_tag_open'] = "<a class='page-numbers'";
				 $config['num_tag_close'] = '</a>';
				 $config['cur_tag_open'] = '<span aria-current="page" class="page-numbers current" style="background-color:#222;">';
				 $config['cur_tag_close'] = "</span>";
				 $config['next_tag_open'] = "<a class='page-numbers'";
				 $config['next_tagl_close'] = "</a>";
				 $config['prev_tag_open'] = "<a class='page-numbers'";
				 $config['prev_tagl_close'] = "</a>";
				 $config['first_tag_open'] = '<a class="next page-numbers"';
				 $config['first_tagl_close'] = "</a>";
				 $config['last_tag_open'] = "<a class='prev page-numbers'";
				 $config['last_tagl_close'] = "</a>";

				 $this->pagination->initialize($config);

				 $data['halaman'] = $this->pagination->create_links();
				 /*membuat variable halaman untuk dipanggil di view nantinya*/
				 $data['offset'] 	= $offset;
				 										$this->db->like('judul_kat', "$id", "after");
														$this->db->order_by('id_kat', 'DESC');
				 $data['v_kat'] 	= $this->db->get('tbl_kat',$config['per_page'], $offset);

				 $data['v_cari'] 	= $id;

	 		$judul = $id;
			$q = 'pencarian';

		$data['judul_web'] = $judul;
		$this->load->view('web/header', $data);
		$this->load->view('web/kat/'.$q, $data);
		$this->load->view('web/footer');
	}


	function error_not_found(){
		$data['judul_web'] = "404 Halaman tidak ditemukan!";
		$this->load->view('web/header', $data);
		$this->load->view('404_content');
		$this->load->view('web/footer');
	}

}
