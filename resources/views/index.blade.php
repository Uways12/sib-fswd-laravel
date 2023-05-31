<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Posts - Arkatama</title>
    <link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>
<body style="background: lightgray">

    <div class="Container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h1>Arkatama</h1>
                            <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary mt-2 mb-3">Buat Post Baru</a>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
        <th scope="col">Gambar</th>
        <th scope="col">Judul</th>
        <th scope="col">Konten</th>
        <th style="width: 15%">Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($posts as $post)
        <tr>
        <td class="text-center">
        <img src="{{ asset('storage/posts/'.$post->image) }}" class="rounded"
        style="width: 150px">
        </td>
        <td>{{ $post->title }}</td>
        <td>{!! $post->content !!}</td>
        <td class="text-center">
        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{
        route('posts.destroy', $post->id) }}" method="POST">
        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-
        primary btn-block"><i class="fa fa-eye"></i> Lihat</a>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-
        success btn-block"><i class="fa fa-pencil-alt"></i> Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger btn-block mt-
        2"><i class="fa fa-trash"></i> Hapus</button>
        </form>
        </td>
        </tr>
        @empty
        <div class="alert alert-danger">
        Data Post belum Tersedia.
        </div>
        @endforelse
        </tbody>
        </table>
        {!! $posts->links('pagination::bootstrap-4') !!}
        </div>
        </div>
        </div>
        </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
        //message with toastr
        @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
        </script
</body>
</html>