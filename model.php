<?php

// function for connect to database
function db(){
    return mysqli_connect("localhost","root",null,"latihan_mvc");
}

// function for select table and explode it into array asosiative
function get_table(){
    $query = mysqli_query(db(),"select * from user");

    // ambil semua isi table, lalu mari kita ledakan
    $hasil = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $hasil;
}
echo "<pre>";
print_r(get_table());
echo "</pre>";
?>