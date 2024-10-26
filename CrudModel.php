<?php
class Crud_model extends CI_Model {

    // Fungsi untuk mengambil semua data dari tabel dengan kondisi tertentu (optional)
    public function ambil_data($tabel, $kondisi = null) {
        if ($kondisi != null) {
            $this->db->where($kondisi);
        }
        return $this->db->get($tabel)->result();
    }

    // Fungsi untuk mengambil satu data berdasarkan kondisi (misal berdasarkan id)
    public function ambil_satu_data($tabel, $kondisi) {
        return $this->db->get_where($tabel, $kondisi)->row();
    }

    // Fungsi untuk menambahkan data ke tabel
    public function tambah_data($tabel, $data) {
        return $this->db->insert($tabel, $data);
    }

    // Fungsi untuk memperbarui data dalam tabel berdasarkan kondisi tertentu
    public function perbarui_data($tabel, $data, $kondisi) {
        $this->db->where($kondisi);
        return $this->db->update($tabel, $data);
    }

    // Fungsi untuk menghapus data dari tabel berdasarkan kondisi tertentu
    public function hapus_data($tabel, $kondisi) {
        $this->db->where($kondisi);
        return $this->db->delete($tabel);
    }
}
