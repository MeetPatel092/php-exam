<?php  
    class Config{

        private $HOST_NAME = "localhost";
        private $USER_NAME = "root";
        private $PASSWORD = "";
        private $DB_NAME = "my_db";
        public $conn;

        function initConnection(){

            $this->conn = mysqli_connect($this->$HOST_NAME,$this->USER_NAME,$this->PASSWORD,$this->DB_NAME);

        }

        function addDiractor($dir_fname,$dir_iname){

            $this->initConnection();

            $query = "INSERT INTO diractors(dir_fname,dir_iname) VALUES('$dir_fname','$dir_iname');";

           $res = mysqli_query($this->conn, $query);

           return $res;

        }

        function addMoviecast($movie_id,$role){

            $this->initConnection();

            $query = "INSERT INTO moviecast(movie_id,role) VALUES($movie_id,'$role');";

           $res = mysqli_query($this->conn, $query);

           return $res;

        }

        function fetchAllDiractor(){

            $this->initConnection();

            $query = "SELECT * FROM diractors";

           $res = mysqli_query($this->conn, $query);

           return $res;

        }

        function fetchAllMoviecast(){

            $this->initConnection();

            $query = "SELECT * FROM moviecast";

           $res = mysqli_query($this->conn, $query);

           return $res;

        }

        function fetchSingleDiractor($dir_id){

            $this->initConnection();

            $query = "SELECT * FROM diractors WHERE dir_id = $dir_id";

           $res = mysqli_query($this->conn, $query);

           return $res;

        }

        function fetchSingleMoviecast($act_id){

            $this->initConnection();

            $query = "SELECT * FROM moviecast WHERE act_id = $act_id";

           $res = mysqli_query($this->conn, $query);

           return $res;

        }

        function updateDiractor($dir_fname,$dir_iname,$dir_id){

            $this->initConnection();

            $query = "UPDATE diractors SET dir_fname='$dir_fname', dir_iname='$dir_iname' WHERE dir_id =$dir_id;";

           $res = mysqli_query($this->conn,$query);

           return $res;

        }

        function deleteDiractor($dir_id){

            $this->initConnection();

            $query = "DELETE FROM diractors WHERE dir_id=$dir_id";

           $res = mysqli_query($this->conn, $query);

           return $res;

        }

        function deleteMoviecast($act_id){

            $this->initConnection();

            $query = "DELETE FROM moviecast WHERE act_id=$act_id";

           $res = mysqli_query($this->conn, $query);

           return $res;

        }

    }


?>