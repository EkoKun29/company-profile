<div class="modal modal-blur fade" id="modal-bintang" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Input Surat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('letters-edaran.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="form-label">Upload Surat</div>
                        <input type="file" class="form-control" name="image" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" name="title" class="form-control" name="example-text-input"
                            placeholder="Judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi <span class="form-label-description">Max 100</span></label>
                        <textarea id="summernote" name="description"></textarea>
                        {{-- <textarea id="summernote" class="form-control" name="description" rows="6" placeholder="Deskripsi.."></textarea> --}}
                        <script>
                            $('#summernote').summernote({
                            placeholder: 'Deskripsi...',
                            tabsize: 2,
                            height: 120,
                            toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'underline', 'clear']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['table', ['table']],
                                ['insert', ['link', 'picture', 'video']],
                                ['view', ['fullscreen', 'codeview', 'help']]
                            ],
                            callbacks: {
                                onInit: function() {
                                    $('#summernote').summernote('code', $('#summernote').summernote('code').replace(/<p>/g, '').replace(/<\/p>/g, ''));
                                }
                            }
                        });
                        $('#form').submit(function() {
                        // Cek apakah deskripsi kosong saat form disubmit
                        if ($('#summernote').summernote('isEmpty')) {
                            // Ambil nilai judul dan tambahkan "Surat" jika deskripsi kosong
                            var title = $('input[name="title"]').val();
                            var defaultDescription = 'Surat ' + title;

                            // Set nilai default ke deskripsi
                            $('#summernote').val(defaultDescription);
                        }
                        });
                    
                        // Memeriksa deskripsi saat halaman dimuat
                        if ($('#summernote').summernote('isEmpty')) {
                            $('#summernote').summernote('code', '');
                        }
                        </script>

                            @error('desc')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-danger">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="bi bi-save-fill" width="16" height="16" fill="currentColor" class="bi bi-save-fill" viewBox="0 0 16 16">
                            <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v7.793L4.854 6.646a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l3.5-3.5a.5.5 0 0 0-.708-.708L8.5 9.293z"/>
                          </svg>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@push('js')

@endpush
