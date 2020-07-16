

<?php
    session_start(); /* Alert message */  
    include 'admin_service_db.php';


    $update=false;
    $photo="";
    $service_category="";
    $service_name="";
    $service_price="";
    $service_time="";
    $description="";


    if(isset($_POST['add'])){
        $service_category=$_POST['service_category'];
        $service_name=$_POST['service_name'];
        $service_price=$_POST['service_price'];
        $service_time=$_POST['service_time'];
        $description=$_POST['description'];

        $photo=$_FILES['image']['name'];
        $upload="uploads/".$photo;

        $query="INSERT INTO service(service_category,service_name,service_price,service_time,description,photo) vALUEs(?,?,?,?,?,?);";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssssss",$service_category,$service_name,$service_price,$service_time,$description,$photo);
        $stmt->execute();
        move_uploaded_file($_FILES['image']['tmp_name'], $upload);

        header('location:admin_service_list.php');
        $_SESSION['response']="successfully Inserted to the database!";  /* Alert message */
        $_SESSION['res_type']="success";
    }

    // Delete action
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];

        // To delete uploads from the folder
        $sql="SELECT photo FROM service WHERE id=?";
        $stmt2=$conn->prepare($sql);
        $stmt2->bind_param("i", $id); /* binding id */
        $stmt2->execute(); /* To execute the statement */
        $result2=$stmt2->get_result();
        $row=$result2->fetch_assoc();

        $imagepath=$row['photo'];
        unlink($imagepath);

        // Delete action
        $query="DELETE FROM service WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i" ,$id);
        $stmt->execute();

        header('location:admin_service_list.php');
        $_SESSION['response']="successfully Deleted!";  /* Alert message */
        $_SESSION['res_type']="danger";
    }

        // Edit Action
        if(isset($_GET['edit'])){
        $id=$_GET['edit'];

        $query="SELECT * FROM service WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i", $id); 
        $stmt->execute(); 
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();

        // To store the values coming from db
        $id=$row['id'];
        $service_category=$row['service_category'];
        $service_name=$row['service_name'];
        $service_price=$row['service_price'];
        $service_time=$row['service_time'];
        $description=$row['description'];
        $photo=$row['photo'];

        $update=true;

        }

        // To uodate the image
        if(isset($_POST['update'])){
            $id=$_POST['id'];
            $service_category=$_POST['service_category'];
            $service_name=$_POST['service_name'];
            $service_price=$_POST['service_price'];
            $service_time=$_POST['service_time'];
            $description=$_POST['description']; 
            $oldimage=$_POST['oldimage'];   

           

        if(isset($_FILES['image']['name'])&&($_FILES['image']['name']!="")){
            $newimage="uploads/".$_FILES['image']['name'];
            unlink($oldimage);
            move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
        }
        else{
            $newimagenew=$oldimage;
        }
        $query="UPDATE service SET service_category=?,service_name=?,service_price=?,service_time=?,description=?,photo=? WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssssssi",$service_category,$service_name,$service_price,$service_time,$description,$newimage,$id);
        $stmt->execute();

        $_SESSION['response']="Updated Successfully!";  /* Alert message */
        $_SESSION['res_type']="primary";
        header('location:admin_service_list.php');
    }

    // Details action
    if(isset($_GET['details'])){
        $id=$_GET['details'];

        $query="SELECT * FROM service WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i", $id); 
        $stmt->execute(); 
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();

        $vid=$row['id'];
        $vservice_category=$row['service_category'];
        $vservice_name=$row['service_name'];
        $vservice_price=$row['service_price'];
        $vservice_time=$row['service_time'];
        $vdescription=$row['description'];
        $vphoto=$row['photo'];

    }

?>