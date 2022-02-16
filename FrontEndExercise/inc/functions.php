<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name = "gameswebsite";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $db_name);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT GameID, imageURL, GamesTitle, GamesDescription FROM games";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="games">
            <div class="left-container">
                <img class="image" src="' . $row["imageURL"] . ' ">
            </div>
            <div class="right-container">
                <h1 class="game_title">' . $row["GamesTitle"] . '</h1>
                <p>
                    ' . $row["GamesDescription"] . '
                </p>
            </div>
        </div>
        ';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
