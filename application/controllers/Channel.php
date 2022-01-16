<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Channel extends CI_Controller
{

  // construct
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    // get c
    $id = $this->input->get('c');

    // get channel
    $channel = get_Curl('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=' . $id . '&key=' . $this->config->item('api_yt'));
    $channel = $channel['items'][0];
    $data['channel'] = $channel;

    // get video by channelid
    $video = get_Curl('https://www.googleapis.com/youtube/v3/search?part=snippet&channelId=' . $id . '&maxResults=20&order=date&type=video&key=' . $this->config->item('api_yt'));
    $data['videos'] = $video['items'];


    $data['title'] = 'Channels';
    $data['page'] = 'channel/index';
    $this->load->view('template', $data);
  }
}
