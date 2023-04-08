<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teramedik - Pasien</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('pasien.update', $data->id) }}" method="POST">
                        
                            @csrf
                            @method('PUT')

                            {{-- <div class="form-group">
                                <label class="font-weight-bold">Rumah Sakit</label>
                                <input type="text" class="form-control @error('rumah_sakit') is-invalid @enderror" name="rumah_sakit" value="{{ old('rumah_sakit') }}" placeholder="Rumah Sakit">
                            
                                @error('rumah_sakit')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}

                            <div class="form-group">
                                <label class="font-weight-bold">Rumah Sakit</label>
                                <select name="rumah_sakit" class="form-control select2">
                                    <option value="">Pilih Rumah Sakit</option>
                                        @foreach ($rs as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == $data->id_rumah_sakit ? 'selected' : '' }}>{{ $item->rumah_sakit }}</option>
                                        @endforeach
                                </select>

                                @error('rumah_sakit')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Pasien</label>
                                <input type="text" class="form-control @error('pasien') is-invalid @enderror" name="pasien" value="{{ old('pasien', $data->pasien) }}" placeholder="Pasien">
                            
                                @error('pasien')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $data->alamat) }}" placeholder="Alamat">
                            
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Telepon</label>
                                <input type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ old('telepon', $data->telepon) }}" placeholder="Telepon">
                            
                                @error('telepon')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.select2').select2();
});
</script>
</body>
</html>

</x-app-layout>