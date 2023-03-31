<?php
/**
 * Template part for displaying the header title section
 */
?>

<div class="title-block text-center relative m-auto p-5 grey-1">
    <p class="breadcrumbs mb-0">
        <a href="index.html" class="breadcrumb naked grey-1 uppercase txt-2">Home</a>
        <span class="seperator grey-1 uppercase txt-2 mx-1">></span>
        <span href="" class="breadcrumb grey-1 uppercase txt-2">Blog</span>
    </p>
    <hr class="title-border" />
    <?php 
        voyager_hero_title(); 
        voyager_hero_description(); 
    ?>
</div>