@extends('frontend.layout.master')

@section('content')
<main>
  <section class="section">
    <div class="container">
      <div class="row no-gutters-lg">
        <div class="col-12">
          <h2 class="section-title">{{$post->title}}</h2>
        </div>
        <div class="col-12 mb-5 mb-lg-0">     
          <div class="row d-flex " style="row-gap: 20px"> 
            <div class="col-12"> 
                <article class="card article-card">
                    <a href="#">
                      <div class="card-image">
                        <div class="post-info"> <span class="text-uppercase">{{ $post->created_at->format('d M Y') }}</span>
                          <span class="text-uppercase">{{ round(Str::of($post->description)->wordCount() / 238, 2) }}
                            minutes read</span>
                        </div>
                        <img loading="lazy" decoding="async"
                        src="{{ asset('storage/images/post/' . $post->image->filename) }}" alt="Post Thumbnail"
                          class="w-100">
                      </div>
                    </a>
                    <div class="card-body px-0 pb-1">
                      <ul class="post-meta mb-2">
                        <li>
                            @foreach ($post->tags as $tag)
                            <a href="#">{{$tag->tag}}</a>
                            @endforeach
                        </li>
                      </ul>
                      <h2 class="h1">{{$post->title}}</h2>
                      <p class="card-text">{{$post->description}}</p>
                    </div>
                  </article>
            </div>
            <div class="col-md-4  ">
                <article class="card article-card article-card-sm h-100">
                    <a href="#">
                        <div class="card-image">
                            <div class="post-info"> <span
                                    class="text-uppercase">ggg</span>
                                <span
                                    class="text-uppercase">uh
                                    minutes read</span>
                            </div>
                            <img loading="lazy" decoding="async"
                                src="{{asset('frontend/images/post/post-1.jpg')}}"
                                alt="Post Thumbnail" class="w-100">
                        </div>
                    </a>
                    <div class="card-body px-0 pb-0">
                        <ul class="post-meta mb-2">

                            <li>
                                    <a href="#">sddd</a>
                            </li>
                        </ul>
                        <h2><a class="post-title" href="#">cc</a></h2>
                        <p class="card-text">xx</p>
                        <div class="content"> <a class="read-more-btn"
                                href="#">Read Full
                                Articless</a>
                        </div>
                    </div>
                </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection
