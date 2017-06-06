<?php


 function getBirthday() 
{
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM birthdays order by month";
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;

    return $query->fetchAll();
}


function createBirthday(){
    $person = isset($_POST['person']) ? $_POST['person'] : null;
    $day = isset($_POST['day']) ? $_POST['day'] : null;
    $month = isset($_POST['month']) ? $_POST['month'] : null;
    $year = isset($_POST['year']) ? $_POST['year'] : null;

    if (strlen($person) == 0 || strlen($day) == 0 || strlen($month) == 0 || strlen($year) == 0){
        echo "Niet ingevuld";
        return false;
    }

    $db = openDatabaseConnection();

    $sql = "INSERT INTO birthdays(person, day, month, year) VALUES (:person, :day, :month, :year)";
    $query = $db->prepare($sql);
    $query->execute(array(
        ':person' => $person,
        ':day' => $day,
        ':month' => $month,
        ':year' => $year));

    $db = null;

    return true;
}?>