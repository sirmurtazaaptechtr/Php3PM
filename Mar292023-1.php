
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
        <form action="Mar292023-1R.php" method="post">
            <div class="my-3">
                <label for="fullName" class="form-label"><strong>Full Name : <span class="text-danger">*</span></strong></label>
                <input type="text" name="fullName" id="fullName" class="form-control">
            </div>
            <div class="my-3">
                <label for="email" class="form-label"><strong>Email Address : <span class="text-danger">*</span></strong></label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="my-3">
                <label for="website" class="form-label"><strong>Website (URL) : </strong></label>
                <input type="url" name="website" id="website" class="form-control">
            </div>
            <div class="my-3">
                <label for="comment" class="form-label"><strong>Comment : </strong></label>
                <textarea name="comment" id="comment" rows="5" class="form-control"></textarea>
            </div>
            <div class="my-3">
                <label for="comment" class="form-label"><strong>Gender : <span class="text-danger">*</span></strong></label>
                <div class="form-check">
                    <div class="row">
                        <div class="col-sm-1">
                            <input type="radio" class="form-check-input" id="gdrF" name="gender" value="Female">
                            <label class="form-check-label" for="gdrF">Female</label>
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" class="form-check-input" id="gdrM" name="gender" value="Male">
                            <label class="form-check-label" for="gdrM">Male</label>
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" class="form-check-input" id="gdrO" name="gender" value="Other">
                            <label class="form-check-label" for="gdrO">Other</label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>       
        
    </div>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>