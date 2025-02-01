@extends('components.filament-fabricator.layouts.canvas')
<title>Payment</title>
@section('payment')
    <div class="container mt-5">
        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
            @csrf
            <div class="card">
                <div class="card-body">
                    <br>
                    <h2 class="card center"><strong>Enter your details below to make payment to ALIVE Nigeria</strong></h2>
                    <br>
                    <div class="row">
                        <div class="mb-4 col-md-6 form-group">
                            <label>Your First Name</label>
                            <input type="text" name="firstname" class="form-control" placeholder="Write your first name"
                                required>
                        </div>
                        <div class="mb-4 col-md-6 form-group">
                            <label>Your Last Name</label>
                            <input type="text" name="lastname" class="form-control" placeholder="Write your last name"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-4 col-md-6 form-group">
                            <label>Your Email</label>
                            <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
                        </div>
                        <div class="mb-4 col-md-6 form-group">
                            <label>Your Phone Number</label>
                            <input 
                                type="text" 
                                id="phone" 
                                name="phone" 
                                class="form-control" 
                                placeholder="08012345678"
                            >
                            <small id="phoneError" style="color: red; display: none;">Phone number must be exactly 11 digits.</small>
                        </div>
                        
                        
                        
                    </div>
                    <div class="row">
                        <div class="mb-4 col-md-6 form-group">
                            <label>Amount</label>
                            <input type="number" name="amount" class="form-control" placeholder="Amount you want to pay"
                                required>
                        </div>
                        {{-- Blade Template Code --}}
                        <div class="mb-4 col-md-6 form-group">
                            <label>Payment Description</label>
                            @if (!empty(request('description')))
                            <!-- Read-only textarea for display -->
                            <textarea type="text" name="description_display" id="description_display" 
                                      class="form-control bg-light" placeholder="Please specify what you are paying for" 
                                      readonly >
                                {{ request('description') }}
                            </textarea>
                            
                            <!-- Hidden input to store the actual value -->
                            <input type="hidden" name="description" value="{{ request('description') }}">

                        
                                {{-- Show the textarea for manual input --}}
                            @else
                                <textarea type="text" name="description" id="description" class="form-control"
                                    placeholder="Please specify what you are paying for" required>
                             </textarea>
                            @endif
                        </div>

                    </div>

                    @php
                    $paymentType = \App\Models\PaymentType::where('title', request('description'))->first();
                @endphp
                
                <input type="hidden" name="payment_type_id" value="{{ $paymentType ? $paymentType->id : '' }}">
                
                    <input type="hidden" name="description_auto"
                        value="{{ (request('description'))}}">
                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                    <input type="hidden" name="metadata" value="{{ json_encode(['key_name' => 'value']) }}">

                    <button class="btn btn-success btn-lg btn-block" type="submit">
                        <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                    </button>
                </div>
            </div>
        </form>
    </div>
    <style>
        /* Style for readonly fields to look like disabled */
        textarea[readonly] {
            background-color: #9d9e9f; /* Light gray to mimic disabled appearance */
            color: #6c757d; /* Slightly darker text color */
            cursor: not-allowed; /* Show 'not-allowed' cursor */
        }
    </style>

<script>
    document.getElementById('phone').addEventListener('input', function () {
        const phoneInput = this.value;
        const phoneError = document.getElementById('phoneError');

        if (phoneInput.length !== 11 || isNaN(phoneInput)) {
            phoneError.style.display = 'block';
        } else {
            phoneError.style.display = 'none';
        }
    });
</script>

@endsection
