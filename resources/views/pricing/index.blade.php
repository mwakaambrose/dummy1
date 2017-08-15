@extends('layouts.app')
@section('body-class', 'welcome')

@section('content')
    <div class="content_bottom">
        <div class="container">
            <div class="box3">
              <h2>Simple Pricing . Always.</h2>
              <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
    <div class="plans">
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <div class="pricing-table-grid">
                <div class="plans_head1">
                    <h3>Personal</h3>
                    <h4 class="m_4"><small class="m_2">$</small>3.5<small small class="m_3">/mo</small></h4>
                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
                </div>
                <ul>
                    <li><a href="#">Shared Infrastructure</a></li>
                    <li><a href="#">100 % up time.</a></li>
                    <li><a href="#">10GB Disk Space</a></li>
                    <li><a href="#">10GB Monthly Bandwidth</a></li>
                    <li><a href="#">Automatic Cloud Backups</a></li>
                </ul>
                <a class="popup-with-zoom-anim button1" href="#small-dialog">Order Now</a>
              </div>
        </div>
        <div class="col-md-4">
            <div class="pricing-table-grid">
                <div class="plans_head">
                    <h3>Business</h3>
                    <h4 class="m_4"><small class="m_2">$</small>15<small small class="m_3">/mo</small></h4>
                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation</p>
                </div>
                <ul>
                    <li><a href="#">20GB Disk Space</a></li>
                    <li><a href="#">20GB Monthly Bandwidth</a></li>
                    <li><a href="#">Unlimited Users</a></li>
                    <li><a href="#">430 Email Accounts</a></li>
                    <li><a href="#">Automatic Cloud Backups</a></li>
                </ul>
                <a class="popup-with-zoom-anim button" href="#small-dialog">Order Now</a>
            </div>
        </div>
        <div class="col-md-2">
        </div>
        <div class="clearfix"> </div>
   </div>
@endsection
