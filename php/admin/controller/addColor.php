<?php include('../model/updateDatabase.php'); ?>

<?php
if (isset($_FILES['color']) && !empty($_FILES['color'])) {
    if(isset($_POST['proID'])){
        $proID = $_POST['proID'];    
    }
    else{
        $proID = getNewestProID();
    }
    $no_files = count($_FILES["color"]['name']);
    for ($i = 0; $i < $no_files; $i++) {
        if ($_FILES["color"]["error"][$i] > 0) {
            echo "Error: ".$_FILES["color"]["error"][$i]."<br>";
        } else {
            if (file_exists('../../../images/product/'.$proID."/color/".$_FILES["color"]["name"][$i])) {
                echo 'File already exists : ../../images/product/'.$_FILES["color"]["name"][$i];
            } else {
                $dir = '../../../images/product/'.$proID."/";
                if (!file_exists($dir)) {
                    mkdir('../../../images/product/'.$proID, 0777);
                }
                $color_dir = $dir.'color/';
                if (!file_exists($color_dir)) {
                    echo $color_dir;
                    mkdir('../../../images/product/'.$proID.'/color', 0777);
                }
                $newname = date('YmdHis',time()).mt_rand().'.jpg';
                move_uploaded_file($_FILES["color"]["tmp_name"][$i], '../../../images/product/'.$proID."/color/".$newname);
                // $new_name = $proID."_".$i.".png";
                // rename ('../../../images/product/'.$_FILES["img"]["name"][$i], '../../../images/product/'.$new_name);
                addColor($proID, '/images/product/'.$proID."/color/".$newname);
            }
        }
    }
}
?>