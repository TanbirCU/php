<!-- PHP Date_add, Date_sub & Date_modify Function -->
<?php
$date=date_create("2023-05-15");
date_add($date,date_interval_create_from_date_string("10days"));

echo date_format($date,"d-m-y");


?>