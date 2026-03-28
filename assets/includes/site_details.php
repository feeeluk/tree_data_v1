<?php
    
    // Detect environment (test vs live)
    $host = $_SERVER['HTTP_HOST'];

    $is_live = (
        $host === "treedata.pdhtechnology.com"
    );

    if ($is_live) {

        // Live 
        $site = "https://treedata.pdhtechnology.com";
        $siteTitle = "Treedata";
        $title = "Treedata";     

    } else {

        // Test
        $site = "http://treedata.test";
        $siteTitle = "Treedata";
        $title = "TEST Treedata";
    }

?>