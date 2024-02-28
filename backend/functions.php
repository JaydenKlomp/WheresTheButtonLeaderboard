<?php
    function dbConnect(){
        $servername = "10.11.16.70";
        $username = "Floris";
        $password = "BasilBoys2023!";
        $dbname = "whereismybutton";
    
        // Create connection
        $mysqli = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }
        return $mysqli;
    }

    function getAllPlayers() {
        $conn = dbConnect();
        $sql = "SELECT * FROM all_levels ORDER BY (score - finish_time) DESC";
        $result = $conn->query($sql) or die($conn->error);

        $allPlayers = $result->fetch_all(MYSQLI_ASSOC);

        return $allPlayers;
    }

    function displayAllPlayers() {
        echo"
        <table>
            <tr>
                <th>Place</th>
                <th>Name</th>
                <th>Finish Time</th>
                <th>Coins</th>
                <th>Date Set</th>
            </tr>
        ";
        if(isset($_GET['q'])){
            $allPlayers = getSearch(); 
        }else{
            $allPlayers = getAllPlayers(); 
        }
        $place = 1;
        foreach ($allPlayers as $item) {
        echo"
            <tr>
                <td>" . $place . "</td>
                <td>" . $item['name'] . "</td>
                <td>" . updateTimeText($item['finish_time']) . "</td>
                <td>" . $item['score'] . "</td>
                <td>" . $item['time'] . "</td>
            </tr>
        </div> 
            ";
            $place++;
        }
        echo "</table>";
        
    }

    function getPlayersLevelOne(){
        $conn = dbConnect();
        $sql = "SELECT * FROM level_1 ORDER BY (score - finish_time) DESC";
        $result = $conn->query($sql) or die($conn->error);

        $playersLevelOne = $result->fetch_all(MYSQLI_ASSOC);

        return $playersLevelOne;
    }

    function displayLevelOnePlayers() {

        echo"
        <table>
            <tr>
                <th>Place</th>
                <th>Name</th>
                <th>Finish Time</th>
                <th>Coins</th>
                <th>Level</th>
                <th>Date Set</th>
            </tr>
        ";
        if(isset($_GET['q'])){
            $playersLevelOne = getSearch(); 
        }else{
            $playersLevelOne = getPlayersLevelOne(); 
        }

        $place = 1;
        foreach ($playersLevelOne as $item) {
           echo"
            <tr>
                <td>" . $place . "</td>
                <td>" . $item['name'] . "</td>
                <td>" . updateTimeText($item['finish_time']) . "</td>
                <td>" . $item['score'] . "</td>
                <td>" . $item['level'] . "</td>
                <td>" . $item['time'] . "</td>
            </tr>
           </div> 
            ";
            $place++;
        }
        echo "</table>";
    }

    function getPlayersLevelTwo(){
        $conn = dbConnect();
        $sql = "SELECT * FROM level_2 ORDER BY (score - finish_time) DESC";
        $result = $conn->query($sql) or die($conn->error);

        $playersLevelTwo = $result->fetch_all(MYSQLI_ASSOC);

        return $playersLevelTwo;
    }

    function displayLevelTwoPlayers() {

        echo"
        <table>
            <tr>
                <th>Place</th>
                <th>Name</th>
                <th>Finish Time</th>
                <th>Coins</th>
                <th>Level</th>
                <th>Date Set</th>
            </tr>
        ";
        if(isset($_GET['q'])){
            $playersLevelTwo = getSearch(); 
        }else{
            $playersLevelTwo = getPlayersLevelTwo();
        }
        
        $place = 1;
        foreach ($playersLevelTwo as $item) {
           echo"
            <tr>
                <td>" . $place . "</td>
                <td>" . $item['name'] . "</td>
                <td>" . updateTimeText($item['finish_time']) . "</td>
                <td>" . $item['score'] . "</td>
                <td>" . $item['level'] . "</td>
                <td>" . $item['time'] . "</td>
            </tr>
           </div> 
            ";
            $place++;
        }
        echo "</table>";
    }

    function getPlayersLevelThree(){
        $conn = dbConnect();
        $sql = "SELECT * FROM level_3 ORDER BY (score - finish_time) DESC";
        $result = $conn->query($sql) or die($conn->error);

        $playersLevelThree = $result->fetch_all(MYSQLI_ASSOC);

        return $playersLevelThree;
    }

    function displayLevelThreePlayers() {

        echo"
        <table>
            <tr>
                <th>Place</th>
                <th>Name</th>
                <th>Finish Time</th>
                <th>Coins</th>
                <th>Level</th>
                <th>Date Set</th>
            </tr>
        ";
        if(isset($_GET['q'])){
            $playersLevelThree = getSearch(); 
        }else{
            $playersLevelThree = getPlayersLevelThree(); 
        }
        $place = 1;
        foreach ($playersLevelThree as $item) {
           echo"
            <tr>
                <td>" . $place . "</td>
                <td>" . $item['name'] . "</td>
                <td>" . updateTimeText($item['finish_time']) . "</td>
                <td>" . $item['score'] . "</td>
                <td>" . $item['level'] . "</td>
                <td>" . $item['time'] . "</td>
            </tr>
           </div> 
            ";
            $place++;
        }
        echo "</table>";
    }

    function getPlayersLevelOneSort(){
        $conn = dbconnect();
        $value = ""; 

        $sort = $_GET['sort'];

        switch ($sort) {
            case "finish_time":
                $value = "ASC";
            break;
            case "score":
                $value = "DESC"; 
            break; 
        }

        $sql = "SELECT * FROM level_1 ORDER BY $sort $value";
    
        $result = $conn->query($sql) or die($conn->error);
    
        $playersLevelOneSort = $result->fetch_all(MYSQLI_ASSOC);
    
        return $playersLevelOneSort;  
    }
    
    function displayPlayersLevelOneSort() {
    
        if(isset($_GET['sort'])){
            echo"
            <table>
                <tr>
                    <th>Place</th>
                    <th>Name</th>
                    <th>Finish Time</th>
                    <th>Coins</th>
                    <th>Level</th>
                    <th>Date Set</th>
                </tr>
            ";
             
            if(isset($_GET['q'])){
                $playersLevelOneSort = getSearch(); 
            }else{
                $playersLevelOneSort = getPlayersLevelOneSort();
            }
            $place = 1;
            foreach ($playersLevelOneSort as $item) {
                echo"
                <tr>
                    <td>" . $place . "</td>
                    <td>" . $item['name'] . "</td>
                    <td>" . updateTimeText($item['finish_time']) . "</td>
                    <td>" . $item['score'] . "</td>
                    <td>" . $item['level'] . "</td>
                    <td>" . $item['time'] . "</td>
                </tr>
                ";
                $place++;
            }
            echo "</table>";
        
        }else{
            displayLevelOnePlayers();
        }
    }

    function getPlayersLevelTwoSort(){
        $conn = dbconnect();
        $value = ""; 

        $sort = $_GET['sort'];

        switch ($sort) {
            case "finish_time":
                $value = "ASC";
            break;
            case "score":
                $value = "DESC"; 
            break; 
        }
    
        $sql = "SELECT * FROM level_2 ORDER BY $sort $value";
    
        $result = $conn->query($sql) or die($conn->error);
    
        $playersLevelTwoSort = $result->fetch_all(MYSQLI_ASSOC);
    
        return $playersLevelTwoSort;  
    }
    
    function displayPlayersLevelTwoSort() {
    
        if(isset($_GET['sort'])){
            echo"
            <table>
                <tr>
                    <th>Place</th>
                    <th>Name</th>
                    <th>Finish Time</th>
                    <th>Coins</th>
                    <th>Level</th>
                    <th>Time</th>
                </tr>
            ";
            if(isset($_GET['q'])){
                $playersLevelTwoSort = getSearch(); 
            }else{
                $playersLevelTwoSort = getPlayersLevelTwoSort(); 
            }
            $place = 1;
            foreach ($playersLevelTwoSort as $item) {
                echo"
                <tr>
                    <td>" . $place . "</td>
                    <td>" . $item['name'] . "</td>
                    <td>" . updateTimeText($item['finish_time']) . "</td>
                    <td>" . $item['score'] . "</td>
                    <td>" . $item['level'] . "</td>
                    <td>" . $item['time'] . "</td>
                </tr>
                ";
                $place++;
            }
            echo "</table>";
        
        }else{
            displayLevelTwoPlayers();
        }
    }

    function getPlayersLevelThreeSort(){
        $conn = dbconnect();
        $value = ""; 

        $sort = $_GET['sort'];

        switch ($sort) {
            case "finish_time":
                $value = "ASC";
            break;
            case "score":
                $value = "DESC"; 
            break; 
        }
    
        $sql = "SELECT * FROM level_3 ORDER BY $sort $value";
    
        $result = $conn->query($sql) or die($conn->error);
    
        $playersLevelThreeSort = $result->fetch_all(MYSQLI_ASSOC);
    
        return $playersLevelThreeSort;  
    }
    
    function displayPlayersLevelThreeSort() {
    
        if(isset($_GET['sort'])){
            echo"
            <table>
                <tr>
                    <th>Place</th>
                    <th>Name</th>
                    <th>Finish Time</th>
                    <th>Coins</th>
                    <th>Level</th>
                    <th>Time</th>
                </tr>
            ";
        
            $place = 1;
            if(isset($_GET['q'])){
                $playersLevelThreeSort = getSearch(); 
            }else{
                $playersLevelThreeSort = getPlayersLevelThreeSort(); 
            }
            foreach ($playersLevelThreeSort as $item) {
                echo"
                <tr>
                    <td>" . $place . "</td>
                    <td>" . $item['name'] . "</td>
                    <td>" . updateTimeText($item['finish_time']) . "</td>
                    <td>" . $item['score'] . "</td>
                    <td>" . $item['level'] . "</td>
                    <td>" . $item['time'] . "</td>
                </tr>
                ";
                $place++;
            }
            echo "</table>";
        
        }else{
            displayLevelThreePlayers();
        }
    }

    function getSearch() {
        $conn = dbConnect();
        $q = $_GET['q'];
        $sql = "SELECT * FROM (SELECT * FROM level_1 UNION ALL SELECT * FROM level_2 UNION ALL SELECT * FROM level_3) AS subquery WHERE name LIKE '%$q%' ORDER BY name;";

        $result = $conn->query($sql) or die($conn->error);
        $searchPlayers = $result->fetch_all(MYSQLI_ASSOC);

        return $searchPlayers;
    }

    function updateTimeText($timer) {
        $totalSeconds = $timer;
        $minutes = (int)($totalSeconds / 60) % 60;
        $seconds = (int)($totalSeconds % 60);
        $milliseconds = (int)(($totalSeconds * 1000) % 1000);
    
        $timerString = sprintf("%02d:%02d:%03d", $minutes, $seconds, $milliseconds);
        return $timerString;
    }

    ?>