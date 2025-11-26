<!DOCTYPE html>
<html>

<head>
    <title>TURUTIN - Cek Plagiarisme Gratis</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: linear-gradient(135deg, #fef5f5 0%, #ffe5e5 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background-color: #dc3545;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
        }

        .logo-text {
            font-size: 36px;
            font-weight: bold;
            color: #333;
            letter-spacing: 2px;
        }

        .subtitle {
            color: #666;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .support-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background-color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            color: #666;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .support-dot {
            width: 8px;
            height: 8px;
            background-color: #28a745;
            border-radius: 50%;
        }

        /* Tools Navigation */
        .tools-nav {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .tool-btn {
            background-color: white;
            border: 2px solid #e0e0e0;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            color: #333;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .tool-btn.active {
            background-color: #dc3545;
            color: white;
            border-color: #dc3545;
        }

        .tool-btn:hover:not(.active) {
            border-color: #dc3545;
            color: #dc3545;
        }

        .tool-btn .icon {
            font-size: 18px;
        }

        /* Main Card */
        .main-card {
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .card-title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .card-subtitle {
            font-size: 13px;
            color: #999;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            color: #333;
            margin-bottom: 8px;
        }

        textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-family: inherit;
            font-size: 14px;
            resize: vertical;
            transition: border-color 0.3s ease;
        }

        textarea:focus {
            outline: none;
            border-color: #dc3545;
        }

        .char-count {
            text-align: right;
            font-size: 12px;
            color: #999;
            margin-top: 5px;
        }

        .word-char-info {
            font-size: 12px;
            color: #999;
            margin-top: 10px;
        }

        /* Buttons */
        .btn-primary {
            background-color: #dc3545;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: background-color 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary:hover {
            background-color: #c82333;
        }

        .btn-secondary {
            background-color: white;
            color: #dc3545;
            padding: 12px 30px;
            border: 2px solid #dc3545;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #dc3545;
            color: white;
        }

        /* Result */
        .result {
            background: linear-gradient(135deg, #fff5f5 0%, #ffe8e8 100%);
            padding: 25px;
            border-radius: 12px;
            margin: 20px 0;
            border: 2px solid #ffd4d4;
        }

        .result h2 {
            font-size: 18px;
            color: #333;
            margin-bottom: 15px;
        }

        .similarity-score {
            font-size: 48px;
            font-weight: bold;
            text-align: center;
            margin: 20px 0;
        }

        .similarity-score.high {
            color: #dc3545;
        }

        .similarity-score.low {
            color: #28a745;
        }

        .similarity-label {
            text-align: center;
            font-size: 14px;
            margin-top: 10px;
        }

        .similarity-cell {
            font-weight: bold;
        }

        .similarity-cell.high {
            color: #dc3545;
        }

        .similarity-cell.low {
            color: #28a745;
        }

        /* History Section */
        .history-section {
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .history-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .history-title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }

        .history-table {
            width: 100%;
            border-collapse: collapse;
        }

        .history-table th {
            background-color: #dc3545;
            color: white;
            padding: 12px;
            text-align: left;
            font-weight: 500;
            font-size: 13px;
        }

        .history-table th:first-child {
            border-top-left-radius: 8px;
        }

        .history-table th:last-child {
            border-top-right-radius: 8px;
        }

        .history-table td {
            padding: 12px;
            border-bottom: 1px solid #f0f0f0;
            font-size: 13px;
            color: #666;
        }

        .history-table tr:hover {
            background-color: #f8f9fa;
        }

        .text-preview {
            max-width: 250px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
            padding: 6px 12px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            transition: background-color 0.3s ease;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        .clear-all-btn {
            background-color: #ffc107;
            color: #000;
            padding: 8px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 13px;
            font-weight: 500;
        }

        .clear-all-btn:hover {
            background-color: #e0a800;
        }

        .success-message {
            background-color: #d4edda;
            color: #155724;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            border-left: 4px solid #28a745;
        }

        .empty-history {
            text-align: center;
            padding: 40px;
            color: #999;
        }

        /* Footer */
        .footer {
            text-align: center;
            margin-top: 50px;
            padding: 30px 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .support-btn {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 8px rgba(220, 53, 69, 0.3);
        }

        .support-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(220, 53, 69, 0.4);
        }

        .footer-text {
            font-size: 13px;
            color: #666;
            margin-bottom: 10px;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e0e0e0;
        }

        .footer-link {
            color: #dc3545;
            text-decoration: none;
            font-size: 12px;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: #c82333;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <div class="logo-icon">📝</div>
                <div class="logo-text">TURUTIN</div>
            </div>
            <p class="subtitle">Cek plagiarisme gratis anti limit</p>
            <div class="support-badge">
                <span class="support-dot"></span>
                <span>100% Gratis & Tanpa Batas</span>
            </div>
        </div>

        <!-- Tools Navigation -->
        <div class="tools-nav">
            <button class="tool-btn active">
                <span class="icon">✓</span>
                <span>Cek Plagiarisme</span>
            </button>
            <button class="tool-btn" onclick="alert('🗑️ Hapus Plagiarisme\n\nFitur ini sedang dalam pengembangan!\n\nSegera hadir untuk membantu Anda menghilangkan konten yang terdeteksi plagiarisme secara otomatis.')">
                <span class="icon">🗑️</span>
                <span>Hapus Plagiarisme</span>
            </button>
            <button class="tool-btn" onclick="alert('📖 Periksa Tata Bahasa\n\nFitur ini sedang dalam pengembangan!\n\nSegera hadir untuk membantu Anda memeriksa grammar dan ejaan dalam berbagai bahasa.')">
                <span class="icon">📖</span>
                <span>Periksa Tata Bahasa</span>
            </button>
            <button class="tool-btn" onclick="alert('🤖 Detektor AI\n\nFitur ini sedang dalam pengembangan!\n\nSegera hadir untuk mendeteksi teks yang dihasilkan oleh AI seperti ChatGPT, Gemini, dll.')">
                <span class="icon">🤖</span>
                <span>Detektor AI</span>
            </button>
        </div>

        @if(session('success'))
        <div class="success-message">
            ✓ {{ session('success') }}
        </div>
        @endif

        <div class="main-card">
            <h2 class="card-title">Cek Plagiarisme</h2>
            <p class="card-subtitle">*Hasil tidak selalu 100% akurat</p>

            <form method="POST" action="{{ route('plagiarism.check') }}">
                @csrf
                <div class="form-group">
                    <label for="document_a">Dokumen 1 (Teks yang Diperiksa):</label>
                    <textarea name="document_a" id="document_a" rows="8" required placeholder="Tulis disini...">{{ old('document_a', $textA ?? '') }}</textarea>
                    <div class="char-count">0 karakter</div>
                    <div class="word-char-info">≈ 0 kata</div>
                </div>

                <div class="form-group">
                    <label for="document_b">Dokumen 2 (Basis Data / Perbandingan):</label>
                    <textarea name="document_b" id="document_b" rows="8" required placeholder="Tulis disini...">{{ old('document_b', $textB ?? '') }}</textarea>
                    <div class="char-count">0 karakter</div>
                    <div class="word-char-info">≈ 0 kata</div>
                </div>

                <button type="submit" class="btn-primary">
                    <span>✓</span>
                    <span>Mulai Analisis</span>
                </button>
            </form>

            @if (isset($similarity))
            <div class="result">
                <h2>HASIL PENGECEKAN</h2>
                <p>Tingkat Kesamaan (Similarity) antara Dokumen 1 dan Dokumen 2 adalah:</p>
                <div class="similarity-score {{ $similarity > 30 ? 'high' : 'low' }}">
                    {{ $similarity }}%
                </div>
                <p class="similarity-label">
                    {{ $similarity > 30 ? '⚠ Tingkat kesamaan tinggi - Kemungkinan plagiarisme terdeteksi' : '✅ Tingkat kesamaan rendah - Dokumen cukup unik' }}
                </p>
            </div>
            @endif
        </div>

        <div class="history-section">
            <div class="history-header">
                <h2 class="history-title">📚 Riwayat Terbaru</h2>
                @if(isset($history) && $history->count() > 0)
                <form method="POST" action="{{ route('plagiarism.clearHistory') }}" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="clear-all-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus semua history?')">
                        Hapus Semua History
                    </button>
                </form>
                @endif
            </div>

            <p class="card-subtitle">Hasil sebelumnya (0/20)</p>

            @if(isset($history) && $history->count() > 0)
            <table class="history-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Waktu</th>
                        <th>Dokumen 1 (Preview)</th>
                        <th>Dokumen 2 (Preview)</th>
                        <th>Similarity</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($history as $index => $check)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $check->created_at->format('d/m/Y H:i') }}</td>
                        <td class="text-preview" title="{{ $check->document_a }}">{{ Str::limit($check->document_a, 50) }}</td>
                        <td class="text-preview" title="{{ $check->document_b }}">{{ Str::limit($check->document_b, 50) }}</td>
                        <td class="similarity-cell {{ $check->similarity_percentage > 30 ? 'high' : 'low' }}">
                            {{ $check->similarity_percentage }}%
                        </td>
                        <td>
                            <form method="POST" action="{{ route('plagiarism.deleteHistory', $check->id) }}" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn" onclick="return confirm('Hapus history ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <div class="empty-history">
                <p>Belum ada riwayat analisis. Mulai dengan memasukkan teks di atas!</p>
            </div>
            @endif
        </div>

        <div class="footer">
            <button class="support-btn" onclick="window.open('https://www.instagram.com/xtrayou', '_blank')">
                <span>☕</span>
                <span>Support Kami</span>
            </button>
            <p class="footer-text">Made with ❤️ by <strong>@xtrayou</strong></p>
            <div class="footer-links">
                <a href="#" class="footer-link">Tentang Kami</a>
                <a href="#" class="footer-link">Kebijakan Privasi</a>
                <a href="#" class="footer-link">Syarat & Ketentuan</a>
                <a href="#" class="footer-link">Kontak</a>
            </div>
        </div>

    </div>

    <script>
        // Character and word counter for textareas
        function updateCounter(textarea) {
            const text = textarea.value;
            const charCount = text.length;
            const words = text.trim().split(/\s+/).filter(word => word.length > 0);
            const wordCount = text.trim() === '' ? 0 : words.length;
            
            // Update character count (no limit)
            const charCountEl = textarea.parentElement.querySelector('.char-count');
            if (charCountEl) {
                charCountEl.textContent = `${charCount.toLocaleString()} karakter`;
            }
            
            // Update word and character info
            const wordCharInfoEl = textarea.parentElement.querySelector('.word-char-info');
            if (wordCharInfoEl) {
                wordCharInfoEl.textContent = `≈ ${wordCount.toLocaleString()} kata`;
            }
        }

        // Initialize counters on page load
        document.addEventListener('DOMContentLoaded', function() {
            const textareaA = document.getElementById('document_a');
            const textareaB = document.getElementById('document_b');
            
            if (textareaA) {
                updateCounter(textareaA);
                textareaA.addEventListener('input', function() {
                    updateCounter(this);
                });
            }
            
            if (textareaB) {
                updateCounter(textareaB);
                textareaB.addEventListener('input', function() {
                    updateCounter(this);
                });
            }
        });
    </script>
</body>

</html>