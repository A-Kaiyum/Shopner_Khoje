<?php 
session_start();
include("../dbconnection/DBconnection.php");
include("../model/member.php");

$member = new members();

switch ($_POST['action']) {

	case 'save_member':
		$member->name = $_POST['name'];
		$member->address = $_POST['address'];
		$member->email = $_POST['email'];
		$member->phone = $_POST['phone'];
		$member->designation = $_POST['designation'];
		$member->status = $_POST['status'];
		$status = $member->save();
		if($status){
			$_SESSION['message'] = "<div class='alert alert-success'>Member Save successfully</div>";
		}
		else
		{
			$_SESSION['message'] = "<div class='alert alert-danger'>Member Not Save</div>";
		}
		header('Location:../add_member.php');
		break;	
	
	case 'update_member':
		$member->name = $_POST['name'];
		$member->address = $_POST['address'];
		$member->email = $_POST['email'];
		$member->phone = $_POST['phone'];
		$member->designation = $_POST['designation'];
		$member->status = $_POST['status'];
		$status = $member->update($_POST['id']);
		if($status){
			$_SESSION['message'] = "<div class='alert alert-success'>Member updated successfully</div>";
		}
		else
		{
			$_SESSION['message'] = "<div class='alert alert-danger'>Member Not Updated</div>";
		}
		header('Location:../members_list.php');
		break;
	case 'delete_member':
		$status = $member->delete($_POST['id']);
		if($status==true){
			$_SESSION['message'] = "<div class='alert alert-success'>Deleted successfully</div>";
		}
		else
		{
			$_SESSION['message'] = "<div class='alert alert-danger'>Member Unable to delete</div>";
		}
		header('Location:../members_list.php');
		break;
			
	default:
		
		header('Location:../index.php');
		break;
}


 ?>