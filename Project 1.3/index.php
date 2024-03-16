<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS and JS dependencies -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COSI 127b</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align:center">COSI 127b</h1><br>
        <h3 style="text-align:center">IMDB Movie MySQL Database</h3><br>
        <!-- Form for age query -->
        <div class="container">
            <form id="ageLimitForm" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter minimum age" name="inputAge" id="inputAge">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="submitted" id="button-addon2">Query</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Form for user information -->
        <div class="container">
            <form id="userForm" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email">
                    <input type="text" class="form-control" placeholder="Enter your name" name="name" id="name">
                    <input type="number" class="form-control" placeholder="Enter age" name="age" id="age">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="sign_up" id="button-addon2">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Form for likes information -->
        <div class="container">
            <form id="likesForm" method="post">
                <div class="input-group mb-3">
                    <input type="uemail" class="form-control" placeholder="Enter your uemail" name="uemail" id="uemail">
                    <input type="number" class="form-control" placeholder="Enter mpid" name="mpid" id="mpid">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" name="like" id="button-addon2">Like</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown button
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>

        <!-- Buttons to view all tables -->
        <div class="text-center mb-4">
            <button onclick="location.href='?action=viewAllMotionPictures'" class="btn btn-info">View All Motion Pictures</button>
            <button onclick="location.href='?action=viewAllUsers'" class="btn btn-info">View All Users</button>
            <button onclick="location.href='?action=viewAllLikes'" class="btn btn-info">View All Likes</button>
            <button onclick="location.href='?action=viewAllMovies'" class="btn btn-info">View All Movies</button>
            <button onclick="location.href='?action=viewAllSeries'" class="btn btn-info">View All Series</button>
            <button onclick="location.href='?action=viewAllPeople'" class="btn btn-info">View All People</button>
            <button onclick="location.href='?action=viewAllRoles'" class="btn btn-info">View All Roles</button>
            <button onclick="location.href='?action=viewAllAwards'" class="btn btn-info">View All Awards</button>
            <button onclick="location.href='?action=viewAllGenres'" class="btn btn-info">View All Genres</button>
            <button onclick="location.href='?action=viewAllLocations'" class="btn btn-info">View All Locations</button>
        </div>
    </div>
    <div class="container">
        <h1>Results</h1>
        <?php
        error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
        session_start();
        class TableRows extends RecursiveIteratorIterator {
            private $isMovie;

            function __construct($it, $isMovie) {
                parent::__construct($it, self::LEAVES_ONLY);
                $this->isMovie = $isMovie;
            }

            function current() {
                return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
            }

            function beginChildren() {
                echo "<tr>";
            }

            function endChildren() {
                echo "</tr>" . "\n";
            }
        }

        $action = $_GET['action'] ?? ''; // Get the action parameter from the URL

        // Initialize headers array
        $headers = [];

        // SQL CONNECTIONS
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "COSI127b";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if (isset($_POST['submitted'])) {
                $ageLimit = $_POST["inputAge"];
                $stmt = $conn->prepare("SELECT id, first_name, last_name FROM guests WHERE age >= :ageLimit");
                $stmt->bindParam(':ageLimit', $ageLimit, PDO::PARAM_INT);
                $headers = ["ID", "First Name", "Last Name"];
                $isMovie = false;
            } elseif (isset($_POST['sign_up'])) {
                // Check if the user information is available
                if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['age']) && !empty($_POST['age'])) {
                    // Prepare the SQL statement to check if the email address already exists in the user table
                    $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
            
                    // Bind the email parameter
                    $stmt->bindParam(':email', $_POST['email']);
            
                    // Execute the SQL statement
                    $stmt->execute();
            
                    // Check if the email address already exists
                    if ($stmt->rowCount() > 0) {
                        echo "Already Signed Up!";
                    } else {
                        // Prepare the SQL statement to insert the user information into the user table
                        $stmt = $conn->prepare("INSERT INTO user (email, name, age) VALUES (:email, :name, :age)");
            
                        // Bind the form values to the SQL statement
                        $stmt->bindParam(':email', $_POST['email']);
                        $stmt->bindParam(':name', $_POST['name']);
                        $stmt->bindParam(':age', $_POST['age']);
            
                        echo "Sign Up Successful!";
                    } 
                } else {
                    echo "Please Enter Full Sign Up Information.";
                }
                
            } elseif (isset($_POST['like'])) {
                // Check if the user information is available
                if (isset($_POST['uemail']) && !empty($_POST['uemail']) && isset($_POST['mpid']) && !empty($_POST['mpid'])) {
                    // Prepare the SQL statement to check if the email address already exists in the user table
                    $stmt = $conn->prepare("SELECT * FROM user WHERE email = :uemail");
            
                    // Bind the email parameter
                    $stmt->bindParam(':uemail', $_POST['uemail']);
            
                    // Execute the SQL statement
                    $stmt->execute();
            
                    // Check if the email address already exists
                    if ($stmt->rowCount() > 0) {
                        $stmt = $conn->prepare("SELECT * FROM likes WHERE uemail = :uemail AND mpid = :mpid");
                        $stmt->bindParam(':uemail', $_POST['uemail']);
                        $stmt->bindParam(':mpid', $_POST['mpid']);
                        $stmt->execute();
                        
                        if ($stmt->rowCount() > 0) {
                            echo "One User can only like a movie once.";
                        } else {
                            $stmt = $conn->prepare("INSERT INTO likes (uemail, mpid) VALUES (:uemail, :mpid)");
                            if ($stmt) {
                                $stmt->bindParam(':uemail', $_POST['uemail']);
                                $stmt->bindParam(':mpid', $_POST['mpid']);
                                echo "Like Successful!";
                            } else {
                                echo "Failed to prepare the SQL statement.";
                            }
                        }
                    } else {
                        echo "Please Sign Up first.";
                    }
                } else {
                    echo "Email or Movie ID is missing.";
                }
                
            } elseif ($action == 'viewAllMotionPictures') {
                $stmt = $conn->prepare("SELECT * FROM MotionPicture");
                $headers = ["id", "name", "rating", "production", "budget"];
                $isMovie = true;
            } elseif ($action == 'viewAllUsers') {
                $stmt = $conn->prepare("SELECT * FROM User");
                $headers = ["email", "name", "age"];
                $isMovie = false;
            } elseif ($action == 'viewAllLikes') {
                $stmt = $conn->prepare("SELECT * FROM Likes");
                $headers = ["mpid", "uemail"];
                $isMovie = false;
            } elseif ($action == 'viewAllMovies') {
                $stmt = $conn->prepare("SELECT * FROM Movie");
                $headers = ["mpid", "boxoffice_collection"];
                $isMovie = true;
            } elseif ($action == 'viewAllSeries') {
                $stmt = $conn->prepare("SELECT * FROM Series");
                $headers = ["mpid", "season_count"];
                $isMovie = true;
            } elseif ($action == 'viewAllPeople') {
                $stmt = $conn->prepare("SELECT * FROM People");
                $headers = ["id", "name", "nationality", "dob", "gender"];
                $isMovie = false;
            } elseif ($action == 'viewAllRoles') {
                $stmt = $conn->prepare("SELECT * FROM Role");
                $headers = ["mpid", "pid", "role_name"];
                $isMovie = false;
            } elseif ($action == 'viewAllAwards') {
                $stmt = $conn->prepare("SELECT * FROM Award");
                $headers = ["mpid", "pid", "award_name", "award_year"];
                $isMovie = false;
            } elseif ($action == 'viewAllGenres') {
                $stmt = $conn->prepare("SELECT * FROM Genre");
                $headers = ["mpid", "genre_name"];
                $isMovie = false;
            } elseif ($action == 'viewAllLocations') {
                $stmt = $conn->prepare("SELECT * FROM Location");
                $headers = ["mpid", "zip", "city", "country"];
                $isMovie = false;
            } else {
                $stmt = null;
                $isMovie = false;
            }

            if ($stmt !== null) {
                $stmt->execute();
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                echo "<table class='table table-bordered'>";
                echo "<thead class='thead-dark'><tr>";
                foreach ($headers as $header) {
                    echo "<th>$header</th>";
                }
                echo "</tr></thead>";
                foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll()), $isMovie) as $k => $v) {
                    echo $v;
                }
                echo "</table>";
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
        ?>
    </div>
</body>
</html>
