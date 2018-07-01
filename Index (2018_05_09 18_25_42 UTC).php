<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

// Variable for page name (for active links and such)
$pageTitle = "home";

// include files
include 'inc/array/maps.php';
include 'inc/array/operators.php';
include 'inc/header.php';

// Search function


// All maps
?>
<div class="container flex_row">
  <div class="span12">
<?php

echo "<h2>Maps</h2>";

$maps_num = 0;

foreach ($maps as $id => $map) {
  echo "<div class='map_container span3-m'>
        <img class=\"map\" src=\"" . $map['icon'] . "\" />
        <a href='map.php?id=" . $id . "'>
        <div class='overlay'>
          <h4>" . $map['title'] . "</h4>
        </div>
        </a>
        </div>";
        $maps_num ++;
        if ($maps_num >= 4) {
          echo '<a href="/all-maps.php">
          <div class="span2 main-button">View all maps</div>
          </a>';
          break;
        }
};

?>
</div>
</div>

<div class="container flex_row">
  <div class="span12">
<?php

echo "<h2>Operators</h2>";

$operators_num = 0;

foreach ($operators as $id => $operator) {
        switch ($operator['ctu'])
        {
          case '707th SMB':
          echo '<div class="korea operator_container span3-m">';
          break;
          case 'GROM':
          echo '<div class="poland operator_container span3-m">';
          break;
          default:
          echo '<div class="operator_container span3-m">';
          break;
        }
        echo "<img class=\"operator\" src=\"" . $operator['icon'] . "\" />
        <a href='operator.php?id=" . $id . "'>
        <div class='overlay'>
          <h4>" . $operator['name'] . "</h4>
        </div>
        </a>
        </div>";
        $operators_num ++;
        if ($operators_num >= 4) {
          echo '<a href="/all-operators.php">
          <div class="span2 main-button">View all operators</div>
          </a>';
          break;
        }
}

?>
</div>
</div>
<?php

// Links section


// Latest additions

?>
