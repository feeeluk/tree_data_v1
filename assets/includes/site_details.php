<?php
    
    // Detect environment (test vs live)
    $host = $_SERVER['HTTP_HOST'];

    $is_live = (
        $host === "treedatav1.pdhtechnology.com"
    );

    if ($is_live) {

        // Live 
        $site = "https://treedatav1.pdhtechnology.com";
        $siteTitle = "Treedata";
        $title = "Treedata";     

    } else {

        // Test
        $site = "http://treedatav1.test";
        $siteTitle = "Treedata";
        $title = "TEST Treedata";
    }

?>