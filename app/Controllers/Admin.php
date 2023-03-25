<?php

namespace App\Controllers;
use App\Models\PegawaiModel;

class Admin extends BaseController
{
    
    public function __construct()
    {
        helper('form');
        $this->PegawaiModel = new PegawaiModel();
    }
    
    public function index()
    {
        $data = [
            'title'     => 'Beranda',
            'subtitle'     => 'Admin',
            'isi'       => 'admin/beranda'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function dashboard()
    {
        $data = [
            'title'     => 'Dashboard',
            'subtitle'     => 'Admin',
            'pegawai'  => $this->PegawaiModel->allData(),
            'isi'       => 'admin/index'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function detail($no)
    {
        $data = [
            'title'     => 'Detail Data Pegawai',
            'pegawai'  => $this->PegawaiModel->detailData($no),
            'isi'       => 'admin/detail'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function add()
    {
        $data = [
            'title'     => 'Add Data Pegawai',
            'isi'       => 'admin/add'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function insert()
    {
        $pegawaiValid = [
            'no' => [
                'label' => 'No',
                'rules' => 'required|is_unique[tn.no]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'is_unique' => '{field} sudah ada. Silahkan input yang lain!!!.'
                ]
            ],
            'nama' => [
                'label' => 'Nama Pegawai',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'email' => [
                'label' => 'Email Pegawai',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'is_unique' => '{field} sudah ada. Silahkan input yang lain!!!.'
                ]
            ],
            'unit' => [
                'label' => 'Unit',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'no_pegawai' => [
                'label' => 'Nomor Pegawai',
                'rules' => 'required|is_unique[tn.no_pegawai]',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                    'is_unique' => '{field} sudah ada. Silahkan input yang lain!!!.'
                ]
            ],
            'job_function' => [
                'label' => 'Job Function',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'tanggal_lahir' => [
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
        ];

        if ($this->validate($pegawaiValid)) {
            //jika valid
            $data = [
                'no' => $this->request->getPost('no'),
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'unit' => $this->request->getPost('unit'),
                'no_pegawai' => $this->request->getPost('no_pegawai'),
                'job_function' => $this->request->getPost('job_function'),
                'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
                'human_factor_validity' => $this->request->getPost('human_factor_validity'),
                'sms_validity' => $this->request->getPost('sms_validity'),
                'dangerous_good_validity' => $this->request->getPost('dangerous_good_validity'),
                'fuel_tank_safety_validity' => $this->request->getPost('fuel_tank_safety_validity'),
                'ewis_validity' => $this->request->getPost('ewis_validity'),
                'gmf_quality_validity' => $this->request->getPost('gmf_quality_validity'),
                'casr_validity' => $this->request->getPost('casr_validity'),
                'easa_validity' => $this->request->getPost('easa_validity'),
                'far_validity' => $this->request->getPost('far_validity'),
                'easa_part_m_validity' => $this->request->getPost('easa_part_m_validity'),
            ];
    
            $this->PegawaiModel->add($data);
            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!!');
    
            return redirect()->to(base_url('admin/dashboard'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('admin/add'));
        }
    }

    public function detailTraining($no)
    {
        $data = [
            'title'     => 'Detail Training',
            'pegawai'  => $this->PegawaiModel->detailData($no),
            'isi'       => 'admin/detailTraining'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function edit($no)
    {
        $data = [
            'title'     => 'Edit Data Pegawai',
            'pegawai'  => $this->PegawaiModel->detailData($no),
            'isi'       => 'admin/edit'
        ];
        return view('layout/v_wrapper', $data);
    }

    public function update($no)
    {
        $pegawaiValid = [
            'no' => [
                'label' => 'No',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'nama' => [
                'label' => 'Nama Pegawai',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'email' => [
                'label' => 'Email Pegawai',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'unit' => [
                'label' => 'Unit',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'no_pegawai' => [
                'label' => 'Nomor Pegawai',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.',
                ]
            ],
            'job_function' => [
                'label' => 'Job Function',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
            'tanggal_lahir' => [
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} wajib diisi.'
                ]
            ],
        ];

        if ($this->validate($pegawaiValid)) {
            //jika valid
            $data = [
                'no' => $no,
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'unit' => $this->request->getPost('unit'),
                'no_pegawai' => $this->request->getPost('no_pegawai'),
                'job_function' => $this->request->getPost('job_function'),
                'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
                'human_factor_validity' => $this->request->getPost('human_factor_validity'),
                'sms_validity' => $this->request->getPost('sms_validity'),
                'dangerous_good_validity' => $this->request->getPost('dangerous_good_validity'),
                'fuel_tank_safety_validity' => $this->request->getPost('fuel_tank_safety_validity'),
                'ewis_validity' => $this->request->getPost('ewis_validity'),
                'gmf_quality_validity' => $this->request->getPost('gmf_quality_validity'),
                'casr_validity' => $this->request->getPost('casr_validity'),
                'easa_validity' => $this->request->getPost('easa_validity'),
                'far_validity' => $this->request->getPost('far_validity'),
                'easa_part_m_validity' => $this->request->getPost('easa_part_m_validity'),
            ];
    
            $this->PegawaiModel->edit($data);
            session()->setFlashdata('pesan', 'Data Berhasil Diubah!!!');
    
            return redirect()->to(base_url('admin/dashboard'));
        } else {
            //jika tidak valid
            session()->setFlashdata('errors', \config\Services::validation()->getErrors());
            return redirect()->to(base_url('admin/edit/'.$no));
        }
    }

    public function sendEmailMerah($emailPegawai, $namaPegawai, $namaTraining, $tanggalTraining)
    {
        $email = \Config\Services::email();

        $fromEmail = 'hermawanbagas15@gmail.com';
        $email->setFrom($fromEmail);
        $toFrom = $emailPegawai;
        $email->setTo($toFrom);
        
        $subject = 'Test Email';
        $email->setSubject($subject);

        // pesan tampilan di emailnya
        $body = "
            <center><h1>Hallo, $namaPegawai</h1></center>
            <p>Bersiap untuk training <b>$namaTraining</b><br>
            Karena waktu <b>$tanggalTraining</b> sudah tiba!!!</p><br>
        ";
        $message = $body;
        $email->setMessage($message);

        if (!$email->send()) {
            session()->setFlashdata('pesanEmail', 'Pesan Email Gagal Dikirim');
            return redirect()->to(base_url('admin/dashboard'));
        } else {
            session()->setFlashdata('pesanEmail', 'Pesan Email Berhasil Dikirim');
            return redirect()->to(base_url('admin/dashboard'));
        }
    }

    public function sendEmailKuning($emailPegawai, $namaPegawai, $namaTraining, $tanggalTraining)
    {
        $email = \Config\Services::email();

        $fromEmail = 'hermawanbagas15@gmail.com';
        $email->setFrom($fromEmail);
        $toFrom = $emailPegawai;
        $email->setTo($toFrom);
        
        $subject = 'Test Email';
        $email->setSubject($subject);

        // pesan tampilan di emailnya
        $body = "
            <center><h1>Hallo, $namaPegawai</h1></center>
            <p>Bersiap untuk training <b>$namaTraining</b><br>
            Karena waktu <b>$tanggalTraining</b> sudah mendekati!!!</p><br>
        ";
        $message = $body;
        $email->setMessage($message);

        if (!$email->send()) {
            session()->setFlashdata('pesanEmail', 'Pesan Email Gagal Dikirim');
            return redirect()->to(base_url('admin/dashboard'));
        } else {
            session()->setFlashdata('pesanEmail', 'Pesan Email Berhasil Dikirim');
            return redirect()->to(base_url('admin/dashboard'));
        }
    }

    public function sendEmailMerahDetail($emailPegawai, $namaPegawai, $namaTraining, $tanggalTraining, $no)
    {
        $email = \Config\Services::email();

        $fromEmail = 'hermawanbagas15@gmail.com';
        $email->setFrom($fromEmail);
        $toFrom = $emailPegawai;
        $email->setTo($toFrom);
        
        $subject = 'Test Email';
        $email->setSubject($subject);

        // pesan tampilan di emailnya
        $body = "
            <center><h1>Hallo, $namaPegawai</h1></center>
            <p>Bersiap untuk training <b>$namaTraining</b><br>
            Karena waktu <b>$tanggalTraining</b> sudah tiba!!!</p><br>
        ";
        $message = $body;
        $email->setMessage($message);

        if (!$email->send()) {
            session()->setFlashdata('pesanEmail', 'Pesan Email Gagal Dikirim');
            return redirect()->to(base_url('admin/detailTraining/'.$no));
        } else {
            session()->setFlashdata('pesanEmail', 'Pesan Email Berhasil Dikirim');
            return redirect()->to(base_url('admin/detailTraining/'.$no));
        }
    }

    public function sendEmailKuningDetail($emailPegawai, $namaPegawai, $namaTraining, $tanggalTraining, $no)
    {
        $email = \Config\Services::email();

        $fromEmail = 'hermawanbagas15@gmail.com';
        $email->setFrom($fromEmail);
        $toFrom = $emailPegawai;
        $email->setTo($toFrom);
        
        $subject = 'Test Email';
        $email->setSubject($subject);

        // pesan tampilan di emailnya
        $body = "
            <center><h1>Hallo, $namaPegawai</h1></center>
            <p>Bersiap untuk training <b>$namaTraining</b><br>
            Karena waktu <b>$tanggalTraining</b> sudah mendekati!!!</p><br>
        ";
        $message = $body;
        $email->setMessage($message);

        if (!$email->send()) {
            session()->setFlashdata('pesanEmail', 'Pesan Email Gagal Dikirim');
            return redirect()->to(base_url('admin/detailTraining/'.$no));
        } else {
            session()->setFlashdata('pesanEmail', 'Pesan Email Berhasil Dikirim');
            return redirect()->to(base_url('admin/detailTraining/'.$no));
        }
    }

    public function delete($no)
    {
        $data = [
            'no'   => $no,
        ];

        $this->PegawaiModel->delete_data($data);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!!!');

        return redirect()->to(base_url('admin/dashboard'));
    }

    
}
