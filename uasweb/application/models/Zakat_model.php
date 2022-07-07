<?php

class Zakat_model
{
  private $amal = [
    [

      'jenis_zakat' => 'Zakat Fitrah',
      'nominal' => 'Rp. 200.000',
      'nama_lengkap' => 'Juandi',
      'nomor_hp' => '08926425373',
      'email' => 'juan@gmail.com',
      'nama_bank' => 'BRI',
      'no_rek' => '287932743'
    ],
    [
      'jenis_zakat' => 'Zakat Mall',
      'nominal' => 'Rp. 100.000',
      'nama_lengkap' => 'Zidan',
      'nomor_hp' => '0892642232473',
      'email' => 'zidan@gmail.com',
      'nama_bank' => 'BCA',
      'no_rek' => '213433454'
    ],
  ];
  public function getAllZakat()
  {
    return $this->amal;
  }
}
