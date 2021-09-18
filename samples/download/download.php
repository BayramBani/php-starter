<?php
if (isset($_POST['name']) && isset($_POST['content'])) {
   $name = $_POST["name"];
   $filename = $name . ".txt";
   header("Cache-Control: public");
   header("Content-Description: File Transfer");
   header("Cache-Control: no-store, no-cache");
   header("Content-Disposition: attachment; filename=$filename");
   header("Content-Type: application/octet-stream; ");
   header("Content-Transfer-Encoding: binary");
   echo $content = $_POST['content'];
}
?>
