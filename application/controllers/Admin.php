<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

public function index()
    {
            $this->form_validation->set_rules('username','username','required');
            $this->form_validation->set_rules('password','password','required');
   
            if ($this->form_validation->run() == false){
            }
            else {
                
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $login_id=$this->Crud_model->isvalidate($username,$password);
                $user_info = $this->Crud_model->getRow('users','*',['where' =>['id'=>$login_id]]);
             
                if($login_id)
                {
                    $this->session->set_userdata('login_id',$login_id);
                    $this->session->set_userdata('role_id',$user_info['role_id']);
       
                      return redirect('Admin/dashboard');
                }   
                else{
                    $this->session->set_flashdata('Login_failed','Invalid username/password');
                    $this->session->set_flashdata('alert_color','alert-danger');
                          return redirect('Admin');
                    }
            }
            $this->load->view('login');
    }

    public function dashboard(){

        if($this->session->userdata('role_id')==0)
        {
            $fcount = $this->Crud_model->getCount('registration_form','');
            $data['fcount'] = $fcount;
        }
        else{
            $fcount = $this->Crud_model->getCount('registration_form',['where'=>['added_by'=>$this->session->userdata('login_id')]]);
            $data['fcount'] = $fcount;
            $data['exam_info']=$this->Crud_model->getRows('registration_form','*',['where' =>['added_by'=>$this->session->userdata('login_id')]]);
            // echo "<pre>";
            // print_r($data['exam_info']);exit();
        }
        $this->load->view('Admin/layout/header',$data);
        $this->load->view('Admin/layout/sidebar',$data);
        $this->load->view('dashboard',$data);
        $this->load->view('Admin/layout/footer',$data);
    }

    public function logout(){
        $this->session->unset_userdata('login_id');
        $this->session->unset_userdata('role_id');
        return redirect('Admin/index');
     }
     
//============Start Student===========================

    public function addStudent()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if($this->form_validation->run() == false){
        }
        else{
             
            $data = array(
            'name' =>       $this->input->post('name'),
            'username' =>   $this->input->post('username'),
            'password' =>   $this->input->post('password'),
            'role_id'  =>   1
            );
    
            $insert_id = $this->Crud_model->add('users',$data);

            if($insert_id){

                $b_data=array(
                'user_id'=> $insert_id,
                'balance'=>1000
                );

                $this->Crud_model->add('wallet',$b_data);
                $this->session->set_flashdata('success_msg', 'User Added Succesfully');
                $this->session->set_flashdata('alt_color', 'alert-success');

                redirect('Admin/viewStudent'); 
            } 
            else{
                $this->session->set_flashdata('success_msg', 'Something Went Wrong!');
                $this->session->set_flashdata('alt_color', 'alert-danger');
            }
        }   
        $this->load->view('Admin/layout/header');
        $this->load->view('Admin/layout/sidebar');
        $this->load->view('Admin/student/add');
        $this->load->view('Admin/layout/footer');
    }

    public function viewStudent()
    {

        $student_info=$this->Crud_model->getRows('users','*',['where'=>['role_id'=>1]]);
        $data['student_info']=$student_info;

        $this->load->view('Admin/layout/header',$data);
        $this->load->view('Admin/layout/sidebar',$data);
        $this->load->view('Admin/student/view',$data);
        $this->load->view('Admin/layout/footer',$data);
    }

    public function editStudent($id)
    {
    
        $student_info = $this->Crud_model->getRow('users','*',['where' => ['id'=> $id]]);
        $data['student_info'] = $student_info;

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if($this->form_validation->run() == false){
            $this->load->view('layout/header',$data);
            $this->load->view('layout/sidebar',$data);
            $this->load->view('Admin/student/edit',$data);
            $this->load->view('layout/footer',$data);
        }
        else{
             
            $data = array(
            'name' =>     $this->input->post('name'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'role_id'  => 1
            );
    
            $insert_id = $this->Crud_model->update('users', $data, ['id'=> $id]);

            if($insert_id){
                $this->session->set_flashdata('success_msg', 'User Updated Succesfully');
                $this->session->set_flashdata('alt_color', 'alert-success');

                redirect('Admin/viewStudent'); 
            } 
            else{
                $this->session->set_flashdata('success_msg', 'Something Went Wrong!');
                $this->session->set_flashdata('alt_color', 'alert-danger');
            }
        }
    }
    

    public function deleteStudent($id)
    {
        
        $this->Crud_model->delete('users', array('id' => $id));
        redirect('Admin/viewStudent');
        
    }
//============ End Student =====================

}
?>