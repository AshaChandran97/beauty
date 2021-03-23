<?php
class mainmodel extends CI_model
{

 public function insert($a,$b)
{
  $this->db->insert("login",$b);
  $loginid=$this->db->insert_id();
  $a['loginid']=$loginid;
  $this->db->insert("userreg",$a);

}
public function encpas($pass)
{
  return password_hash($pass,PASSWORD_BCRYPT);
}
public function encpswd($pass)
{
	return password_hash($pass,PASSWORD_BCRYPT);
}
public function updateuser($id)
{
	$this->db->select('*');
	$qry=$this->db->join('login','login.id=userreg.loginid','inner');
		$this->db->where("loginid",$id);
	$qry=$this->db->get("userreg");
	return $qry;
}

public function singledata($id)
{
	$this->db->select('*');
	$this->db->where("id",$id);
	$qry=$this->db->get("userreg");
	return $qry;
}
public function singleselect()
{
	$qry=$this->db->get("userreg");
	return $qry;
}
public function updatedetails($a,$b,$id)
{
$this->db->select('*');
$qry=$this->db->where("loginid",$id);
$qry=$this->db->join('login','login.id=userreg.loginid','inner');
$qry=$this->db->update("userreg",$a);
$qry=$this->db->where("login.id",$id);
$qry=$this->db->update("login",$b);
        return $qry;
}
public function selectpass($email,$pass)
	{
		$this->db->select('password');
		$this->db->from("login");
		$this->db->where("email",$email);
		$qry=$this->db->get()->row('password');
		return $this->verifypass($pass,$qry);
	}
	public function verifypass($pass,$qry)
	{
		return password_verify($pass,$qry);
	}
	public function getuserid($email)
	{
		$this->db->select('id');
		$this->db->from("login");
		$this->db->where("email",$email);
		return $this->db->get()->row('id');
	}
	public function getuser($id)
	{
		$this->db->select('*');
		$this->db->from("login");
		$this->db->where("id",$id);
		return $this->db->get()->row();
	}
	public function bookinsert($n)
	{
		$this->db->insert("package",$n);
	}

	public function approvedetails()
	{
		$this->db->select('*');
		$qry=$this->db->get("package");
		return $qry;
	}
	public function approve($id)
	{
		$this->db->set('status','0');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("package");
		return $qry;
	}
	public function reject($id)
	{
		$this->db->set('status','1');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("package");
		return $qry;
	}
	

public function insertstaff($a,$b)
	{

       $this->db->insert("login",$b);
		$loginid=$this->db->insert_id();
		$a['loginid']=$loginid;
	   $this->db->insert("staff",$a);
	}
	public function viewstaff()
	{
		$this->db->select('*');
		$this->db->join('login','login.id=staff.loginid','inner');
		$qry=$this->db->get("staff");
        return $qry;
	}
	public function viewusers()
	{
		$this->db->select('*');
		$this->db->join('login','login.id=userreg.loginid','inner');
		$qry=$this->db->get("userreg");
        return $qry;
	}
	
public function singledatastaff($id)
{
	$this->db->select('*');
	$this->db->where("id",$id);
	$qry=$this->db->get("staff");
	return $qry;
}
public function singleselectstaff()
{
	$qry=$this->db->get("staff");
	return $qry;
}
public function update_staff($a,$b,$id)
{
$this->db->select('*');
$qry=$this->db->where("loginid",$id);
$qry=$this->db->join('login','login.id=staff.loginid','inner');
$qry=$this->db->update("staff",$a);
$qry=$this->db->where("login.id",$id);
$qry=$this->db->update("login",$b);
        return $qry;
}

	public function feedbacks($a)
{
$this->db->insert("feedback",$a);

}
public function uploadbill($a)
{
	$this->db->insert("bill",$a);
}

public function vfeedback()
{
        $this->db->select('*');
		$this->db->join('userreg','userreg.loginid=feedback.loginid','inner');
		$qry=$this->db->get("feedback");
        return $qry;
}
public function vsalary()
{
        $this->db->select('*');
		$qry=$this->db->get("bill");
        return $qry;
}
public function updatestaff($id)
{
	$this->db->select('*');
	$qry=$this->db->join('login','login.id=staff.loginid','inner');
		$this->db->where("loginid",$id);
	$qry=$this->db->get("staff");
	return $qry;	
}
}
?>