<?php
    $dta["NAMA"] = "Ayupuspita";
    $dta["TGL_LAHIR"] = "2004-01-11";
    $dta["JKEL"] = "P";
    $dta["NIM"] = "2201010298";
    $dta["NAMA_AYAH"] = "I Wayan Mega Sunantara";

    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);