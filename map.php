<?php
// include files
include 'inc/array/maps.php';
include 'inc/array/tips.php';

// print_r();

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if (isset($maps[$id])) {
        $map = $maps[$id];
    }
}

// Variables for tips
$game_type = $tips[$id]['defence'];
$bomb_locs = $tips[$id]['defence']['bomb']['locations'];
$hostage_locs = $tips[$id]['defence']['hostage']['locations'];

// Variable for page name (for active links and such)
$pageTitle = "map - ";

if (!isset($map)) {
    header("location:index.php");
    exit;
}
$section = null;
include 'inc/header.php';
echo '<div class="header_image" style="background-image:url(\'' . $maps[$id]['fullimage'] . '\')">';
echo '</div>';
// Search function

echo '<div class="container">

  <div class="span12 map_info">

  <div class="map_header">

    <h2>' . $maps[$id]['title'] . '</h2>

    <h4>Location - ' . $maps[$id]['location'] . '</h4>

    <h4>CTU - ' . $maps[$id]['ctu'] .'</h4>

  </div>

  <div class="map_body">

    <p>' . $maps[$id]['description'] . '</p>

      <div class="floors span12 dropdown">
      <div class="dropdown_header dropper">
      <h2>Floorplans</h2>
      <h1>+</h1>
      </div>
      <div class="info_holder" style="display: none">';
        foreach ($maps[$id]['floors'] as $floor) {
          echo '<div class="floor">
                <h2>' . $floor['title'] . '</h2>
                <img class="floorplan" src="' . $floor['floorplan'] . '"/>
                </div>';
        }
      echo '</div>
      </div>

      <div class="tips span12 dropdown">
      <div class="dropdown_header dropper">
      <h2>Tips</h2>
      <h1>+</h1>
      </div>
      <div class="tips_holder" style="display: none">';
      echo "<h2>Bomb</h2>";
        foreach ($bomb_locs as $locs) {
          echo '<div class="tip dropdown">
                  <div class="dropdown_header low_dropper">
                    <h2>' . $locs['title'] . ' - Hiding Spots</h2>
                    <h1>+</h1>
                  </div>
                <ul class="hidden" style="display: none">';
                foreach ($locs['hiding_spots'] as $hiding_spots) {
                  echo '<li>' . $hiding_spots . '</li>';
                };
                echo '</ul>
                </div>';
        }
      echo '</div>
      <div class="tips_holder" style="display: none">
      <h2>Hostage</h2>';
        foreach ($hostage_locs as $locs) {
          echo '<div class="tip dropdown">
                  <div class="dropdown_header low_dropper">
                    <h2>' . $locs['title'] . ' - Hiding Spots</h2>
                    <h1>+</h1>
                  </div>
                <ul class="hidden" style="display: none">';
                foreach ($locs['hiding_spots'] as $hiding_spots) {
                  echo '<li>' . $hiding_spots . '</li>';
                };
                echo '</ul>
                </div>';
        }
      echo '</div>
      </div>
            </div>

  </div>

  </div>

</div>';

// Links section


// Latest additions

include 'inc/footer.php';

?>
