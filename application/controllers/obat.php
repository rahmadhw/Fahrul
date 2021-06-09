<?php 

class Obat extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
            $this->load->model("Obatmodel");
    }
    public function index()

    {
        $this->load->view('pembungkus/header');
        $this->load->view('pembungkus/sidebar');
        // $this->load->view('pembungkus/navbar');
        $data['query'] = $this->Obatmodel->tampildata();
        $this->load->view('obat', $data);
        $this->load->view('pembungkus/footer');
    }

    public function tambahobat()
    {
        $this->load->view("pembungkus/header");
        $this->load->view("pembungkus/sidebar");
        $data['query'] = $this->Obatmodel->carisupplier();
        $this->load->view('tambahobat', $data);
        $this->load->view('pembungkus/footer');
    }

    public function insertdata()
    {
       $kodeobat            = $this->input->post("KODE_OBAT");
       $kodesupplier        = $this->input->post('KODE_SUPPLIER');
       $namaobat            = $this->input->post("NAMA_OBAT");
       $produsen            = $this->input->post('PRODUSEN');
       $harga               = $this->input->post("HARGA");
       $jmlstok             = $this->input->post('JML_STOK');
       $foto                = $_FILES['FOTO']['name'];
       if ($foto = ""){}else{
           $config['upload_path']   = './gambar';
           $config['allowed-types'] = 'jpg|jpeg|gif';

           $this->load->library('upload', $config);

           if (!$this->upload->do_upload('FOTO')) {
               echo "Gambar gagal di upload";
           }else {
               $foto = $this->upload->data('file_name');
           }
       } 

       $data = [
           'KODE_OBAT'      => $kodeobat,
           'KODE_SUPPLIER'  => $kodesupplier,
           'NAMA_OBAT'      => $namaobat,
           'PRODUSEN'       => $produsen,
           'HARGA'          => $harga,
           'JML_STOK'       => $jmlstok,
           'FOTO'           => $foto
       ];

       $this->Obatmodel->insertdata($data);
       redirect('obat');
    }
}


?>