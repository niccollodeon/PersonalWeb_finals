<?php 
// inlcudes connection to database
    include('connect.php');


// Logic Respoinsible for deleting skill
    if(isset($_GET['deleteid'])) {
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM `skills` WHERE skills_ID = $id";
        $result = mysqli_query($con, $sql);

        if(!$result) {
            die(mysqli_error($con));
        } else {
            header('location: settings.php');
            exit();
        }
    }

// Logic responsible for deleting project
if(isset($_GET['delete-projectid'])) {
    $id = $_GET['delete-projectid'];

    $sql = "DELETE FROM `projects` WHERE projects_ID = $id";
    $result = mysqli_query($con, $sql);

    if(!$result) {
        die(mysqli_error($con));
    } else {
        header('location: manage-projects.php');
        exit();
    }
}

// Logic responsible for deleting project
if(isset($_GET['delete-messageid'])) {
    $id = $_GET['delete-messageid'];

    $sql = "DELETE FROM `contact` WHERE contact_ID = $id";
    $result = mysqli_query($con, $sql);

    if(!$result) {
        die(mysqli_error($con));
    } else {
        header('location: messages.php');
        exit();
    }
}

// Checks if a user is logged in 
if (!isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}
?>