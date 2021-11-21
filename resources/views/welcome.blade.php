@extends('shopify-app::layouts.default')

@section('styles')
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="container">
        <div class="row">
{{--            <div class="col-12">--}}
{{--                <a href="{{ asset('document.html') }}" target="_blank">{{ trans('Document') }}</a>--}}
{{--            </div>--}}
            <div class="col-12 mt-5">
                <div class="bg-light p-5 rounded row">
                    <div class="col-8">
                        <h3>{{ trans('Slack Integration') }}</h3>
                        <p>{{ trans('Send activity notifycations into Slack') }}</p>
                    </div>
                    <div class="col-4 pull-right">
                        @if (empty($user->channelSlack))
                            <a target="_blank" href="{{ route('connectSlack', ['token' => $user->getJWTtoken()]) }}">
                                <img alt="Add to Slack" height="40" width="139" src="{{ asset('images/add_to_slack.png') }}" >
                            </a>
                        @else
                            <a target="_blank" href="{{ route('disconnectSlack', ['token' => $user->getJWTtoken()]) }}">
                                <img alt="Add to Slack" height="40" width="139" src="{{ asset('images/disconnect-from-slack.png') }}" >
                            </a>
                        @endif
                    </div>
                </div>
                <div class="bg-light mt-3 p-5 rounded row">
                    <div class="col-6">
                        <label for="">{{ trans('Message format') }}</label>
                        <textarea id="formatmessage" rows="5" class="form-control">{{ $user->format_message }}</textarea>
                        <p class="text-bold">{order_name},{line_items},{total_price},{payment_method},{link}</p>
                    </div>
                    <div class="col-6">

                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" id="saveSeting">{{ trans('Save') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script>
        actions.TitleBar.create(app, { title: 'setting' });
        $(document).ready(function (){
            var Toast = actions.Toast;
            $('#saveSeting').click(function () {
                console.log($('#formatmessage').val());
                $.ajax({
                    type: 'post',
                    data:  'message='+$('#formatmessage').val(),
                    url: '/',
                    success: function () {
                         var toastOptions = {
                            message: 'Message Saved',
                            duration: 5000,
                        };
                        var toastNotice = Toast.create(app, toastOptions);
                        toastNotice.dispatch(Toast.Action.SHOW);
                    }
                });
            });
        });
    </script>
@endsection
