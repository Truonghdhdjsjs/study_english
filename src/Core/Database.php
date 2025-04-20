<?php
    namespace Src\Core;
    use PDO;
    use PDOException;
    
    class Database{
            protected $servername = DB_SERVER;
            protected $username = DB_USERNAME;
            protected $password = DB_PASSWORD;
            protected $dbname = DB_NAME;
            protected $table;
            protected $pdo;
            public function __construct(){
                try {
                    $this->pdo = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
                    // set the PDO error mode to exception
                    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    // echo "Connected successfully";
                  } catch(PDOException $e) {
                    die("Connection failed: " . $e->getMessage());
                  }
            }

            public function select($column ='*',$codition = null,$params=[]){
                if(!$this->table)
                {
                    throw new PDOException("Not exist table {$this->table}", 1);   
                }
                $sql = "SELECT {$column} FROM {$this->table}";
                if($codition)
                {
                    $sql.= "WHERE {$codition}";
                }
                $stmt = $this->pdo->prepare($sql);
                
                $stmt->execute($params);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);

            }
            public function __destruct(){
                $this->pdo = null;
            }


    }