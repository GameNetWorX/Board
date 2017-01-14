<?php
$title = null;
$id = 0;
$htmlDIV = '';

function __getCategories() {
    global $db;
    $sql = $db->__query("SELECT * FROM kategorie");
    while($row = $db->__fetchArray($sql)) {
        $title = $row['Title'];
        $id = $row['CatID'];
        $htmlDIV = '<div class="container">';
        $htmlDIV .= '<div class="row">';
        $htmlDIV .= '<div class="col-md-12">';
        $htmlDIV .= '<div class="panel panel-primary">';
        $htmlDIV .= '<div class="panel-heading">'.$title.'</div>';
        
        $sql2 = $db->__query("SELECT * FROM foren WHERE CatID = '{$id}'");
        $count = $db->__numRows($sql2);
        
        if($count > 0) {
            while($f = $db->__fetchArray($sql2)) {
                $htmlDIV .= '<div class="panel-body">';
                $htmlDIV .= '<div class="col-md-5">'.$f['Title'].'</div>';
                $htmlDIV .= '<div class="col-md-2"></div>';
                $htmlDIV .= '<div class="col-md-4"></div>';
                $htmlDIV .= '</div>';
            }
        } else {
            $htmlDIV .= '<div class="panel-body">';
            $htmlDIV .= '<div class="col-md-5"></div>';
            $htmlDIV .= '<div class="col-md-2">keine Foren vorhanden</div>';
            $htmlDIV .= '<div class="col-md-4"></div>';
            $htmlDIV .= '</div>';
        }
        
        $htmlDIV .= '</div>';
        $htmlDIV .= '</div>';
        $htmlDIV .= '</div>';
        $htmlDIV .= '</div>';
        echo $htmlDIV;
    }
}
?>