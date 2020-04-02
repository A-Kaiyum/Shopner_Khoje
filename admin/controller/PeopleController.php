<?php 
session_start();
include("../dbconnection/DBconnection.php");
include("../model/people.php");

$people = new peoples();


switch ($_POST['action']) {

    case 'save_people':
        $people->name = $_POST['name'];
        $people->address = $_POST['address'];
        $people->phone = $_POST['phone'];
        $phone = $people->save();
        if($phone){
            $_SESSION['message'] = "<div class='alert alert-success'>people Save successfully</div>";
        }
        else
        {
            $_SESSION['message'] = "<div class='alert alert-danger'>people Not Save</div>";
        }
        header('Location:../add_people.php');
        break;  
    
    case 'update_people':
        $people->name = $_POST['name'];
        $people->address = $_POST['address'];
        $people->phone = $_POST['phone'];
        $phone = $people->update($_POST['id']);
        if($phone){
            $_SESSION['message'] = "<div class='alert alert-success'>people updated successfully</div>";
        }
        else
        {
            $_SESSION['message'] = "<div class='alert alert-danger'>people Not Updated</div>";
        }
        header('Location:../peoples_list.php');
        break;
    case 'delete_people':
        $status = $people->delete($_POST['id']);
        if($status==true){
            $_SESSION['message'] = "<div class='alert alert-success'>Deleted successfully</div>";
        }
        else
        {
            $_SESSION['message'] = "<div class='alert alert-danger'>people Unable to delete</div>";
        }
        header('Location:../peoples_list.php');
        break;
            
    default:
        
        header('Location:../index.php');
        break;
}


 ?>