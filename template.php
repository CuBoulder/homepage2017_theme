<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 *
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

 /**
 * Implements hook_preprocess_html().
 */
function homepage2017_theme_preprocess_html(&$vars) {



  // SET BANNER COLOR (banner-white, banner-light, banner-cumodern, banner-black)
  $banner_color = theme_get_setting('banner_color', 'homepage2017_theme') ? theme_get_setting('banner_color', 'homepage2017_theme') : 'black';
  //$banner_color = 'light';
  $vars['classes_array'][]='banner-' . $banner_color;
  $layout = theme_get_setting('layout_style', 'homepage2017_theme') ? theme_get_setting('layout_style', 'homepage2017_theme') : 'layout-wide';
  $vars['classes_array'][]=$layout;
  unset($vars['head_title_array']['slogan']);
  $vars['head_title'] = implode(' | ', $vars['head_title_array']);
}
