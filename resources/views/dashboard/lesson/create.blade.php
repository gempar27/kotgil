@extends('dashboard.layouts.main')
@section('title', 'Kotgil | Tambah Free Lesson')
@section('breadcrumb', 'Tambah Free Lesson')
@section('content')
    <div class="form-layout form-layout-1 card">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mg-b-25">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="judul">Judul<span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" id="judul" name="judul" required
                            value="{{ old('judul') }}">
                        @error('judul')
                            <span role="alert">
                                <small><strong class="text-danger">{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="image">Upload Foto<span class="tx-danger">* </span><small
                                class="show-file-name"></small></label>
                        <label class="custom-file col-12">
                            <input type="file" class="custom-file-input" id="image" name="image"
                                accept=".jpg,.jpeg,.png,.jfif" required style="cursor: pointer;"
                                onchange="displayFileName()">
                            <span class="custom-file-control custom-file-control-inverse"></span>
                        </label>
                        @error('image')
                            <span role="alert">
                                <small><strong class="text-danger">{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                    <div class="form-group">
                        <label class="form-control-label" for="video">Upload Video<span class="tx-danger">* </span><small
                                class="show-file-name"></small></label>
                        <label class="custom-file col-12">
                            <input type="file" class="custom-file-input" id="video" name="video"
                                accept=".mp4" required style="cursor: pointer;">
                            <span class="custom-file-control custom-file-control-inverse"></span>
                        </label>
                        @error('video')
                            <span role="alert">
                                <small><strong class="text-danger">{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                </div><!-- col-4 -->
            </div><!-- row -->
            <div class="form-layout-footer">
                <button style="cursor: pointer" type="submit" class="btn btn-info">Simpan</button>
                <button style="cursor: pointer" type="button"onclick="window.history.go('-1');"
                    class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
        </form>
    </div><!-- form-layout -->
@endsection
<script>
    // JavaScript
    function displayFileName() {
        const fileInput = document.getElementById('image');
        const fileNameDisplay = document.querySelector('.show-file-name');

        if (fileInput.files.length > 0) {
            fileNameDisplay.textContent = fileInput.files[0].name;
        } else {
            fileNameDisplay.textContent = '';
        }
    }
</script>
