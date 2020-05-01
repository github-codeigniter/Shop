<?php
class Login extends CI_Controller{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('M_Produk');
		$this->load->library('form_validation');
	}

    public function index()
        {

            if($this->M_Produk->is_logged_in())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                if($this->session->userdata("role") == "admin"){
                            redirect('admin/ds/statistik');
                        }else{
                            redirect('user/web');
                        }

            }else{

                //jika session belum terdaftar

                //set form validation
                $this->form_validation->set_rules('input_username', 'Username', 'required');
                $this->form_validation->set_rules('input_password', 'Password', 'required');

                //set message form validation
                // $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                //     <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("input_username", TRUE);
                $password = MD5($this->input->post('input_password', TRUE));

                //checking data via model
                $checking = $this->M_Produk->check_login('user', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $user) {

                        $session_data = array(
                            'Id_user'	=> $user->Id_user,
							'role'		=> $user->role,
							'username'	=> $user->username,
							'password'	=> $user->password,
							'nama_user'	=> $user->nama_user
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("role") == "admin"){
                            redirect('admin/ds/statistik');
                        }else{
                            redirect('user/web');
                        }

                    }
                }else{
                    $this->load->view('users/login');
                }

            }else{
                $data["title"] = "Login"; 
                $this->load->view('users/login', $data);
            }

        }

    }
}