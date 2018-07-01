<?php
// include files
include 'inc/array/operators.php';

// print_r();

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if (isset($operators[$id])) {
        $operator = $operators[$id];
    }
}

// Variable for page name (for active links and such)
$pageTitle = "operator - ";

if (!isset($operator)) {
    header("location:index.php");
    exit;
}
$section = null;
include 'inc/header.php';
echo '<div class="operator_header_image" style="background-image:url(\'' . $operators[$id]['icon'] . '\')">';
echo '</div>';
// Search function

echo '<div class="container border-top">

  <div class="span12 op_info">

  <div class="op_header">

    <h2>' . $operators[$id]['name'] . ' - ' . $operators[$id]['fullname'] . '</h2>

    <h4>Position - ' . $operators[$id]['position'] . '</h4>

    <h4>CTU - ' . $operators[$id]['ctu'] .'</h4>

  </div>

  <div class="op_body">

    <p>' . $operators[$id]['description'] . '</p>

      <div class="abilities span12 dropdown">
      <div class="dropdown_header dropper">
      <h2>Ability</h2>
      <h1>+</h1>
      </div>
      <div class="info_holder" style="display: none">';

      echo '<h4>' . $operators[$id]['ability']['name'] . '</h4>
      <p>' . $operators[$id]['ability']['description'] . '</p>
      <img src="' . $operators[$id]['ability']['image'] . '" />';

      echo '</div>
      </div>

      <div class="weapons span12 dropdown">
      <div class="dropdown_header dropper">
      <h2>Weapons</h2>
      <h1>+</h1>
      </div>
      <div class="weapons_holder" style="display: none">';

      foreach ($operators[$id]['weapons'] as $weapon) {
        echo '<div class="weapons">
              <h2>' . $weapon['name'] . '</h2>
              <img class="weapon" src="' . $weapon['image'] . '"/>
              <p>' . $weapon['description'] . '</p>
              <div class="span12 weapon_info">
                <div class="span6-p">
                  <h6>Damage</h6>
                  <p>Normal - ' . $weapon['damage']['normal'] . '</p>
                  <p>Suppressed - ' . $weapon['damage']['suppressed'] . '</p>
                  <h6>Magazine</h6>
                  <p>' . $weapon['magazine'] . '</p>
                  <h6>Rate of Fire</h6>
                  <p>' . $weapon['rate-of-fire']. '</p>
                  <h6>Mobility</h6>
                  <p>' . $weapon['mobility'] . '</p>
                </div>
              <div class="span6-p">
                <h6>Attachments</h6>
                <p>Sights</p>
                <ul>';
                foreach ($weapon['attachments']['sights'] as $sights) {
                    echo '<li>' . $sights . '</li>';
                }
                echo '</ul>
                <p>Barrel</p>
                <ul>';
                foreach ($weapon['attachments']['barrel'] as $barrel) {
                    echo '<li>' . $barrel . '</li>';
                }
                echo '</ul>
                <p>Grip</p>
                <ul>';
                foreach ($weapon['attachments']['grip'] as $grip) {
                    echo '<li>' . $grip . '</li>';
                }
                echo '</ul>
                <p>Underbarrel</p>
                <ul>';
                foreach ($weapon['attachments']['underbarrel'] as $underbarrel) {
                    echo '<li>' . $underbarrel . '</li>';
                }
                echo '</ul>
              </div>
            </div>
              </div>';
      }

      echo '</div>
      <div class="weapons_holder" style="display: none">
      <h2>Hostage</h2>';



      echo '</div>
      </div>

  <div class="tips span12 dropdown">
  <div class="dropdown_header dropper">
  <h2>Tips</h2>
  <h1>+</h1>
  </div>
  <div class="tips_holder" style="display: none">';
  echo "<h2>Bomb</h2>";

  echo '</div>
  <div class="tips_holder" style="display: none">
  <h2>Hostage</h2>';
  echo '</div>
  </div>
        </div>

</div>

</div>

  </div>

</div>';

// Links section


// Latest additions

include 'inc/footer.php';

?>
