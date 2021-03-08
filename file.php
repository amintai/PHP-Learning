<?php 

    $myFile = fopen("sample.txt","r") or die("Unable to open file!");
    $size = filesize("sample.txt");
    //$newFile = fopen("new.txt","w") or die("Unable to open file!");
    
    //1 fread() : reads the whole content of a file 
    //echo fread($myFile,$size);


    //2 fgets() : read the first line of the file
   // echo fgets($myFile);
   // echo "<br><br><h1>".$size.'KB';

   //3 feof() : read file until the end of it "end-of-file"
    // useful for looping through the content of the file 
   //3 fclose() : close the entire file
    
    // $txt = "John Wick";
    // fwrite($newFile,$txt);
    // $txt = "John Wick";
    // fwrite($newFile,$txt);
    
    // while(!feof($myFile)){
    //     echo fgets($myFile).'<br>';
    // }
    
    
    // get the current directory
    echo getcwd() . "<br>";
    
    // to change current directory
    //chdir("abc") or die("Sorry");

    //echo getcwd() . "<br>"; 

    // change root directory
    chroot("/php/assignment");
    
    echo getcwd();
    fclose($newFile);
    






?>