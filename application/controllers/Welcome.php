<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	// construct
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

		// hilangkan flashdata
		$this->session->unset_userdata('keyword');
		// get data trending Youtube
		$data = get_Curl('https://www.googleapis.com/youtube/v3/videos?key=' . $this->config->item('api_yt') . '&part=snippet,statistics&chart=mostPopular&regionCode=id');

		$data['title'] = 'EX Youtube API';
		// load
		$data['page'] = 'api_latihan';
		$this->load->view('template', $data);
	}

	public function cari()
	{
		$keyword = $this->input->GET('keyword');

		$data = get_Curl('https://www.googleapis.com/youtube/v3/search?q=' . urlencode($keyword) . '&key=' . $this->config->item('api_yt') . '&part=snippet&maxResults=5');

		$data['cari'] = true;
		$data['title'] = 'EX Youtube API';
		// $data = $data['items'];
		// print_r($data);
		// flashdata keyword
		$this->session->set_flashdata('keyword', $keyword);
		$data['page'] = 'api_latihan';
		$this->load->view('template', $data);
	}
}
