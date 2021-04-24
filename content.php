<!DOCTYPE html>
<html>
<head>
	<title>Test 2</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/stylecontent.css">
</head>
<body>
    <div class="drapped"></div>
        <header class="header">
            <?php
            include("header.php");
            ?>


        </header>
    
        <center>
        <div class="banner">
            <!-- <img name="slide" width="100%" height="500px"> -->
            <!-- <div class="banner_img" >
                <img src="bannerip.png" >
            </div>

            <div class="banner_img">
                <img src="bannerip2.png">
            </div>

            <div class="banner_img">
                <img src="bannerip3.png">
            </div> -->
        </div>
        </center>
        
        <div class="nav">
            <center>
            <ul>
                <li class="nav-item">
                    <a href="content.php" class="nav-item-link">prev</a>
                </li>
                <li class="nav-item">
                    <a href="content.php" class="nav-item-link">1</a>
                </li>
                <li class="nav-item">
                    <a href="content.php" class="nav-item-link">2</a>
                </li>
                <li class="nav-item">
                    <a href="content.php" class="nav-item-link">3</a>
                </li>
                <li class="nav-item">
                    <a href="content.php" class="nav-item-link">4</a>
                </li>
                <li class="nav-item">
                    <a href="content.php" class="nav-item-link">5</a>
                </li>
                <li class="nav-item">
                    <a href="content.php" class="nav-item-link">next</a>
                </li>
            </ul>
        </center>

        </div>


        <div class="grid">
            <a href="#" class="griditem grid_item1" >
                <!-- <img class="item1" src="ip12.png"> -->
            </a>
            <a href="#" class="griditem grid_item2">item2</a>
            <a href="#" class="griditem grid_item3">item3</a>
            <a href="#" class="griditem grid_item4">item4</a>
            <a href="#" class="griditem grid_item5">item5</a>
            <a href="#" class="griditem grid_item6">item6</a>
            <a href="#" class="griditem grid_item7">item7</a>
            <a href="#" class="griditem grid_item8">item8</a>
            <a href="#" class="griditem grid_item9">item9</a>
        </div>
        <!-- <div class="grid2">
            <a href="#" class="griditem2 grid_item1">item1</a>
            <a href="#" class="griditem2 grid_item2">item2</a>
            <a href="#" class="griditem2 grid_item3">item3</a>
        </div>
        <div class="grid3">
            <a href="#" class="griditem3 grid_item1">item1</a>
            <a href="#" class="griditem3 grid_item2">item2</a>
            <a href="#" class="griditem3 grid_item3">item3</a>
        </div> -->

    </div>
</body>
</html>
<script>
    var i=0;
    var images=[3];
    var time =2000;

    images[0]='bannerip.jpg';
    images[1]='bannerip2.jpg';
    images[2]='bannerip3.jpg';

    function changeImages(){
        document.slide.src=images[i];

        if(images.length -1 ){
            i++;

        }
        else{
            i=0;
        }
        setTimeout("changeImages()",time);
    }
    window.onload=changeImages;
</script>

