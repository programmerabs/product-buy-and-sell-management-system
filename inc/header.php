<?php 
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login']==false || $_SESSION['sid'] != session_id() ||   $_SESSION['loginrole']!='admin'){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>        
    <title>Meditory</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="icon" type="image/ico" href="favicon.ico">    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css">
    
    <script type='text/javascript' src='js/plugins/jquery/jquery.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/globalize.js'></script>    
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src='js/plugins/uniform/jquery.uniform.min.js'></script>
    <script type='text/javascript' src='js/plugins/datatables/jquery.dataTables.min.js'></script>
    <script type='text/javascript' src='js/plugins/knob/jquery.knob.js'></script>
    <script type='text/javascript' src='js/plugins/sparkline/jquery.sparkline.min.js'></script>
    <script type='text/javascript' src='js/plugins/flot/jquery.flot.js'></script>     
    <script type='text/javascript' src='js/plugins/flot/jquery.flot.resize.js'></script>
    
    <script type='text/javascript' src='js/plugins.js'></script>    
    <script type='text/javascript' src='js/actions.js'></script>    
    <script type='text/javascript' src='js/charts.js'></script>
    <script type='text/javascript' src='js/settings.js'></script>
    
</head>
<body class="bg-img-num1" data-settings="open"> 
    
    <div class="container">        
        <div class="row">                   
            <div class="col-md-12">
                
                 <nav class="navbar brb" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-reorder"></span>                            
                        </button>                                                
                        <a class="navbar-brand" href="index.php"><h1>Meidtory</h1></a>                                                                                     
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">                                     
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="index.php">
                                    <span class="icon-home"></span> dashboard
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-pencil"></span>Product</a>
                                <ul class="dropdown-menu">
                                <li><a href="addProduct.php">Add Product</a></li>                                
                                    <li><a href="Product.php">List</a></li>
                                    
                                </ul>                                
                            </li> 
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-pencil"></span> Supplier</a>
                                <ul class="dropdown-menu">                                    
                                    <li><a href="addSupplier.php">Add Supplier</a></li>
                                    <li><a href="Supplier.php">List</a></li>
                                </ul>                               
                            </li>                        
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-pencil"></span> Customer</a>
                                <ul class="dropdown-menu">                                    
                                    <li><a href="addCustomer.php">Add Customer</a></li>
                                    <li><a href="Customer.php">List</a></li>
                                    <li><a href="form_files.html">Delete</a></li>
                                </ul>                               
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-pencil"></span>Sales</a>
                                <ul class="dropdown-menu">                                    
                                    <li><a href="saleProduct.php">Sale Product</a></li>
                                    <li><a href="form_editors.html">View</a></li>
                                    <li><a href="form_files.html">Delete</a></li>
                                </ul>                                
                            </li> 
                                              
                            <li><a href="report.html"><span class="icon-globe"></span> Report</a></li>                       
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="search..."/>
                            </div>                            
                        </form>                                            
                    </div>
                </nav>                

            </div>            
        </div>