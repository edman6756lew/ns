<?php 

if(!empty($_GET['status']))
{
    $param = $_GET['status'];
    if($param == "website")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "https://www.google.com/";
        fwrite($myfile, $txt);
        fclose($myfile);
    }
    elseif($param == "actnor")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "https://actnor.herokuapp.com";
        fwrite($myfile, $txt);
        fclose($myfile); 
    }
    elseif($param == "actmca")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "https://actmca.herokuapp.com";
        fwrite($myfile, $txt);
        fclose($myfile); 
    }
    elseif($param == "actoff")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "https://actoff.herokuapp.com";
        fwrite($myfile, $txt);
        fclose($myfile); 
    }
    elseif($param == "actyou")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "https://actyou.herokuapp.com";
        fwrite($myfile, $txt);
        fclose($myfile); 
    }
    elseif($param == "actrok")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "";
        fwrite($myfile, $txt);
        fclose($myfile); 
    }
    elseif($param == "logtel")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "";
        fwrite($myfile, $txt);
        fclose($myfile); 
    }
    elseif($param == "logpog")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "";
        fwrite($myfile, $txt);
        fclose($myfile); 
    }
    elseif($param == "logaol")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "";
        fwrite($myfile, $txt);
        fclose($myfile); 
    }
    elseif($param == "mx")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "";
        fwrite($myfile, $txt);
        fclose($myfile); 
    }
    elseif($param == "actweb")
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
