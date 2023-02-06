@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <div class="card">

                <!-- Tab panes -->
                <div class="tab-content p-4">
                    <div class="tab-pane active" id="all-post" role="tabpanel">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div>
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <div>
                                                    <h5 class="mb-0">Blog List</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <hr class="mb-4">

                                        <div class="row">
                                            @foreach($articles as $article)
                                                <div class="col-sm-4">
                                                    <div class="card p-1 border shadow-none">
                                                        <div class="p-3">
                                                            <h5><a href="blog-details.html" class="text-dark">{{Str::limit($article->title,25)}}</a></h5>
                                                            <p class="text-muted mb-0">{{$article->created_at->diffForHumans()}}</p>
                                                        </div>

                                                        <div class="position-relative">
                                                            <img src="{{$article->img}}" alt="" class="img-thumbnail">
                                                        </div>

                                                        <div class="p-3">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-heart align-middle text-muted me-1"></i> {{$article->state->likes}}
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item me-3">
                                                                    <a href="javascript: void(0);" class="text-muted">
                                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> {{$article->comments->count()}}
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <p>{{Str::limit($article->body,60)}}</p>

                                                            <div>
                                                                <a href="javascript: void(0);" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach()

                                        </div>




                                        <hr class="my-4">

                                        <div class="text-center">
                                            <ul class="pagination justify-content-center pagination-rounded">
                                                {{$articles->links()}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane" id="archive" role="tabpanel">
                        <div>
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <h5>Archive</h5>

                                    <div class="mt-5">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-2">
                                                <h4>2020</h4>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="badge badge-soft-success badge-pill float-end ms-1 font-size-12">03</span>
                                            </div>
                                        </div>
                                        <hr class="mt-2">

                                        <div class="list-group list-group-flush">
                                            <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Beautiful Day with Friends</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Project discussion with team</a>

                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-2">
                                                <h4>2019</h4>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="badge badge-soft-success badge-pill float-end ms-1 font-size-12">06</span>
                                            </div>
                                        </div>
                                        <hr class="mt-2">

                                        <div class="list-group list-group-flush">
                                            <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Coffee with Friends</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Neque porro quisquam est</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Quis autem vel eum iure</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Cras mi eu turpis</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Project discussion with team</a>

                                        </div>
                                    </div>

                                    <div class="mt-5">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-2">
                                                <h4>2018</h4>
                                            </div>
                                            <div class="ms-auto">
                                                <span class="badge badge-soft-success badge-pill float-end ms-1 font-size-12">03</span>
                                            </div>
                                        </div>
                                        <hr class="mt-2">

                                        <div class="list-group list-group-flush">
                                            <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Beautiful Day with Friends</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Drawing a sketch</a>

                                            <a href="blog-details.html" class="list-group-item text-muted"><i class="mdi mdi-circle-medium me-1"></i> Project discussion with team</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-xl-3 col-lg-4">
            <div class="card">
                <div class="card-body p-4">
                    <div class="search-box">
                        <p class="text-muted">Search</p>
                        <div class="position-relative">
                            <input type="text" class="form-control rounded bg-light border-light" placeholder="Search...">
                            <i class="mdi mdi-magnify search-icon"></i>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div>
                        <p class="text-muted">Categories</p>

                        <ul class="list-unstyled fw-medium">
                            @foreach($tags as $tag)
                                <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i>{{$tag->label}}</a></li>
                            @endforeach()
                        </ul>
                    </div>

                    <hr class="my-4">

                    <div>
                        <p class="text-muted">Archive</p>

                        <ul class="list-unstyled fw-medium">
                            <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> 2020 <span class="badge badge-soft-success badge-pill float-end ms-1 font-size-12">03</span></a></li>
                            <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> 2019 <span class="badge badge-soft-success badge-pill float-end ms-1 font-size-12">06</span></a></li>
                            <li><a href="javascript: void(0);" class="text-muted py-2 d-block"><i class="mdi mdi-chevron-right me-1"></i> 2018 <span class="badge badge-soft-success badge-pill float-end ms-1 font-size-12">05</span></a></li>
                        </ul>
                    </div>

                    <hr class="my-4">

                    <div>
                        <p class="text-muted mb-2">Popular Posts</p>

                        <div class="list-group list-group-flush">

                            <a href="javascript: void(0);" class="list-group-item text-muted py-3 px-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="assets/images/small/img-7.jpg" alt="" class="avatar-md h-auto d-block rounded">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 text-truncate">Beautiful Day with Friends</h5>
                                        <p class="mb-0 text-truncate">10 Apr, 2020</p>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item text-muted py-3 px-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="assets/images/small/img-4.jpg" alt="" class="avatar-md h-auto d-block rounded">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 text-truncate">Drawing a sketch</h5>
                                        <p class="mb-0 text-truncate">24 Mar, 2020</p>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript: void(0);" class="list-group-item text-muted py-3 px-2">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        <img src="assets/images/small/img-6.jpg" alt="" class="avatar-md h-auto d-block rounded">
                                    </div>
                                    <div class="flex-grow-1 overflow-hidden">
                                        <h5 class="font-size-13 text-truncate">Project discussion with team</h5>
                                        <p class="mb-0 text-truncate">11 Mar, 2020</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div>
                        <p class="text-muted">Tags</p>

                        <div class="d-flex flex-wrap gap-2 widget-tag">
                            <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Design</a></div>
                            <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Development</a></div>
                            <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Business</a></div>
                            <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Project</a></div>
                            <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Travel</a></div>
                            <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Lifestyle</a></div>
                            <div><a href="javascript: void(0);" class="badge bg-light font-size-12">Photography</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection()
