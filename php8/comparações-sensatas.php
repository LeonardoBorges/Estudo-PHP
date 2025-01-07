<?php
    
    echo ' 0 == "0": ' . (0 == "0"); //php 7 = true   php 8 = true
    echo "<br>";
    echo ' 0 == "0.0": ' . (0 == "0.0"); //php 7 = true   php 8 = true 
    echo "<br>";
    echo ' 0 == "test": ' . (0 == "test"); //php 7 = true   php 8 = false
    echo "<br>";
    echo ' 0 == "": ' . (0 == ""); //php 7 = true   php 8 = false
    echo "<br>";
    echo ' 50 == "   50": ' . (50 == "   50"); //php 7 = true   php 8 = true
    echo "<br>";
    echo ' 50 == "50test": ' . (50 === '50test'); //php 7 = true   php 8 = false 
?>