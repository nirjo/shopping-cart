<?php require('connection.php');?>
 
<html>
<head>
<title>Simple PHP Shopping Cart</title>
 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<link  type="text/css" rel="stylesheet" href="css/style.css"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<header>

<nav class="navbar navbar-expand-md ">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html"><img src="img/log2.png" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item m-auto">
                        <a class="nav-link active a1" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a1" href="category.html">New arrivals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a1" href="product.html">Mens</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link a1" href="contact.html">Womens<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link a1 " href="contact.html">Children</a>
                    </li>
                </ul>
    
                <form class="form-inline my-2 my-lg-0">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                        <div class="input-group-append">
                            <button type="button" class="btn btn1">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <a class="btn btn-success btn-sm ml-3" href="cart.html">
                        <i class="fa fa-shopping-cart"></i> Cart
                        <span class="badge">3</span>
                    </a>
                </form>
            </div>
       
    </nav>
</header>
	
