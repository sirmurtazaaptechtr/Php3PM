<?php
    include("functions.php");    
    if(array_key_exists('newDBCreateButton', $_POST)) {
        connect_DB ();
        $newDBName = clean_data($_POST['newDBName']);
        $sql = "CREATE DATABASE $newDBName";
        if ($conn->query($sql) === TRUE) {
            echo "<p>$newDBName created successfully</p>";
        } else {
            echo "Error creating database: " . $conn->error;
        }
        $conn->close();
    }
    if(array_key_exists('DBDropButton', $_POST)) {
        connect_DB ();
        $DBName = clean_data($_POST['DBName']);
        $sql = "DROP DATABASE $DBName";
        if ($conn->query($sql) === TRUE) {
            echo "<p>$DBName droped successfully</p>";
        } else {
            echo "Error creating database: " . $conn->error;
        }
        $conn->close();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="button" name="createDBModalbutton" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#createDBModal" value="Create Database">
        <input type="button" name="dropDBModalbutton" class="btn btn-danger" data-bs-toggle="modal"
            data-bs-target="#dropDBModal" value="Drop Database">
    </form>


    
    <!-- The Create DB Modal -->
    <div class="modal" id="createDBModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create Database</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post">
                        <div class="mb-3 mt-3">
                            <label for="newDBName" class="form-label">Database Name:</label>
                            <input type="text" class="form-control" id="newDBName" placeholder="Enter newDBName"
                                name="newDBName">
                        </div>
                        <button type="submit" name="newDBCreateButton" class="btn btn-success">Create</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- END OF The drop DB Modal -->
    <!-- The drop DB Modal -->
    <div class="modal" id="dropDBModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create Database</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form method="post">
                        <div class="mb-3 mt-3">
                            <label for="DBName" class="form-label">Database Name:</label>
                            <input type="text" class="form-control" id="DBName" placeholder="Enter DBName"
                                name="DBName">
                        </div>
                        <button type="submit" name="DBDropButton" class="btn btn-danger">Drop</button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- END OF The Drop DB Modal -->

</body>

</html>