<?php
header('Content-type: text/xml');
?>
<Response>
    <Dial callerId="+12074894282"><?php  echo $_POST['To'];?></Dial>
</Response>
