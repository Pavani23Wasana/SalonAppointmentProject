
<?php
$conn = new mysqli("localhost", "root", "", "salondb");

if($conn->connect_error){
    die("Could not connect to the database!" .$conn->connect_error);

}
?>
<?php
    session_start(); /* Alert message */
    

    $update=false;
    $id="";
    $firstname="";
    $lastname="";
    $email="";
    $mobileNo="";
    $gender="";

    // Delete action
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];

        $query="DELETE FROM customer_register WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i" ,$id);
        $stmt->execute();

        header('location:admin_user_management.php');
        $_SESSION['response']="successfully Deleted!";  /* Alert message */
        $_SESSION['res_type']="danger";
    }



