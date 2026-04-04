<?php
    
    // Detect environment (test vs live)
    $host = $_SERVER['HTTP_HOST'];

    $is_live = (
        $host === "treedatav1.pdhtechnology.com"
    );

    $is_live_test = (
        $host === "test-treedatav1.pdhtechnology.com"
    );

    if ($is_live) {

        // Live 
        $site = "https://treedatav1.pdhtechnology.com";
        $siteTitle = "Treedata";
        $title = "Treedata";     

    } elseif ($is_live_test) {

        // Live Test
        $site = "https://test-treedatav1.pdhtechnology.com";
        $siteTitle = "LIVE TEST";
        $title = "LIVE TEST - Treedata";     

    } else {

        // Test
        $site = "http://treedatav1.test";
        $siteTitle = "LOCAL TEST";
        $title = "LOCAL TEST - Treedata";
    }

?>