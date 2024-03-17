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
                        <button class="btn btn-outline-secondary" type="submit" name="minAge" id="button-addon2">Query</button>
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

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Dropdown menu for view all tables -->
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">View All Tables</h5>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All Tables Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" onclick="location.href='?action=viewAllMotionPictures'">View All Motion Pictures</a>
                                    <a class="dropdown-item" onclick="location.href='?action=viewAllUsers'">View All Users</a>
                                    <a class="dropdown-item" onclick="location.href='?action=viewAllLikes'">View All Likes</a>
                                    <a class="dropdown-item" onclick="location.href='?action=viewAllMovies'">View All Movies</a>
                                    <a class="dropdown-item" onclick="location.href='?action=viewAllSeries'">View All Series</a>
                                    <a class="dropdown-item" onclick="location.href='?action=viewAllPeople'">View All People</a>
                                    <a class="dropdown-item" onclick="location.href='?action=viewAllRoles'">View All Roles</a>
                                    <a class="dropdown-item" onclick="location.href='?action=viewAllAwards'">View All Awards</a>
                                    <a class="dropdown-item" onclick="location.href='?action=viewAllGenres'">View All Genres</a>
                                    <a class="dropdown-item" onclick="location.href='?action=viewAllLocations'">View All Locations</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Section for All Other Queries -->
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">All Other Queries</h5>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All Other Queries Dropdown
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalSearchMPName">Search Motion Pictures by Names</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalFindMovieLiked">Find Movies that are Liked by a User Email</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalSearchMPLocation">Search Motion Pictures by Shooting Location Country</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalListDirectorSeriesZip">List directors who have directed TV series in a zip code</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form for Search Motion Picture by Name -->
        <div class="modal fade" id="modalSearchMPName" tabindex="-1" role="dialog" aria-labelledby="modalSearchMPNameLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form id="searchMPNameForm" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalSearchMPNameLabel">Search Motion Picture by Name</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" placeholder="Enter motion picture name" name="searchMPName" id="searchMPName">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit" name="searchMPNameButton" id="searchMPNameButton">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Form for Find Movies that are Liked by a User Email -->
        <div class="modal fade" id="modalFindMovieLiked" tabindex="-1" role="dialog" aria-labelledby="modalFindMovieLikedLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form id="findMovieLikedForm" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalFindMovieLikedLabel">Find Movies that are Liked by a User Email</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" placeholder="Enter user email" name="findMovieLikedEmail" id="findMovieLikedEmail">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit" name="findMovieLikedEmailButton" id="findMovieLikedEmailButton">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

         <!-- Form for Search Motion Pictures by Shooting Location Country -->
         <div class="modal fade" id="modalSearchMPLocation" tabindex="-1" role="dialog" aria-labelledby="modalSearchMPLocationLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form id="searchMPLocationForm" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalSearchMPLocationLabel">Search Motion Pictures by Shooting Location Country</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" placeholder="Enter shooting location country" name="searchMPLocation" id="searchMPLocation">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit" name="searchMPLocationButton" id="searchMPLocationButton">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Form for List directors who have directed TV series in a zip code -->
        <div class="modal fade" id="modalListDirectorSeriesZip" tabindex="-1" role="dialog" aria-labelledby="modalListDirectorSeriesZipLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form id="listDirectorSeriesZipForm" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalListDirectorSeriesZipLabel">List directors who have directed TV series in a zip code</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" placeholder="Enter zip code" name="listDirectorSeriesZip" id="listDirectorSeriesZip">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit" name="listDirectorSeriesZipButton" id="listDirectorSeriesZipButton">Search</button>
                        </div>
                    </div>
                </form>
            </div>
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

            if (isset($_POST['minAge'])) {
                $ageLimit = $_POST["inputAge"];
                $stmt = $conn->prepare("SELECT id, first_name, last_name FROM guests WHERE age >= :ageLimit");
                $stmt->bindParam(':ageLimit', $ageLimit, PDO::PARAM_INT);
                $headers = ["ID", "First Name", "Last Name"];
                $isMovie = false;

            }elseif (isset($_POST['sign_up'])) {
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
            // Query 2
            } elseif (isset($_POST['searchMPNameButton'])){
                // Check if the Movie Picture name is available
                if (isset($_POST['searchMPName']) && !empty($_POST['searchMPName'])){
                    $stmt = $conn->prepare("SELECT name, rating, production, budget 
                    FROM MotionPicture 
                    WHERE name = :searchMPName");
                    // Bind the name parameter
                    $stmt->bindParam(':searchMPName', $_POST['searchMPName']);
                    $headers = ["movie name", "rating", "production", "budget"];
                    $isMovie = true;
                }else{
                    echo "Movie Picture Name is missing.";
                }
            // Query 3
            }elseif (isset($_POST['findMovieLikedEmailButton'])){
                // Check if the user email is available
                if (isset($_POST['findMovieLikedEmail']) && !empty($_POST['findMovieLikedEmail'])){
                    $stmt = $conn->prepare("SELECT name, rating, production, budget 
                    FROM MotionPicture MP
                    JOIN Likes L ON MP.id = L.mpid
                    JOIN Movie M ON MP.id = M.mpid
                    WHERE L.uemail = :findMovieLikedEmail");
                    // Bind the name parameter
                    $stmt->bindParam(':findMovieLikedEmail', $_POST['findMovieLikedEmail']);
                    $headers = ["movie name", "rating", "production", "budget"];
                    $isMovie = true;
                }else{
                    echo "User Email is missing.";
                }
            // Query 4
            }elseif (isset($_POST['searchMPLocationButton'])){
                // Check if the Movie Picture shooting location country is available
                if (isset($_POST['searchMPLocation']) && !empty($_POST['searchMPLocation'])){
                    $stmt = $conn->prepare("SELECT DISTINCT name 
                    FROM MotionPicture MP 
                    JOIN Location L ON MP.id = L.mpid 
                    WHERE L.country = :searchMPLocation");
                    // Bind the name parameter
                    $stmt->bindParam(':searchMPLocation', $_POST['searchMPLocation']);
                    $headers = ["motion picture name"];
                    $isMovie = true;
                }else{
                    echo "Movie Picture Shooting Location Country is missing.";
                }
            // Query 5
            }elseif (isset($_POST['listDirectorSeriesZipButton'])){
                // Check if the given zip code is available
                if (isset($_POST['listDirectorSeriesZip']) && !empty($_POST['listDirectorSeriesZip'])){
                    $stmt = $conn->prepare("SELECT DISTINCT P.name AS director_name, MP.name AS TV_series_name 
                    FROM People P 
                    JOIN Role R ON P.id = R.pid
                    JOIN Series S ON R.mpid = S.mpid
                    JOIN MotionPicture MP ON S.mpid = MP.id 
                    JOIN Location L ON S.mpid = L.mpid 
                    WHERE R.role_name = 'Director' AND L.zip = :listDirectorSeriesZip");
                    // Bind the name parameter
                    $stmt->bindParam(':listDirectorSeriesZip', $_POST['listDirectorSeriesZip']);
                    $headers = ["director name", "TV series name"];
                    $isMovie = true;
                }else{
                    echo "Zip Code is missing.";
                }
            // Query 1
            }elseif ($action == 'viewAllMotionPictures') {
                $stmt = $conn->prepare("SELECT * FROM MotionPicture");
                $headers = ["id", "movie name", "rating", "production", "budget"];
                $isMovie = true;
            } elseif ($action == 'viewAllUsers') {
                $stmt = $conn->prepare("SELECT * FROM User");
                $headers = ["email", "user name", "age"];
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
                $headers = ["id", "people name", "nationality", "dob", "gender"];
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
