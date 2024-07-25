<div>
    <div>
        <div>
            <section class="bg-light">
                <div class="container py-5">
                    <div class="p-5 shadow lc-block rounded-3 col-xl-10 offset-xl-1">
                        @if (session()->has('success_message'))
                            <div class="alert alert-success" style="background-color: #006400; color: white;">
                                {{ session()->get('success_message') }}
                            </div>
                        @elseif (session()->has('error_message'))
                            <div class="alert alert-danger">
                                {{ session()->get('error_message') }}
                            </div>
                        @endif

                        <form wire:submit.prevent="save">
                            <div class="form-group">
                                <p>Have you transferred already?</p>
                                <label class="radio-inline">
                                    <input type="radio" wire:model.live="transfer" value="yes"> Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" wire:model.live="transfer" value="no"> No
                                </label>
                                <br>
                                @error('transfer') <span class="error text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="row">
                                <div class="mb-4 col-md-6 form-group">
                                    <label>Your Full Name</label>
                                    <input type="text" wire:model="name" class="form-control" placeholder="Write your full name">
                                    @error('name') <span style="color: red;">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-4 col-md-6 form-group">
                                    <label>Your Email Address</label>
                                    <input type="email" wire:model="email" class="form-control" placeholder="youremail@example.com">
                                    @error('email') <span style="color: red;">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-4 col-md-6 form-group">
                                    <label>Your Phone Number</label>
                                    <input type="text" wire:model="phone" class="form-control" placeholder="Please write your phone number">
                                    @error('phone') <span style="color: red;">{{ $message }}</span> @enderror
                                </div>

                                @if($transfer == 'no')
                                    <div class="mb-4 col-md-6 form-group">
                                        <label>How much do you want to pay?</label>
                                        <input type="number" placeholder="Specify Amount in Naira" class="form-control" wire:model.live="amount">
                                        @error('amount') <span class="error text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <button type="submit" class="btn btn-lg" style="background-color: #215312; border-color: #28a745; color: white;">
                                        pay
                                    </button>
                                @else
                                <div class="mb-4 col-md-6 form-group">
                                    <label>How much did you pay?</label>
                                    <input type="number" placeholder="Specify Amount in Naira you transfered" class="form-control" wire:model.live="amount_paid">
                                    @error('amount_paid') <span class="error text-danger">{{ $message }}</span> @enderror
                                </div>
                                    <div class="mb-4 col-md-6 form-group">
                                        <label>Transaction Reference</label>
                                        <input type="text" wire:model="transaction_ref" class="form-control" placeholder="Upload the transaction reference number">
                                        @error('transaction_ref') <span style="color: red;">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-4 col-md-6 form-group">
                                        <label>Upload the Transaction File</label>
                                        <input type="file" wire:model="file" class="file-loading form-control" data-show-preview="false">
                                        @error('file') <span style="color: red;">{{ $message }}</span> @enderror
                                    </div>
                                    <button type="submit" class="btn btn-lg" style="background-color: #215312; border-color: #28a745; color: white;">
                                        Submit
                                    </button>
                                @endif
                            </div>
                            <h5 class="mt-4 text-center fw-normal text-white-50 mb-0"><a href="/testing" class="text-black"><u><strong>Click here or reload this page for the account number</strong></u></a></h5>
                        </form>

                    </div>
                </div>

            </section>
        </div>
    </div>
</div>
