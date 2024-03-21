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
                <div class="col-md-3">
                    <!-- Dropdown menu for view all tables -->
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">Q1: View All Tables</h5>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All Tables
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

                <div class="col-md-4">
                    <!-- Section for All Queries Need Parameters -->
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">All Queries Need Parameters</h5>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All Queries Need Parameters
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalSearchMovieName">Q2: Search Movies by Names</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalFindMovieLiked">Q3: Find Movies that are Liked by a User Email</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalSearchMPLocation">Q4: Search Motion Pictures by Shooting Location Country</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalListDirectorSeriesZip">Q5: List directors who have directed TV series in a zip code</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalFindPeopleKAwards">Q6: Find people who have received more than k awards for a single motion picture in the same year</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalFindUSAProducer">Q8: Find American Producers who had box office collection >= X with budget <= Y</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalListPeopleMultipleRoles">Q9: List people who played multiple roles in a motion picture where rating is more than X</a>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalFindMovieXLikesYAge">Q11: Find movies with more than X likes by users of age less than Y</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <!-- Section for All Queries Without Parameters -->
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">All Queries Without Parameters</h5>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    All Queries Without Parameters
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" onclick="location.href='?action=findYoungestOldestActors'">Q7: Find the youngest and oldest actors to win at least one award</a>
                                    <a class="dropdown-item" onclick="location.href='?action=findTop2ThrillerMoviesBoston'">Q10: Find top 2 rates thriller movies that were shot exclusively in Boston</a>
                                    <a class="dropdown-item" onclick="location.href='?action=findActorsInBothProductions'">Q12: Find the actors who have played a role in both Marvel and Warner Bros</a>
                                    <a class="dropdown-item" onclick="location.href='?action=findMoviesWithHigherRatingThanAverageComedy'">Q13: Find the motion pictures that have a higher rating than the average rating of all comedy</a>
                                    <a class="dropdown-item" onclick="location.href='?action=findTop5MoviesWithMostPeople'">Q14: Find the top 5 movies with the highest number of people playing a role in that movie</a>
                                    <a class="dropdown-item" onclick="location.href='?action=findActorsWithSameBirthday'">Q15: Find actors who share the same birthday. </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form for Search Movie by Name -->
        <div class="modal fade" id="modalSearchMovieName" tabindex="-1" role="dialog" aria-labelledby="modalSearchMovieNameLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form id="searchMovieNameForm" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalSearchMovieNameLabel">Search Movies by Names</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" placeholder="Enter movie name" name="searchMovieName" id="searchMovieName">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit" name="searchMovieNameButton" id="searchMovieNameButton">Search</button>
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

        <!-- Form for Find people who have received more than k awards for a single motion picture in the same year -->
        <div class="modal fade" id="modalFindPeopleKAwards" tabindex="-1" role="dialog" aria-labelledby="modalFindPeopleKAwardsLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form id="findPeopleKAwardsForm" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalFindPeopleKAwardsLabel">Find people who have received more than k awards for a single motion picture in the same year</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" placeholder="Enter minimum awards: k" name="findPeopleKAwards" id="findPeopleKAwards">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit" name="findPeopleKAwardsButton" id="findPeopleKAwardsButton">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Form for Find American Producers who had a box office collection of more than or equal to X with a budget less than or equal to Y -->
        <div class="modal fade" id="modalFindUSAProducer" tabindex="-1" role="dialog" aria-labelledby="modalFindUSAProducerLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form id="findUSAProducerForm" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalFindUSAProducerLabel">Find American Producers who had box office collection >= X with budget <= Y</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" placeholder="Enter minimum box office collection: X" name="findUSAProducerX" id="findUSAProducerX">
                            <input type="text" class="form-control" placeholder="Enter maximum budget: Y" name="findUSAProducerY" id="findUSAProducerY">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit" name="findUSAProducerButton" id="findUSAProducerButton">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Form for List people who played multiple roles in a motion picture where rating is more than X -->
        <div class="modal fade" id="modalListPeopleMultipleRoles" tabindex="-1" role="dialog" aria-labelledby="modalListPeopleMultipleRolesLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form id="listPeopleMultipleRolesForm" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalListPeopleMultipleRolesLabel">List people who played multiple roles in a motion picture where rating is more than X</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <input type="text" class="form-control" placeholder="Enter minimum rating: X" name="listPeopleMultipleRolesX" id="listPeopleMultipleRolesX">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary" type="submit" name="listPeopleMultipleRolesButton" id="listPeopleMultipleRolesButton">Search</button>
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
            } elseif (isset($_POST['searchMovieNameButton'])){
                // Check if the Movie name is available
                if (isset($_POST['searchMovieName']) && !empty($_POST['searchMovieName'])){
                    $stmt = $conn->prepare("SELECT name, rating, production, budget 
                    FROM MotionPicture MP
                    JOIN Movie M ON MP.id = M.mpid 
                    WHERE name = :searchMovieName");
                    // Bind the Movie name parameter
                    $stmt->bindParam(':searchMovieName', $_POST['searchMovieName']);
                    $headers = ["movie name", "rating", "production", "budget"];
                    $isMovie = true;
                }else{
                    echo "Movie Name is missing.";
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
                    // Bind the user email parameter
                    $stmt->bindParam(':findMovieLikedEmail', $_POST['findMovieLikedEmail']);
                    $headers = ["movie name", "rating", "production", "budget"];
                    $isMovie = true;
                }else{
                    echo "User Email is missing.";
                }
            // Query 4
            }elseif (isset($_POST['searchMPLocationButton'])){
                // Check if the Motion Picture shooting location country is available
                if (isset($_POST['searchMPLocation']) && !empty($_POST['searchMPLocation'])){
                    $stmt = $conn->prepare("SELECT DISTINCT name 
                    FROM MotionPicture MP 
                    JOIN Location L ON MP.id = L.mpid 
                    WHERE L.country = :searchMPLocation");
                    // Bind the location parameter
                    $stmt->bindParam(':searchMPLocation', $_POST['searchMPLocation']);
                    $headers = ["motion picture name"];
                    $isMovie = true;
                }else{
                    echo "Motion Picture Shooting Location Country is missing.";
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
                    // Bind the zip code parameter
                    $stmt->bindParam(':listDirectorSeriesZip', $_POST['listDirectorSeriesZip']);
                    $headers = ["director name", "TV series name"];
                    $isMovie = true;
                }else{
                    echo "Zip Code is missing.";
                }
            // Query 6
            }elseif (isset($_POST['findPeopleKAwardsButton'])){
                // Check if the given k value is available
                if (isset($_POST['findPeopleKAwards']) && $_POST['findPeopleKAwards'] !== ''){
                    $stmt = $conn->prepare("SELECT P.name AS person_name, MP.name AS motion_picture_name, A.award_year, COUNT(*) AS award_count 
                    FROM People P 
                    JOIN Award A ON P.id = A.pid 
                    JOIN MotionPicture MP ON A.mpid = MP.id 
                    GROUP BY P.id, MP.id, A.award_year
                    HAVING COUNT(*) > :findPeopleKAwards");
                    // Bind the k value parameter
                    $stmt->bindParam(':findPeopleKAwards', $_POST['findPeopleKAwards']);
                    $headers = ["person name", "motion picture name", "award year", "award count"];
                    $isMovie = true;
                }else{
                    echo "k Value is missing.";
                }
            // Query 7
            }elseif ($action == 'findYoungestOldestActors') {
                $stmt = $conn->prepare("SELECT P.name AS actor_name, (A.award_year - YEAR(P.dob)) AS age_at_award 
                FROM People P 
                JOIN Role R ON P.id = R.pid 
                JOIN Award A ON P.id = A.pid
                WHERE R.role_name = 'Actor' 
                HAVING age_at_award = (SELECT age_at_award 
                                        FROM (SELECT (A.award_year - YEAR(P.dob)) AS age_at_award
                                        FROM People P
                                        JOIN Role R ON P.id = R.pid 
                                        JOIN Award A ON P.id = A.pid 
                                        WHERE R.role_name = 'Actor' 
                                        ORDER BY age_at_award ASC 
                                        LIMIT 1) AS youngest_age)
                        OR 
                        age_at_award = (SELECT age_at_award 
                                        FROM (SELECT (A.award_year - YEAR(P.dob)) AS age_at_award 
                                        FROM People P 
                                        JOIN Role R ON P.id = R.pid 
                                        JOIN Award A ON P.id = A.pid 
                                        WHERE R.role_name = 'Actor' 
                                        ORDER BY age_at_award DESC 
                                        LIMIT 1) AS oldest_age)");
                $headers = ["actor name", "age (received the award)"];
                $isMovie = true;
            // Query 8
            }elseif (isset($_POST['findUSAProducerButton'])){
                // Check if the given X and Y value is available
                if (isset($_POST['findUSAProducerX']) && $_POST['findUSAProducerX'] !== '' && isset($_POST['findUSAProducerY']) && $_POST['findUSAProducerY'] !== ''){
                    $stmt = $conn->prepare("SELECT P.name AS producer_name, MP.name AS movie_name, M.boxoffice_collection, MP.budget
                    FROM People P 
                    JOIN Role R ON P.id = R.pid 
                    JOIN MotionPicture MP ON R.mpid = MP.id 
                    JOIN Movie M ON MP.id = M.mpid 
                    WHERE P.nationality = 'USA' AND M.boxoffice_collection >= :findUSAProducerX AND MP.budget <= :findUSAProducerY AND R.role_name = 'Producer'");
                    // Bind the X and Y value parameter
                    $stmt->bindParam(':findUSAProducerX', $_POST['findUSAProducerX']);
                    $stmt->bindParam(':findUSAProducerY', $_POST['findUSAProducerY']);
                    $headers = ["producer name", "movie name", "box office collection", "budget"];
                    $isMovie = true;
                }else{
                    echo "X or Y Value is missing.";
                }
            // Query 9
            }elseif (isset($_POST['listPeopleMultipleRolesButton'])){
                // Check if the given X value is available
                if (isset($_POST['listPeopleMultipleRolesX']) && $_POST['listPeopleMultipleRolesX'] !== ''){
                    $stmt = $conn->prepare("SELECT P.name AS person_name, MP.name AS motion_picture_name, COUNT(*) AS role_count 
                    FROM People P 
                    JOIN Role R ON P.id = R.pid 
                    JOIN MotionPicture MP ON R.mpid = MP.id 
                    WHERE MP.rating > :listPeopleMultipleRolesX 
                    GROUP BY P.id, MP.id 
                    HAVING COUNT(*) > 1");
                    // Bind the X value parameter
                    $stmt->bindParam(':listPeopleMultipleRolesX', $_POST['listPeopleMultipleRolesX']);
                    $headers = ["person name", "motion picture name", "number of roles"];
                    $isMovie = true;
                }else{
                    echo "X Value is missing.";
                }
            // Query 10
            }elseif ($action == 'findTop2ThrillerMoviesBoston') {
                $stmt = $conn->prepare("SELECT MP.name AS movie_name, MP.rating 
                FROM MotionPicture MP
                JOIN Movie M ON MP.id = M.mpid 
                JOIN Genre G ON MP.id = G.mpid 
                JOIN Location L ON MP.id = L.mpid 
                WHERE G.genre_name = 'Thriller' AND L.city = 'Boston' 
                    AND NOT EXISTS (
                        SELECT city 
                        FROM Location 
                        WHERE mpid = MP.id 
                        AND city != 'Boston') 
                ORDER BY MP.rating DESC 
                LIMIT 2");
                $headers = ["movie name", "rating"];
                $isMovie = true;
            // Query 11
            } elseif(isset($_POST['findUSAProducerButton'])){
                // Check if the given X and Y value is available
                if (isset($_POST['findUSAProducerX']) && $_POST['findUSAProducerX'] !== '' && isset($_POST['findUSAProducerY']) && $_POST['findUSAProducerY'] !== ''){
                    $stmt = $conn->prepare("SELECT P.name AS producer_name, MP.name AS movie_name, M.boxoffice_collection, MP.budget
                    FROM People P 
                    JOIN Role R ON P.id = R.pid 
                    JOIN MotionPicture MP ON R.mpid = MP.id 
                    JOIN Movie M ON MP.id = M.mpid 
                    WHERE P.nationality = 'USA' AND M.boxoffice_collection >= :findUSAProducerX AND MP.budget <= :findUSAProducerY AND R.role_name = 'Producer'");
                    // Bind the X and Y value parameter
                    $stmt->bindParam(':findUSAProducerX', $_POST['findUSAProducerX']);
                    $stmt->bindParam(':findUSAProducerY', $_POST['findUSAProducerY']);
                    $headers = ["producer name", "movie name", "box office collection", "budget"];
                    $isMovie = true;
                }else{
                    echo "X or Y Value is missing.";
                }
            // Query 12
            }elseif ($action == 'findActorsInBothProductions') {
                $stmt = $conn->prepare("SELECT P.name AS actor_name, MP.name AS motion_picture_name
                                        FROM People P
                                        JOIN Role R ON P.id = R.pid
                                        JOIN MotionPicture MP ON R.mpid = MP.id
                                        WHERE R.role_name = 'Actor' AND MP.production IN ('Marvel', 'Warner Bros')
                                        GROUP BY P.name
                                        HAVING COUNT(DISTINCT MP.production) = 2");
                $headers = ["actor name", "motion picture name"];
                $isMovie = true;
            // Query 13
            } elseif ($action == 'findMoviesWithHigherRatingThanAverageComedy') {
                $stmt = $conn->prepare("SELECT MP.name AS motion_picture_name, MP.rating AS motion_picture_rating
                                        FROM MotionPicture MP
                                        WHERE MP.rating > (SELECT AVG(MP2.rating) 
                                                           FROM MotionPicture MP2 
                                                           JOIN Genre G ON MP2.id = G.mpid
                                                           WHERE G.genre_name = 'Comedy')
                                        ORDER BY MP.rating DESC");
                $headers = ["motion picture name", "motion picture rating"];
                $isMovie = true;
            // Query 14
            } elseif ($action == 'findTop5MoviesWithMostPeople') {
                $stmt = $conn->prepare("SELECT MP.name AS movie_name, COUNT(DISTINCT P.id) AS people_count, COUNT(R.role_name) AS role_count
                                        FROM MotionPicture MP
                                        JOIN Role R ON MP.id = R.mpid
                                        JOIN People P ON R.pid = P.id
                                        GROUP BY MP.name
                                        ORDER BY people_count DESC, role_count DESC
                                        LIMIT 5");
                $headers = ["movie name", "people count", "role count"];
                $isMovie = true;
            // Query 15
            } elseif ($action == 'findActorsWithSameBirthday') {
                $stmt = $conn->prepare("SELECT P1.name AS actor_1, P2.name AS actor_2, P1.dob AS common_birthday
                                        FROM People P1
                                        JOIN People P2 ON P1.dob = P2.dob AND P1.id < P2.id
                                        JOIN Role R1 ON P1.id = R1.pid
                                        JOIN Role R2 ON P2.id = R2.pid
                                        WHERE R1.role_name = 'Actor' AND R2.role_name = 'Actor'
                                        GROUP BY common_birthday, actor_1, actor_2");
                $headers = ["actor 1", "actor 2", "common birthday"];
                $isMovie = true;
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
