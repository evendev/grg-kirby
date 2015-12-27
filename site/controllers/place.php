<?php 

return function ($site, $pages, $page) {

    go($page->parent()->url() . '#' . $page->uid());

};