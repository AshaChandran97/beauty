<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

  $this->load->view('index');
	}
	public function userform()
  {
   $this->load->view('userform');
  }
  
 public function insert()
 {
 	$this->load->library('form_validation');
    	$this->form_validation->set_rules("name","name",'required');
    	$this->form_validation->set_rules("address","address",'required');
    	$this->form_validation->set_rules("age","age",'required');
    	$this->form_validation->set_rules("phone","phone",'required');
    	$this->form_validation->set_rules("email","email",'required');
    	$this->form_validation->set_rules("password","password",'required');
    	if($this->form_validation->run())
    	{
         $this->load->model('mainmodel');
         $pass=$this->input->post("password");
         $encpass=$this->mainmodel->encpas($pass);
    	$a=array("name"=>$this->input->post("name"),
    	          "address"=>$this->input->post("address"),
    	          "age"=>$this->input->post("age"),
    	          "phone"=>$this->input->post("phone"));
    	$b=array("email"=>$this->input->post("email"),
                  "password"=>$encpass,
                    "usertype"=>'2');

    	$this->mainmodel->insert($a,$b);
  
  		redirect(base_url().'main/userform');
    }
}
public function updateuser()
{
  $this->load->model('mainmodel');
  $id=$this->session->id;
    $data['n']=$this->mainmodel->updateuser($id);
  $this->load->view('updateuser',$data);
}

public function updatedetails()
{
  $a=array("name"=>$this->input->post("name"),
      "address"=>$this->input->post("address"),
      "gender"=>$this->input->post("gender"),
      "age"=>$this->input->post("age"));
  $b=array("email"=>$this->input->post("email"),
                  "password"=>$encpass,
                    "usertype"=>'2');
  $this->load->model('mainmodel');
  $id=$this->uri->segment(3);
  $data['user_data']=$this->mainmodel->singledata($id);
  $this->mainmodel->singleselect();
  $this->load->view('updateuser',$data);
  if($this->input->post("update"))
  {
    $this->mainmodel->updatedetails($a,$this->input->post("id"));
    redirect('main/userupdate','refresh');

  }
}
public function login()
  {
    $this->load->view('login');
  }
  
  public function logns()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules("email","email",'required');
    $this->form_validation->set_rules("password","password",'required');
    if($this->form_validation->run())
    {
      $this->load->model('mainmodel');
      $email=$this->input->post("email");
      $pass=$this->input->post("password");
      $rslt=$this->mainmodel->selectpass($email,$pass);
        if ($rslt)
         {
          $id=$this->mainmodel->getuserid($email);

          $user=$this->mainmodel->getuser($id);
          $this->load->library(array('session'));
          $this->session->set_userdata(array
            ('id'=>(int)$user->id,
            'usertype'=>$user->usertype));
          if($_SESSION['usertype']=='2')
          {
            redirect(base_url().'main/userhome');
          }
          elseif($_SESSION['usertype']=='1')
          {
            redirect(base_url().'main/staffhome');
          }
          elseif($_SESSION['usertype']=='0')
          {
            redirect(base_url().'main/adminindex');
          }
          else
          {
            echo "Waiting for approval";
          }
         }
           else
           {
            echo "invalid user";
           }
       }
       else
       {
        redirect('main/login','refresh');
       }
         
}
  

  public function userhome()
  {
    $this->load->view('userhome');
  }
  public function bookform (){
    $this->load->view('bookingform');
  }

  public function bookinsert()
  {

    $this->load->library('form_validation');
    $this->form_validation->set_rules("name","name",'required');
    $this->form_validation->set_rules("address","address",'required');
    $this->form_validation->set_rules("age","age",'required');
    $this->form_validation->set_rules("phone","phone",'required');
    $this->form_validation->set_rules("package","package",'required');
    $this->form_validation->set_rules("date","date",'required');
    $this->form_validation->set_rules("time","time",'required');
    if($this->form_validation->run())
    {
      $this->load->model('mainmodel');
      $n=array("name"=>$this->input->post("name"),
           "address"=>$this->input->post("address"),
           "age"=>$this->input->post("age"),
           "phone"=>$this->input->post("phone"),
         "package"=>$this->input->post("package"),
         "date"=>$this->input->post("date"),
         "time"=>$this->input->post("time"));
      
        $this->mainmodel->bookinsert($n);
        redirect(base_url().'main/bookform');
    }
  }
  public function viewpackage (){
    $this->load->view('viewpackage');
  }
  public function approvedetails()
  {
    $this->load->model('mainmodel');
    $data['n']=$this->mainmodel->approvedetails();
    $this->load->view('bookapprej',$data);
  }
  public function approve()
  {
    $this->load->model('mainmodel');
    $id=$this->uri->segment(3);
    $this->mainmodel->approve($id);
    redirect('main/approvedetails','refresh');
  }
  public function reject()
  {
    $this->load->model('mainmodel');
    $id=$this->uri->segment(3);
    $this->mainmodel->reject($id);
    redirect('main/approvedetails','refresh');
  }


  public function test (){
    $this->load->view('test');
  }
  public function test1 (){
    $this->load->view('test1');
  }

public function adminindex()
    {
      $this->load->view('adminhome');
    }
    public function addstaff()
    {
      $this->load->view('addstaff');
    }
    public function insertstaff()
    {
       $this->load->library('form_validation');
       $this->form_validation->set_rules("name","name",'required');
       $this->form_validation->set_rules("address","address",'required');
       $this->form_validation->set_rules("age","age",'required');
      $this->form_validation->set_rules("phone","phone",'required');
      $this->form_validation->set_rules("qualification","qualification",'required');
      $this->form_validation->set_rules("specialisation","specialisation",'required');
      $this->form_validation->set_rules("email","email",'required');
      $this->form_validation->set_rules("password","password",'required');
         if($this->form_validation->run())
        {
        $this->load->model('mainmodel');
        $pass=$this->input->post("password");
        $encpass=$this->mainmodel->encpswd($pass);
        $a=array("name"=>$this->input->post("name"),
          "address"=>$this->input->post("address"),
          "age"=>$this->input->post("age"),
            "phone"=>$this->input->post("phone"),
            "qualification"=>$this->input->post("qualification"),
             "specialisation"=>$this->input->post("specialisation")
            );
         $b=array( "email"=>$this->input->post("email"),
                "password"=>$encpass,
                "usertype"=>'1');
              $this->mainmodel->insertstaff($a,$b);    
        redirect(base_url().'main/adminindex'); 
        
}

}
 public function viewstaff()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->viewstaff();
        $this->load->view('viewstaff',$data);
    }   
     public function viewusers()
    {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->viewusers();
        $this->load->view('viewuser',$data);
    }   
   


    
    public function upload()
    {
      $this->load->view('uploadbill');
    }
    public function fileupload()
    {

       $this->load->library('form_validation');
       $this->form_validation->set_rules("pic","pic",'required');
        if($this->form_validation->run())
        {
        $this->load->model('mainmodel');
        $config['upload_path']='./upload/';
        $config['allowed_types']='gif/jpg/pdf';
        $congig['max-size']=1000;
        // $congig['max-hieght']=1000;
        // $congig['max-width']=700;
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('pic'))
        {
          $error=array("error"=>$this->upload->display_errors());

        }
        else
        {
          $data=array('pic'=>$this->upload->data());
          $pdf=$data['pic']['salarybill.pdf'];
        }
        $a=array("bill"=>$this->input->post("pic"),
          "currentdate"=>date('y-m-d'));
         $this->mainmodel->uploadbill($a);    
        redirect(base_url().'main/adminindex'); 
}
}

    public function feedback()
{
$this->load->view('feedback');
}
public function feedbacks()
{
$this->load->library('form_validation');
$this->form_validation->set_rules("feedback","feedback",'required');
if($this->form_validation->run())
{
$id=$this->session->id;
$this->load->model('mainmodel');
$a=array("feedback"=>$this->input->post("feedback"),"currentdate"=>date('y-m-d'),"loginid"=>$id);
$this->mainmodel->feedbacks($a);
redirect(base_url().'main/feedback');
}
}
public function staffhome()
{
$this->load->view('staffhome');
}
public function viewfeedback()
{
  $this->load->model('mainmodel');
  $data['n']=$this->mainmodel->vfeedback();
  $this->load->view('viewfeedback',$data);
}
public function viewsalary()
{
  $this->load->model('mainmodel');
  $data['n']=$this->mainmodel->vsalary();
  $this->load->view('viewsalary',$data);
}

public function updatestaff()
{
  $this->load->model('mainmodel');
  $id=$this->session->id;
    $data['n']=$this->mainmodel->updatestaff($id);
  $this->load->view('viewstaffprofile',$data);
}

public function update_staff()
{
  $a=array("name"=>$this->input->post("name"),
      "address"=>$this->input->post("address"),
      "age"=>$this->input->post("age"),
       "phone"=>$this->input->post("phone"),
       "qualification"=>$this->input->post("qualification"),
        "specialisation"=>$this->input->post("specialisation"));
  $b=array("email"=>$this->input->post("email"),
                  "password"=>$encpass,
                    "usertype"=>'2');
  $this->load->model('mainmodel');
  $id=$this->uri->segment(3);
  $data['user_data']=$this->mainmodel->singledatastaff($id);
  $this->mainmodel->singleselectstaff();
  $this->load->view('viewstaff',$data);
}
    public function gallery()
{
$this->load->view('gallery');
}
    public function contact()
{
$this->load->view('contact');
}
}
