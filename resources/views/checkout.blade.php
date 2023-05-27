@extends('layouts.app')
@section('title', 'Checkout')
@section('content')

<div class="container">

  <div class="row g-5">
    <div class="col-md-5 col-lg-4 order-md-last">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary fw-bold">Your cart</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item justify-content-between lh-sm">
          <div>
            <h5 class="my-0 mb-2 fw-bold">{{$laptops->Name}}</h5>
                  <strong class="text-muted">{{$laptops->Display}},</strong>
                  <strong class="text-muted">{{$laptops->CPU}},</strong>
                  <strong class="text-muted">{{$laptops->GPU}},</strong>
                  <strong class="text-muted">{{$laptops->RAM}},</strong>
                  <strong class="text-muted">{{$laptops->Storage}}</strong>     
          </div>
          
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <img src="/img/{{$laptops->Image}}" width="220" class="rounded mx-auto d-block mt-2 mb-2">
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span class="fw-bold">Price (SR)</span>
          <strong>{{$laptops->Price}} SR</strong>
        </li>
      </ul>
      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <button type="submit" class="btn btn-primary">Redeem</button>
        </div>
      </form>
    </div>
    <div class="col-md-7 col-lg-8">
      <h3 class="mb-3">Billing address</h3>
      <form action="{{route('invoice')}}" method="POST">
        @csrf
        <input type="hidden" id="ProductName" name="ProductName" value="{{$laptops->Name}}">
        <input type="hidden" id="Total" name="Total" value="{{$laptops->Price}}">

        <div class="row g-3">
          <div class="col-sm-6">
            <label for="firstName" class="form-label">First name</label>
            <input type="firstName" class="form-control" id="firstName" name="firstName">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="lastName" class="form-label">Last name</label>
            <input type="lastName" class="form-control" id="lastName" name="lastName">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

          <div class="col-12">
            <label for="username" class="form-label">Username</label>
            <div class="input-group has-validation">
              <span class="input-group-text">@</span>
              <input type="text" class="form-control" id="username" placeholder="Username" name="Username">
            <div class="invalid-feedback">
                Your username is required.
              </div>
            </div>
          </div>

          <div class="col-12">
            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com" name="email">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

          <div class="col-12">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address">
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="col-12">
            <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" name="address2">
          </div>

          <div class="col-md-5">
            <label for="country" class="form-label">Country</label>
            <select class="form-select" id="country" name="country">
              <option value="">Choose...</option>
              <option>Saudi Arabia</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

          <div class="col-md-4">
            <label for="state" class="form-label">State</label>
            <select class="form-select" id="state" name="state">
              <option value="">Choose...</option>
              <option>Riyadh</option>
              <option>Jeddah</option>
              <option>Mecca </option>
              <option>Medina </option>
              <option>Dammam</option>
              <option>Taif</option>
              <option>Buraydah</option>
              <option>Tabuk</option>
              <option>Abha</option>
              <option>Hofuf</option>
              <option>Khobar</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>

          <div class="col-md-3">
            <label for="zip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" name="zip">
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>

        <hr class="my-4">

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="same-address" name="ShippingAddress">
          <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>

        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="save-info" name="SaveInformation">
          <label class="form-check-label" for="save-info">Save this information for next time</label>
        </div>

        <hr class="my-4">

        <h3 class="mb-3">Payment</h3>

        <div class="my-3">
          <div class="form-check">
            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
            <label class="form-check-label" for="credit">Credit card</label>
          </div>
          <div class="form-check">
            <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
            <label class="form-check-label" for="debit">Debit card</label>
          </div>
          <div class="form-check">
            <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
            <label class="form-check-label" for="paypal">PayPal</label>
          </div>
        </div>

        <div class="row gy-3">
          <div class="col-md-6">
            <label for="ccName" class="form-label">Name on card</label>
            <input type="text" class="form-control" id="ccName" placeholder="" name="ccName">
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>

          <div class="col-md-6">
            <label for="ccNumber" class="form-label">Credit card number</label>
            <input type="text" class="form-control" id="ccNumber" placeholder="" name="ccNumber">
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>

          <div class="col-md-3">
            <label for="ccExpiration" class="form-label">Expiration</label>
            <input type="text" class="form-control" id="ccExpiration" placeholder="" name="ccExpiration">
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>

          <div class="col-md-3">
            <label for="ccCvv" class="form-label">CVV</label>
            <input type="text" class="form-control" id="ccCvv" placeholder="" name="ccCvv">
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>

        <hr class="my-4">

        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
      </form>
    </div>
  </div>

</div>

@endsection