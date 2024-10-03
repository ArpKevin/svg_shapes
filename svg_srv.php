<?php

$errorMSG = '<text x="5" y="5" fill="red">Hibás leírás!</text>';

// header("Content-type: image/svg+xml; charset=UTF-8");
$svgW = 500;
$svgH = 500;

print("<svg style='border: 1px solid black;' width='$svgW' height='$svgH'>");

if (isset($_GET['alakzat'])) {
    switch ($_GET['alakzat']) {
        case "rect":
            if (isset($_GET['width']) && isset($_GET['height']) && isset($_GET['x']) && isset($_GET['y'])) {
                $width = $_GET['width'];
                $height = $_GET['height'];
                $x = $_GET['x'];
                $y = $_GET['y'];
                
                $rx = $_GET['rx'] ?? 0;
                $ry = $_GET['ry'] ?? 0;

                print('<rect width="'.$width.'" height="'.$height.'" x="'.$x.'" y="'.$y.'" rx="'.$rx.'" ry="'.$ry.'" fill="blue" />');
            } else {
                print($errorMSG);
            }
            break;

        case "circle":
            if (isset($_GET['r'])) {
                $radius = $_GET['r'];

                $cx = $_GET['cx'] ?? 50;
                $cy = $_GET['cy'] ?? 50;

                print('<circle r="'.$radius.'" cx="'.$cx.'" cy="'.$cy.'" fill="red" />');
            } else {
                print($errorMSG);
            }
            break;

        case "ellipse":
            if (isset($_GET['rx']) && isset($_GET['ry'])) {
                $rx = $_GET['rx'];
                $ry = $_GET['ry'];

                $cx = $_GET['cx'] ?? 120;
                $cy = $_GET['cy'] ?? 80;

                print('<ellipse rx="'.$rx.'" ry="'.$ry.'" cx="'.$cx.'" cy="'.$cy.'" fill="green" />');
            } else {
                print($errorMSG);
            }
            break;

        default:
            print($errorMSG);
            break;
    }
} else {
    print($errorMSG);
}

print("</svg>");

?>