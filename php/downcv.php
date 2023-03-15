<?php
header('Content-type: application/png');
header('Content-Disposition: attachment; filename="mohamedalaaCV.pdf"');
readfile('my_cv.pdf');
?>