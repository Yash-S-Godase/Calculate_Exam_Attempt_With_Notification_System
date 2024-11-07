<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends CI_Controller {

    private $role_id;
    private $login_id;

    public function __construct() {
    parent::__construct();
        
        // Initialize the variable in the constructor
        $this->role_id = $this->session->userdata('role_id');
        $this->login_id = $this->session->userdata('login_id');
    }

    public function index(){

    }


	public function Add($exam_name)
	{
        $data['exam_name']=$exam_name;
        $wallet_info=$this->Crud_model->getRow('wallet','*',['where'=>['user_id'=>$this->session->userdata('login_id')]]);
        $data['wallet_info'] = $wallet_info;
        $wallet_b=$wallet_info['balance'];
		$this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('number','Number', 'required');
        $this->form_validation->set_rules('date','Birth date', 'required');
        $this->form_validation->set_rules('education','Education', 'required');
        $this->form_validation->set_rules('exam','Exam Name', 'required');
        $this->form_validation->set_rules('Edate','Edate', 'required');
        $this->form_validation->set_rules('date','Birth date', 'required');
        $this->form_validation->set_rules('fee','Exam Fee', 'required');
      
        if($this->form_validation->run()==false){
   
        }else{ 
            
           $exam_fee = $this->input->post('fee');
           $current_b=$wallet_b - $exam_fee;
            $data = array(
            'name'   =>       $this->input->post('name'),      
            'email'  =>       $this->input->post('email'),
            'number' =>       $this->input->post('number'),
            'date'   =>       $this->input->post('date'),
            'education'=>     $this->input->post('education'),
            'exam'   =>       $this->input->post('exam'),
            'Edate'   =>      $this->input->post('Edate'),
            'fee'    =>       $this->input->post('fee'),
            'added_by'=>      $this->session->userdata('login_id'));
                
            $insert_id = $this->Crud_model->add('registration_form',$data);
            
            if($insert_id){
                $this->Crud_model->update('wallet',['balance'=>$current_b],['user_id'=>$this->session->userdata('login_id')]);
             redirect('Exam/View');
            }
            
            $exam_info = $this->Crud_model->getRows('registration_form','*','');
            $data['exam_info'] = $exam_info;
        }

		$this->load->view('admin/layout/header',$data);
		$this->load->view('admin/layout/sidebar',$data);
		$this->load->view('admin/registration/add',$data);
		$this->load->view('admin/layout/footer',$data);
	}

	public function View(){
     
        if($this->role_id==0)
        {
            $exam_info=$this->Crud_model->getRows('registration_form','*','');
            $data['exam_info']=$exam_info;    
        }else{
            $exam_info=$this->Crud_model->getRows('registration_form','*',['where'=>['added_by'=>$this->login_id]]);
            $data['exam_info']=$exam_info;
        }


        $wallet_info=$this->Crud_model->getRow('wallet','*',['where'=>['user_id'=>$this->session->userdata('login_id')]]);
        $data['wallet_info'] = $wallet_info;
    
        $this->load->view('admin/layout/header',$data);
        $this->load->view('admin/layout/sidebar',$data);
        $this->load->view('admin/registration/view',$data);
        $this->load->view('admin/layout/footer',$data);
    }

    public function deleteExam($id,$addded_by)
    {
       
        $wallet_info=$this->Crud_model->getRow('wallet','*',['where'=>['user_id'=>$addded_by]]);
        $wallet_b=$wallet_info['balance'];
        $c_bal = $wallet_b-200;
        
        $this->Crud_model->update('wallet',['balance'=>$c_bal],['user_id'=>$addded_by]);
        $this->Crud_model->delete('registration_form', array('id' => $id));
        redirect('Exam/View');
        
    }
    

    public function exam()
    {
        $this->form_validation->set_rules('exam_name',' Exam Name', 'required');
        if($this->form_validation->run()==false){
   
        }else{ 
            
            $data = array(
            'exam_name'=>  $this->input->post('exam_name'),      
            'added_by'=>   $this->session->userdata('login_id'));
                
            $insert_id = $this->Crud_model->add('exam_list',$data);
            if($insert_id){
   
             redirect('Exam/examView');
            }
   
            else{
            } 
   
            }
         
        $this->load->view('admin/layout/header',$data);
        $this->load->view('admin/layout/sidebar',$data);
        $this->load->view('admin/exam/add',$data);
        $this->load->view('admin/layout/footer',$data);
    }

    public function examView(){
     
        $exam_list = $this->Crud_model->getRows('exam_list','*','');
        $data['exam_list'] = $exam_list;

        $this->load->view('admin/layout/header',$data);
        $this->load->view('admin/layout/sidebar',$data);
        $this->load->view('admin/exam/view',$data);
        $this->load->view('admin/layout/footer',$data);
    }
    

    public function Wallet(){
        
        $wallet_info=$this->Crud_model->getRow('wallet','*',['where'=>['user_id'=>$this->session->userdata('login_id')]]);
        $data['wallet_info'] = $wallet_info;
        $this->load->view('admin/layout/header',$data);
        $this->load->view('admin/layout/sidebar',$data);
        $this->load->view('admin/Wallet/Wallet',$data);
        $this->load->view('admin/layout/footer',$data);
    }
 

}
?>