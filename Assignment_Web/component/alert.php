<?php
if(isset($_GET['alert'])){
    echo '<script type="text/javascript">alert("'.$_GET['alert'].'");</script>';
}