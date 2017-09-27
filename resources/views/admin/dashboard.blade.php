@extends('layouts.admin')
@section('title', 'Dashboard')
@section('subtitle', 'Control Panel')

@section('content')

<?php

$tusers = count($users);
$tadmins = count($admins);
$twallets = count($wallets);
$tfunds = count($funds);

?>


    <!-- Main content -->
    <section class="content">

	<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$tusers}}</h3>

              <p>Total Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$twallets}}</h3>

              <p>Wallets</p>
            </div>
            <div class="icon">
              <i class="fa fa-credit-card"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$tfunds}}</h3>

              <p>Total Funding Transactions</p>
            </div>
            <div class="icon">
              <i class="fa fa-suitcase"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$tadmins}}</h3>

              <p>Total Admins</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

     </div>


      <div class="row">
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Recent Wallets</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                
                <tr>
                  <th>Name</th>
                  <th>Currency</th>
                  <th>Status</th>
                  <th colspan="2" >Action</th>
                  
                </tr>
                </thead>
                <tbody>
              
              @foreach($wallets as $wallet)

                <tr>
                  <td>{{$wallet->name}}</td>
                  <td>{{$wallet->currency}}</td>
                  <td>{{$wallet->status}}</td>
                  <td><a href="" class="btn btn-warning">Edit</a></td>
                  <td><a href="" class="btn btn-danger">Delete</a></td>
                </tr>

              @endforeach
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        
        </div>
        <!-- /.col -->

        <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Recent Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                
                <thead>
                
                <tr>
                  <th></th>
                  <th>Fullname</th>
                  <th>Title</th>
                  <th colspan="2" >Action</th>
                  
                </tr>
                </thead>
                <tbody>
              
              @foreach($users as $user)

                <tr>
                  <td><img src="uploads/users/{{$user->avatar}}" class="img-circle" width="40px" /></td>
                  <td>{{$user->first_name}} {{$user->last_name}}</td>
                  <td>{{$user->itle}}</td>
                  <td><a href="" class="btn btn-warning">Edit</a></td>
                  <td><a href="" class="btn btn-danger">Delete</a></td>
                </tr>

              @endforeach
                
                
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@stop