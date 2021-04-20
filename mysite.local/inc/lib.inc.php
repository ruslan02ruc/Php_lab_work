<?php
function drawTable($cols, $rows, $color)
{
  echo '<table border="1">';
  for ($tr = 1; $tr <= $rows; $tr++) {
    echo '<tr>';
    for ($td = 1; $td <= $cols; $td++) {
      if ($tr === 1 || $td === 1) {
        echo '<th align="center" style="color:black;background-color:#07db83;">' . '<b>' . $tr * $td . '</b>' . '</th>';
      } else {
        echo '<td style="color:black;background-color:' . $color . ';">' . $tr * $td . '</td>';
      }
    }
    echo '</tr>';
  }
  echo '</table>';
}
function drawMenu($menu, $vertical = true)
{
  if ($vertical === false) {
    echo '<style type="text/css">
      #content
      {
        padding-top: 130px;
        margin-left: 2em;
      } 
      #nav{
        width: 1400px;
      } 
      #nav li{
        margin-right: 50px;
      }
      #nav ul{
        display: inline-flex;
        padding-left: 350px; 
      }
      #nav h2{
        text-align: center;
      }
      
    </style>';
    echo '<ul>';
    foreach ($menu as $key => $value) {
      echo '<li><a href=' . $menu[$key]['href'] . '>' . $menu[$key]['link'] . '</a></li>';
    }
    echo "</ul>";
  } else {
    echo "<ul>";
    foreach ($menu as $key => $value) {
      echo '<li><a href=' . $menu[$key]['href'] . '>' . $menu[$key]['link'] . '</a></li>';
    }
    echo "</ul>";
  }
}
