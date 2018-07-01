<?php
function get_item_html($id,$map) {
    $output = "<li><a href='details.php?id="
        . $id . "'><img src='"
        . $map["img"] . "' alt='"
        . $map["title"] . "' />"
        . "<p>View Details</p>"
        . "</a></li>";
    return $output;
}

function array_category($catalog,$category) {
    $output = array();

    foreach ($catalog as $id => $map) {
        if ($category == null OR strtolower($category) == strtolower($map["category"])) {
            $sort = $map["title"];
            $sort = ltrim($sort,"The ");
            $sort = ltrim($sort,"A ");
            $sort = ltrim($sort,"An ");
            $output[$id] = $sort;
        }
    }
    
    asort($output);
    return array_keys($output);
}
