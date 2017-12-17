<?php

    include "model/database.php";
/* 
 * Index of my website.
 * Every request should be brought
 * 
 * Copyright 2017 Remi Graton <whassa@whassa-Lenovo-Y50-70>
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
 
    // Start the session 
    session_start();
    
    // Check if there's a db connection
    if ( !isset($dbConnection)){
        
        // Create a PDO db connection object
        $dbConnection = new dbConnection();
    
    }
    
    // Get the request URL from the server
    $requestUrl = $_SERVER['REQUEST_URI'];
    
    
    // Check if there's a request URL
    if (isset($requestUrl)){
        
        // Remove the first thing to remove the boardgame string
        $requestUrl = str_replace("/boardgameWebsite/", ""
        , $requestUrl);
        
        // Capitalize first character to fit with our files
        $requestUrl = ucfirst($requestUrl);
        
        // Get the controller file
        $requestUrl = "controller/".$requestUrl;
        
        // Check if there's a php action on the get request
        if (preg_match("/.*\.php/", $requestUrl, $requestUrlFile) == 1){
            
          $requestUrl = $requestUrlFile[0];
        
        }
        
        // Check if file exist
        if (file_exists($requestUrl)) {
            
            // Include the file to show
            include ($requestUrl);
         
        } else{
            
            // Call the error 404
            showError404();
        
        }
    } else {
        
        // Call the error 404
        showError404();
    
    }

    // Show the error 404 of the main
    function showError404(){
        include ("view/Error404.php");
    }

?>

