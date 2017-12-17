<?php
/*
 * Database connection object
 * 
 * Copyright 2017 remi Graton <whassa@whassa-Lenovo-Y50-70>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */
 
    require 'credential.php';
    
    
    class dbConnection{
  
        private $dbConnection;
        
        const DSN = 'mysql:dbname=club_societe_ets;host=127.0.0.1';
        const USER = 'root';
        const PASSWORD = 'swagtown';
        
        
        public function __construct(){
           $this->tryConnection();
        }
        
        private function tryConnection(){
            
            if ( empty( $dbConnection)) {
                
                try {
                    
                    $this->dbConnection = new PDO( self::DSN, self::USER, 
                            self::PASSWORD);
                    
                } catch (PDOException $e) {
                    
                    echo 'Connection failed: ' . $e->getMessage();
                    
                }
            }
        }
       
       public function tryLogin( $email, $password){
          
           $hasConnected = false;
           
           $statement = $this->dbConnection->prepare("SELECT * from User where 
                email = :email AND password = :password");
            
           $statement->execute(array( 'email' => $email, 
                'password' => $password));
           
           $user = $statement->fetch(PDO::FETCH_ASSOC);
           
           
           
           if ($user){
               
               $_SESSION['userId'] = $user['id'];
               $_SESSION['userEmail'] = $user['email'];
               $_SESSION['userAccount'] = $user['account_type'];             
               $hasConnected = true;
               
           } 
           
           return $hasConnected;
       }
       
    
    }


    

        
        


?>
