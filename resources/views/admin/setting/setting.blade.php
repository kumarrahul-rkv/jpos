@extends('admin.layouts.template')
@section('page-content')
<div class="x_panel">
    <div class="x_title">
        <h2>Setting <small>Shop setting </small></h2>
        <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">
        <br />
        <form method="post" action="{{ route('update-setting') }}" id="app-setting-form" data-parsley-validate class="form-horizontal form-label-left">
            @csrf
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="shop-name">Shop Name
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="shop-name" id="shop-name" value="{{ $setting->shop_name }}" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="shop-description">Shop Description
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="shop-description" name="shop-description" value="{{ $setting->shop_description }}" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label for="shop-address" class="control-label col-md-3 col-sm-3 col-xs-12">Shop Address</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="shop-address" class="form-control col-md-7 col-xs-12" value="{{ $setting->shop_address }}" type="text" name="shop-address">
            </div>
        </div>
        <div class="form-group">
            <label for="shop-email" class="control-label col-md-3 col-sm-3 col-xs-12">Shop Email</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="shop-email" class="form-control col-md-7 col-xs-12" value="{{ $setting->shop_email }}" type="email" name="shop-email">
            </div>
        </div>
        <div class="form-group">
            <label for="shop-contact" class="control-label col-md-3 col-sm-3 col-xs-12">Shop Contact Number</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="shop-contact" class="form-control col-md-7 col-xs-12" value="{{ $setting->shop_contact }}" type="text" name="shop-contact">
            </div>
        </div>
        <div class="form-group">
            <label for="shop-registration" class="control-label col-md-3 col-sm-3 col-xs-12">Shop Registration No.</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="shop-registration" class="form-control col-md-7 col-xs-12" value="{{ $setting->shop_registration }}" type="text" name="shop-registration">
            </div>
        </div>
        <div class="form-group">
            <label for="shop-logo" class="control-label col-md-3 col-sm-3 col-xs-12">Shop Logo</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="shop-logo" class="form-control col-md-7 col-xs-12" type="file" name="shop-logo">
            </div>
        </div>
        <div class="form-group">
            <label for="shop-logo-mini" class="control-label col-md-3 col-sm-3 col-xs-12">Shop Mini Logo</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="shop-logo-mini" class="form-control col-md-7 col-xs-12" type="file" name="shop-logo-mini">
            </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button type="submit" class="btn btn-primary">Cancel</button>
            <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>

        </form>
    </div>
</div>
@endsection
