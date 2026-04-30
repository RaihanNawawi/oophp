<?php

/* define() tidak bisa digunakan di dalam class, karena define() adalah fungsi global yang digunakan untuk mendefinisikan konstanta di tingkat global. */
class Coba1 {
    define("NAMA", "Coba"); // Error: syntax error, unexpected 'define' (T_STRING), expecting function (T_FUNCTION) or const (T_CONST)
}

/* Untuk mendefinisikan konstanta di dalam class, kita harus menggunakan kata kunci const. */
class Coba2 {
    const NAMA = "Coba"; // Benar: mendefinisikan konstanta di dalam class menggunakan const
}

echo Coba2::NAMA; // Output: Coba