@extends('masyarakat.master')

@section('title')
@endsection

@section('content')
<div class="container-fluid bg-primary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
        <h3 class="display-3 font-weight-bold text-white">Surat Pengantar KTP</h3>
    </div>
</div>
<div class="container">
    <p>Bagi Warga kami yang mau mengurus surat pengantar KTP melalui Sistem ini
        Silahkan upload file Kartu Keluarga Anda.
    </p>
    <form action="{{ route('suratStore') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-5">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" class="form-control" id="name" name="name" required placeholder="Masukkan Nama Lengkap">
        </div>
        <div class="form-group">
            <label for="nama">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempatlahir" name="tempatlahir" required placeholder="Tempat Lahir">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgllahir" name="tgllahir" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jeniskelamin" name="jeniskelamin" required>
                <option value="option">--Pilih Jenis Kelamin--</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nama">Pekerjaan</label>
            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required placeholder="Pekerjaan">
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <select class="form-control" id="agama" name="agama" required>
                <option value="">Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nama">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required placeholder="Alamat">
        </div>
        <div class="form-group">
            <label for="kk">File KK:</label>
            <input type="file" class="form-control-file" id="kk" name="kk" required>
        </div>
        <input type="hidden" name="masyarakat_id" value="{{ Auth::guard('masyarakat')->user()->id }}">
        <button type="submit" class="btn btn-primary m-5">Submit</button>
    </form>
</div>
@endsection
