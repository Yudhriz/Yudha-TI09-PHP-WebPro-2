<?php
class BmiPasien {
    // Properties
    public $nama;
    public $umur;
    public $jenis_kelamin;
    public $berat;
    public $tinggi;
  
    // Constructor
    function __construct($nama, $umur, $jenis_kelamin, $berat, $tinggi) {
      $this->nama = $nama;
      $this->umur = $umur;
      $this->jenis_kelamin = $jenis_kelamin;
      $this->berat = $berat;
      $this->tinggi = $tinggi;
    }
  
    // Method untuk menghitung hasil BMI
    function hasilBMI() {
      $tinggi_meter = $this->tinggi / 100;
      $bmi = $this->berat / ($tinggi_meter * $tinggi_meter);
      return $bmi;
    }
  
    // Method untuk menentukan status BMI
    function statusBMI() {
      $bmi = $this->hasilBMI();
      if ($bmi < 18.5) {
        return "Kekurangan berat badan";
      } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
        return "Berat Normal (ideal)";
      } elseif ($bmi >= 25 && $bmi <= 29.9) {
        return "Kelebihan berat badan";
      } else {
        return "Obesitas";
      }
    }
  }
