<?php //include "DBconnection.php"?>
<?php
// Singleton to connect db.
class Database {
    private $connection;
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "library management system";

    private static $instance; //The single instance

    // The function construct is private to prevent the object can be created by new
    private function __construct() {
        $this->connection = new mysqli($this->hostname, $this->username,
            $this->password, $this->database);
           global $connection;
        // Error handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
                E_USER_ERROR);

        }

    }
    public function getData()
    {

    }

    public static function getInstance() {
        if(!self::$instance) { // If no instance then make one
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Magic method clone is empty to prevent duplication of connection
    private function __clone() { }

    // Get mysqli connection
    public function getConnection() {
        return $this->connection;
    }

}

    $instance = Database::getInstance();

?>
