<?php 

if(!empty($_GET['status']))
{
    $param = $_GET['status'];
    if($param == "on")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "https://www.google.com/";
        fwrite($myfile, $txt);
        fclose($myfile);
    }
    elseif($param == "off")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "";
        fwrite($myfile, $txt);
        fclose($myfile); 
    }
    else{
        echo "error";
    }
}
else{
    echo "error";
}

?>
