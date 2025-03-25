<div>



    <div id="comments" class="clearfix">

        <h3 id="comments-title"><span>{{ $event->comments->count() }}</span> Comments</h3>

        <!-- Comments List
    ============================================= -->
        <ol class="clearfix commentlist">

            @forelse ($comments as $comment)
                <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1"
                    id="li-comment-2">

                    <div id="comment-2" class="clearfix comment-wrap">

                        <div class="comment-meta">

                            <div class="comment-author vcard">

                                <span class="clearfix comment-avatar">
                                    <img alt='Image' src=https://img.icons8.com/quill/100/chat-message.png
                                        class='avatar avatar-60 photo' height='70' width='70' /></span>

                            </div>

                        </div>

                        <div class="clearfix comment-content">

                            <div class="comment-author"><a href='https://themeforest.net/user/semicolonweb'
                                    rel='external nofollow' class='url'> {{ $comment->name }}</a><span><a
                                        href="#" title="Permalink to this comment">
                                        {{ $comment->created_at->diffForHumans() }}</a></span></div>

                            <p> {{ $comment->comment }}</p>

                            {{-- <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a> --}}

                        </div>




                        <div class="clear"></div>

                    </div>

                </li>
            @empty

                <div class="py-4 text-center text-muted center">
                    <p class="mb-0">No comments yet. Be the first to comment!</p>
                </div>
            @endforelse

            <div>
                @if ($comments->hasPages())
                    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
                        <span>
                            {{-- Previous Page Link --}}
                            @if ($comments->onFirstPage())
                                <span
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-500 bg-white border border-gray-300 rounded-md cursor-default">
                                    {!! __('pagination.previous') !!}
                                </span>
                            @else
                                <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev"
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700">
                                    {!! __('pagination.previous') !!}
                                </button>
                            @endif
                        </span>

                        <span>
                            {{-- Next Page Link --}}
                            @if ($comments->hasMorePages())
                                <button wire:click="nextPage" wire:loading.attr="disabled" rel="next"
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 active:bg-gray-100 active:text-gray-700">
                                    {!! __('pagination.next') !!}
                                </button>
                            @else
                                <span
                                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium leading-5 text-gray-500 bg-white border border-gray-300 rounded-md cursor-default">
                                    {!! __('pagination.next') !!}
                                </span>
                            @endif
                        </span>
                    </nav>
                @endif
            </div>
        </ol><!-- .commentlist end -->


        <div class="clear"></div>

        <!-- Comment Form
    ============================================= -->
        <div id="respond">

            @if (session()->has('message'))
            <div style="background-color: #ebf8ff; color:#215312; padding: 8px; border-radius: 5px; margin-bottom: 16px;">
                {{ session('message') }}
            </div>
        @endif

            <h3>Leave a <span>Comment</span></h3>

            <form class="row" id="commentform">
                @csrf
                <div class="col-md-12 form-group">
                    <label for="author">Name</label>
                    <input type="text" name="author" wire:model="name" id="author" value="" size="22"
                        tabindex="1" class="sm-form-control" placeholder="your name" />
                    @error('name')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>



                <div class="w-100"></div>

                <div class="col-12 form-group">
                    <label for="comment">Comment</label>
                    <textarea name="comment" placeholder="your message" wire:model="comment" cols="58" rows="7" tabindex="4"
                        class="sm-form-control"></textarea>
                    @error('comment')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-12 form-group">
                    <button wire:click="submitComment" tabindex="5" class="m-0 button button-3d">Submit
                        Comment</button>

                </div>
            </form>

        </div><!-- #respond end -->

    </div>
</div>
