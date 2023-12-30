<?php 
class celebrity 
{
    private $connection;

    public function __construct() {
        $this->connection = new mysqli("localhost", "root", "", "php_elso_dolgozat");
    }

    function getAll() {
        $sql = "SELECT * FROM celebrities";
        $result = $this->connection->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function addCelebrity($name, $age, $profession, $nationality, $activeFrom, $activeNow) {
        $sql = "INSERT INTO celebrities (name, age, profession, nationality, activeFrom, activeNow) VALUES ('$name', '$age', '$profession', '$nationality', '$activeFrom', '$activeNow')";
        $result = $this->connection->query($sql);

        return $result;
    }
}