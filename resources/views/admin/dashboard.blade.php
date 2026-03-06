@extends('admin.layouts.app')

@section('content')

<h1 class="text-2xl font-bold mb-6">
  Dashboard
</h1>

<div class="grid grid-cols-4 gap-6">

  <div class="bg-white p-6 rounded shadow">
    <p class="text-gray-500 text-sm">Total Berita</p>
    <p class="text-2xl font-bold">0</p>
  </div>

  <div class="bg-white p-6 rounded shadow">
    <p class="text-gray-500 text-sm">Total Prestasi</p>
    <p class="text-2xl font-bold">0</p>
  </div>

  <div class="bg-white p-6 rounded shadow">
    <p class="text-gray-500 text-sm">Total Galeri</p>
    <p class="text-2xl font-bold">0</p>
  </div>

  <div class="bg-white p-6 rounded shadow">
    <p class="text-gray-500 text-sm">Total Zakat</p>
    <p class="text-2xl font-bold">0</p>
  </div>

</div>

@endsection