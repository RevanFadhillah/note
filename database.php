<?php
$koneksi=mysqli_connect("localhost", "root", "", "xl_pplg_2") or die("Gagal Terhubung dengan Database: "  . mysqli_error($koneksi));

function tampildata($tablename)
{
    global $koneksi;
    $hasil=mysqli_query($koneksi,"select * from $tablename");
    $rows=[];
    while($row = mysqli_fetch_assoc($hasil))
    {
        $rows[] = $row;
    }
    return $rows;
}
function editdata($tablename, $id)
{
    global $koneksi;
    $hasil = mysqli_query ($koneksi, "select * from $tablename where id = $id");
    return $hasil;
}

function update ($table, $data, $id)
{
    global $koneksi;
    $sql = "UPDATE $table SET note = '$data' WHERE id = '$id'";
    $hasil = mysqli_query($koneksi, $sql);
    return $hasil;
}
function Delete($tablename, $id)
{
    global $koneksi;
    $hasil = mysqli_query($koneksi, "delete from $tablename WHERE id ='$id'");
    return $hasil;
}
function tampil_notes() {
    global $koneksi;
    $hasil=mysqli_query( $koneksi, "SELECT notes.id, notes.note, notes.id_user, notes.username, notes.create_at from notes INNER JOIN users on notes.id = users.id_user;");
    $rows = [];
    while ($rows = mysqli_fetch_assoc($hasil ))
    {
        $rows [] = $row;
    }
}
function cek_login($username,$password){
    global $koneksi;
    $uname = $username;
    $upass = $password;
    
    $hasil = mysqli_query($koneksi, "select * from users where user_name='$uname' and password=md5('$upass')");
    $cek = mysqli_num_rows($hasil);
    if($cek > 0){
        $query = mysqli_fetch_array($hasil);
        $_SESSION['id_user'] = $query ['id_user'];
        $_SESSION['user_name'] = $query ['user_name'];
        $_SESSION['role'] = $query ['role'];
        return true;
    }
    else {
        return false;
    }
}
?>