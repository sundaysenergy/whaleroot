<?php

/*
 * add CSS class 'first' and 'last' to list items (menus, etc.)
 * http://drupal.org/node/138656
 */

function zengine_menu_tree($pid = 1) {
  if ($tree = zengine_menu_tree_improved($pid)) {
    return "\n<ul class=\"menu\">\n". $tree ."\n</ul>\n";
  }
}

function zengine_menu_tree_improved($pid = 1) {
  $menu = menu_get_menu();
  $output = '';

  if (isset($menu['visible'][$pid]) && $menu['visible'][$pid]['children']) {
    $num_children = count($menu['visible'][$pid]['children']);
    for ($i=0; $i < $num_children; ++$i) {
      $mid = $menu['visible'][$pid]['children'][$i];
      $type = isset($menu['visible'][$mid]['type']) ? $menu['visible'][$mid]['type'] : NULL;
      $children = isset($menu['visible'][$mid]['children']) ? $menu['visible'][$mid]['children'] : NULL;
      $extraclass = ($i==0) ? 'first' : ( ($i==$num_children-1) ? 'last' : '');
      $output .= theme('menu_item', $mid, menu_in_active_trail($mid) || ($type & MENU_EXPANDED) ? theme('menu_tree', $mid) : '', count($children)==0, $extraclass);
    }
  }

  return $output;
}

function zengine_menu_item($mid, $children = '', $leaf = TRUE, $extraclass = '') {
  return '<li class="'. ($leaf ? 'leaf' : ($children ? 'expanded' : 'collapsed')) . ($extraclass ? ' ' . $extraclass : '') . '">'. menu_item_link($mid, TRUE, $extraclass) . $children ."</li>\n";
}

/*
 * zengine uses theme_menu_links for primary and secondary links -- 
 * this needs modifications to add 'first' and 'last' class
 */

function zengine_menu_links($links) {
  $num = count($links);
  if ($num==0) {
    return '';
  }
  $level_tmp = explode('-', key($links));
  $level = $level_tmp[0];
  $output = "<ul class=\"links-$level\">\n";
  $i = -1;
  foreach ($links as $index => $link) {
    $i++;
    $output .= '<li';
    $classes = '';
    if (stristr($index, 'active')) {
      $classes .= 'active ';
    }
    if ($i==0) {
      $classes .= 'first ';
    }
    if ($i==($num-1)) {
      $classes .= 'last ';
    }
    if (strlen($classes)>0) {
      $output .= ' class="' . $classes . '"';
    }
    $output .= ">". l($link['title'], $link['href'], $link['attributes'], $link['query'], $link['fragment']) ."</li>\n";
  }
  $output .= '</ul>';
  return $output;
}

?>
