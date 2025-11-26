<?php

namespace App\Services;

class PlagiarismChecker
{
    /**
     * Menghitung persentase kesamaan (similarity) antara dua string.
     * Menggunakan Jaccard Index pada token (kata).
     *
     * @param string $textA
     * @param string $textB
     * @return float Persentase kesamaan (0.0 hingga 100.0)
     */
    public function calculateSimilarity(string $textA, string $textB): float
    {
        // 1. Preprocessing: Ubah ke huruf kecil dan hapus karakter non-alfanumerik.
        $cleanTextA = $this->cleanText($textA);
        $cleanTextB = $this->cleanText($textB);

        // 2. Tokenisasi: Pisahkan teks menjadi array kata-kata (token).
        $tokensA = array_unique(explode(' ', $cleanTextA));
        $tokensB = array_unique(explode(' ', $cleanTextB));

        // 3. Hitung Intersection (kata-kata yang sama)
        $intersection = count(array_intersect($tokensA, $tokensB));

        // 4. Hitung Union (semua kata unik)
        $union = count(array_unique(array_merge($tokensA, $tokensB)));

        if ($union === 0) {
            return 0.0; // Hindari pembagian dengan nol
        }

        // 5. Hitung Jaccard Index: (Intersection / Union) * 100
        $similarity = ($intersection / $union) * 100;

        // Bulatkan ke dua angka di belakang koma
        return round($similarity, 2);
    }

    /**
     * Helper untuk membersihkan teks.
     */
    private function cleanText(string $text): string
    {
        // Ubah ke huruf kecil
        $text = strtolower($text);
        // Hapus tanda baca dan ganti dengan spasi
        $text = preg_replace('/[^\w\s]/', ' ', $text);
        // Ganti multiple spaces dengan satu spasi
        $text = preg_replace('/\s+/', ' ', $text);
        // Hapus spasi di awal/akhir
        return trim($text);
    }
}
