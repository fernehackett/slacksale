@extends('shopify-app::layouts.default')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <div class="bg-light p-5 rounded row">
                    <div class="col-8">
                        <h3>{{ trans('Slack Integration') }}</h3>
                        <p>{{ trans('Send activity notifycations into Slack') }}</p>
                    </div>
                    <div class="col-4">
                        <a target="_blank" href="{{ route('connectSlack', ['token' => $user->getJWTtoken()]) }}">
                            <img alt="Add to Slack" height="40" width="139" src="{{ asset('images/add_to_slack.png') }}" >
                        </a>
                        <div class="clearfix"></div>
                        @if (!empty($user->channelSlack))
                            <label class="label bg-success" for="">{{ trans('Connected') }}</label>
                        @endif
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        actions.TitleBar.create(app, { title: 'setting' });
    </script>
@endsection
