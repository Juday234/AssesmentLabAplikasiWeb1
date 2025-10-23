<?php
// Class induk
class Hewan {
    // Encapsulation: gunakan private untuk properti
    private $id;
    private $nama;

    // Constructor
    public function __construct($id, $nama) {
        $this->id = $id;
        $this->nama = $nama;
    }

    // Getter & Setter
    public function getId() {
        return $this->id;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Method umum
    public function displayInfo() {
        return "ID: {$this->id}, Nama: {$this->nama}";
    }
}

// Class turunan 1
class Mamalia extends Hewan {
    private $jenisBulu;

    public function __construct($id, $nama, $jenisBulu) {
        parent::__construct($id, $nama);
        $this->jenisBulu = $jenisBulu;
    }

    // Polymorphism: override displayInfo()
    public function displayInfo() {
        return parent::displayInfo() . ", Jenis Bulu: {$this->jenisBulu}";
    }
}

// Class turunan 2
class Burung extends Hewan {
    private $warnaBulu;

    public function __construct($id, $nama, $warnaBulu) {
        parent::__construct($id, $nama);
        $this->warnaBulu = $warnaBulu;
    }

    // Polymorphism: override displayInfo()
    public function displayInfo() {
        return parent::displayInfo() . ", Warna Bulu: {$this->warnaBulu}";
    }
}
?>
