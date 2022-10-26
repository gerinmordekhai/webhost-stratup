<?php 

function rupiahFormat($rupiah){
    $hasil_rupiah = 'Rp. ' . number_format($rupiah, 2, ',', '.');
    return $hasil_rupiah;
}

function hargaDisplay($harga){
    $hasil_harga = number_format($harga / 1000) . 'k';
    return $hasil_harga;
}

function storageFormat($storage){
    if($storage >= 1000){
       $hasil_storage = number_format($storage / 1000) . ' GB';
       return $hasil_storage;
    }
}

function fiturYesNo($fitur){
    if($fitur == '1'){
        return '<div class="badge badge-success">
        YES
      </div>';
    }elseif($fitur == '0'){
        return '<div class="badge badge-danger">
        NO
      </div>';
    }
}

function fiturCeklis($ceklis){
    if($ceklis == '1'){
        return '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </svg>';
    }elseif($ceklis == '0'){
        return '';
    }
}

function fiturBeliYesNo($fiturbeli){
    if($fiturbeli == '1'){
        return 'YES';
    }elseif($fiturbeli == '0'){
        return 'NO';
    }
}