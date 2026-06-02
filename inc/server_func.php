<?php
if (isset($_GET["file"])){
if (file_exists($_GET["file"])){
unlink($_GET["file"]);
echo 1;
}else{
echo 0;
}
}else{
echo 2;
}
?>