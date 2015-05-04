<?php
// include(app_path().'/includes/common.php');

use App\includes;

// check if current page matches var and add active class to current menu item
$active_index = addActive('index', $page);
$active_about = addActive('about', $page);
$active_contact = addActive('contact', $page);
$active_gallery = addActive('gallery', $page);

?>

<header class="header">
    <!-- <h2 class="logo">RJC</h2> -->
    <img src="{{asset('images/logo3.png')}}" alt="RC logo" class="logo-img">
    <h1 class="title"><a href="{{ URL::to('/') }}">REBECCA CORDINGLEY DESIGNS</a></h1>

    <ul class="s-m-i">
        <li><a href="http://www.twitter.com/rjcordingley" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.pinterest.com/beccordingley/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
        <li><a href="https://instagram.com/rebeccacdesigns/" target="_blank"><i class="fa fa-instagram"></i></a></li>
    </ul>
    <div class="clear"></div>
    <nav class="nav">

        <ul class="menu">
            <li class="menu-item"><a <?php echo $active_index ?> href="{{URL::to('/')}}">HOME</a></li> |
            <li class="menu-item"><a <?php echo $active_about ?> href="{{ URL::to('about') }}">ABOUT</a></li> |
            <li class="menu-item"><a $class href="http://www.etsy.com" target="_blank">ETSY</a></li> |
            <li class="menu-item">SHOP</li> |
            <li class="menu-item"><a <?php echo $active_gallery ?>href="{{ URL::to('gallery') }}">GALLERY</a></li> |
            <li class="menu-item"><a <?php echo $active_contact ?> href="{{URL::to('contact') }}">CONTACT</a></li> |
            <li class="menu-item">WEB DEVELOPMENT</li>
        </ul>
    </nav>

    <!-- <h1 class="title"><a href="{{ URL::to('/') }}">REBECCA CORDINGLEY DESIGNS</a></h1> -->

</header>
