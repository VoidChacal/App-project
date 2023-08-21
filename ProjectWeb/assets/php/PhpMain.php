<?php
function HeaderEcho($Title, $assets, $itemPlus) {
		$res = '
			<!DOCTYPE html>
			<html>
			<head>
		';
	
		if (is_array($assets)) {
			foreach ($assets as $asset) {
				$type = $asset[0];
				$link = $asset[1];
				$extra = isset($asset[2]) ? $asset[2] : null;
	
				if ($type == 0) {
					$res .= '<meta ' . $link . '>';
				} elseif ($type == 1) {
					$res .= '<link rel="stylesheet" type="text/css" href="' . $link . '"';
					if ($extra !== null) {
						$res .= ' ' . $extra;
					}
					$res .= '>';
				} elseif ($type == 2) {
					$res .= '<script src="' . $link . '"';
					if ($extra !== null) {
						$res .= ' ' . $extra;
					}
					$res .= '></script>';
				}
			}
		}
	
		$res .= '
				<link rel="shortcut icon" href="'.$itemPlus.'">
				<title>'.$Title.'</title>
			</head>
		';
	
		echo $res;
	}



function mensage($txt){
    echo '<script>alert("'.$txt.'");</script>';
}

function upFileinPage($Files, $PastSaves) {
    $Ret = array();
    
    for ($i = 0; $i < count($PastSaves); $i++) {
        $directory = dirname(__DIR__) . '/' . $PastSaves[$i];
        
        if (!is_dir($directory)) {
            mkdir($directory, 0777, true);
        }
        
        $file = $Files[$i];
        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileDate = date('YmdHis');
        
        $newFileName = $fileName . $fileSize . $fileDate;
        $destination = $directory . '/' . $newFileName;
        
        move_uploaded_file($file['tmp_name'], $destination);
        
        $Ret[] = $destination;
    }
    
    return $Ret;
}



function footEcho(){
    $res = '
        </html>
    ';
    echo($res);
}
?>
