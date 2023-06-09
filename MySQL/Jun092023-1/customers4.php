<?php
function cleandata($input)
{
    $input = htmlspecialchars($input);
    $input = trim($input);
    $input = stripslashes($input);
    return $input;
}
$customerid = $companyname = $contactname = $contacttitle = $address = $postcode = $city = $region = $country = $phone = $fax = "";
$insert = false;

$servername = "localhost";
$username = "root";
$password = "";
$database = "northwind";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <title>Welcome to Northwind - Customers</title>
</head>
<body>
    <?php
    // Insert Customer
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['customerid'])) {
            $customerid = cleandata($_POST["customerid"]);
        } else {
            $customerid = "";
        }
        if (!empty($_POST['companyname'])) {
            $companyname = cleandata($_POST["companyname"]);
        } else {
            $companyname = "";
        }
        if (!empty($_POST['contactname'])) {
            $contactname = cleandata($_POST["contactname"]);
        } else {
            $contactname = "";
        }
        if (!empty($_POST['contacttitle'])) {
            $contacttitle = cleandata($_POST["contacttitle"]);
        } else {
            $contacttitle = "";
        }
        if (!empty($_POST['address'])) {
            $address = cleandata($_POST["address"]);
        } else {
            $address = "";
        }
        if (!empty($_POST['postcode'])) {
            $postcode = cleandata($_POST["postcode"]);
        } else {
            $postcode = "";
        }
        if (!empty($_POST['city'])) {
            $city = cleandata($_POST["city"]);
        } else {
            $city = "";
        }
        if (!empty($_POST['region'])) {
            $region = cleandata($_POST["region"]);
        } else {
            $region = "";
        }
        if (!empty($_POST['country'])) {
            $country = cleandata($_POST["country"]);
        } else {
            $country = "";
        }
        if (!empty($_POST['phone'])) {
            $phone = cleandata($_POST["phone"]);
        } else {
            $phone = "";
        }
        if (!empty($_POST['fax'])) {
            $fax = cleandata($_POST["fax"]);
        } else {
            $fax = "";
        }

        $sqlQ2 = "INSERT INTO `customers` (`CustomerID`, `CompanyName`, `ContactName`, `ContactTitle`, `Address`, `City`, `Region`, `PostalCode`, `Country`, `Phone`, `Fax`, `Image`, `ImageThumbnail`) VALUES ('$customerid', '$companyname', '$contactname', '$contacttitle', '$address', '$city', '$region', '$postcode', '$country', '$phone', '$fax', NULL, NULL);";

        // Create connection
        $connection = new mysqli($servername, $username, $password, $database);

        $result = mysqli_query($connection, $sqlQ2);
        if ($result) {
            $insert = true;
        } else {
            echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
        }

        $connection->close();
    }
    if ($insert) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                  <strong>Success!</strong> Your note has been inserted successfully.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
    }
    ?>
    <h1>Customers of Northwind</h1>
    <div class="container my-4">
        <h2>Add New Customer</h2>
        <form action="<?php echo cleandata($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="customerid">Customer ID</label>
                <input type="text" class="form-control" id="customerid" name="customerid" value="<?php echo $customerid; ?>">
            </div>
            <div class="row">
                <div class="form-group col-sm">
                    <label for="companyname">Company Name</label>
                    <input type="text" class="form-control" id="companyname" name="companyname" value="<?php echo $companyname; ?>">
                </div>
                <div class="form-group col-sm">
                    <label for="contactname">Contact Name</label>
                    <input type="text" class="form-control" id="contactname" name="contactname" value="<?php echo $contactname; ?>">
                </div>
                <div class="form-group col-sm">
                    <label for="contacttitle">Contact Title</label>
                    <input type="text" class="form-control" id="contacttitle" name="contacttitle" value="<?php echo $contacttitle; ?>">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm">
                    <label for="address">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="1"><?php echo $address; ?></textarea>
                </div>
                <div class="form-group col-sm">
                    <label for="postcode">Post Code</label>
                    <input type="text" class="form-control" id="postcode" name="postcode" value="<?php echo $postcode; ?>">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm">
                    <label for="city" class="form-label">City:</label>
                    <input class="form-control" list="cities" name="city" id="city">
                    <datalist id="cities">
                        <option value="Aachen">
                        <option value="Albuquerque">
                        <option value="Anchorage">
                        <option value="Århus">
                        <option value="Barcelona">
                        <option value="Barquisimeto">
                        <option value="Bergamo">
                        <option value="Berlin">
                        <option value="Bern">
                        <option value="Boise">
                        <option value="Bräcke">
                        <option value="Brandenburg">
                        <option value="Bruxelles">
                        <option value="Buenos Aires">
                        <option value="Butte">
                        <option value="Campinas">
                        <option value="Caracas">
                        <option value="Charleroi">
                        <option value="Cork">
                        <option value="Cowes">
                        <option value="Cunewalde">
                        <option value="Elgin">
                        <option value="Eugene">
                        <option value="Frankfurt a.M. ">
                        <option value="Genève">
                        <option value="Graz">
                        <option value="Helsinki">
                        <option value="I. de Margarita">
                        <option value="Kirkland">
                        <option value="Köln">
                        <option value="København">
                        <option value="Lander">
                        <option value="Leipzig">
                        <option value="Lille">
                        <option value="Lisboa">
                        <option value="London">
                        <option value="Luleå">
                        <option value="Lyon">
                        <option value="Madrid">
                        <option value="Mannheim">
                        <option value="Marseille">
                        <option value="México D.F.">
                        <option value="Montréal">
                        <option value="München">
                        <option value="Münster">
                        <option value="Nantes">
                        <option value="Oulu">
                        <option value="Paris">
                        <option value="Portland">
                        <option value="Reggio Emilia">
                        <option value="Reims">
                        <option value="Resende">
                        <option value="Rio de Janeiro">
                        <option value="Salzburg">
                        <option value="San Cristóbal">
                        <option value="San Francisco">
                        <option value="São Paulo">
                        <option value="Seattle">
                        <option value="Sevilla">
                        <option value="Stavern">
                        <option value="Strasbourg">
                        <option value="Stuttgart">
                        <option value="Torino">
                        <option value="Toulouse">
                        <option value="Tsawassen">
                        <option value="Vancouver">
                        <option value="Versailles">
                        <option value="Walla Walla">
                        <option value="Warszawa">
                    </datalist>
                </div>
                <div class="form-group col-sm">
                    <label for="region" class="form-label">Region</label>
                    <input class="form-control" list="regions" name="region" id="region">
                    <datalist id="regions">
                        <option value="AK">
                        <option value="BC">
                        <option value="CA">
                        <option value="Co. Cork">
                        <option value="DF">
                        <option value="ID">
                        <option value="Isle of Wight">
                        <option value="Lara">
                        <option value="MT">
                        <option value="NM">
                        <option value="Nueva Esparta">
                        <option value="OR">
                        <option value="Québec">
                        <option value="RJ">
                        <option value="SP">
                        <option value="Táchira">
                        <option value="WA">
                        <option value="WY">
                    </datalist>
                </div>
                <div class="form-group col-sm">
                    <label for="country" class="form-label">Country</label>
                    <input class="form-control" list="countries" name="country" id="country">
                    <datalist id="countries">
                        <option value="Germany">
                        <option value="Mexico">
                        <option value="UK">
                        <option value="Sweden">
                        <option value="France">
                        <option value="Spain">
                        <option value="Canada">
                        <option value="Argentina">
                        <option value="Switzerland">
                        <option value="Brazil">
                        <option value="Austria">
                        <option value="Italy">
                        <option value="Portugal">
                        <option value="USA">
                        <option value="Venezuela">
                        <option value="Ireland">
                        <option value="Belgium">
                        <option value="Norway">
                        <option value="Denmark">
                        <option value="Finland">
                        <option value="Poland">
                    </datalist>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm">
                    <label for="phone">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>">
                </div>
                <div class="form-group col-sm">
                    <label for="fax">Fax</label>
                    <input type="tel" class="form-control" id="fax" name="fax" value="<?php echo $fax; ?>">
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-success">Add Customer</button>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Sr.no.</th>
                    <th>CustomerID</th>
                    <th>CompanyName</th>
                    <th>ContactName</th>
                    <th>ContactTitle</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Region</th>
                    <th>PostalCode</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Fax</th>
                    <th>Image</th>
                    <th>ImageThumbnail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sqlQ1 = "SELECT * FROM `customers`";

                // Create connection
                $connection = new mysqli($servername, $username, $password, $database);
                // Check connection
                if ($connection->connect_error) {
                    die("<p>Connection Failed! : " . $connection->connect_error . "</p>");
                } else {
                    echo '<div class="row">';
                    echo '<p class="col-sm">' . "$database Connected Successfully!</p>";
                    //echo '<div class="col-sm"><button class="btn btn-dark" type="button"> + ADD New Customer</button></div>';
                    echo "</div>";
                    // executed query and saved records in sql obj form
                    $result = $connection->query($sqlQ1);
                    if ($result->num_rows > 0) {
                        $srno = 1;
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>$srno</td>";
                            foreach ($row as $attribute => $value) {
                                echo "<td>$value</td>";
                            }
                            echo "</tr>";
                            $srno++;
                        }
                    } else {
                        echo "0 results found";
                    }
                    $connection->close();
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>