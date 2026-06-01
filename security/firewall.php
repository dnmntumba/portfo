<?php

// =========================
// MINI FIREWALL PHP
// =========================

class Firewall {

    private $ip;
    private $file;
    private $data;

    public function __construct() {
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->file = __DIR__ . '/firewall_logs.json';

        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([]));
        }

        $this->data = json_decode(file_get_contents($this->file), true);
    }

    public function check() {

        $now = time();

        if (!isset($this->data[$this->ip])) {
            $this->data[$this->ip] = [
                "count" => 0,
                "blocked_until" => 0,
                "last_time" => $now
            ];
        }

        // 🔴 SI IP BLOQUÉE
        if ($this->data[$this->ip]["blocked_until"] > $now) {
            http_response_code(403);
            exit("⛔ Accès temporairement bloqué (activité suspecte)");
        }

        // reset si 10 min
        if ($now - $this->data[$this->ip]["last_time"] > 600) {
            $this->data[$this->ip]["count"] = 0;
        }

        // incrément
        $this->data[$this->ip]["count"]++;
        $this->data[$this->ip]["last_time"] = $now;

        // 🚨 seuil anti spam
        if ($this->data[$this->ip]["count"] > 5) {

            // blocage 30 minutes
            $this->data[$this->ip]["blocked_until"] = $now + (30 * 60);

            $this->save();

            http_response_code(403);
            exit("🚫 IP bloquée pour spam détecté");
        }

        $this->save();
    }

    private function save() {
        file_put_contents($this->file, json_encode($this->data, JSON_PRETTY_PRINT));
    }
}