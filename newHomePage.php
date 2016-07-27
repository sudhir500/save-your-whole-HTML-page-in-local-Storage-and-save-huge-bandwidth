<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>hi this is a div. created in new home page</title>
    <!--  <script src="start.js"></script> -->
    <script src="http://code.jquery.com/jquery-1.10.2.js"> </script>
    <script src="code.js"> </script>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
<div class="a1">loop value </div>
<div class="test">test</div>
<div style="float: none; clear: both">
    <?php
    for($i=1;$i<=10;$i++){
        if(($i%3==0) && ($i%5==0)){
            echo 'order '.$i.' Pizza and burger.<br />';
        }
        else if($i%3==0){
            echo 'order '.$i.' Pizza only.<br />';
        }
        else if($i%5==0){
            echo 'order '.$i.' Burger only.<br />';
        }
        else{
            echo $i.'<br />';
        }
    }

    for($img=1;$img<=100;$img++){
        for($a=1;$a<=5;$a++) {
            echo '<img src="img/' . $a . '.png" class="avatar" >';
        }
    }
    ?>
    <input type="button" value="check" onclick="alert(123)">
    <script>
        $(window).load(function() {
            localStorage.setItem("power",$('html').html());
            console.log('power set value:'+localStorage.getItem('power'));
        });
    </script>
</div>




</body>
</html>