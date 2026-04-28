<?php
    
    // Detect environment (test vs live)
    $host = $_SERVER['HTTP_HOST'];

    $is_live = (
        $host === "treedatav1.pdhtechnology.com"
    );

    $is_test = (
        $host === "test-treedatav1.pdhtechnology.com"
    );

    if ($is_live) {

        // Live 
        $site = "https://treedatav1.pdhtechnology.com";
        $siteTitle = "Treedata";
        $title = "Treedata";     

    } elseif ($is_test) {

        // Test
        $site = "https://test-treedatav1.pdhtechnology.com";
        $siteTitle = "TEST";
        $title = "TEST - Treedata";     

    } else {

        // Local
        $site = "http://treedatav1.test";
        $siteTitle = "LOCAL";
        $title = "LOCAL - Treedata";
    }

?>