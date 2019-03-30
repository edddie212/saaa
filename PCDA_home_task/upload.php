<!DOCTYPE html>
       <html>
       <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="style.css" rel="stylesheet" type="text/css"/>
       </head>
            <body>
<?php 
require 'color-extractor.php';

if( isset($_POST['submit']) && 
    isset($_FILES['image']) && 
    ( $_FILES['image']['type'] == 'image/png') && 
    !$_FILES['image']['error']){
        $imagePath = 'img.png';
        
        file_put_contents($imagePath, file_get_contents($_FILES['image']['tmp_name']));

        $extractor = new ColorExtractor(0, '#ffffff');
        $extractor->analyze('img.png', 0);
        $summary = $extractor->getColorSumary();
        arsort($summary);
        $keys = array_keys($summary);

        $result = "<div class='container'>";
        $result .= "<div class='res'></div>";
        $result .= "<div class='results'>";

        for($x = 0; $x < 5; $x++){
        $result .= "<p class='prgh'><span style='background: #".$keys[$x]."'>Key=" . 
        $keys[$x] . "</span>, Value=" . $summary[$keys[$x]] * 100 . '%</p>';
                        
        }
        echo $result;          
    } else {
            echo 'Image was not uploaded PNG format needed';    
            }

?>

</div></div>
</body>
</html>