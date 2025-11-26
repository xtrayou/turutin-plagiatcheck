<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PlagiarismChecker;
use App\Models\PlagiarismCheck;

class PlagiarismController extends Controller
{
    protected $checker;

    public function __construct(PlagiarismChecker $checker)
    {
        $this->checker = $checker;
    }

    /**
     * Menampilkan formulir input dengan history.
     */
    public function showForm()
    {
        $history = PlagiarismCheck::orderBy('created_at', 'desc')->limit(10)->get();
        return view('plagiarism.check', compact('history'));
    }

    /**
     * Memproses permintaan pengecekan plagiarisme.
     */
    public function check(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'document_a' => 'required|string',
            'document_b' => 'required|string',
        ]);

        $textA = $request->input('document_a');
        $textB = $request->input('document_b');

        // 2. Hitung Kesamaan
        $similarityPercentage = $this->checker->calculateSimilarity($textA, $textB);

        // 3. Simpan ke Database
        PlagiarismCheck::create([
            'document_a' => $textA,
            'document_b' => $textB,
            'similarity_percentage' => $similarityPercentage,
        ]);

        // 4. Ambil History
        $history = PlagiarismCheck::orderBy('created_at', 'desc')->limit(10)->get();

        // 5. Tampilkan Hasil
        return view('plagiarism.check', [
            'similarity' => $similarityPercentage,
            'textA' => $textA,
            'textB' => $textB,
            'history' => $history,
        ]);
    }

    /**
     * Menghapus history tertentu.
     */
    public function deleteHistory($id)
    {
        $check = PlagiarismCheck::findOrFail($id);
        $check->delete();

        return redirect()->route('plagiarism.form')->with('success', 'History berhasil dihapus');
    }

    /**
     * Menghapus semua history.
     */
    public function clearHistory()
    {
        PlagiarismCheck::truncate();
        return redirect()->route('plagiarism.form')->with('success', 'Semua history berhasil dihapus');
    }
}
