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

        $bno5=array();
        $title5=array(); 
        $subt5=array(); 
        $img5=array();
        $pgofblog5=array(); 
        $sql14 = "SELECT bno,title,SUBSTRING(subtitle, 1, 50) AS subt,img,pgofblog FROM blogs WHERE pgofblog='".$_GET['getpage']."'";
        $result14 = mysqli_query($db, $sql14);
        while($row14=mysqli_fetch_assoc($result14)){
            $title5[]=$row14['title']; 
            $subt5[]=$row14['subt'];
            $img5[]=$row14['img'];
            $bno5[]=$row14['bno'];
            $pgofblog5[]=$row14['pgofblog'];
        }
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
    $edit=array();

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
        $edit[]=$row11['edit'];
    }
} 

//GET SMALL POST - RECENT
$bno3=array();
$title3=array(); 
$subt3=array(); 
$img3=array(); 
$pgofblog3=array();
$sql12 = "SELECT bno,title,SUBSTRING(subtitle, 1, 50) AS subt,img,pgofblog FROM blogs ORDER BY bno DESC";
$result12 = mysqli_query($db, $sql12);
while($row12=mysqli_fetch_assoc($result12)){
    $title3[]=$row12['title']; 
    $subt3[]=$row12['subt'];
    $img3[]=$row12['img'];
    $bno3[]=$row12['bno'];
    $pgofblog3[]=$row12['pgofblog'];
}

//GET SMALL POST - SEARCH
if (isset($_GET['getpost_sr'])){
    $bno4=array();
    $title4=array(); 
    $subt4=array(); 
    $img4=array();
    $ab='%';
    $bb='%';
    $ca=$ab.$_GET['getpost_sr'].$bb;
    $sql13 = "SELECT bno,title,SUBSTRING(subtitle, 1, 50) AS subt,img FROM blogs WHERE tags LIKE '".$ca."'";
    $result13 = mysqli_query($db, $sql13);
    while($row13=mysqli_fetch_assoc($result13)){
        $title4[]=$row13['title']; 
        $subt4[]=$row13['subt'];
        $img4[]=$row13['img'];
        $bno4[]=$row13['bno'];
    }
}

//GET SMALL POST - BY PAGE
if (isset($_GET['pgofblog'])){
    $bno5=array();
    $title5=array(); 
    $subt5=array(); 
    $img5=array();
    $pgofblog5=array(); 
    $sql14 = "SELECT bno,title,SUBSTRING(subtitle, 1, 50) AS subt,img,pgofblog FROM blogs WHERE pgofblog='".$_GET['pgofblog']."'";
    $result14 = mysqli_query($db, $sql14);
    while($row14=mysqli_fetch_assoc($result14)){
        $title5[]=$row14['title']; 
        $subt5[]=$row14['subt'];
        $img5[]=$row14['img'];
        $bno5[]=$row14['bno'];
        $pgofblog5[]=$row14['pgofblog'];
    }
}

//EDIT BLOG POST
if (isset($_GET['editp_bno'])){
    $sql15 = "SELECT * FROM blogs WHERE bno='" .$_GET["editp_bno"]. "'";
    if($result15=mysqli_query($db, $sql15)){
        while($row15=mysqli_fetch_assoc($result15)){
            $title7[]=$row15['title']; 
            $subtitle7[]=$row15['subtitle'];
            $img7[]=$row15['img']; 
            $content7[]=$row15['content'];
            $sources7[]=$row15['sources'];
            $date7[]=$row15['date'];
            $time7[]=$row15['time'];
            $author7[]=$row15['author'];
            $links7[]=$row15['links'];
            $tags7[]=$row15['tags'];
            $pgofblog7[]=$row15['pgofblog'];
            $bno7[]=$row15['bno'];
        }
    }
    else{
        header('location: editpost.php?postpicked=failed');
    }
}

//UPDATE EDITED BLOG
if(isset($_POST['editblog_btn'])){
    $title8=mysqli_real_escape_string($db, $_POST['title']);
    $subtitle8=mysqli_real_escape_string($db, $_POST['subtitle']);
    $img8=mysqli_real_escape_string($db, $_POST['img']);
    $editor8=mysqli_real_escape_string($db, $_POST['editor']);
    $sources8=mysqli_real_escape_string($db, $_POST['sources']);
    $pgofblog8=mysqli_real_escape_string($db, $_POST['pgofblog']);
    $tags8=mysqli_real_escape_string($db, $_POST['tags']);
    $author8=$_SESSION['name'];
    $links8=mysqli_real_escape_string($db, $_POST['links']);
    date_default_timezone_set("Asia/Calcutta");
    $date8=date("d/m/Y");
    $time8=date("H:i:s");
    $edit=1;
    $bno8=mysqli_real_escape_string($db, $_POST['bno']);
    $editblog_query = "UPDATE blogs SET title='$title8',subtitle='$subtitle8',img='$img8',content='$editor8',sources='$sources8',date='$date8',time='$time8',author='$author8',links='$links8',tags='$tags8',pgofblog='$pgofblog8',edit='$edit' WHERE bno='$bno8'";
    //mysqli_query($db, $addblog_query);
    if (mysqli_query($db, $editblog_query)){
      header('location: editpost.php?editblog=success');
    }
    else{
      header('location: editpost.php?editblog=failed');
    }
  }
?>
