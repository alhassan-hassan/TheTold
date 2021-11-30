<?php
    //database

    //database credentials
    require_once "db-credentials.php";

    /**
     *@author Alhassan Hassan
    */
    class DB_Connection{
        //attributes
        public $database = null;
        public $results = null;

        /**
        *Database connection
        *@return bolean
        **/
        function db_connect(){
            //connection
            $this->database = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
		    //test the connection
            if (mysqli_connect_errno()) {
                return false;
            }else{
                return true;
            }
        }

        //execute a query
        /**
        *Query the Database
        *@param takes a connection and sql query
        *@return bolean
        **/
        function db_query($sqlQuery){
            if (!$this->db_connect()) {
                return false;
            }
            elseif ($this->database==null) {
                return false;
            }

            //run query
            $this->results = mysqli_query($this->database,$sqlQuery);
            
            if ($this->results == false) {
                return false;
            }else{
                return true;
            }
            

        }

        //fetch data
        /**
        *get select data
        *@return a record
        **/
        function db_fetch(){
            //check if result was set
            if ($this->results == null) {
                return false;
            }
            elseif ($this->results == false) {
                return false;
            }
            //return a record
            return mysqli_fetch_assoc($this->results);

	    }
    }

    $hmm = new DB_Connection;
    $hmm->db_connect();
?>
