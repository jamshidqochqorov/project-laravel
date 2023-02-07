@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="pt-3">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div>
                                    <div class="text-center">
                                        <div class="mb-4">
                                            <a href="javascript: void(0);" class="badge bg-light font-size-12">
                                                <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                            </a>
                                        </div>
                                        <h4>{{$article->title}}</h4>
                                        <p class="text-muted mb-4"><i class="mdi mdi-calendar me-1"></i> {{$article->created_at->diffForHumans()}}</p>
                                    </div>

                                    <hr>
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div>
                                                    <p class="text-muted mb-2">Categories</p>
                                                    <h5 class="font-size-15">Project</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mt-4 mt-sm-0">
                                                    <p class="text-muted mb-2">Date</p>
                                                    <h5 class="font-size-15">10 Apr, 2020</h5>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mt-4 mt-sm-0">
                                                    <p class="text-muted mb-2">Post by</p>
                                                    <h5 class="font-size-15">Gilbert Smith</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="my-5">
                                        <img src="/assets/images/small/img-2.jpg" alt="" class="img-thumbnail mx-auto d-block">
                                    </div>

                                    <hr>

                                    <div class="mt-4">
                                        <div class="text-muted font-size-14">
                                           <p>{{$article->body}}</p>
                                            <div class="mt-4">
                                                <h5 class="mb-3">TAG</h5>

                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-sm-6">
                                                            <div>
                                                                <ul class="ps-4">
                                                                   @foreach($article->tags as $tag)
                                                                        <li class="py-1">{{$tag->label}}</li>
                                                                    @endforeach()
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <hr>

                                        <div class="mt-5">
                                            <h5 class="font-size-15"><i class="bx bx-message-dots text-muted align-middle me-1"></i> Comments :</h5>
                                            @foreach($article->comments as $comment)
                                                <div>
                                                    <div class="d-flex py-3">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-xs">
                                                                <div class="avatar-title rounded-circle bg-light text-primary">
                                                                    <i class="bx bxs-user"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="font-size-14 mb-1">{{$comment->subject}}<small class="text-muted float-end">1 hr Ago</small></h5>
                                                            <p class="text-muted">{{$comment->body}}</p>

                                                        </div>
                                                    </div>
                                                    <div class="d-flex py-3 border-top">
                                                        <div class="flex-shrink-0 me-3">
                                                            <div class="avatar-xs">
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid d-block rounded-circle">
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>

                                            @endforeach()
                                        </div>

                                        <div class="mt-4">
                                            <h5 class="font-size-16 mb-3">Leave a Message</h5>

                                            <form>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="commentname-input" class="form-label">Name</label>
                                                            <input type="text" class="form-control" id="commentname-input" placeholder="Enter name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="commentemail-input" class="form-label">Email</label>
                                                            <input type="email" class="form-control" id="commentemail-input" placeholder="Enter email">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="commentmessage-input" class="form-label">Message</label>
                                                    <textarea class="form-control" id="commentmessage-input" placeholder="Your message..." rows="3"></textarea>
                                                </div>

                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-success w-sm">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
@endsection()
