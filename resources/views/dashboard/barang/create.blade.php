@extends('dashboard.template')
@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-3">
    <div>
        <h1 class="h3 mb-0 text-gray-800">Barang</h1>
        <p>data barang yang digunakan sebagai bentuk bantuan yang akan dikirim.</p>
    </div>
    <div>
        <a href="{{ route('barang.store') }}" class="btn btn-primary btn-icon-split shadow-sm">
            <span class="icon text-white-50">
                <i class="fas fa-floppy-disk"></i>
            </span>
            <span class="text">Simpan</span>
        </a>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Poster</h6>
            </div>
            <div class="card-body">
                <img src="https://image.shutterstock.com/image-vector/example-signlabel-features-speech-bubble-260nw-1223219908.jpg"
                    class="rounded img-fluid mx-auto d-block">
                <form>
                    <div class="form-group my-3">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Detail</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Barang</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>Makanan</option>
                        <option>Minuman</option>
                        <option>Pakaian</option>
                        <option>Sembako</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Harga Satuan</label>
                            <input type="number" min="1" class="form-control" placeholder="Rp . ">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label">Tersedia</label>
                            <input type="number" min="1" step="any" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection