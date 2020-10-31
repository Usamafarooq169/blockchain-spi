<?php

       $f="5f1945d963dc38.58369688.docx";   

       $file = ("uploads/$f");

       $filetype=filetype($file);

       $filename=basename($file);

       header ("Content-Type: ".$filetype);

       header ("Content-Length: ".filesize($file));

       header ("Content-Disposition: attachment; filename=".$filename);

       readfile($file);

  ?>	