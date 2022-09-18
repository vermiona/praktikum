<?php
    // koding tipe data string
    $nama = "HERI MAULANA\n";

    // koding tipe data char
    $gender = 'L';

    // koding tipe data integer
    $umur = 18 ;

    // koding tipe data float
    $tinggi = 170.5 ;

    // koding tipe data boolean
    $belum = true;
    $status = "status = ";

    // koding tipe data array
    $hobi = array('nonton, ','main game, ','coba hal baru');

    // koding tipe data object
    class kampus
    {
    var $str;  
    }
    $kampus = new kampus();
    $kampus->str="kampus = politeknik negeri lhokseumawe"; 


    echo "nama = $nama <br>";
    echo "jenis kelamin = $gender <br>";
    echo "umur = $umur <br>";
    echo "tinggi = $tinggi <br>";
    echo "hobi = ", $hobi[0],$hobi[1],$hobi[2],"<br>";

    if ($belum == true)
    {
        echo("$status belum menikah <br>");
    }
        else{
        echo"$status sudah menikah <br>";}  

    echo $kampus->str; 
?>
