<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserAuth extends CI_Controller {
 
   public function __construct() {
      parent::__construct(); 
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('user/UserAuthModel', 'auth');
 
   }
 
   /*
      Display all records in page
   */
 
  public function index()
  {
    // echo "poddar";die;
    // $data['projects'] = $this->project->get_all();
      $data['title'] = "Login";
    // $this->load->view('layout/header');       
    // $this->load->view('project/index',$data);
    //  $this->load->view('layout/footer');

    $this->load->view('login', $data);
  }
 
  public function login1()
  {
        $username = $this->input->post('username');  
        $password = $this->input->post('password'); 
        if (!empty($user) && !empty($pass))   
        {  
          $result = $this->db->get_where($table, ['username' => $username])->row();
            $this->session->set_userdata(array('user'=>$user));  
            $this->load->view('welcome_view');  
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('login_view', $data);  
        } 
  }


  public function login(){ 
        //Validation for login form

        //echo "<pre>"; print_r($this->input->post());
      $this->form_validation->set_rules('username','Username','trim|required|valid_email');
      $this->form_validation->set_rules('password','Password','trim|required|min_length[5]|max_length[15]');
          if($this->form_validation->run() == true){
          $username=$this->input->post('username');
          $password=$this->input->post('password');
          $user = $this->auth->get_user_by_email($username);
          
              // $validate=$this->auth->login($username,$password);
              // if($validate){  
              //     $this->session->set_userdata('uid',$validate->id);	
              //     $this->session->set_userdata('name',$validate->name);	
              //     $this->session->set_userdata('email',$validate->email);	
              //     $this->session->set_userdata('mobile',$validate->mobile);	
              //     $this->session->set_userdata('isUserLoggedIn',TRUE);	
              //     redirect('user/dashboard');
              // } else {
                
              //     $this->session->set_flashdata('error','Invalid login details.Please try again.');
              //     redirect('login');
              // }

              if ($user && password_verify($password, $user->password)) {
                  $this->session->set_userdata('uid',$user->id);	
                  $this->session->set_userdata('name',$user->name);	
                  $this->session->set_userdata('email',$user->email);	
                  $this->session->set_userdata('mobile',$user->mobile);	
                  $this->session->set_userdata('isUserLoggedIn',TRUE);	                
                redirect('user/dashboard');
            } else {
                $this->session->set_flashdata('error', 'Invalid email or password.');
                redirect('login');
            }
          } else{ 
            $this->load->view('login');	
          }
    }

    public function signup(){
      //Validation for login form
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('username','Username','trim|required|valid_email');
      $this->form_validation->set_rules('password','Password','trim|required|min_length[5]|max_length[15]');
      $this->form_validation->set_rules('mobile', 'Mobile', 'required|regex_match[/^[0-9]{10}$/]', [
        'regex_match' => 'The mobile number must be 10 digits.'
      ]);
        if($this->form_validation->run() == true){ //echo "tes";

            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('username'),
                'mobile' => $this->input->post('mobile'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
            ];
            $this->auth->insert_user($data);
            $this->session->set_flashdata('success', 'Signup successful. You can now login.');
            redirect('login');
        } else{ //echo "dfdsfs"; die;
          $this->load->view('signup');	
        }
  }

   
 
}