@extends('layouts.app')

@section('content')
  <section class="section-sm">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 mb-5 mb-lg-0">
          <h2 class="h5 section-title">Recent Post</h2>


          <article class="card mb-4">
            <div class="row card-body">
              <div class="col-md-4 mb-4 mb-md-0">
                <div class="post-slider slider-sm">
                  <img src="images/post/post-3.jpg" class="card-img" alt="post-thumb"
                    style="height:200px; object-fit: cover;">
                </div>
              </div>
              <div class="col-md-8">
                <h3 class="h4 mb-3"><a class="post-title" href="post-details.html">Advice From a Twenty Something</a>
                </h3>
                <ul class="card-meta list-inline">
                  <li class="list-inline-item">
                    <a href="author-single.html" class="card-meta-author">
                      <img src="images/john-doe.jpg">
                      <span>Mark Dinn</span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <i class="ti-timer"></i>2 Min To Read
                  </li>
                  <li class="list-inline-item">
                    <i class="ti-calendar"></i>14 jan, 2020
                  </li>
                  <li class="list-inline-item">
                    <ul class="card-meta-tag list-inline">
                      <li class="list-inline-item"><a href="tags.html">Decorate</a></li>
                      <li class="list-inline-item"><a href="tags.html">Creative</a></li>
                    </ul>
                  </li>
                </ul>
                <p>It’s no secret that the digital industry is booming. From exciting startups to global brands</p>
                <a href="post-details.html" class="btn btn-outline-primary">Read More</a>
              </div>
            </div>
          </article>




        </div>
      </div>
    </div>
  </section>
@endsection
