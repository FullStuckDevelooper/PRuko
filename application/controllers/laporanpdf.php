<?php
class Laporanpdf extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
    }

    function index()
    {
        
    }

    public function cetakpdf($querry){
        $this->db->select('u.nama as nama , u.email as email , r.tipe as tipe , r.luas as luas , r.kamar as kamar , r.harga as harga ');
        $this->db->from('user as u, ruko as r, sewa as s');
        $this->db->where('u.id', $this->session->userdata('id'));
        $this->db->where('s.user_id=u.id');
        $this->db->where('s.ruko_id = r.id');
        $this->db->where('s.id', $querry);
        $hasil = $this->db->get()->result();
        $this->filename = "Invoice ";
        foreach ($hasil as $row) {
            
       

        $pdf = new FPDF('l', 'mm', 'A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(190, 7, 'BUKTI PEMBAYARAN', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'SEKO-Sewa Ruko Online Terpercaya', 0, 1, 'C');
        $pdf->Cell(190, 7, '----------------------------------------', 0, 1, 'C');
        $pdf->Cell(5, 4, '', 0, 1);

        
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(40, 10, 'Penyewa', 0, 0);
        $pdf->Cell(5, 10, ':', 0, 0);
        $pdf->Cell(30, 10, $row->nama, 0, 1);  
        $pdf->Cell(40, 10, 'Email', 0, 0);
        $pdf->Cell(5, 10, ':', 0, 0);
        $pdf->Cell(40, 10, $row->email, 0, 1);
        $pdf->Cell(40, 10, 'Tipe Ruko', 0, 0);
        $pdf->Cell(5, 10, ':', 0, 0);
        $pdf->Cell(5, 10, $row->tipe, 0, 1);
        $pdf->Cell(40, 10, 'Luas Ruko', 0, 0);
        $pdf->Cell(5, 10, ':', 0, 0);
        $pdf->Cell(7, 10, $row->luas, 0, 0);
        $pdf->Cell(5, 10, 'm^2', 0, 1);
        $pdf->Cell(40, 10, 'Jumlah Kamar Mandi', 0, 0);
        $pdf->Cell(5, 10, ':', 0, 0);
        $pdf->Cell(3, 10, $row->kamar, 0, 1);
        $pdf->Cell(40, 10, 'Harga', 0, 0);
        $pdf->Cell(5, 10, ':', 0, 0);
        $pdf->Cell(6, 10, 'Rp.', 0, 0);
        $pdf->Cell(15, 10, $row->harga, 0, 1);
        $pdf->Cell(40, 10, 'Lama Penyewaan', 0, 0);
        $pdf->Cell(5, 10, ':', 0, 0);
        $pdf->Cell(25, 10, '1 (Satu)Tahun', 0, 1);
        $pdf->Cell(40, 10, 'Status Pembayaran', 0, 0);
        $pdf->Cell(5, 10, ':', 0, 0);
        $pdf->Cell(25, 10, 'Dibayar', 0, 1);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(5, 4, '', 0, 1);
        $pdf->Image('rumah.png',45,8,-700);
        $pdf->Image('rumah.png', 146, 8, -700);
        $pdf->Image('paid.png', 120, 45, -900);   
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(190, 7, 'Terima Kasih Atas Kepercayaan Anda!', 0, 1, 'C');


            
                    
                  
     
            
            

        }
        $pdf->Output();
    }
}

