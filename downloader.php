<?php
$path = 'backup-10.2.2018_09-09-05_ketab.tar.gz';
$url = 'http://http://example.com/backup.tar.gz/';
$newfname = $path;
echo 'Starting Download!
';
$file = fopen ($url, "rb");
if($file) {
$newf = fopen ($newfname, "wb");
if($newf)
while(!feof($file)) {
fwrite($newf, fread($file, 1024 * 50 ), 1024 * 50 );
echo '1 MB File Chunk Written!
';
}
} if($file) {
fclose($file);
}
if($newf) {
fclose($newf);
}
echo 'Finished!';
?>
