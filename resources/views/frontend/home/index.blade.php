@extends('frontend.layout.master')

@section('content')
    <main>
        <section class="section">
            <div class="container">
                <div class="row no-gutters-lg">
                    <div class="col-12">
                        <h2 class="section-title">Latest Articles</h2>
                    </div>
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="row table-data">
                            <div class="col-12 mb-4">
                                <article class="card article-card">
                                    <a href="{{ route('frontend.read-more', $posts[0]->id) }}">
                                        <div class="card-image">
                                            <div class="post-info"> <span
                                                    class="text-uppercase">{{ $posts[0]->created_at->format('d M Y') }}</span>
                                                <span
                                                    class="text-uppercase">{{ round(Str::of($posts[0]->description)->wordCount() / 238, 2) }}
                                                    minutes read</span>
                                            </div>
                                            <img loading="lazy" decoding="async"
                                                src="{{ asset('storage/images/post/' . $posts[0]->image->filename) }}"
                                                alt="Post Thumbnail" class="w-100">
                                        </div>
                                    </a>
                                    <div class="card-body px-0 pb-1">
                                        <ul class="post-meta mb-2">
                                            <li>
                                                @foreach ($posts[0]->tags as $post)
                                                    <a href="#">{{ $post->tag }}</a>
                                                @endforeach

                                            </li>
                                        </ul>
                                        <h2 class="h1"><a class="post-title" href="{{ route('frontend.read-more', $posts[0]->id) }}">{{ $posts[0]->title }}</a>
                                        </h2>
                                        <p class="card-text">{{ Str::limit($posts[0]->description, 200) }}</p>
                                        <div class="content"> <a class="read-more-btn" href="{{ route('frontend.read-more', $posts[0]->id) }}">Read Full Article</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @for ($i = 1; $i < count($posts); $i++)
                                <div class="col-md-6 mb-4 ">
                                    <article class="card article-card article-card-sm h-100">
                                        <a href="{{ route('frontend.read-more', $posts[$i]->id) }}">
                                            <div class="card-image">
                                                <div class="post-info"> <span
                                                        class="text-uppercase">{{ $posts[$i]->created_at->format('d M Y') }}</span>
                                                    <span
                                                        class="text-uppercase">{{ round(Str::of($posts[$i]->description)->wordCount() / 238, 2) }}
                                                        minutes read</span>
                                                </div>
                                                <img loading="lazy" decoding="async"
                                                    src="{{ asset('storage/images/post/' . $posts[$i]->image->filename) }}"
                                                    alt="Post Thumbnail" class="w-100">
                                            </div>
                                        </a>
                                        <div class="card-body px-0 pb-0">
                                            <ul class="post-meta mb-2">

                                                <li>
                                                    @foreach ($posts[$i]->tags as $post)
                                                        <a href="#">{{ $post->tag }}</a>
                                                    @endforeach
                                                </li>
                                            </ul>
                                            <h2><a class="post-title" href="{{ route('frontend.read-more', $posts[$i]->id) }}">{{ $posts[$i]->title }}</a></h2>
                                            <p class="card-text">{{ Str::limit($posts[$i]->description, 200) }}</p>
                                            <div class="content"> <a class="read-more-btn"
                                                    href="{{ route('frontend.read-more', $posts[$i]->id) }}">Read Full
                                                    Articless</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endfor


                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12">
                                        <nav class="mt-4">
                                            <!-- pagination -->
                                            <nav class="mb-md-50">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#!" aria-label="Pagination Arrow">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                height="26" fill="currentColor" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                                                            </svg>
                                                        </a>
                                                    </li>
                                                    <li class="page-item active "> <a href="index.html" class="page-link">
                                                            1
                                                        </a>
                                                    </li>
                                                    <li class="page-item"> <a href="#!" class="page-link">
                                                            2
                                                        </a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#!" aria-label="Pagination Arrow">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                height="26" fill="currentColor" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd"
                                                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-blocks">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="widget">
                                        <div class="widget-body">
                                            <img loading="lazy" decoding="async"
                                                src="{{ asset('frontend/images/author.jpg') }}" alt="About Me"
                                                class="w-100 author-thumb-sm d-block">
                                            <h2 class="widget-title my-3">Yubraj Koirala</h2>
                                            <p class="mb-3 pb-2">Hello, I’m Yubraj Koirala. A Content writter, Developer and
                                                Story teller.
                                                Working as a Web Developer at Six Sigma Inc.</p> <a href="about.html"
                                                class="btn btn-sm btn-outline-primary">Know
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="widget">
                                        <h2 class="section-title mb-3">Categories</h2>
                                        <div class="widget-body">
                                            <ul class="widget-list">
                                                @foreach ($categories as $category)
                                                    <li><a href="#!">{{ $category->category }}<span
                                                                class="ml-auto">({{ $category->posts_count }})</span></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="widget">
                                        <h2 class="section-title mb-3">Tags</h2>
                                        <div class="widget-body">
                                            <ul class="widget-list">
                                                @foreach ($tags as $tag)
                                                    <li><a href="#!">{{ $tag->tag }}<span
                                                                class="ml-auto">({{ $tag->posts_count }})</span></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
