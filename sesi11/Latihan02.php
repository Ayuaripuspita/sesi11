<?php
    $dta[0]["NAMA"] = "Ayupuspita";
    $dta[0]["TGL_LAHIR"] = "2004-01-11";
    $dta[0]["JKEL"] = "P";
    $dta[0]["NIM"] = "2201010298";
    $dta[0]["NAMA_AYAH"] = "I Wayan Mega Sunantara";

    $dta[1]["NAMA"] = "Adhityaputra";
    $dta[1]["TGL_LAHIR"] = "2003-06-18";
    $dta[1]["JKEL"] = "L";
    $dta[1]["NIM"] = "2201010298";
    $dta[1]["NAMA_AYAH"] = "I Wayan Linin Putra";

    $dta[2]["NAMA"] = "ErvinaSunari";
    $dta[2]["TGL_LAHIR"] = "2003-11-01";
    $dta[2]["JKEL"] = "P";
    $dta[2]["NIM"] = "2201010703";
    $dta[2]["NAMA_AYAH"] = "Ni Made Sukanata";

    $dta[3]["NAMA"] = "KetutMelli";
    $dta[3]["TGL_LAHIR"] = "2004-05-16";
    $dta[3]["JKEL"] = "P";
    $dta[3]["NIM"] = "2201010311";
    $dta[3]["NAMA_AYAH"] = "I Made Kadek";




    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);


