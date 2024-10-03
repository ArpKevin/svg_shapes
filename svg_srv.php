<?php

$errorMSG = '<text x="5" y="5" fill="red">Hibás leírás!</text>';

// header("Content-type: image/svg+xml; charset=UTF-8");
$svgW = 500;
$svgH = 500;

print("<svg style='border: 1px solid black;' width='$svgW' height='$svgH'>");

if (isset($_GET['alakzat'])) {
    switch ($_GET['alakzat']) {
        case "rect":
            if (isset($_GET['width']) && isset($_GET['height'])) {
                $width = $_GET['width'];
                $height = $_GET['height'];
                $x = $_GET['x'] ?? ($svgW - $width) /2;
                $y = $_GET['y'] ?? ($svgH - $height) /2;
                
                $rx = $_GET['rx'] ?? 0;
                $ry = $_GET['ry'] ?? 0;
                $fill = $_GET['fill'] ?? "blue";

                print('<rect width="'.$width.'" height="'.$height.'" x="'.$x.'" y="'.$y.'" rx="'.$rx.'" ry="'.$ry.'" fill="'.$fill.'" />');
            } else {
                print($errorMSG);
            }
            break;

        case "circle":
            if (isset($_GET['r'])) {
                $radius = $_GET['r'];

                $cx = $_GET['cx'] ?? $svgW / 2;
                $cy = $_GET['cy'] ?? $svgH / 2;
                $fill = $_GET['fill'] ?? "red";

                print('<circle r="'.$radius.'" cx="'.$cx.'" cy="'.$cy.'" fill="'.$fill.'" />');
            } else {
                print($errorMSG);
            }
            break;

        case "ellipse":
            if (isset($_GET['rx']) && isset($_GET['ry'])) {
                $rx = $_GET['rx'];
                $ry = $_GET['ry'];

                $cx = $_GET['cx'] ?? $svgW / 2;
                $cy = $_GET['cy'] ?? $svgH / 2;
                $fill = $_GET['fill'] ?? "green";

                print('<ellipse rx="'.$rx.'" ry="'.$ry.'" cx="'.$cx.'" cy="'.$cy.'" fill="'.$fill.'" />');
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