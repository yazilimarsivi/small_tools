<?php
function formatBytes($boyut, $ondalik = 2) {
  
    // İsteğinize göre içeriği artırıp azaltabilirsiniz.
    $birim = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];
  
    // Boyutu 0 döndürür
    if ($boyut <= 0) return '0 B';

    // Logaritma kullanarak hangi birimde olduğunu bulur (Taban 1024 IEEE 1541)
    $i = floor(log($boyut, 1024));
    
    // Dizinin sınırlarını aşmamak için kontrol
    $i = min($i, count($birim) - 1);

    // Sonuç değeri
    return round($boyut / pow(1024, $i), $ondalik)
      . ' ' . $birim[$i];
}

$boyut = pow(1024, 2) * 5.5; // 5.5 MB örneği (Bayt cinsinden değer)
echo formatBytes($boyut); // Çıktı: 5.5 MB
