<?php
class Database{
    //properti
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $database = "db_php_0048";
    public $connect;

    function __construct()
    {
        $this->connect = mysqli_connect($this->host,$this->user,
        $this->pass);
        mysqli_select_db ($this->connect,$this->database);

        //pengujian
        // ($this->connect->connect_error){
        //die ("Koneksi gagal : " . $this->connect->connect_error);
        //}
        //echo "Koneksi berhasil";
    }

    function tampilData(){
        $data = mysqli_query($this->connect, "SELECT * FROM `tb_user_0048`");
        $row = mysqli_fetch_all($data, MYSQLI_ASSOC);
        //var_dump($row);
        return $row;
    }

    function tambahData($nama, $jns_kelamin, $alamat, $no_hp, $gambar){
        mysqli_query($this->connect, "INSERT INTO tb_user_0048 VALUES (NULL, '$nama', '$jns_kelamin', '$alamat', '$no_hp', '$gambar')");
    }
    function editData($id){
        $data= mysqli_query($this->connect, "SELECT * FROM tb_user_0048  WHERE id=$id");
        $row =mysqli_fetch_all ($data, MYSQLI_ASSOC);
        return $row;
    }
    function updateData($id, $nama, $jns_kelamin, $alamat, $no_hp, $gambar){
        mysqli_query($this->connect, "UPDATE `tb_user_0048` SET `nama` = '$nama', `jns_kelamin` = '$jns_kelamin', 
        `alamat` = '$alamat', `no_hp` = '$no_hp', `gambar` = '$gambar' WHERE `tb_user_0048`.`id` = '$id'");
    
    }
    function hapusData($id){
        mysqli_query($this->connect,"DELETE FROM `tb_user_0048` WHERE `tb_user_0048`.`id`= '$id'");
    }

}
?>