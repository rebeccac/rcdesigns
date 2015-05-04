<?php
function addActive($title, $page) {
    return $class = ($page == $title) ? 'class="active"' : '';
}

 ?>
