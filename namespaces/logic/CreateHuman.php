<?php

require("Older/Person.php");
require("Younger/Person.php");

use Older\Person as old;
use Younger\Person as young;

$humano1 = new old("Maxi", 40);
$humano2 = new young("Pepe", 18);