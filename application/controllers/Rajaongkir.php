<?php
// rajaongkir api controller from M_rajaongkir
class Rajaongkir extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_rajaongkir');
  }

  public function index()
  {
    $data['provinsi'] = $this->M_rajaongkir->get_province();
    $data['content'] = 'rajaongkir/index';
    $this->load->view('rajaongkir/template', $data);
  }

  // get province
  public function get_province()
  {
    $province = $this->M_rajaongkir->get_province();
    return json_encode($province);
  }

  public function get_city()
  {
    $province_id = $this->input->post('province_id');
    $data = $this->M_rajaongkir->get_city($province_id);
    return json_encode($data);
  }

  public function get_cost()
  {
    $origin = $this->input->post('origin');
    $destination = $this->input->post('destination');
    $weight = $this->input->post('weight');
    $courier = $this->input->post('courier');
    $data = $this->M_rajaongkir->get_cost($origin, $destination, $weight, $courier);
    return json_encode($data);
  }
}
