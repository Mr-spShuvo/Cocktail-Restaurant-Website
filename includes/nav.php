<?php
  include('functions.php');
  foreach ($nav_list as $key => $value) {
    echo
    "<ul>
      <li> <a href='$value'>$key</a></li>
    </ul>";
  }


?>
