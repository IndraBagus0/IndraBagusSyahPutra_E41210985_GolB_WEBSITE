
@extends('layouts.default')


@php
  $pretilte = 'data siswa';
  $title = 'edit data siswa';    
@endphp


@section('conten')

<div class="card">
    <div class="card-body">
        <form action="/siswa/{{ $inid->id }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
                <label class="form-label">nama</label>
                <input type="text" class="form-control" name="name" placeholder="masukan nama"
                value="{{$inid->name}}">
              </div>
              <div class="mb-3">
                <label class="form-label">alamat</label>
                <input type="text" class="form-control" name="addres" placeholder="masukan alamat"
                value="{{ $inid->addres }}">
              </div>
              <div class="mb-3">
                <label class="form-label">phone</label>
                <input type="text" class="form-control" name="phone_number" placeholder="masukan no hape"
                value="{{ $inid->phone_number }}">
              </div>
              <div class="mb-3">
                <label class="form-label">kelas</label>
                <input type="text" class="form-control" name="kelas" placeholder="masukan no hape"
                value="{{ $inid->class }}">
              </div>
              <div class="mb-3">
                <input type="submit" value="simpan" class="btn_btn_primary">
              </div>
        </form>

    </div>
</div>

@endsection