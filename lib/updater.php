<?php

// initializing variables
$ini = parse_ini_file('cred.ini');
$server_name=$ini['server_name'];
$db_user=$ini['db_user'];
$db_pass=$ini['db_pass'];
$db_name=$ini['db_name'];

// connect to the database
$db = mysqli_connect($server_name,$db_user,$db_pass,$db_name);

//PAGE NAME EXTRACT
$pgname=array(); 

$sql3 = "SELECT pgname FROM pagenames";
$result3 = mysqli_query($db, $sql3);
while($row3=mysqli_fetch_assoc($result3)){
    $pgname[] = $row3['pgname'];
}

//DELETE BLOG POST
if (isset($_GET['bno'])){
    $sql4 = "DELETE FROM blogs WHERE bno='" .$_GET["bno"]. "'";
    $result4 = mysqli_query($db, $sql4);
    if(mysqli_query($db, $sql4)){
        header('location: delpost.php?postdel=success');
    }
    else{
        header('location: delpost.php?postdel=failed');
    }
}

//DELETE PAGE
if (isset($_GET['pno'])){
    $sql7 = "DELETE FROM pagenames WHERE pno='" .$_GET["pno"]. "'";
    $result7 = mysqli_query($db, $sql7);
    if(mysqli_query($db, $sql7)){
        header('location: delpage.php?pagedel=success');
    }
    else{
        header('location: delpage.php?pagedel=failed');
    }
}

//DELETE USER
if (isset($_GET['uno'])){
    $sql9 = "DELETE FROM users WHERE uno='" .$_GET["uno"]. "'";
    $result9 = mysqli_query($db, $sql9);
    if(mysqli_query($db, $sql9)){
        header('location: dash.php?userdel=success');
    }
    else{
        header('location: dash.php?userdel=failed');
    }
}

//GET PAGE
if (isset($_GET['getpage'])){
    $pgname3=array(); 
    $pgdesc3=array(); 
    $pgimg3=array(); 
    $sql10 = "SELECT pgname,pgdesc,pgimg FROM pagenames WHERE pgname='".$_GET['getpage']."'";
    $result10 = mysqli_query($db, $sql10);
    while($row10=mysqli_fetch_assoc($result10)){
        $pgname3[] = $row10['pgname'];
        $pgdesc3[] = $row10['pgdesc'];
        $pgimg3[] = $row10['pgimg'];
    }
}

//GET FULL POST
if (isset($_GET['getpost'])){
    $title=array();  
    $subtitle=array(); 
    $img=array(); 
    $content=array();
    $sources=array();
    $date=array();
    $time=array();
    $author=array();
    $links=array();

    $sql11 = "SELECT * FROM blogs WHERE bno='".$_GET['getpost']."'";
    $result11 = mysqli_query($db, $sql11);
    while($row11=mysqli_fetch_assoc($result11)){
        $title[]=$row11['title']; 
        $subtitle[]=$row11['subtitle'];
        $img[]=$row11['img']; 
        $content[]=$row11['content'];
        $sources[]=$row11['sources'];
        $date[]=$row11['date'];
        $time[]=$row11['time'];
        $author[]=$row11['author'];
        $links[]=$row11['links'];
    }
} 

//GET SMALL POST - RECENT
$bno3=array();
$title3=array(); 
$subt3=array(); 
$img3=array(); 
$sql12 = "SELECT bno,title,SUBSTRING(subtitle, 1, 50) AS subt,img FROM blogs ORDER BY bno DESC";
$result12 = mysqli_query($db, $sql12);
while($row12=mysqli_fetch_assoc($result12)){
    $title3[]=$row12['title']; 
    $subt3[]=$row12['subt'];
    $img3[]=$row12['img'];
    $bno3[]=$row12['bno'];
}

?>
