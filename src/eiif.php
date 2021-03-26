<?php

/**
 * @param $imagePath
 * @return mixed | string
 */
function printCameraPicInfo($imagePath): string
{
    // Check if the variable is set and if the file itself exists before continuing
    if ((isset($imagePath)) and (file_exists($imagePath))) {
        echo "File $imagePath exists.";
        $exif = exif_read_data($imagePath, null, true);
        return  json_encode($exif);
    } else {
        return "File $imagePath not exists.";
    }
}

$img_path = "./img/jpg/gps/DSCN0042.jpg";
//$img_path = "./img/jpg/hdr/canon_hdr_YES.jpg";
//$img_path = "./img/jpg/hdr/iphone_hdr_no.jpg";
//$img_path = "./img/jpg/mobile/jolla.jpg";
//$img_path = "./img/jpg/Canon_40D.jpg";
//$img_path = "./img/jpg/Nikon_COOLPIX_P1.jpg";
//$img_path = "./img/jpg/Fujifilm_FinePix6900ZOOM.jpg";
//$img_path = "./img/jpg/xmp/no_exif.jpg";
//$img_path = "./img/jpg/xmp/BlueSquare.jpg";
//$img_path = "./img/jpg/orientation/landscape_1.jpg";

$result = printCameraPicInfo($img_path);

echo "\n\n" . $result ."\n\n";

file_put_contents("./output.json", $result);



