<?php

  function main_script_create() {
    wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/code.css', array(), '1.0.3', 'all');
  }

  add_action('wp_enqueue_scripts', 'main_script_create');

  function disable_emojis() {
   remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  }
  add_action( 'init', 'disable_emojis' );

  function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

  function check_active_menu( $menu_item ) {
    $actual_link = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ( $actual_link == $menu_item->url ) {
        return 'active';
    }
    return '';
  }

  add_filter("wpjb_scheme", "my_wpjb_scheme", 10, 2);

  function my_wpjb_scheme($scheme, $object) {
    if(isset($object->meta->custom_url)) {
      $scheme["field"]["salary"]["render_callback"] = "my_render_salary";
    }
    if(isset($object->meta->apply_url)) {
      $scheme["field"]["apply_url"]["render_callback"] = "my_render_apply_url";
    }
    return $scheme;
  }

  function upmostly_jobs_render_salary($object) {

    // Get the country code to set the currency
    $country_code = $object->job_country;
    if ($country_code === "840") {
      $currency = '$';
    } elseif ($country_code === "826") {
      $currency = '£';
    } else{
      $currency = '€';
    }

    // Get either the flat salary, or the range of salaries
    $minimum_salary = $object->meta->salary_min->value();
    $maximum_salary = $object->meta->salary_maximum->value();
    if ($minimum_salary && $maximum_salary) {
      echo $currency . number_format($minimum_salary, 0) . ' - ' . $currency . number_format($maximum_salary, 0) . ' a year';
    } else if($minimum_salary && !$maximum_salary) {
      echo $currency . number_format($minimum_salary, 0) . ' a year';
    } else if(!$minimum_salary && $maximum_salary) {
      echo $currency . number_format($maximum_salary, 0) . ' a year';
    } else {
      echo '';
    }

  }

  function upmostly_jobs_render_date_posted($object) {
    function time_elapsed_string($datetime, $full = false) {
      $now = new DateTime;
      $ago = new DateTime($datetime);
      $diff = $now->diff($ago);

      $diff->w = floor($diff->d / 7);
      $diff->d -= $diff->w * 7;

      $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
      );
      foreach ($string as $k => &$v) {
        if ($diff->$k) {
          $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
          unset($string[$k]);
        }
      }

      if (!$full) $string = array_slice($string, 0, 1);
      return $string ? implode(', ', $string) . ' ago' : 'just now';
    }
    echo time_elapsed_string($object->job_created_at);
  }

  function upmostly_jobs_render_location($object, $country) {
    // Get the value of is this job 100% remote?
    $remote_value = $object->meta->is_remote->value();
    if ($remote_value === 'Temporarily (COVID-19)') {
      echo $country['name'] . ', ' . $object->job_city . ' (Temporarily remote due to COVID-19)';
    } elseif ($remote_value === 'No') {
      echo $country['name'] . ', ' . $object->job_city;
    } elseif ($remote_value === 'Yes (Globally)') {
      echo '🌎 100% Remote (Globally)';
    } elseif ($remote_value === 'Yes (Within a country)') {
      echo '💻 100% Remote ' . '(' . $country['name'] . ')';
    }
  }

  function upmostly_jobs_render_type($object) {
    echo $object->meta->employment_type->value();
  }

  function upmostly_jobs_render_apply_button($object) {
    $is_email_application = $object->meta->application_type->value() === 'Email';
    $apply_url = $object->meta->application_url->value();
    if  ( $ret = parse_url($apply_url) ) {

      if ( !isset($ret["scheme"]) )
      {
        $apply_url = "http://{$apply_url}";
      }
    }
    $apply_email = $object->meta->application_email->value();
    if ($is_email_application) {
      echo 'mailto:' . $apply_email;
    } else {
      echo $apply_url;
    }
  }