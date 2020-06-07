<?php 


if(!empty($_GET['status']))
{
    $param = $_GET['status'];
    if($param == "on")
    {
        header("Location: https://www.google.com/");
    }
    elseif($param == "off")
    {
        header("Location: https://www.amazon.in/");  
    }
    else{
        echo "hello";
    }
}
else{
    echo "hello";
}


?>
