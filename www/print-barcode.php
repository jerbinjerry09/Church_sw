<?php
include('header.php');
include('db_info.php');


$results = $db->query("SELECT id,family_id,place,family_head from family_list ");
?>

<?php
while ($row = $results->fetchArray()) {
    echo '<div class="col-lg-1"><h5>'.$row['family_head'].'</h5>'.$row['place'].'</br><img alt="'.$row['family_id'].'-0" src="/controls/barcode.php?codetype=Code39&size=40&text='.$row['family_id'].'-0&print=true" /></div>';
}


?>

