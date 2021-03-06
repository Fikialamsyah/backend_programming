<?php

// membuat class Animal
class Animal {
    
    // properti Animals
    private $animals;

    // method contructor - mengisi data awal
    // parameter : data hewan (array)
    public function __construct($data)
    {
        $this->animals = $data;
    }

    // method index - menampilkan data animals
    public function index()
    {
        // gunakan for each untuk menampilkan data animals (array)
        if (count($this->animals) <= 0){
            echo "Hewan Belum ada";
        } else {
            foreach($this->animals as $animal){
                echo "$animal <br>";
            }
        }
    }

    // method store - menambahkan hewan baru
    // parameter: hewan baru
    public function store($data)
    {
        // gunakan method array_push untuk menambahkan data baru
        array_push($this->animals, $data);
    }

    // method update - mengupdate hewan
    // parameter: index dan hewan baru
    public function update($index, $data)
    {
        $this->animals[$index] = $data;
    }

    // method delete - menghapus hewan
    // parameter index
    public function destroy($index)
    {
        // gunakan method unset atau array_splice untuk menghapus data array
        unset($this->animals[$index]);
    }
}

// membuat object
//  kirimkan data hewan (array) ke constructor
$animal = new Animal(["Ayam", "Kucing"]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store  - Menambahkan hewan baru <br>";
$animal->store("kuda");
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, "Anjing");
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";
