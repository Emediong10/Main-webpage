
@extends('components.filament-fabricator.layouts.canvas')
<title>Payment</title>
@section('payment')

<div class="container mt-5">
    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
        @csrf
        <div class="card">
            <div class="card-body">
                <br>
                <h2 class="card center "><strong>Enter your details below make payment to ALIVE Nigeria</strong></h2>
<br>
                <div class="row">
                    <div class="mb-4 col-md-6 form-group">
                        <label>Your First Name</label>
                        <input type="text" name="firstname"  class="form-control" placeholder="Write your first name" required>
                    </div>
                    <div class="mb-4 col-md-6 form-group">
                        <label>Your Last Name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Write your last name" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-4 col-md-6 form-group">
                        <label>Your Email</label>
                        <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                    </div>
                    <div class="mb-4 col-md-6 form-group">
                        <label>Your Phone Number</label>
                        <input type="number" name="phone" class="form-control" placeholder="08012345678" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-4 col-md-6 form-group">
                        <label>Amount</label>
                        <input type="number" name="amount" class="form-control" placeholder="Amount you want to pay" required>
                    </div>
                    <div class="mb-4 col-md-6 form-group">
                        <label>Payment description</label>
                        <textarea type="text" name="description" class="form-control" placeholder="Please specify what you are paying for" required></textarea>
                    </div>
                </div>

                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                <input type="hidden" name="metadata" value="{{ json_encode(['key_name' => 'value']) }}">

                <button class="btn btn-success btn-lg btn-block" type="submit">
                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                </button>
            </div>
        </div>
    </form>
</div>

@endsection


