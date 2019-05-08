<?php include('../model/updateDatabase.php'); ?>

<?php
if (isset($_FILES['img']) && !empty($_FILES['img'])) {
    $proID = getNewestProID();
    $no_files = count($_FILES["img"]['name']);
    for ($i = 0; $i < $no_files; $i++) {
        if ($_FILES["img"]["error"][$i] > 0) {
            echo "Error: ".$_FILES["img"]["error"][$i]."<br>";
        } else {
            if (file_exists('../../../images/product/'.$proID."/".$_FILES["img"]["name"][$i])) {
                echo 'File already exists : ../../images/product/'.$_FILES["img"]["name"][$i];
            } else {
                $dir = '../../../images/product/'.$proID."/";
                if (!file_exists($dir)) {
                    mkdir('../../../images/product/'.$proID, 0777);
                }
                $newname = date('YmdHis',time()).mt_rand().'.jpg';
                move_uploaded_file($_FILES["img"]["tmp_name"][$i], '../../../images/product/'.$proID."/".$newname);
                // $new_name = $proID."_".$i.".png";
                // rename ('../../../images/product/'.$_FILES["img"]["name"][$i], '../../../images/product/'.$new_name);
                addImg($proID, '/images/product/'.$proID."/".$newname);
            }
        }
    }
}
?>