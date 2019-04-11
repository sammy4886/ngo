@extends('frontend.layouts.app')



@section('content')
<!-- page-title -->
<section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
    <div class="container">
        <div class="content-box">
            <div class="title">Projects</div>
            <ul class="bread-crumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Pages</li>
            </ul>
        </div>
    </div>
</section>
<br>
<div class="container">
  <h2 style="color:#e5191a">Relevant work experience relevant to project:</h2>

  <table class="table">
    <thead>
      <tr>

        <th>Name of funding INGO/NG</th>
        <th>Program/Project name </th>
        <th>Start & completion date</th>
        <th>Coverage District, VDCs, RM’s</th>
        <th>Target Beneficiaries</th>
        <th>Key Activities</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        <td>UNESCO</td>
        <td>Cultural Training Program </td>
        <td>Aug,2016 - Dec,2017</td>
        <td>4 VDCs of Rautahat District </td>
        <td>150 Women from Rural area </td>
        <td>Cultural Painting training</td>
      </tr>
    </tbody>
  </table>
  </div>
</div>



@endsection
