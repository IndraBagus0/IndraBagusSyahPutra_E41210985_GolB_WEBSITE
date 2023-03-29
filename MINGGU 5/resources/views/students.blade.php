@extends('layouts.default')


@php
  $pretilte = 'data siswa';
  $title = 'semua data ';    
@endphp

@push('page-action')
    <a href="/siswa/buat" class="btn btn-primary">tambah data </a>
@endpush
@section('conten')
<h1>ini adalah halama student</h1>

<div class="card">
    <div class="table-responsive">
      <table class="table table-vcenter card-table">
        <thead>
          <tr>
            {{-- <th>id</th> --}}
            <th>Name</th>
            <th>address</th>
            <th>phone number </th>
            <th>class</th>
            <th>action</th>
            <th class="w-1"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($iniV as $item)
                <tr>
                    {{-- <td>{{ $item ->id }}</td> --}}
                    <td>{{ $item ->name }}</td>
                    <td>{{ $item ->addres }}</td>
                    <td>{{ $item ->phone_number }}</td>
                    <td>{{ $item ->class }}</td>
                    <td>
                      <a href="/siswa/{{ $item->id }}/edit">edit</a>
                     
                      <form action="{{ route('hancur', $item->id) }}" method="POST">
                      @csrf
                      @method('delete')
                      
                      <input type="submit" value="hapus" class="btn btn-danger btn-sm">
                      </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection