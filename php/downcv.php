<?php
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="mohamed.pdf"');
readfile('my_cv.pdf');
?>