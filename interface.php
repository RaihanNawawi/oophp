<?php

interface SendMessage {
    // : string; = Mengharuskan type hinting untuk parameter $recipent dan $message harus berupa string
    // : bool; = Return method akan mengembalikan nilai boolean (true/false) untuk menunjukkan apakah pengiriman berhasil atau tidak
    public function send(string $recipent, string $message): bool;
}

abstract class Notification implements SendMessage {
    // :void; = Return method tidak mengembalikan nilai apapun, hanya melakukan aksi tertentu (dalam hal ini, logging)
    protected function logNotification(string $recipent, string $message): void {
        // Contoh logging sederhana
        echo "Log Message: Berhasil terkirim ke $recipent dengan pesan: $message\n";
    }
}

class Email extends Notification {
    public function send(string $recipent, string $message): bool {
        // Log notifikasi pengiriman
        $this->logNotification($recipent, $message);
        return true; // Simulasi pengiriman berhasil
    }
}

class SMS extends Notification {
    public function send(string $recipent, string $message): bool {
        $this->logNotification($recipent, $message);
        return true; // Simulasi pengiriman berhasil
    }
}

// Contoh penggunaan
$email1 = new Email();
$email1->send("user@example.com", "Halo, Apa Kabar? Ini adalah notifikasi email.");

echo "<hr>";

$sms1 = new SMS();
$sms1->send("08123456789", "Halo, Apa Kabar? Ini adalah notifikasi SMS.");