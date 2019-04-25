<?php include('../model/updateDatabase.php'); ?>

<?php
echo 1;
if (isset($_FILES['img']) && !empty($_FILES['img'])) {
    $proID = getNewestProID();
    $no_files = count($_FILES["img"]['name']);
    for ($i = 0; $i < $no_files; $i++) {
        if ($_FILES["img"]["error"][$i] > 0) {
            echo "Error: ".$_FILES["img"]["error"][$i]."<br>";
        } else {
            if (file_exists('../../../images/product/'.$_FILES["img"]["name"][$i])) {
                echo 'File already exists : ../../images/product/'.$_FILES["img"]["name"][$i];
            } else {
                move_uploaded_file($_FILES["img"]["tmp_name"][$i], '../../../images/product/'.$_FILES["img"]["name"][$i]);
                $new_name = $proID."_".$i.".png";
                rename ('../../../images/product/'.$_FILES["img"]["name"][$i], '../../../images/product/'.$new_name);
                // addImg($proID, '/../images/product/'.$new_name);
                echo 'File successfully uploaded : ../../../images/product/'.'../../../images/product/'.$new_name.' ';

            }
        }
    }
}
?>