@extends('layout.master')

@section('judul')
Halaman Table
@endsection

@push('scripts')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

<script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.js"></script>

@endpush

@push('style')
<link href="https://cdn.datatables.net/v/bs4/dt-1.13.6/datatables.min.css" rel="stylesheet">
@endpush

@section('content')
<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Alam</td>
      <td>Syah</td>
      <td>@lamm</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Hamidzan</td>
      <td>Pranajanala</td>
      <td>@hmpb._</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Firman</td>
      <td>Syah</td>
      <td>@council46</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Farhan</td>
      <td>NR</td>
      <td>@hnn</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Mado</td>
      <td>Cess</td>
      <td>@mddo</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Rizqi</td>
      <td>S</td>
      <td>@nobody</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Bintang</td>
      <td>Binscup</td>
      <td>@bntngrzk</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>Maulana</td>
      <td>Fikri</td>
      <td>@fkr.ii</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Ilham</td>
      <td>Alfiansyah</td>
      <td>@hammz22</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Zall</td>
      <td>Dii</td>
      <td>@zall.</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>Nabil</td>
      <td>Rabbani</td>
      <td>@nblrbbni</td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>Wahyu</td>
      <td>Yuda</td>
      <td>@Why?</td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>Bayu</td>
      <td>Bagaskara</td>
      <td>@abay</td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>Husein</td>
      <td>Vincent</td>
      <td>@vncnt</td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>Arif</td>
      <td>Hakim</td>
      <td>@rifff.</td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>Hafiz</td>
      <td>Al Fitrah</td>
      <td>@hnza</td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td>Ardian</td>
      <td>Arya</td>
      <td>@aarrdn</td>
    </tr>
    <tr>
      <th scope="row">18</th>
      <td>Syahru</td>
      <td>Ramadhan</td>
      <td>@ruuumetsu</td>
    </tr>
  </tbody>
</table>
@endsection