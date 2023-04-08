<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Teramedik - Rumah Sakit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Rumah Sakit</h3>       
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('rumahsakit.create') }}" class="btn btn-md btn-success mb-3">Tambah Rumah Sakit</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">*</th>
                                <th scope="col">Rumah Sakit</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">#</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($data as $row)
                                <tr id="data-{{ $row->id }}">
                                    <td>{{ $row->id }}</td>
                                    <td>{{ $row->rumah_sakit }}</td>
                                    <td>{{ $row->alamat }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->telepon }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('rumahsakit.edit', $row->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="hapus({{ $row->id }});">HAPUS</button>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif

        // hapus data melalui ajax
        function hapus(id){
            var token   = $("meta[name='csrf-token']").attr("content");

            $.ajax({
                type: "DELETE",
                url: "/api/rumahsakit/"+id,
                data: {
                    "_token": token
                },
                cache: false,
                success: function (response) {
                    document.getElementById("data-"+id).remove();
                    toastr.warning(response.success, 'BERHASIL!'); 
                }
            });
        }
    </script>

</body>
</html>
</x-app-layout>