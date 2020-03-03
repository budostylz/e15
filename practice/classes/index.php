<?php
// Require the file that includes our Catalog class
require('Catalog.php');

# Instantiate a new object instance of the Catalog class
$catalog = new Catalog();

# Access a property
var_dump($catalog->products); 

# Access a method
var_dump($catalog->getByid(1));