@extends('layouts.app')

@section('content')
<div class="container-fluid p-0 mt-4">
    <section class="p-3 p-lg-5 align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary text-white">Create Project</div>

                        <div class="card-body">
                            @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                            @endif

                            <form action="{{ route('blogs.create') }}" method="POST" enctype="multipart/form-data">
                                {{-- @method('POST') --}}
                                @csrf
                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Judul" name="title">
                                    <span class="invalid-feedback">Wajib diisi</span>
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="Deskripsi" rows="5"></textarea>
                                    <span class="invalid-feedback">Wajib diisi</span>
                                </div>
                                <div class="form-group">
                                    <label for="images">Gambar</label>
                                    <div class="col-lg-12 my-3">
                                        <img src="{{ asset('img/img.png') }}" alt="priview" id="image-preview" width="300px">
                                    </div>
                                    <input type="file" class="form-control-file @error('images') is-invalid @enderror" id="images" name="images" onchange="previewImage()">
                                    <span class="invalid-feedback">Wajib diisi</span>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('js')
<script>
    function previewImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("images").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview").src = oFREvent.target.result;
        };
    };
</script>
@endsection
