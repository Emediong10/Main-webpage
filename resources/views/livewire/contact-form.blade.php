<div>
    <div>
        <section class="bg-light">
               <div class="container py-5">
                   <div class="p-5 lc-block">
                       <div class="lc-block">

                       </div>
                       <div class="block">
                           <div editable="rich">
                               <h2 class="fw-bolder display-5 center">Get in touch with us. How can we serve you better</h2>
                           </div>
                       </div>
                     
                   </div>

                   <div class="p-5 shadow lc-block rounded-3 col-xl-10 offset-xl-1">

                   {{-- @if(!empty($successMessage))
                   <div class="alert alert-success" style="background-color: #006400; color: white;">
                       {{ $successMessage }}
                   </div>
               @endif --}}
               {{-- @if(!empty($successMsg))
                   <div class="alert alert-success" style="background-color: #006400; color: white;">
                       {{ $successMsg }}
                   </div>
               @endif  --}}
               @if (session()->has('success_message'))
                   <div class="alert alert-success" style="background-color: #006400; color: white;">
                       {{ session()->get('success_message') }}
                   </div>
               @elseif (session()->has('error_message'))
                   <div class="alert alert-danger">
                       {{ session()->get('error_message') }}
                   </div>
               @endif


                       <form wire:submit="save">
                           <div class="row">
                               <div class="mb-4 col-md-6 form-group">
                                   <label>Your First Name</label>
                                   <input type="text" wire:model = "firstname" class="form-control" placeholder="Write your first name">
                                   @error('firstname') <span style="color: red;">{{ $message }}</span> @enderror
                               </div>

                               <div class="mb-4 col-md-6 form-group">
                                   <label>Your Last Name</label>
                                   <input type="text" wire:model="lastname" class="form-control" placeholder="Write your last name">
                                   @error('lastname') <span style="color: red;">{{ $message }}</span> @enderror
                               </div>
                           </div>
                           <div class="row">
                           <div class="mb-4 col-md-6 form-group">
                               <label>Your Email Address</label>
                               <input type="email" wire:model="email" class="form-control" placeholder="your@example.com">
                               @error('email') <span style="color: red;">{{ $message }}</span> @enderror
                           </div>
                           <div class="mb-4 col-md-6 form-group">
                            <label>Your Phone Number</label>
                            <input type="text" wire:model="phone" class="form-control" placeholder="please write your phone number">
                            @error('phone') <span style="color: red;">{{ $message }}</span> @enderror
                        </div>
                        </div>
                           <div class="mb-4 form-group">
                               <label>Subject</label>
                               <input type="text" wire:model="subject" class="form-control" placeholder="Contact Subject">
                           </div>

                           <div class="mb-4 form-group">
                               <label>Your Message</label>
                               <textarea wire:model="comment" class="form-control" rows="3" maxlength="300"></textarea>
                               @error('comment') <span style="color: red;">{{ $message }}</span> @enderror
                           </div>
                           <button type="submit" class="btn btn-lg" style="background-color:#215312; border-color: #28a745; color: white;">
                            Submit Form
                        </button>

                       </form>
                   </div>
               </div>
           </section>
       </div>

</div>

