@extends('layouts.app')
@section('title', 'Invoice')
@section('content')

<div class="container">

    <div class="card">
        <div class="card-header bg-black"></div>
        <div class="card-body">
      
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <i class="far fa-building text-danger fa-6x float-start text-dark"></i>
              </div>
            </div>
      
      
            <div class="row">
              <div class="col-xl-12">
      
                <ul class="list-unstyled float-end">
                  <li style="font-size: 30px; color: rgb(0, 0, 0);" class="fw-bold">Laptops Shop</li>
                  <li>123, Elm Street</li>
                  <li>123-456-789</li>
                  <li>mail@mail.com</li>
                </ul>
              </div>
            </div>
      
            <div class="row text-center">
              <h3 class="text-uppercase text-center mt-3" style="font-size: 40px;">Invoice</h3>
              <p class="text-muted">#{{$inv->Id}}</p>
            </div>
      
            <div class="row mx-3">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Description</th>
                    <th scope="col">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{$inv->ProductName}}</td>
                    <td>1</td>
                  </tr>
                </tbody>
              </table>
      
            </div>
            
            <hr>
            <div class="row">
              <div class="col-xl-8" style="margin-left:60px">
                <p class="float-end"
                  style="font-size: 30px; font-weight: 400;font-family: Arial, Helvetica, sans-serif;">
                  Total:
                  <span class="text-primary">{{$inv->Total}} SR</span></p>
              </div>
      
            </div>
      
            <div class="row mt-2 mb-5">
              <p class="fw-bold">Date: <span class="text-muted">5/27/2023</span></p>
              <p class="fw-bold mt-3">Name: <span class="text-muted">{{$inv->firstName}} {{$inv->lastName}}</span></p>
              <p class="fw-bold mt-3">Address: <span class="text-muted">{{$inv->address}}</span></p>
              <p class="fw-bold mt-3">Signature:</p>
            </div>
      
          </div>
      
      
      
        </div>
        <div class="card-footer bg-black"></div>
      </div>

</div>

@endsection