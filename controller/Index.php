<?php
/*
 * index.php
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
    include "view/Index.php";
    
    // View object
    if ( !isset($viewIndex)){
        $viewIndex = new viewIndex("");
    }
    
    // Call the class controller
    if ( !isset($controller)){
        $controller = new ControllerIndex($dbConnection, $viewIndex);
    }
    $controller->callAction();
    
    
    class controllerIndex{
        
        private $dbConnection;
        private $view;
        
        
        public function __construct($dbConnection, $viewIndex) {
            
            $this->dbConnection = $dbConnection;
            $this->view = $viewIndex;
            
        }
    
        // Check if there's a function to call from the post action.
        
        public function callAction(){
           
           // Check if there's an action called
           if (isset($_GET['action'])){
               
             // Call user function
             call_user_func(array( $this, $_GET['action']));
           
           } else {
             
              $this->view->generateLoginView();
          
               
           }
        }
      
        
        // Get the registerFile
        private function register(){
            
            if ( readfile("../view/register.html") ){
                
            }
            
        }
        
        // Create account with the db connection
        private function createAccount(){
            
        }
        
        // Login in the user 
        private function login(){
           
           $email = $_POST['username'];
           $password = $_POST['password'];
           
           if ($this->dbConnection->tryLogin( $email, $password)){
               
               $html_body = "salut";
               
           } else {
               
               $html_body = "Unable to connect";
           
           }
           
           // Generate view 
           $this->view->generateLoginView();
        } 
        
        // Disconnect the user
        private function disconnect(){
            
           session_unset();   
           // Generate view 
            $this->view->generateLoginView();
        }
        
        
    }
    
    
?>
