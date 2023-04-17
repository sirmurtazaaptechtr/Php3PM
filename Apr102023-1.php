<?php
    $name = $email = $website = $comment = $gender = "";
    $nameError = $emailError = $websiteError = $commentError = $genderError = "";   

    function inputfilter($input){
        $input = trim($input);
        $input = stripslashes($input);
        $input = htmlspecialchars($input);        
        return $input;
    }
    function dispMsg(){
        global $name, $email, $website, $comment, $gender;
        return "<h5>Full Name : <small>$name</small><h5><h5>Gender : <small>$gender</small><h5><h5>email : <small>$email</small><h5><h5>WebSite : <small>$website</small><h5><h5>Comment : <small>$comment</small><h5>";
    }

    if ($_SERVER['REQUEST_METHOD']==="POST") {

        if (empty($_POST['name'])) {
            $nameError = "Name is required";
        }else if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST['name'])) {// check if name only contains letters and whitespace
            $nameError = "Only letters and white space allowed";
        }else {
            $name = inputfilter($_POST['name']);
        }
        if (empty($_POST['email'])) {
            $emailError = "email is required";
        }else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {// check if e-mail address is well-formed
            $emailError = "Invalid email format";
        }else {
            $email = inputfilter($_POST['email']);
        }
        if (empty($_POST['website'])) {
            $websiteError = "";
        }else if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_POST['website'])) {// check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            $websiteError = "Invalid URL";
        }else {
            $website = inputfilter($_POST['website']);
        }
        if (empty($_POST['comment'])) {
            $commentError = "";
        }else {
            $comment = inputfilter($_POST['comment']);
        }        
        if (empty($_POST['gender'])) {
            $genderError = "gender is required";
        }else {
            $gender = inputfilter($_POST['gender']);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIC - Personal Information Card</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-3">
        <h2>Personal Information Card</h2>
        <p class="text-danger"><strong>* required field</strong></p>
        <form action="Apr102023-1.php" method="post">
            <div class="my-3">
                <label for="name" class="form-label"><strong>Full Name : <span class="text-danger">* <?php echo $nameError?></span></strong></label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo $name;?>">
            </div>
            <div class="my-3">
                <label for="email" class="form-label"><strong>Email Address : <span class="text-danger">*  <?php echo $emailError?></span></strong></label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo $email;?>">
            </div>
            <div class="my-3">
                <label for="website" class="form-label"><strong>Website (URL) : <span class="text-danger">  <?php echo $websiteError?></span></strong></label>
                <input type="url" name="website" id="website" class="form-control" value="<?php echo $website;?>">
            </div>
            <div class="my-3">
                <label for="comment" class="form-label"><strong>Comment : </strong></label>
                <textarea name="comment" id="comment" rows="5" class="form-control">
                    <?php echo $comment;?>
                </textarea>
            </div>
            <div class="my-3">
                <label for="comment" class="form-label"><strong>Gender : <span class="text-danger">*  <?php echo $genderError?></span></strong></label>
                <div class="form-check">
                    <div class="row">
                        <div class="col-sm-1">
                            <input type="radio" class="form-check-input" id="gdrF" name="gender" value="Female" <?php if(isset($gender) && $gender == "Female") {echo "checked";}?>>
                            <label class="form-check-label" for="gdrF">Female</label>
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" class="form-check-input" id="gdrM" name="gender" value="Male" <?php if(isset($gender) && $gender == "Male") {echo "checked";}?>>
                            <label class="form-check-label" for="gdrM">Male</label>
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" class="form-check-input" id="gdrO" name="gender" value="Other" <?php if(isset($gender) && $gender == "Other") {echo "checked";}?>>
                            <label class="form-check-label" for="gdrO">Other</label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
            <!-- <button type="reset" class="btn btn-danger">Clear</button> -->
        </form>        
    </div>
    <div class="container my-3">
        <h2>Input Data</h2>
        <?php            
            echo dispMsg();
        ?>
    </div>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    

</body>
</html>