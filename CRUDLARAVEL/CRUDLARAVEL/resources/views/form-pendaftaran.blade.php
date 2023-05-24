<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bosstrap.min.css">
    <title>Pendaftaran</title>
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Pendaftaran Mahasiswa</h1>
                <hr>

                <form action="{{ route('mahasiswas.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" value="{{ old('nim') }}">
                    @error('nim')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror        
                </div> 
            <div class="mb-3">
                <label class="form-label" for="nama">Nama Lengkap</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}">
                @error('nama')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>    
            
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <div class="d-flex">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                        {{ old('jenis_kelamin')=='L' ? 'checked': '' }}>
                        <label class="form-check-label" for="laki_laki">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                        id="perempuan" value="p"
                        {{ old('jenis_kelamin')=='p' ? 'checked': ''}}>
                        <label for="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
                @error('jenis_kelamin')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="jurusan">Jurusan</label>
                <select  class="form-select "name="jurusan" id="jurusan"
                 value="{{ old('jurusan') }}">
                <option value="Teknik Informatika"
                {{ old('jurusan')=='Teknik Informatika' ? 'selected': ''}} >
                Teknik Informatika
                </option>
                <option value="Sistem Informasi"
                {{ old('jurusan')=='Sistem Informasi' ? 'selected': ''}} >
                Sistem Informasi
                </option>
                <option value="Ilmu Komputer"
                {{ old('jurusan')== 'Ilmu Komputer' ? 'selected': ''}} >
                Ilmu Komputer
                </option>
                <option value="Teknik Komputer"
                {{ old('jurusan')== 'Teknik Komputer' ? 'selected': ''}} >
                Teknik Komputer
                </option>
                <option value="Teknik Telekomunikasi"
                {{ old('jurusan')== 'Teknik Telekomunikasi' ? 'selected': ''}} >
                Teknik Komunikasi
                </option>
            </select>
            @error('jurusan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>

            
            </form>
            </div>
        </div>
    </div>
</body>
</html>