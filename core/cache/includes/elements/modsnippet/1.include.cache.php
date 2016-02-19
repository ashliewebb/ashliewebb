<?php
if (empty($file))
    return 'set the file name';
if (!file_exists(realpath($file)))
    return 'Missing the file ' . $file;
include $file;
return;
return;
