<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class M_rajaongkir extends CI_Model
{
  protected $api_key = '620c196c7c78ff3ac698650784d54405';

  // codeigniter 3 get config item to models
  // function __construct()
  // {
  //   parent::__construct();
  //   $this->load->database();
  // }


  // public $api_key = 'c0f8c9f8f9f8c9f8f9f8f9f8f9f8f9f8';
  // function __construct()
  // {
  //   parent::__construct();
  // }

  // get all province
  public function get_province()
  {
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: $this->api_key"
      ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      return json_decode($response, true);
    }
  }

  // get all city
  public function get_city($province_id)
  {
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=$province_id",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: $this->api_key"
      ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      return json_decode($response, true);
    }
  }

  public function get_cost($origin, $destination, $weight, $courier)
  {
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "origin=$origin&destination=$destination&weight=$weight&courier=$courier",
      CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded",
        "key: $this->api_key"
      ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      return json_decode($response, true);
    }
  }
}
