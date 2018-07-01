<?php

// Variable for page name (for active links and such)
$pageTitle = "allMaps";

// include files
include 'inc/array/maps.php';
include 'inc/header.php';

// All maps
?>
<div class="container flex_row">
  <div class="span12">
<?php

echo "<h2>Maps</h2>";


foreach ($maps as $id => $map) {
  echo "<div class='map_container span3-m'>
        <img class=\"map\" src=\"" . $map['icon'] . "\" />
        <a href='map.php?id=" . $id . "'>
        <div class='overlay'>
          <h4>" . $map['title'] . "</h4>
        </div>
        </a>
        </div>";
}

?>
</div>
</div>
<?php

?>
