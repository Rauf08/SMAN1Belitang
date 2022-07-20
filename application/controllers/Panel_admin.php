<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel_admin extends CI_Controller {

	public function index()
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			$this->load->view('404_content');
		}else {
			$data['user']   	 = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] = "Dashboard";

			$thn							 = date('Y');
			$data['v_thn']		 = $thn;

			$this->load->view('admin/header', $data);
			$this->load->view('admin/dashboard', $data);
			$this->load->view('admin/footer');

			if (isset($_POST['btnnonaktif'])){
				$data = array(
					'status_ppdb'	=> 'tutup',
					'tgl_diubah'  => $this->Model_data->date('waktu_default')
				);
				$this->db->update('tbl_web', $data, array('id_web' => '1'));
				redirect('panel_admin');
			}
			if (isset($_POST['btnaktif'])){
				$data = array(
					'status_ppdb'	=> 'buka',
					'tgl_diubah'  => $this->Model_data->date('waktu_default')
				);
				$this->db->update('tbl_web', $data, array('id_web' => '1'));
				redirect('panel_admin');
			}

		}
	}

	public function log_in()
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(isset($ceks)) {
			$this->load->view('404_content');
		}else{
			$this->load->view('admin/login/header');
			$this->load->view('admin/login/login');
			$this->load->view('admin/login/footer');

				if (isset($_POST['btnlogin'])){
						 $username = $_POST['username'];
						 $pass	   = $_POST['password'];

						 $query  = $this->db->get_where('tbl_user', "username='$username'");
						 $cek    = $query->result();
						 $cekun  = $cek[0]->username;
						 $jumlah = $query->num_rows();

						 if($jumlah == 0) {
								 $this->session->set_flashdata('msg',
									 '
									 <div class="alert alert-danger alert-dismissible" role="alert">
									 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;&nbsp;</span>
											</button>
											<strong>Username "'.$username.'"</strong> belum terdaftar.
									 </div>'
								 );
								 redirect('panel_admin/log_in');
						 } else {
										 $row = $query->row();
										 $cekpass = $row->password;
										 if($cekpass <> $pass) {
												$this->session->set_flashdata('msg',
													 '<div class="alert alert-warning alert-dismissible" role="alert">
													 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;&nbsp;</span>
															</button>
															<strong>Username atau Password Salah!</strong>.
													 </div>'
												);
												redirect('panel_admin/log_in');
										 } else {

																$this->session->set_userdata('un@sman1_belitang', "$cekun");
																$this->session->set_userdata('id_user@sman1_belitang', "$row->id_user");

												 			 	redirect('panel_admin');
										 }
						 }
				}
		}
	}


	public function profile()
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Profile";

					$this->load->view('admin/header', $data);
					$this->load->view('admin/profile', $data);
					$this->load->view('admin/footer');

					if (isset($_POST['btnupdate'])) {
						$username	 		= $this->input->post('username');
						$nama_lengkap	= $this->input->post('nama_lengkap');

									$data = array(
										'username'	   => $username,
										'nama_lengkap' => $nama_lengkap
									);
									$this->db->update('tbl_user', $data, array('username' => $ceks));

									$this->session->has_userdata('un@sman1_belitang');
									$this->session->set_userdata('un@sman1_belitang', "$username");

									$this->session->set_flashdata('msg',
										'
										<div class="alert alert-success alert-dismissible" role="alert">
											 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
											 </button>
											 <strong>Sukses!</strong> Profile berhasil diperbarui.
										</div>'
									);

						redirect('panel_admin/profile');

					}

		}
	}

	public function ubah_pass()
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Ubah Password";

					$this->load->view('admin/header', $data);
					$this->load->view('admin/ubah_pass', $data);
					$this->load->view('admin/footer');

					if (isset($_POST['btnupdate2'])) {
						$password_lama 	= $this->input->post('password_lama');
						$password 	= $this->input->post('password');
						$password2 	= $this->input->post('password2');

						if ($data['user']->row()->password != $password_lama) {
							$this->session->set_flashdata('msg2',
								'
								<div class="alert alert-warning alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
									 </button>
									 <strong>Gagal!</strong> Password Lama tidak cocok.
								</div>'
							);
						}elseif ($password != $password2) {
								$this->session->set_flashdata('msg2',
									'
									<div class="alert alert-warning alert-dismissible" role="alert">
										 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
										 </button>
										 <strong>Gagal!</strong> Password Baru & Ulangi Password Baru tidak cocok.
									</div>'
								);
						}else{
									$data = array(
										'password'	=> $password
									);
									$this->db->update('tbl_user', $data, array('username' => $ceks));

									$this->session->set_flashdata('msg2',
										'
										<div class="alert alert-success alert-dismissible" role="alert">
											 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
											 </button>
											 <strong>Sukses!</strong> Password berhasil diperbarui.
										</div>'
									);
						}
									redirect('panel_admin/ubah_pass');
					}

		}
	}

	public function pedoman_ppdb($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Pedoman PPDB";

			$this->db->order_by('id_kat', 'DESC');
			$data['v_query']  		= $this->db->get_where('tbl_kat',"nama_kat='pedoman_ppdb'");

				$data['query'] = $this->db->get_where('tbl_kat', array('nama_kat'=>"pedoman_ppdb"))->row();
				$p = 'pedoman_ppdb_edit';
				if ($aksi == '') {
					redirect("panel_admin/pedoman_ppdb/e/".$data['query']->id_kat);
				}

					$this->load->view('admin/header', $data);
					$this->load->view('admin/pedoman_ppdb/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}

	public function berita($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Berita";

			$this->db->order_by('id_kat', 'DESC');
			$data['v_kat']  		= $this->db->get_where('tbl_kat',"nama_kat='berita'");

			if ($aksi == 't') {
				$p = 'berita_tambah';
			}elseif ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_kat', array('id_kat'=>"$id"))->row();
				$p = 'berita_edit';
			}else {
				$p = 'berita';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/berita/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}

	public function ekskul($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Ekskul";

			$this->db->order_by('id_kat', 'DESC');
			$data['v_kat']  		= $this->db->get_where('tbl_kat',"nama_kat='ekskul'");

			if ($aksi == 't') {
				$p = 'ekskul_tambah';
			}elseif ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_kat', array('id_kat'=>"$id"))->row();
				$p = 'ekskul_edit';
			}else {
				$p = 'ekskul';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/ekskul/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}


	public function prestasi($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Prestasi";

			$this->db->order_by('id_kat', 'DESC');
			$data['v_kat']  		= $this->db->get_where('tbl_kat',"nama_kat='prestasi'");

			if ($aksi == 't') {
				$p = 'prestasi_tambah';
			}elseif ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_kat', array('id_kat'=>"$id"))->row();
				$p = 'prestasi_edit';
			}else {
				$p = 'prestasi';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/prestasi/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}


	public function siswa($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Siswa";

			$this->db->order_by('id_kat', 'DESC');
			$data['v_kat']  		= $this->db->get_where('tbl_kat',"nama_kat='siswa'");

			if ($aksi == 't') {
				$p = 'siswa_tambah';
			}elseif ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_kat', array('id_kat'=>"$id"))->row();
				$p = 'siswa_edit';
			}else {
				$p = 'siswa';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/siswa/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}

	public function guru_staff($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Guru & Staff";

			$this->db->order_by('id_kat', 'DESC');
			$data['v_kat']  		= $this->db->get_where('tbl_kat',"nama_kat='guru_staff'");

			if ($aksi == 't') {
				$p = 'guru_staff_tambah';
			}elseif ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_kat', array('id_kat'=>"$id"))->row();
				$p = 'guru_staff_edit';
			}else {
				$p = 'guru_staff';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/guru_staff/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}

	public function osis($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "OSIS";

			$this->db->order_by('id_kat', 'DESC');
			$data['v_kat']  		= $this->db->get_where('tbl_kat',"nama_kat='osis'");

			if ($aksi == 't') {
				$p = 'osis_tambah';
			}elseif ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_kat', array('id_kat'=>"$id"))->row();
				$p = 'osis_edit';
			}else {
				$p = 'osis';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/osis/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}

	public function fasilitas($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Fasilitas";

			$this->db->order_by('id_kat', 'DESC');
			$data['v_kat']  		= $this->db->get_where('tbl_kat',"nama_kat='fasilitas'");

			if ($aksi == 't') {
				$p = 'fasilitas_tambah';
			}elseif ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_kat', array('id_kat'=>"$id"))->row();
				$p = 'fasilitas_edit';
			}else {
				$p = 'fasilitas';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/fasilitas/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}

	public function simpan_kat($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
					if (isset($_POST['btnsimpan'])) {
						$nama_kat 	= $this->input->post('nama_kat');
						$judul_kat  = $this->input->post('judul_kat');
						$ket_kat		= $this->input->post('ket_kat');
						$url  			= substr(preg_replace('/[ =.@]/', '-', strtolower($judul_kat)), 0, 50);

						if ($this->db->get_where('tbl_kat', array('nama_kat'=>"$nama_kat", 'url_kat'=>"$url"))->num_rows() != 0) {
							 $url = $url.'-'.date('d');
						}

						$lokasi    = "img/$nama_kat";
						$file_size = 1024 * 10; // 10 MB
 					 $this->upload->initialize(array(
 						 "file_type"     => "image/jpeg",
 						 "upload_path"   => "./$lokasi",
 						 "allowed_types" => "jpg|jpeg|png|gif|bmp",
 						 "max_size" 		 => "$file_size"
 					 ));

					if ($_FILES['gambar']['error'] <> 4) {
 					 if ( ! $this->upload->do_upload('gambar'))
 					 {
 						 $error = $this->upload->display_errors();
 						 $this->session->set_flashdata('msg',
 							 '
 							 <div class="alert alert-warning">
 									<button class="close" data-dismiss="alert">×</button>
 									<strong>Gagal Upload!</strong> '.$error.'.
 							 </div>'
 						 );
						 redirect("panel_admin/$nama_kat/$aksi/$id");
 					 }else{
						 if ($aksi == 'e') {
						 		$cek_file = $this->db->get_where('tbl_kat', array('id_kat'=>"$id"))->row();
								if ($cek_file->foto_kat != null or $cek_file->foto_kat != '') {
									unlink($cek_file->foto_kat);
								}
						 }
 						 $filename = $_FILES['gambar']['name'];
 						 $foto_kat = "$lokasi/".preg_replace('/ /', '_', $filename);
					 }
				 }else {
					 if ($aksi == 'e') {
						 		$cek_file = $this->db->get_where('tbl_kat', array('id_kat'=>"$id"))->row();
								$foto_kat = $cek_file->foto_kat;
					 }else {
  				 			$foto_kat = null;
					 }
				 }

				 if ($aksi == 't') {
						$data = array(
							'nama_kat'	=> $nama_kat,
							'judul_kat'	=> $judul_kat,
							'foto_kat'	=> $foto_kat,
							'ket_kat'		=> $ket_kat,
							'url_kat'		=> $url,
							'tgl_kat'		=> $this->Model_data->date('waktu_default')
						);
						$this->db->insert('tbl_kat', $data);
				 }else {
					 $data = array(
						 'judul_kat'	=> $judul_kat,
						 'foto_kat'		=> $foto_kat,
						 'ket_kat'		=> $ket_kat
					 );
					 $this->db->update('tbl_kat', $data, "id_kat='$id'");
				 }
						$this->session->set_flashdata('msg',
							'
							<div class="alert alert-success alert-dismissible" role="alert">
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
								 </button>
								 <strong>Sukses!</strong> Berhasil disimpan.
							</div>'
						);
						redirect("panel_admin/$nama_kat/$aksi/$id");
			}
		}
	}

	public function v_kat($kat='', $aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= ucwords(preg_replace('/[_]/',' ',$kat));

			$this->db->order_by('id_kat', 'DESC');
			$data['v_kat']  		= $this->db->get_where('tbl_kat',"nama_kat='$kat'");

			if ($aksi == 't') {
				$p = 'v_kat_tambah';
			}elseif ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_kat', array('id_kat'=>"$id"))->row();
				$p = 'v_kat_edit';
			}else {
				$p = 'v_kat';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/v_kat/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}

	public function hapus_kat($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
				$cek_file = $this->db->get_where('tbl_kat', array('id_kat'=>"$id"))->row();
				if ($cek_file->foto_kat != null or $cek_file->foto_kat != '') {
					unlink($cek_file->foto_kat);
				}
				$this->db->delete('tbl_kat', "id_kat='$id'");
				$this->session->set_flashdata('msg',
					'
					<div class="alert alert-success alert-dismissible" role="alert">
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
						 </button>
						 <strong>Sukses!</strong> Berhasil dihapus.
					</div>'
				);
				redirect("panel_admin/$aksi");
		}
	}


	public function simpan_kat_full($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
					if (isset($_POST['btnsimpan'])) {
						$nama_kat 	= $this->input->post('nama_kat');
						$judul_kat  = $this->input->post('judul_kat');
						$ket_kat		= $this->input->post('ket_kat');
						$url  			= substr(preg_replace('/[ =.@]/', '-', strtolower($judul_kat)), 0, 50);

						if ($this->db->get_where('tbl_kat', array('nama_kat'=>"$nama_kat", 'url_kat'=>"$url"))->num_rows() != 0) {
							 $url = $url.'-'.date('d');
						}

						$lokasi    = "img/v_kat";
						$file_size = 1024 * 10; // 10 MB
 					 $this->upload->initialize(array(
 						 "file_type"     => "image/jpeg",
 						 "upload_path"   => "./$lokasi",
 						 "allowed_types" => "jpg|jpeg|png|gif|bmp",
 						 "max_size" 		 => "$file_size"
 					 ));

					if ($_FILES['gambar']['error'] <> 4) {
 					 if ( ! $this->upload->do_upload('gambar'))
 					 {
 						 $error = $this->upload->display_errors();
 						 $this->session->set_flashdata('msg',
 							 '
 							 <div class="alert alert-warning">
 									<button class="close" data-dismiss="alert">×</button>
 									<strong>Gagal Upload!</strong> '.$error.'.
 							 </div>'
 						 );
						 redirect("panel_admin/v_kat/$nama_kat/$aksi/$id");
 					 }else{
						 if ($aksi == 'e') {
						 		$cek_file = $this->db->get_where('tbl_kat', array('id_kat'=>"$id"))->row();
								if ($cek_file->foto_kat != null or $cek_file->foto_kat != '') {
									unlink($cek_file->foto_kat);
								}
						 }
 						 $filename = $_FILES['gambar']['name'];
 						 $foto_kat = "$lokasi/".preg_replace('/ /', '_', $filename);
					 }
				 }else {
					 if ($aksi == 'e') {
						 		$cek_file = $this->db->get_where('tbl_kat', array('id_kat'=>"$id"))->row();
								$foto_kat = $cek_file->foto_kat;
					 }else {
  				 			$foto_kat = null;
					 }
				 }

				 if ($aksi == 't') {
						$data = array(
							'nama_kat'	=> $nama_kat,
							'judul_kat'	=> $judul_kat,
							'foto_kat'	=> $foto_kat,
							'ket_kat'		=> $ket_kat,
							'url_kat'		=> $url,
							'tgl_kat'		=> $this->Model_data->date('waktu_default')
						);
						$this->db->insert('tbl_kat', $data);
				 }else {
					 $data = array(
						 'judul_kat'	=> $judul_kat,
						 'foto_kat'		=> $foto_kat,
						 'ket_kat'		=> $ket_kat
					 );
					 $this->db->update('tbl_kat', $data, "id_kat='$id'");
				 }
						$this->session->set_flashdata('msg',
							'
							<div class="alert alert-success alert-dismissible" role="alert">
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
								 </button>
								 <strong>Sukses!</strong> Berhasil disimpan.
							</div>'
						);
						redirect("panel_admin/v_kat/$nama_kat/$aksi/$id");
			}
		}
	}

	public function hapus_kat_full($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
				$cek_file = $this->db->get_where('tbl_kat', array('id_kat'=>"$id"))->row();
				if ($cek_file->foto_kat != null or $cek_file->foto_kat != '') {
					unlink($cek_file->foto_kat);
				}
				$this->db->delete('tbl_kat', "id_kat='$id'");
				$this->session->set_flashdata('msg',
					'
					<div class="alert alert-success alert-dismissible" role="alert">
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
						 </button>
						 <strong>Sukses!</strong> Berhasil dihapus.
					</div>'
				);
				redirect("panel_admin/v_kat/$aksi");
		}
	}


	public function galeri($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Galeri";

			$this->db->order_by('id_galeri', 'DESC');
			$data['v_galeri']= $this->db->get('tbl_galeri');

			if ($aksi == 't') {
				$p = 'galeri_tambah';
			}elseif ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_galeri', array('id_galeri'=>"$id"))->row();
				$p = 'galeri_edit';
			}elseif ($aksi == 'h') {
				$cek_file = $this->db->get_where('tbl_galeri', array('id_galeri'=>"$id"))->row();
				if ($cek_file->foto_galeri != null or $cek_file->foto_galeri != '') {
					unlink($cek_file->foto_galeri);
				}
				$this->db->delete('tbl_galeri', "id_galeri='$id'");
				$this->session->set_flashdata('msg',
					'
					<div class="alert alert-success alert-dismissible" role="alert">
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
						 </button>
						 <strong>Sukses!</strong> Berhasil dihapus.
					</div>'
				);
				redirect("panel_admin/galeri");
			}else {
				$p = 'galeri';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/galeri/'.$p, $data);
					$this->load->view('admin/footer');

					if (isset($_POST['btnsimpan'])) {
						$nama_galeri 	= $this->input->post('nama_galeri');
						$url  				= substr(preg_replace('/[ =.@]/', '-', strtolower($nama_galeri)), 0, 50);

						$lokasi    = "img/galeri";
						$file_size = 1024 * 10; // 10 MB
 					 $this->upload->initialize(array(
 						 "file_type"     => "image/jpeg",
 						 "upload_path"   => "./$lokasi",
 						 "allowed_types" => "jpg|jpeg|png|gif|bmp",
 						 "max_size" 		 => "$file_size"
 					 ));

					if ($_FILES['gambar']['error'] <> 4) {
 					 if ( ! $this->upload->do_upload('gambar'))
 					 {
 						 $error = $this->upload->display_errors();
 						 $this->session->set_flashdata('msg',
 							 '
 							 <div class="alert alert-warning">
 									<button class="close" data-dismiss="alert">×</button>
 									<strong>Gagal Upload!</strong> '.$error.'.
 							 </div>'
 						 );
						 redirect("panel_admin/galeri/$aksi/$id");
 					 }else{
						 if ($aksi == 'e') {
						 		$cek_file = $this->db->get_where('tbl_galeri', array('id_galeri'=>"$id"))->row();
								if ($cek_file->foto_galeri != null or $cek_file->foto_galeri != '') {
									unlink($cek_file->foto_galeri);
								}
						 }
 						 $filename = $_FILES['gambar']['name'];
 						 $foto_galeri = "$lokasi/".preg_replace('/ /', '_', $filename);
					 }
				 }else {
					 if ($aksi == 'e') {
								 $cek_file = $this->db->get_where('tbl_galeri', array('id_galeri'=>"$id"))->row();
								 $foto_galeri = $cek_file->foto_galeri;
					 }else {
  				 			$foto_galeri = null;
					 }
				 }

				 if ($aksi == 't') {
						$data = array(
							'nama_galeri'	=> $nama_galeri,
							'foto_galeri'	=> $foto_galeri,
							'tgl_galeri'	=> $this->Model_data->date('waktu_default')
						);
						$this->db->insert('tbl_galeri', $data);
				 }else {
					 $data = array(
						 'nama_galeri'	=> $nama_galeri,
						 'foto_galeri'	=> $foto_galeri
					 );
					 $this->db->update('tbl_galeri', $data, "id_galeri='$id'");
				 }
						$this->session->set_flashdata('msg',
							'
							<div class="alert alert-success alert-dismissible" role="alert">
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
								 </button>
								 <strong>Sukses!</strong> Berhasil disimpan.
							</div>'
						);
						redirect("panel_admin/galeri/$aksi/$id");
				}
		}
	}


	public function data_profile($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Data Menu Profile";

			$this->db->order_by('id_isi', 'ASC');
			$data['v_isi']  		= $this->db->get_where('tbl_isi',"nama_isi='profile'");

			if ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_isi', array('id_isi'=>"$id"))->row();
				$p = 'data_profile_edit';
				$data['judul_web'] 	= $data['query']->judul_isi;
			}else {
				$p = 'data_profile';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/data_profile/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}

	public function data_guru($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Data Menu Guru";

			$this->db->order_by('id_isi', 'ASC');
			$data['v_isi']  		= $this->db->get_where('tbl_isi',"nama_isi='guru'");

			if ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_isi', array('id_isi'=>"$id"))->row();
				$p = 'data_guru_edit';
				$data['judul_web'] 	= $data['query']->judul_isi;
			}else {
				$p = 'data_guru';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/data_guru/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}

	public function data_siswa($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Data Menu Siswa";

			$this->db->order_by('id_isi', 'ASC');
			$data['v_isi']  		= $this->db->get_where('tbl_isi',"nama_isi='siswa'");

			if ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_isi', array('id_isi'=>"$id"))->row();
				$p = 'data_siswa_edit';
				$data['judul_web'] 	= $data['query']->judul_isi;
			}else {
				$p = 'data_siswa';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/data_siswa/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}


	public function data_alumni($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Data Menu Alumni";

			$this->db->order_by('id_isi', 'ASC');
			$data['v_isi']  		= $this->db->get_where('tbl_isi',"nama_isi='alumni'");

			if ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_isi', array('id_isi'=>"$id"))->row();
				$p = 'data_alumni_edit';
				$data['judul_web'] 	= $data['query']->judul_isi;
			}else {
				$p = 'data_alumni';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/data_alumni/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}

	public function data_kurikulum($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Data Menu Kurikulum";

			$this->db->order_by('id_isi', 'ASC');
			$data['v_isi']  		= $this->db->get_where('tbl_isi',"nama_isi='kurikulum'");

			if ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_isi', array('id_isi'=>"$id"))->row();
				$p = 'data_kurikulum_edit';
				$data['judul_web'] 	= $data['query']->judul_isi;
			}else {
				$p = 'data_kurikulum';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/data_kurikulum/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}


	public function buku_tamu($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Data Menu Buku Tamu";

			$this->db->order_by('id_isi', 'ASC');
			$data['v_isi']  		= $this->db->get_where('tbl_isi',"nama_isi='buku_tamu'");

			if ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_isi', array('id_isi'=>"$id"))->row();
				$p = 'buku_tamu_edit';
				$data['judul_web'] 	= $data['query']->judul_isi;
			}else {
				redirect("panel_admin/buku_tamu/e/".$data['v_isi']->row()->id_isi);
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/buku_tamu/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}


	public function data_info($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Data Menu Info";

			$this->db->order_by('id_isi', 'ASC');
			$data['v_isi']  		= $this->db->get_where('tbl_isi',"nama_isi='info'");

			if ($aksi == 'e') {
				$data['query'] = $this->db->get_where('tbl_isi', array('id_isi'=>"$id"))->row();
				$p = 'data_info_edit';
				$data['judul_web'] 	= $data['query']->judul_isi;
			}else {
				$p = 'data_info';
			}
					$this->load->view('admin/header', $data);
					$this->load->view('admin/data_info/'.$p, $data);
					$this->load->view('admin/footer');
		}
	}


	public function simpan_isi($aksi='', $id='')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if(!isset($ceks)) {
			redirect('panel_admin/log_in');
		}else{
					if (isset($_POST['btnsimpan'])) {
						$nama_isi 	= $this->input->post('nama_isi');
						$judul_isi  = $this->input->post('judul_isi');
						$ket_isi		= $this->input->post('ket_isi');
						$url  			= substr(preg_replace('/[ =.@]/', '-', strtolower($judul_isi)), 0, 50);

						if ($this->db->get_where('tbl_isi', array('nama_isi'=>"$nama_isi", 'url_isi'=>"$url"))->num_rows() != 0) {
							 $url = $url.'-'.date('d');
						}

						$lokasi    = "img/data_menu";
						$file_size = 1024 * 10; // 10 MB
 					 $this->upload->initialize(array(
 						 "file_type"     => "image/jpeg",
 						 "upload_path"   => "./$lokasi",
 						 "allowed_types" => "jpg|jpeg|png|gif|bmp",
 						 "max_size" 		 => "$file_size"
 					 ));

					if ($_FILES['gambar']['error'] <> 4) {
 					 if ( ! $this->upload->do_upload('gambar'))
 					 {
 						 $error = $this->upload->display_errors();
 						 $this->session->set_flashdata('msg',
 							 '
 							 <div class="alert alert-warning">
 									<button class="close" data-dismiss="alert">×</button>
 									<strong>Gagal Upload!</strong> '.$error.'.
 							 </div>'
 						 );
						 redirect("panel_admin/$nama_isi/$aksi/$id");
 					 }else{
						 if ($aksi == 'e') {
						 		$cek_file = $this->db->get_where('tbl_isi', array('id_isi'=>"$id"))->row();
								if ($cek_file->foto_isi != null or $cek_file->foto_isi != '') {
									unlink($cek_file->foto_isi);
								}
						 }
 						 $filename = $_FILES['gambar']['name'];
 						 $foto_isi = "$lokasi/".preg_replace('/ /', '_', $filename);
					 }
				 }else {
					 if ($aksi == 'e') {
						 		$cek_file = $this->db->get_where('tbl_isi', array('id_isi'=>"$id"))->row();
								$foto_isi = $cek_file->foto_isi;
					 }else {
  				 			$foto_isi = null;
					 }
				 }

						$data = array(
							'judul_isi'	=> $judul_isi,
							'foto_isi'	=> $foto_isi,
							'ket_isi'		=> $ket_isi,
							'url_isi'		=> $url,
							'tgl_isi'		=> $this->Model_data->date('waktu_default')
						);
					 $this->db->update('tbl_isi', $data, "id_isi='$id'");

						$this->session->set_flashdata('msg',
							'
							<div class="alert alert-success alert-dismissible" role="alert">
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
								 </button>
								 <strong>Sukses!</strong> Berhasil disimpan.
							</div>'
						);
						redirect("panel_admin/$nama_isi/$aksi/$id");
			}
		}
	}

	// public function hapus_isi($aksi='', $id='')
	// {
	// 	$ceks = $this->session->userdata('un@sman1_belitang');
	// 	if(!isset($ceks)) {
	// 		redirect('panel_admin/log_in');
	// 	}else{
	// 			$cek_file = $this->db->get_where('tbl_isi', array('id_isi'=>"$id"))->row();
	// 			if ($cek_file->foto_isi != null or $cek_file->foto_isi != '') {
	// 				unlink($cek_file->foto_isi);
	// 			}
	// 			$this->db->delete('tbl_isi', "id_isi='$id'");
	// 			$this->session->set_flashdata('msg',
	// 				'
	// 				<div class="alert alert-success alert-dismissible" role="alert">
	// 					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 						 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
	// 					 </button>
	// 					 <strong>Sukses!</strong> Berhasil dihapus.
	// 				</div>'
	// 			);
	// 			redirect("panel_admin/$aksi");
	// 	}
	// }


	public function logout() {
     if ($this->session->has_userdata('un@sman1_belitang') != '' AND $this->session->has_userdata('id_user@sman1_belitang') != '') {
         $this->session->sess_destroy();
     }
		 redirect('panel_admin/log_in');
  }

}
