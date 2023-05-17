<?php
function showUpdatedAtAttribute($carbon, $format = "l, d F Y H:i"){
    return $carbon->translatedFormat($format);
}
?>