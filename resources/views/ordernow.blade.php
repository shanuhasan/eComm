@extends('master')
@section('content')    
<div class="custom-product">
    <div class="col-sm-6">
        <table class="table table-bordered">
            <tbody>
              <tr>
                <td>Price</td>
                <td>{{$total}} INR</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>100 INR</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>{{$total+100}} INR</td>
              </tr>
            </tbody>
          </table>
          <form action="orderplace" method="POST">
            @csrf
              <div class="form-group">
                  <textarea class="form-control" name="address" placeholder="Enter your Address"></textarea>
              </div>
              <div class="form-group">
                  <label for="">Payment Method</label>
                  <p><input type="radio" value="cash" name="payment"><span>Online Payment</span></p>
                  <p><input type="radio" value="cash" name="payment"><span>Cash on Delivery</span></p>
                  <p><input type="radio" value="cash" name="payment"><span>EMI Payment</span></p>
              </div>
              <button type="submit" class="btn btn-primary">Order Now</button>
          </form>
    </div>
</div>
@endsection