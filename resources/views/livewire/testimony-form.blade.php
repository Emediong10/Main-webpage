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
                               <label>Your Testimony Title</label>
                               <input type="text" wire:model="subject" class="form-control" placeholder="Contact Subject">
                           </div>

                           <div class="mb-4 form-group">
                               <label>Write Your Testimony Here</label>
                               <textarea wire:model="comment" class="form-control" rows="3" placeholder="typing..." maxlength="10000"></textarea>
                               @error('comment') <span style="color: red;">{{ $message }}</span> @enderror
                           </div>



                        <div class="mb-4 form-group">
                            <label>upload your testimony Picture</label>
                            <input type="file" wire:model="image" class="file-loading form-select required" data-show-preview="false" />
                            @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" width="1000" height="600">

                        @endif
                        </div>

                        <div class="mb-4 form-group">
                            <input class="form-check-input" type="checkbox" wire:model='can_post' value="" aria-label="...">
                            <label for="inlineRadio1">Do you want us to post your testimony as a source of inspiration to everyone?</label>
                          </div>

                           <button type="submit" class="btn btn-lg" style="background-color:#215312; border-color: #28a745; color: white;">
                            Submit here
                        </button>

                       </form>
                   </div>
               </div>
           </section>
       </div>

</div>


