<html
<head>
<meta charset="utf-8">
<title>localStorage via server</title>

<style>
    .a1, .test{
        height:200px;
        width:350px;
        float:left;
        margin:10px;
        padding:10px;
        background:#E9E9E9;
        border:1px solid #9F9F9F;
    }
</style>

<script>
    $(document).ready(function(){
        total='';
        for(var a=0;a<=10;a++){
            if(a==0){
                total=total+''+a;
            }
            else{
                total=total+', '+a;
            }
        }
        $('.a1').html(total);
        alert(5);
    });
</script>
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
    ?>
    <input type="button" value="check" onclick="alert(123)">
</div>

<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
<script src="code.js"></script>
</body>
</html>