<!--
check if current page matches var and add active class to current menu item
called in header.blade.php
each view contains $page var, eg
<?php $page //= 'contact'; ?>
active class is added to menu item:
<li class="menu-item"><a <?php //echo $active_index ?> href="{{URL::to('/')}}">HOME</a></li>
-->

<?php

function addActive($title, $page) {
    return $class = ($page == $title) ? 'class="active"' : '';
}


?>
