<?php
defined('BASEPATH') or exit('No direct script access allowed');
// controller watch
class Watch extends CI_Controller
{
  // default function

  // cons
  public function __construct()
  {
    parent::__construct();
    // $this->load->model('Watch_model');

  }
  // index
  public function index()
  {
    // get v from method get
    $id = $this->input->GET('v');
    $json = file_get_contents('https://www.googleapis.com/youtube/v3/videos?id=' . $id . '&key=' . $this->config->item('api_yt') . '&part=snippet,statistics');
    $data['video'] = json_decode($json, true);
    // get channel resource youtube
    $json = file_get_contents('https://www.googleapis.com/youtube/v3/channels?key=' . $this->config->item('api_yt') . '&part=snippet,statistics&id=' . $data['video']['items'][0]['snippet']['channelId']);
    $data['channel'] = json_decode($json, true);

    // get comment youtube
    $json = file_get_contents('https://www.googleapis.com/youtube/v3/commentThreads?key=' . $this->config->item('api_yt') . '&part=snippet&videoId=' . $id);
    // if 403 return null
    if ($json == '{"error":{"code":403,"message":"The request is not authorized to access this resource."}}') {
      $data['comment'] = null;
    } else {
      $data['comment'] = json_decode($json, true);
    }

    $data['title'] = 'EX Youtube API';
    $data['page'] = 'view_video';
    $this->load->view('template', $data);
  }
}
