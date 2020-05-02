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
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form action="{{ route('blogs.create') }}" method="POST">
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
                                    <input type="file" class="form-control-file" id="images" name="images">
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
