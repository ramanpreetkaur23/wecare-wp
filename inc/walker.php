<?php
class P_menu_walker extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = NULL) {
    $indent = str_repeat("\t", $depth);
    $output .=  "\n$indent<ul>\n";
  }
}
