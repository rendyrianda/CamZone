<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamera extends CI_Controller {

    public function __construct(){

        parent ::__construct();

        //load model
        $this->load->model('model_kamera'); 

    }

    public function index()
    {
        $data = array(

            'title'     => 'Data Kamera',
            'data_kamera' => $this->model_kamera->get_all(),

        );

        $this->load->view('admin/data_kamera', $data);
    }

    public function tambah()
    {
        $data = array(

            'title'     => 'Tambah Data Kamera'

        );

        $this->load->view('admin/tambah_kamera', $data);
    }

    public function simpan()
    {
        $data = array(

            'harga_kamera'       => $this->input->post("harga_kamera"),
            'nama_kamera'        => $this->input->post("nama_kamera"),
            'tanggal_rilis'      => $this->input->post("tanggal_rilis"),
            'jenis'              => $this->input->post("jenis"),

        );

        $this->model_kamera->simpan($data);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan di database.
                                                </div>');

        //redirect
        redirect('kamera/');

    }

    public function edit($id_kamera)
    {
        $id_kamera = $this->uri->segment(3);

        $data = array(

            'title'     => 'Edit Data Kamera',
            'data_kamera' => $this->model_kamera->edit($id_kamera)

        );

        $this->load->view('admin/edit_kamera', $data);
    }

    public function update()
    {
        $id['id_kamera'] = $this->input->post("id_kamera");
        $data = array(

            'harga_kamera'        => $this->input->post("harga_kamera"),
            'nama_kamera'         => $this->input->post("nama_kamera"),
            'tanggal_rilis'       => $this->input->post("tanggal_rilis"),
            'jenis'               => $this->input->post("jenis"),

        );

        $this->model_kamera->update($data, $id);

        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil diupdate di database.
                                                </div>');

        //redirect
        redirect('kamera/');

    }

    public function hapus($id_kamera)
    {
        $id['id_kamera'] = $this->uri->segment(3);

        $this->model_kamera->hapus($id);

        //redirect
        redirect('kamera/');

    }

}