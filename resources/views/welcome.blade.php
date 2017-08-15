@extends('layouts.app')
@section('body-class', 'welcome')

@section('content')
<div class="header">
   <div class="header_bot_grid">
      <h1>Personal and Business Cloud App Development</h1>
        <div id="text-carousel" class="carousel slide" data-ride="carousel">
            <div class="col-xs-offset-3 col-xs-6">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="carousel-content">
                            <div>
                                <p>I will host your website for as low as <strong>UGX 10,000</strong>. Save <strong>20%</strong> on Yearly Plan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-content">
                            <div>
                                <p>A managed <strong>Laravel</strong> app hosting for <strong>UGX 20,000/mo</strong> on a 512mb VPS</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="carousel-content">
                            <div>
                                <p>I will build a cloud system for your bussiness for as low a <strong>UGX 2 million.</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <span></span>
   </div>
</div>

<div class="footer">
    <div class="container">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <p>&copy 2017 ambrose.pro a <strong>TrustFinity </strong>Developer</p>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
@endsection
