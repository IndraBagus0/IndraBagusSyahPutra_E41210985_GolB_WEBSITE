@extends('layouts.default')

@php
  $pretilte = 'data siswa';
  $title = 'tambah  data ';    
@endphp

@section('conten')

<div class="card">
    <div class="card-body">
        <form action="/siswa" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">nama</label>
                <input type="text" class="form-control" name="name" placeholder="masukan nama ">
              </div>
              <div class="mb-3">
                <label class="form-label">alamat</label>
                <input type="text" class="form-control" name="addres" placeholder="masukan alamat">
              </div>
              <div class="mb-3">
                <label class="form-label">phone</label>
                <input type="text" class="form-control" name="phone_number" placeholder="masukan no hape">
              </div>
              <div class="mb-3">
                <label class="form-label">kelas</label>
                <input type="text" class="form-control" name="kelas" placeholder="masukan no hape">
              </div>
              <div class="mb-3">
                <input type="submit" value="simpan" class="btn_btn_primary">
              </div>
        </form>

    </div>
</div>

@endsection