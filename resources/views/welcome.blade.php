@extends('layouts.app')
@section('body-class', 'welcome')
@section('content')

<!-- Banner -->
<section id="banner">
    <div class="content">
        <h1>Personal and Business Cloud</h1>
        <div id="text-carousel" class="carousel slide" data-ride="carousel">
            <div class="col-xs-offset-3 col-xs-6">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="carousel-content">
                            <div>
                                <p>I will host your website for as low as <strong>UGX 10,000</strong>. Save 
                                    <strong>20%</strong> on Yearly Plans.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-content">
                            <div>
                                <p>A managed <strong>Laravel</strong> app hosting for 
                                    <strong>UGX 55,000/mo</strong>.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-content">
                            <div>
                                <p>We will build a cloud applocation for your bussiness for as low a 
                                    <strong>UGX 2 million.</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style1 special">
    <div class="inner">
        <h2>Launch your business in the cloud today</h2>
        <figure>
            <blockquote>
                "Secure, global, high-performance, cost-effective and constantly improving. Our cloud <br>service is for the long haul."
            </blockquote>
            <footer>
                <cite class="author">Ambrose Mwaka</cite>
                <cite class="company">CTO, TrustFinity</cite>
            </footer>
        </figure>
        <br>
        <p>&copy 2017 ambrose.pro  TrustFinity Developer</p>
    </div>
</section>

<!-- Three -->
{{-- <section id="three" class="wrapper">
    <div class="inner flex flex-3">
    </div>
</section> --}}
@endsection