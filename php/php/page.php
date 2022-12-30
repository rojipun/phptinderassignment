<?php
    class Database {
        // properties
        private $hostname = "localhost";
        private $username = "root";
        private $password = "root";
        private $database = "tinder";
        private $port = 3306;
        public $conn;

        // constructor
        public function __construct()
        {
            $this->conn = $this->getConnection();
        }

        //methods
        private function getConnection() {
            $connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->database, $this->port);

            if($connection == false) {
                echo "no connection with database";
                die();
            } return  $connection;
        }

        public function selectQuery($sql) {
            return mysqli_query($this->conn, $sql)->fetch_all(MYSQLI_ASSOC);
        }

        public function fetchUsers(){
            //mysqli_select_db($conn, 'pagination');
            $userSQL = "SELECT * FROM users";
            return mysqli_query($this->conn, $userSQL)->fetch_all(MYSQLI_ASSOC);
        }

        public function fetchUserArray($page_first_result, $results_per_page){
            mysqli_select_db($this->conn, 'pagination');
            $query = "SELECT * FROM users LIMIT " . $page_first_result . ',' . $results_per_page. ';';  
           // var_dump($query);
            $result = mysqli_query($this->conn, $query)->fetch_all(MYSQLI_ASSOC);
             
            return /*mysqli_fetch_array*/($result);
        }

        public function insertQuery($sql){
            mysqli_query($this->conn, $sql);
        }
    }
?>