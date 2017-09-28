<?php
/*
 * Template file for all my php view.
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

?>
<html>

<head>
    <link rel="stylesheet" href="includes/css/bootstrap.min.css" >
    <title>BoardGameWebSite</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.27" />
    <style>
        body {background-color: #002b36;}
        
        .navbar-default {
          background-color: #424040;
          border-color: #2b1c1c;
        }
        .navbar-default .navbar-brand {
          color: #d9d7f7;
        }
        .navbar-default .navbar-brand:hover,
        .navbar-default .navbar-brand:focus {
          color: #aeaeae;
        }
        .navbar-default .navbar-text {
          color: #d9d7f7;
        }
        .navbar-default .navbar-nav > li > a {
          color: #d9d7f7;
        }
        .navbar-default .navbar-nav > li > a:hover,
        .navbar-default .navbar-nav > li > a:focus {
          color: #aeaeae;
        }
        .navbar-default .navbar-nav > .active > a,
        .navbar-default .navbar-nav > .active > a:hover,
        .navbar-default .navbar-nav > .active > a:focus {
          color: #aeaeae;
          background-color: #2b1c1c;
        }
        .navbar-default .navbar-nav > .open > a,
        .navbar-default .navbar-nav > .open > a:hover,
        .navbar-default .navbar-nav > .open > a:focus {
          color: #aeaeae;
          background-color: #2b1c1c;
        }
        .navbar-default .navbar-toggle {
          border-color: #2b1c1c;
        }
        .navbar-default .navbar-toggle:hover,
        .navbar-default .navbar-toggle:focus {
          background-color: #2b1c1c;
        }
        .navbar-default .navbar-toggle .icon-bar {
          background-color: #d9d7f7;
        }
        .navbar-default .navbar-collapse,
        .navbar-default .navbar-form {
          border-color: #d9d7f7;
        }
        .navbar-default .navbar-link {
          color: #d9d7f7;
        }
        .navbar-default .navbar-link:hover {
          color: #aeaeae;
        }
        
        div.dropdown-menu {
            
            backgroud-color: #424040;
            
        }
        

        @media (max-width: 767px) {
          .navbar-default .navbar-nav .open .dropdown-menu > li > a {
            color: #d9d7f7;
          }
          .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
          .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
            color: #aeaeae;
          }
          .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
          .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
          .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
            color: #aeaeae;
            background-color: #2b1c1c;
          }
        }
    </style>
</head>

<body>
    
  <nav class="navbar navbar-default">
      <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Club jeux societe ets</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="#">Nouvelles</a></li>
                <li><a href="#">Evenements</a></li>
                <li><a href="#" >Systeme de location</a></li>
                </li>
              </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown pull-right" id="login">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin"><span class="glyphicon glyphicon-user"></span> Login</a>
                    <div class="dropdown-menu" style="padding:17px;">
                      <form class="form" id="formLogin"> 
                        <input name="username" id="username" placeholder="Username" type="text"> 
                        <input name="password" id="password" placeholder="Password" type="password"><br>
                        <button type="button" id="btnLogin" class="btn">Login</button>
                      </form>
                    </div>
                  </li>
                 </ul>
            </div><!-- /.navbar-collapse --> 
        </div><!-- /.container-fluid -->
    </nav>
    <div class="row">
        <div class="col-xs-12 col-md-offset-3 col-md-6" style="background-color: #fff; min-height: 80vh;border-radius: 5px;"> 
          <?php echo $html_body ?>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="includes/javascript/jquery.js"></script> 
<script src="includes/javascript/bootstrap.min.js"></script> 
<script>
    
</script>
</html>
