@extends('layouts.master')

@section('foot')
<script>
$(document).ready(function() {
    $('form#request-listing').on('submit', function() {
        $(this).find('button[type="submit"]').attr('disabled', 'disabled');
    });
});
</script>
@stop

@section('main')
    <div class="page-header">
        <h1>{{ $page->title() }}</h1>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-textured">
                <div class="panel-body">
                    <div class="alert alert-info form-intro">
                        {!! $page->formIntro()->kirbytext() !!}
                    </div>
                    @include('_form-errors')
                    <form method="POST" class="form-horizontal" id="request-listing">
                        <div class="form-group {{ r($form->error('name'), 'has-error') }}">
                            <label for="name" class="control-label col-sm-4">Your name *</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="name" placeholder="Your name" class="form-control" value="{{ $form->old('name') }}">
                            </div>
                        </div>
                        <div class="form-group {{ r($form->error('email'), 'has-error') }}">
                            <label for="email" class="control-label col-sm-4">Your email *</label>
                            <div class="col-sm-6">
                                <input type="email" name="email" id="email" placeholder="Your email" class="form-control" value="{{ $form->old('email') }}">
                            </div>
                        </div>
                        <div class="form-group {{ r($form->error('phone'), 'has-error') }}">
                            <label for="phone" class="control-label col-sm-4">Your phone *</label>
                            <div class="col-sm-6">
                                <input type="tel" name="phone" id="phone" placeholder="Your phone" class="form-control" value="{{ $form->old('phone') }}">
                            </div>
                        </div>
                        <div class="form-group {{ r($form->error('business_type'), 'has-error') }}">
                            <label for="business_type" class="control-label col-sm-4">Business type *</label>
                            <div class="col-sm-6">
                                <div class="radio">
                                    <label for="attraction">
                                        <input type="radio" name="business_type" id="attraction" value="attraction" {{ r($form->old('business_type') == 'attraction', 'checked') }}>
                                        Attraction
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="lodging">
                                        <input type="radio" name="business_type" id="lodging" value="lodging" {{ r($form->old('business_type') == 'lodging', 'checked') }}>
                                        Lodging
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="restaurant">
                                        <input type="radio" name="business_type" id="restaurant" value="restaurant" {{ r($form->old('business_type') == 'restaurant', 'checked') }}>
                                        Restaurant
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group {{ r($form->error('business_name'), 'has-error') }}">
                            <label for="business_name" class="control-label col-sm-4">Business name *</label>
                            <div class="col-sm-6">
                                <input type="text" name="business_name" id="business_name" placeholder="Business name" class="form-control" value="{{ $form->old('business_name') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="website" class="control-label col-sm-4">Business website</label>
                            <div class="col-sm-6">
                                <input type="url" name="website" id="website" placeholder="http://" class="form-control" value="{{ $form->old('business_website') }}">
                            </div>
                        </div>
                        <div class="form-group {{ r($form->error('business_phone'), 'has-error') }}">
                            <label for="business_phone" class="control-label col-sm-4">Business phone *</label>
                            <div class="col-sm-6">
                                <input type="tel" name="business_phone" id="business_phone" placeholder="Business phone" class="form-control" value="{{ $form->old('business_phone') }}">
                            </div>
                        </div>
                        <div class="form-group {{ r($form->error('business_address'), 'has-error') }}">
                            <label for="business_address" class="control-label col-sm-4">Business address *</label>
                            <div class="col-sm-6">
                                <input type="text" name="business_address" id="business_address" placeholder="123 Street, City, ST ZIP" class="form-control" value="{{ $form->old('business_address') }}">
                            </div>
                        </div>
                        <div class="form-group {{ r($form->error('business_description'), 'has-error') }}">
                            <label for="business_description" class="control-label col-sm-4">Marketing brief *</label>
                            <div class="col-sm-6">
                                <textarea name="business_description" id="business_description" placeholder="Brief marketing description of the business" class="form-control" rows="4">{{ $form->old('business_description') }}</textarea>
                                <span class="help-block">2 - 4 sentences, intended for public audience.</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tripadvisor" class="control-label col-sm-4">TripAdvisor URL</label>
                            <div class="col-sm-6">
                                <input type="url" name="tripadvisor" id="tripadvisor" placeholder="http://" class="form-control" value="{{ $form->old('tripadvisor') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="facebook" class="control-label col-sm-4">Facebook URL</label>
                            <div class="col-sm-6">
                                <input type="url" name="facebook" id="facebook" placeholder="http://" class="form-control" value="{{ $form->old('facebook') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="twitter" class="control-label col-sm-4">Twitter URL</label>
                            <div class="col-sm-6">
                                <input type="url" name="twitter" id="twitter" placeholder="http://" class="form-control" value="{{ $form->old('twitter') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="instagram" class="control-label col-sm-4">Instagram URL</label>
                            <div class="col-sm-6">
                                <input type="url" name="instagram" id="instagram" placeholder="http://" class="form-control" value="{{ $form->old('instagram') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit for Review
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
