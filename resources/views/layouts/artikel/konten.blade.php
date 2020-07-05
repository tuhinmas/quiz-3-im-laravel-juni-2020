@extends('layouts.master')

@section('content')
<table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi Artikel</th>
        <th>Slug</th>
        <th>Tag</th>
        <th>Dibuat</th>
        <th>Diupdate</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($artikel as $key =>$konten  )
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$konten -> judul}}</td>
        <td>{{$konten -> isi}}</td>
        <td>{{$konten -> slug}}</td>
        <td>{{$konten -> tag}}</td>
        <td>{{$konten -> created_at }}</td>
        <td>{{$konten -> updated_at}}</td>
        <td><a href="/artikel/{{$konten->id}}" type="button" class="btn btn-primary">Detail</a>
        <td style="widt: 1px;"><a href="/artikel/{{$konten->id}}/edit" type="button" class="btn btn-info">Edit</a>
        <td style="widt: 1px;"><form action='/artikel/{{$konten->id}}' method="post" style="display: inline-block;">
                @csrf
                @method('DELETE')
                  <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash"></i>
                  </button>
            </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
  <div class="text-center">
    <a href="/artikel/create" class="btn btn-danger btn-lg mt-3">Buat konten</a>
  </div>

@endsection

@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush