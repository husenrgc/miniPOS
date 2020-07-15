<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('savelog')) {
  function savelog($user,$log) {
    $CI =& get_instance();
    $CI->id         = '';
    $CI->userid     = $user;
    $CI->ip         = get_client_ip();
    $CI->mac        = get_physical(get_client_ip());
    $CI->log        = $log;
    $CI->timeaccess = date('Y-m-d H:i:s');
    $CI->db->insert('user_log', $CI);

    return null;
  }

  function get_client_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }

  function get_physical($ip) {
    $_PERINTAH = "arp -a $ip";
    ob_start();
    system($_PERINTAH);
    $_HASIL = ob_get_contents();
    ob_clean();
    $_PECAH = strstr($_HASIL, $_IP_ADDRESS);
    $_PECAH_STRING = explode($_IP_ADDRESS, str_replace(" ", "", $_PECAH));

    return substr($_PECAH_STRING[1], 0, 17);
  }
}