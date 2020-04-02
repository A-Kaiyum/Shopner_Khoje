<?php 
session_start();
include("../dbconnection/DBconnection.php");
include("../model/users.php");

$user = new Users();


switch ($_POST['action']) {
	case 'login_process':
		$getUser = $user->getUserByEmail($_POST['email']);
		if(count($getUser) > 0 && $getUser['email'] !='')
		{
			if($getUser['password'] == md5($_POST['password'])){

			$_SESSION['user_id'] = $getUser['id'];
			$_SESSION['name'] = $getUser['name'];
			$_SESSION['email'] = $getUser['email'];
			$_SESSION['user_type'] = $getUser['user_type'];
			$_SESSION['status'] = $getUser['status'];	
			header('Location:../index.php');

			}
			else{
				$_SESSION['message'] = "<div class='alert alert-danger'>Invelid password</div>";
			header('Location:../login.php');
			}
		}
		else{
			$_SESSION['message'] = "<div class='alert alert-danger'>Invelid E-Mail</div>";
			header('Location:../login.php');
		}	
		break;
	case 'logout_process':
			session_destroy();
			header('Location:../login.php');
		break;	
	case 'save_user':
		$user->name = $_POST['name'];
		$user->email = $_POST['email'];
		$user->password = md5($_POST['password']);
		$user->phone = $_POST['phone'];
		$user->user_type = $_POST['user_type'];
		$user->status = $_POST['status'];
		$status = $user->save();
		if($status){
			$_SESSION['message'] = "<div class='alert alert-success'>User Save successfully</div>";
		}
		else
		{
			$_SESSION['message'] = "<div class='alert alert-danger'>User Not Save</div>";
		}
		header('Location:../add_user.php');
		break;	
	
	case 'update_user':
		$user->name = $_POST['name'];
		$user->email = $_POST['email'];
		$user->phone = $_POST['phone'];
		$user->user_type = $_POST['user_type'];
		$user->status = $_POST['status'];
		$status = $user->update($_POST['id']);
		if($status){
			$_SESSION['message'] = "<div class='alert alert-success'>User updated successfully</div>";
		}
		else
		{
			$_SESSION['message'] = "<div class='alert alert-danger'>User Not Updated</div>";
		}
		header('Location:../users_list.php');
		break;
	case 'delete_user':
		$status = $user->delete($_POST['id']);
		if($status==true){
			$_SESSION['message'] = "<div class='alert alert-success'>Deleted successfully</div>";
		}
		else
		{
			$_SESSION['message'] = "<div class='alert alert-danger'>User Unable to delete</div>";
		}
		header('Location:../users_list.php');
		break;
			
	default:
		
		header('Location:../login.php');
		break;
}


 ?>