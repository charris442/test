<?php
require "test.php";
  ?>
<main>
  <div id="g">    
  <?php
  if (isset($_SESSION['userUid'])) {
    echo '<p>hi</p>';
  }
else {
  echo '<p>bye</p>';
}
    ?>
  </div>
</main>
