<?php

function changeTitle()
{
    //Make connection again, because the dbconnect function gave me errors.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "87047_myportfoli";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    if ($_GET) {
        $sql = "SELECT * FROM projects where projectID = " . $_GET["project"];
        $result = $conn->query($sql);

        //Check if any result were found.
        if ($result) {
            if ($result->num_rows > 0) {
                //Print everything with certain playlistID
                while ($row = $result->fetch_assoc()) {
                    echo $row['projectTitle'];
                }

                //If no result where found print error message.
            }
        }
    }

    $conn->close();
}

function changeImage()
{
    //Make connection again, because the dbconnect function gave me errors.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "87047_myportfoli";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_GET) {
        $sql = "SELECT * FROM projects where projectID = " . $_GET["project"];
        $result = $conn->query($sql);

        //Check if any result were found.
        if ($result) {
            if ($result->num_rows > 0) {
                //Print everything with certain playlistID
                while ($row = $result->fetch_assoc()) {
                    echo $row['projectImage'];
                }

                //If no result where found print error message.
            }
        }
    }

    $conn->close();
}

function changeDescription()
{
    //Make connection again, because the dbconnect function gave me errors.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "87047_myportfoli";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_GET) {
        $sql = "SELECT * FROM projects where projectID = " . $_GET["project"];
        $result = $conn->query($sql);

        //Check if any result were found.
        if ($result) {
            if ($result->num_rows > 0) {
                //Print everything with certain playlistID
                while ($row = $result->fetch_assoc()) {
                    echo $row['projectDescription'];
                }

                //If no result where found print error message.
            }
        }
    }

    $conn->close();
}

function changeCategory()
{
    //Make connection again, because the dbconnect function gave me errors.
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "87047_myportfoli";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_GET) {
        $sql = "SELECT * FROM projects where projectID = " . $_GET["project"];
        $result = $conn->query($sql);

        //Check if any result were found.
        if ($result) {
            if ($result->num_rows > 0) {
                //Print everything with certain playlistID
                while ($row = $result->fetch_assoc()) {
                    echo 'Category: ' . $row['projectCategory'];
                }

                //If no result where found print error message.
            }
        }
    }

    $conn->close();
}