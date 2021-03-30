@extends('users.layout')
@section('content')
 <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Data Barang</h2>
        </div>
    </div>
 </div>
 
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 
 <table class="table table-bordered">
    <tr>
        <th>ID Barang</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Kategori Barang</th>
        <th>Harga</th>
        <th>QTY</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($barang as $br)
    <tr>
        <td>{{ $br->id_barang }}</td>
        <td>{{ $br->kode_barang }}</td>
        <td>{{ $br->nama_barang }}</td>
        <td>{{ $br->kategori_barang }}</td>
        <td>{{ $br->harga}}</td>
        <td>{{ $br->qty }}</td>
        <td>
        <!-- action -->
        </td>
    </tr>
 @endforeach
</table>

