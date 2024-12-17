<?php

if(isset($_SESSION['order']) && $_SESSION['order']=='success'){
    $msg = tr("Your order was successfully sent!");

    echo "<div class='order-success d-none d-lg-block'>
        {$msg}
    </div>
    <div class='order-success s-mobile d-lg-none d-block'>
        {$msg}
    </div>";
    
   $_SESSION['order'] = "";
}


?>