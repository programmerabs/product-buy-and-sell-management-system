<?php include'config/config.php';?>
<?php include'db.php';?>
<?php
$db=new Database;

?>
<?php

if($_POST['key']=='countstd'){
	$sql="SELECT * FROM tbl_student";
	if($ctstd=$db->select($sql)){
		echo $ctstd->num_rows;
	}else{
		echo '0';
	}
}
if($_POST['key'] == 'addcustomer'){
	$cmobile=$_POST['cmobile'];
	$cemail=$_POST['cemail'];
	$caddress=$_POST['caddress'];
	$cname=$_POST['cname'];
	$ctype=$_POST['ctype'];
	$cdob=$_POST['cdob'];
	if($cmobile == '' || $cemail == '' || $caddress == '' || $cname == '' || $ctype == '' 
		|| $cdob == ''){
		echo json_encode(['key'=>0,'msg'=>'Field Must not be empty']);
	}else{
        
		$sql="INSERT INTO customer(`mobile`,`name`,`email`,`ctype`,`address`,`dob`)
		VALUES('$cmobile','$cname','$cemail','$ctype','$caddress','$cdob')";
		$insert_customer=$db->insert($sql);
		if($insert_customer){
			echo json_encode(['key'=>1,'msg'=>'Customer Added successfully']);
		}else{
			echo json_encode(['key'=>0,'msg'=>'Faield']);
		}
		
	}
	
}
//show student
if($_POST['key'] == 'show_student'){
	$tbl_data='  <table class="table table-sm table-bordered table-striped" id="student_tbl">
                <thead class="bg-1">
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Name</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Session</th>
                    <th scope="col">Technology</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>';
                $sql="SELECT * FROM tbl_student";
                if($stdata=$db->select($sql)){
                $sl=1;
                while ($data=$stdata->fetch_assoc()) {
                	$tbl_data.=' <tr> 
                    <td>'.$sl.'</td>
                    <td>'.$data['st_roll'].'</td>
                    <td>'.$data['st_name'].'</td>
                    <td>'.$data['st_semester'].'</td>
                    <td>'.$data['st_shift'].'</td>
                    <td>'.$data['st_session'].'</td>
                    <td>'.$data['st_technology'].'</td>
                    <td>
              <button class="icnbtn"  onclick="view_std('.$data['st_id'].')"><i class="fas fa-eye"></i></button>
                ||

                <button class="icnbtn" data-toggle="modal" data-target="#update_std" onclick="std_data_f_update('.$data['st_id'].')"><i class="fas fa-user-edit"></i></button>
                ||
               
                <button onclick="del_std('.$data['st_id'].')" class="icnbtn" ><i class="fas fa-user-times"></i></button>
            </td>
                  </tr>';
                  $sl++;
                }
                }  
                   
               	$tbl_data.='</tbody>
            	</table>';
            	echo $tbl_data;
}
//show std data for update
if($_POST['key']=='std_data_f_update'){
  $st_id=$_POST['st_id'];
  $sql="SELECT * FROM tbl_student WHERE st_id= '$st_id'";
  $showallstddata = $db->select($sql);
  $response = array();
  if($showallstddata){
    while ($row=$showallstddata->fetch_assoc()) {
     $response= $row;
    }
  }else{
    $response['status']=200;
   $response['message']='data not found';
  }
  echo json_encode($response);

}
//update student
if($_POST['key'] == 'updatestd'){
	$st_id=$_POST['st_id'];
	$st_name=$_POST['st_name'];
	$st_roll=$_POST['st_roll'];
	$st_regi=$_POST['st_regi'];
	$st_f_name=$_POST['st_f_name'];
	$st_m_name=$_POST['st_m_name'];
	$st_session=$_POST['st_session'];
	$st_technology=$_POST['st_technology'];
	$st_semester=$_POST['st_semester'];
	$st_shift=$_POST['st_shift'];

	if($st_name == '' || $st_roll == '' || $st_regi == '' || $st_f_name == '' || $st_m_name == '' || $st_session == ''
	|| $st_technology == ''  ||  $st_semester == '' || $st_shift == ''){
		echo json_encode(['key'=>0,'msg'=>'Field Must not be empty']);
	}else{
		$sql="UPDATE tbl_student SET
		st_name='$st_name',
		st_roll='$st_roll',
		st_regi='$st_regi',
		st_f_name='$st_f_name',
		st_m_name='$st_m_name',
		st_session='$st_session',
		st_technology='$st_technology',
		st_semester='$st_semester',
		st_shift='$st_shift'
		WHERE st_id='$st_id'";
		$update_student=$db->update($sql);
		if($update_student){
			echo json_encode(['key'=>1,'msg'=>'Student Updated successfully']);
		}else{
			echo json_encode(['key'=>0,'msg'=>'Faield']);
		}
		
	}
	
}

//deleter student
if($_POST['key'] == 'del_std'){
	$del_id=$_POST['st_id'];

	if($del_id == ''){
		echo json_encode(['key'=>0,'msg'=>'Invaild ID']);
	}else{
		$sql="DELETE FROM tbl_student WHERE st_id='$del_id'";
		$del_std=$db->delete($sql);
		if($del_std){
			echo json_encode(['key'=>1,'msg'=>'Student Delete successfully']);
		}else{
			echo json_encode(['key'=>0,'msg'=>'Faield']);
		}
		
	}
	
}
//show student
if($_POST['key'] == 'vw_std'){
	$st_technology=$_POST['st_technology'];
	$st_semester=$_POST['st_semester'];
	$tbl_data='  <table class="table table-sm table-bordered table-striped" id="student_view_tbl">
                <thead class="bg-1">
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Registration</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father\'s Name</th>
                    <th scope="col">Mother\'s Name</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Session</th>
                    <th scope="col">Technology</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>';
                $sql="SELECT * FROM tbl_student WHERE st_technology='	$st_technology' AND st_semester='	$st_semester'";
                if($stdata=$db->select($sql)){
                $sl=1;
                while ($data=$stdata->fetch_assoc()) {
                	$tbl_data.=' <tr> 
                    <td>'.$sl.'</td>
                    <td>'.$data['st_roll'].'</td>
                    <td>'.$data['st_regi'].'</td>
                    <td>'.$data['st_name'].'</td>
                    <td>'.$data['st_f_name'].'</td>
                     <td>'.$data['st_m_name'].'</td>
                    <td>'.$data['st_semester'].'</td>
                    <td>'.$data['st_shift'].'</td>
                    <td>'.$data['st_session'].'</td>
                    <td>'.$data['st_technology'].'</td>
                    <td>
              <button class="icnbtn"  onclick="view_std('.$data['st_id'].')"><i class="fas fa-eye"></i></button>
                ||

                <button class="icnbtn" data-toggle="modal" data-target="#update_std" onclick="std_data_f_update('.$data['st_id'].')"><i class="fas fa-user-edit"></i></button>
                ||
               
                <button onclick="del_std('.$data['st_id'].')" class="icnbtn" ><i class="fas fa-user-times"></i></button>
            </td>
                  </tr>';
                  $sl++;
                }
                }  
                   
               	$tbl_data.='</tbody>
            	</table>';
            	echo $tbl_data;
}
//show student
if($_POST['key'] == 'view_student'){
	$st_technology=$_POST['st_technology'];
	$st_semester=$_POST['st_semester'];
	$tbl_data='  <table class="table table-sm table-bordered table-striped" id="student_view_tbl">
                <thead class="bg-1">
                  <tr>
                    <th scope="col">SL</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Registration</th>
                    <th scope="col">Name</th>
                    <th scope="col">Father\'s Name</th>
                    <th scope="col">Mother\'s Name</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Shift</th>
                    <th scope="col">Session</th>
                    <th scope="col">Technology</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>';
                $sql="SELECT * FROM tbl_student WHERE st_technology='$st_technology' AND st_semester='$st_semester'";
                if($stdata=$db->select($sql)){
                $sl=1;
                while ($data=$stdata->fetch_assoc()) {
                	$tbl_data.=' <tr> 
                    <td>'.$sl.'</td>
                    <td>'.$data['st_roll'].'</td>
                    <td>'.$data['st_regi'].'</td>
                    <td>'.$data['st_name'].'</td>
                    <td>'.$data['st_f_name'].'</td>
                    <td>'.$data['st_m_name'].'</td>
                    <td>'.$data['st_semester'].'</td>
                    <td>'.$data['st_shift'].'</td>
                    <td>'.$data['st_session'].'</td>
                    <td>'.$data['st_technology'].'</td>
                    <td>
              <button class="icnbtn"  onclick="view_std('.$data['st_id'].')"><i class="fas fa-eye"></i></button>
                ||

                <button class="icnbtn" data-toggle="modal" data-target="#update_std" onclick="std_data_f_update('.$data['st_id'].')"><i class="fas fa-user-edit"></i></button>
                ||
               
                <button onclick="del_std('.$data['st_id'].')" class="icnbtn" ><i class="fas fa-user-times"></i></button>
            </td>
                  </tr>';
                  $sl++;
                }
                }  
                   
               	$tbl_data.='</tbody>
            	</table>';
            	echo $tbl_data;
}