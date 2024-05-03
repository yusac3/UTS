<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data
                Master</a>
            <button type="button" class="navbar-toggler" data-bstoggle="collapse"
                data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('barangs.index') }}"
                            class="nav-link">barang List</a></li>
                </ul>
                <hr class="d-lg-none text-white-50">
                <a href="{{ route('profile') }}" class="btn btn-outlinelight my-2 ms-md-auto"><i
                        class="bi-person-circle me-1"></i> My
                    Profile</a>
            </div>
        </div>
    </nav>
    <div class="container-sm mt-5">
        <form action="{{ route('barangs.store') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alertdismissible fade show">
                                {{ $error }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endforeach
                    @endif
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kode_barang" class="formlabel">kode barang </label>
                            <input class="form-control" type="text" name="kode_barang" id="kode_barang" value=""
                                placeholder="kode barang">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nama_barang" class="form-label">nama
                                barang</label>
                            <input class="form-control" type="text" name="nama_barang" id="nama_barang" value=""
                                placeholder="nama barang">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="formlabel">harga</label>
                            <input class="form-control" type="text" name="harga_barang" id="harga" value=""
                                placeholder="harga barang">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="age" class="form-label">harga</label>
                            <input class="dekripsi_barang" type="text" name="dekripsi_barang" id="dekripsi_barang" value=""
                                placeholder="dekripsi barang">
                                <div class="col-md-6 mb-3">
                                    <label for="satuan_barang" class="form-label">satuan
                                        barang</label>
                                    <input class="form-control" type="text" name="satuan_barang" id="satuan_barang" value=""
                                        placeholder="satuan barang">
                                </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i
                                    class="bi-arrow-left-circleme-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-darkbtn-lg mt-3"><i class="bi-check-circle me-2"></i>
                                Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
