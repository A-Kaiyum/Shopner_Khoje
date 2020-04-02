<?php 
session_start();
include("../dbconnection/DBconnection.php");
include("../model/donor.php");

$donor = new donors();


switch ($_POST['action']) {

    case 'save_donor':
        $donor->name = $_POST['name'];
        $donor->address = $_POST['address'];
        $donor->email = $_POST['email'];
        $donor->phone = $_POST['phone'];
        $donor->donation = $_POST['donation'];
        $donation = $donor->save();
        if($donation){
            $_SESSION['message'] = "<div class='alert alert-success'>Donor Save successfully</div>";
        }
        else
        {
            $_SESSION['message'] = "<div class='alert alert-danger'>Donor Not Save</div>";
        }
        header('Location:../add_donor.php');
        break;  
    
    case 'update_donor':
        $donor->name = $_POST['name'];
        $donor->address = $_POST['address'];
        $donor->email = $_POST['email'];
        $donor->phone = $_POST['phone'];
        $donor->donation = $_POST['donation'];
        $donation = $donor->update($_POST['id']);
        if($donation){
            $_SESSION['message'] = "<div class='alert alert-success'>Donor updated successfully</div>";
        }
        else
        {
            $_SESSION['message'] = "<div class='alert alert-danger'>Donor Not Updated</div>";
        }
        header('Location:../donors_list.php');
        break;
    case 'delete_donor':
        $status = $donor->delete($_POST['id']);
        if($status==true){
            $_SESSION['message'] = "<div class='alert alert-success'>Deleted successfully</div>";
        }
        else
        {
            $_SESSION['message'] = "<div class='alert alert-danger'>Donor Unable to delete</div>";
        }
        header('Location:../donors_list.php');
        break;
            
    default:
        
        header('Location:../index.php');
        break;
}


 ?>