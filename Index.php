<?php
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
    $requestUrl = $_SERVER['REQUEST_URI'];
    if (isset($requestUrl)){
        $requestUrl = str_replace("/boardgameWebsite/", ""
        , $requestUrl);
        $requestUrl = ucfirst($requestUrl);
        $requestUrl = "controller/".$requestUrl;
        error_log($requestUrl);
        
        if (file_exists($requestUrl)) {
            include ($requestUrl);
            /*
            if ((include $requestUrl) == TRUE) {
                
            } else {
                showError404();
            }
            */
        } else{
            showError404();
        }
    } else {
        showError404();
    }

    // Show the error 404 of the main
    function showError404(){
        include ("view/Error404.php");
    }
    
    function callAction($action){
    
    }

?>

