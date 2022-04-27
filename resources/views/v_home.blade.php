@extends('layout.v_template')
@section('title')

@section('content')

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-purple">
        <div class="inner">
          <h3>Hasil Panen</h3>

          <p></p>
        </div>
        <div class="icon">
          <i class=""></i>
        </div>
        <a href="/HasilPanen" class="small-box-footer">Information <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-orange">
        <div class="inner">
          <h3>Cempaga Farm </h3>

          <p></p>
        </div>
        <div class="icon">
          <i class="ion"></i>
        </div>
        <a href="/Info_Cempaga_Farm" class="small-box-footer">Information <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-blue">
        <div class="inner">
          <h3>Petani </h3>

          <p></p>
        </div>
        <div class="icon">
          <i class="ion"></i>
        </div>
        <a href="/Petani" class="small-box-footer">Information <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>Pembeli</h3>

          <p></p>
        </div>
        <div class="icon">
          <i class="ion"></i>
        </div>
        <a href="/Pembeli" class="small-box-footer">Information <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <center><br><br><br><br>
    <img src="{{asset('template')}}/dist/img/farm.png" width="200px height=" 100px" /> <br><br><br>
    <font Size="8" face="Bernard MT Condensed">CEMPAGA FARM </font> <br>
    <font Size="8" face="Bernard MT Condensed"> </font>
  </center>
  @endsection