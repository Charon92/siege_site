<?php

// Variable for page name (for active links and such)
$pageTitle = "home";

// include files
include 'inc/array/operators.php';
include 'inc/header.php';

// All maps
?>
<div class="container flex_row">
  <div class="span12">
<?php

echo "<h2>Operators</h2>";


foreach ($operators as $id => $operator) {
        switch ($operator['ctu'])
        {
          case '707th SMB':
          echo '<div class="korea operator_container span3-m">';
          break;
          case 'GROM':
          echo '<div class="poland operator_container span3-m">';
          break;
          case 'S.D.U':
          echo '<div class="hongkong operator_container span3-m">';
          break;
          case 'G.E.O':
          echo '<div class="spain operator_container span3-m">';
          break;
          case 'S.D.F':
          echo '<div class="japan operator_container span3-m">';
          break;
          case 'BOPE':
          echo '<div class="brazil operator_container span3-m">';
          break;
          case 'Navy Seals':
          echo '<div class="seals operator_container span3-m">';
          break;
          case 'JTF':
          echo '<div class="canada operator_container span3-m">';
          break;
          case 'S.A.S':
          echo '<div class="british operator_container span3-m">';
          break;
          case 'SWAT':
          echo '<div class="swat operator_container span3-m">';
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
}

?>
</div>
</div>
<?php

?>
