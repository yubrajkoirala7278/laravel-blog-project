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
                                                    <a href="{{ route('frontend.read-more', $posts[0]->id) }}">{{ $post->tag }}</a>
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
                                                        <a href="{{ route('frontend.read-more', $posts[$i]->id) }}">{{ $post->tag }}</a>
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
                            {{$posts->links()}}
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
                                                    <li><a href="{{route('frontend.category',$category->id)}}">{{ $category->category }}<span
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
                                                    <li><a href="{{route('frontend.tag',$tag)}}">{{ $tag->tag }}<span
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
