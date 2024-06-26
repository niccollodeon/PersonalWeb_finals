<?php
session_start();
include ('connect.php');

// Check if the user is logged in
if (!isset($_SESSION['user_ID'])) {
  header("Location: login.php");
  exit();
}

if (isset($_POST['submit'])) {
    $title = htmlspecialchars(trim($_POST['project_name']));
    $desc = htmlspecialchars(trim($_POST['project_description']));

    // Check if file is uploaded
    if (isset($_FILES['project_image'])) {
        $photo = $_FILES['project_image']['name'];
        $tempname = $_FILES['project_image']['tmp_name'];
        $folder = 'uploads/' . $photo;

        // Ensure photo upload directory exists
        if (!is_dir('uploads')) {
          mkdir('uploads', 0777, true);
        }

        // Move the uploaded file to the server directory
        if (move_uploaded_file($tempname, $folder)) {
          // Use session user_ID
          $userID = $_SESSION['user_ID'];

          // Prepared statements to prevent SQL injection
          $stmt = $con->prepare("INSERT INTO `projects` (user_ID, proj_title, proj_desc, proj_img) VALUES (?, ?, ?, ?)");
          $stmt->bind_param("isss", $userID, $title, $desc, $photo);
          $stmt->execute();
          $stmt->close();
        } else {
          echo "Failed to upload image.";
        }
    } else {
        echo "No file uploaded.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="try.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Operations - Niccollo's Website</title>
    <style>
        .modal-crud {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content-1 {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }

        .submit-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin: 10px 0;
            border: none;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #45a049;
        }

        .crud-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }

        .crud-table th, .crud-table td {
            padding: 12px 15px;
            border: 1px solid #ddd;
        }

        .crud-table th {
            background-color: #f4f4f4;
        }

        .crud-buttons {
            display: flex;
            justify-content: space-around;
        }

        .crud-button {
            padding: 8px 16px;
            margin: 5px;
            border: none;
            cursor: pointer;
        }

        .crud-button-add {
            background-color: #4CAF50;
            color: white;
        }

        .crud-button-edit {
            background-color: #2196F3;
            color: white;
        }
        td{
            color: #fff;
        }
        .crud-title{
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="noise-background-fixed"></div>
    <h1 class="crud-title">CRUD Operations for Niccollo's Website</h1>

    <!-- CRUD Table -->
    <div class="crud-table-container">
        <table class="crud-table">
            <thead>
                <tr>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- TABLE BODY -->
                <?php
                // Get the total number of records
                $sql_count = "SELECT COUNT(*) AS total FROM `projects`";
                $result_count = mysqli_query($con, $sql_count);

                // Fetch records for the current page
                $sql = "SELECT * FROM `projects`";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['project_ID'];
                        $title = $row['proj_title'];
                        echo '
                            <tr>
                                <td>'.$title.'</td>
                                <td class="crud-buttons">
                                    <button class="crud-button crud-button-add" onclick="openModal(\'addProjectModal\')">Add Project</button>
                                    <button class="crud-button crud-button-edit" onclick="openModal(\'editProjectModal\', '.$id.')">Edit Project</button>
                                </td>
                            </tr>';
                        }
                }

                // Get the total number of records
                $sql_count = "SELECT COUNT(*) AS total FROM `skills`";
                $result_count = mysqli_query($con, $sql_count);

                // Fetch records for the current page
                $sql = "SELECT * FROM `skills`";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['skill_ID'];
                        $knowledge = $row['knowledge_level'];
                        echo '
                            <tr>
                                <td>'.$knowledge.'</td>
                                <td class="crud-buttons">
                                    <button class="crud-button crud-button-add" onclick="openModal(\'addSkillModal\')">Add Skill</button>
                                    <button class="crud-button crud-button-edit" onclick="openModal(\'editSkillModal\', '.$id.')">Edit Skill</button>
                                </td>
                            </tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Modals for CRUD operations -->
    <div id="addProjectModal" class="modal-crud">
        <div class="modal-content-1">
            <span class="close" onclick="closeModal('addProjectModal')">&times;</span>
            <h2>Add Project</h2>
            <form method="post" enctype="multipart/form-data">
                <input type="text" name="project_name" placeholder="Project Name" class="input-field">
                <input type="file" name="project_image" class="input-field">
                <textarea name="project_description" placeholder="Project Description" class="input-field"></textarea>
                <button type="submit" name="submit" class="submit-button">Add</button>
            </form>
        </div>
    </div>

    <div id="editProjectModal" class="modal-crud">
        <div class="modal-content-1">
            <span class="close" onclick="closeModal('editProjectModal')">&times;</span>
            <h2>Edit Project</h2>
            <form action="edit-project.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="project_id" id="editProjectId">
                <input type="text" name="project_name" placeholder="Project Name" class="input-field">
                <input type="file" name="project_image" class="input-field">
                <textarea name="project_description" placeholder="Project Description" class="input-field"></textarea>
                <button type="submit" class="submit-button">Save</button>
            </form>
        </div>
    </div>

    <div id="addSkillModal" class="modal-crud">
        <div class="modal-content-1">
            <span class="close" onclick="closeModal('addSkillModal')">&times;</span>
            <h2>Add Skill</h2>
            <form action="add-skill.php" method="post">
                <input type="text" name="skill_name" placeholder="Skill Name" class="input-field">
                <input type="text" name="skill_knowledge" placeholder="Skill Knowledge" class="input-field">
                <button type="submit" class="submit-button">Add</button>
            </form>
        </div>
    </div>

    <div id="editSkillModal" class="modal-crud">
        <div class="modal-content-1">
            <span class="close" onclick="closeModal('editSkillModal')">&times;</span>
            <h2>Edit Skill</h2>
            <form action="edit-skill.php" method="post">
                <input type="hidden" name="skill_id" id="editSkillId">
                <input type="text" name="skill_name" placeholder="Skill Name" class="input-field">
                <input type="text" name="skill_knowledge" placeholder="Skill Knowledge" class="input-field">
                <button type="submit" class="submit-button">Save</button>
            </form>
        </div>
    </div>

    <script>
        // Open and close CRUD modals
        function openModal(modalId, id = null) {
            document.getElementById(modalId).style.display = "block";
            if (id) {
                if (modalId === 'editProjectModal') {
                    document.getElementById('editProjectId').value = id;
                } else if (modalId === 'editSkillModal') {
                    document.getElementById('editSkillId').value = id;
                }
            }
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }
    </script>
</body>
</html>
