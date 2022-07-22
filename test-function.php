<?php

    $text = "\t\tThese are a few words ".":) ...  ";
    $binary = "\x09Example string\x0A";
    $hello  = "Hello World";
    var_dump($text, $binary, $hello);
    
    print "\n";
    echo "<br>";
    $trimmed = rtrim($text);
    var_dump($trimmed);
    echo $trimmed;
    echo "<br>";
    $trimmed = rtrim($text, " \t.");
    var_dump($trimmed);
    echo "<br>";
    $trimmed = rtrim($hello, "Hdle");
    var_dump($trimmed);
    echo "<br>";
    // trim the ASCII control characters at the end of $binary
    // (from 0 to 31 inclusive)
    $clean = rtrim($binary, "\x00..\x1F");
    var_dump($clean);

?>