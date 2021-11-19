@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>
    <a target="_blank" href="{{ route('connectSlack', ['token']) }}">Connect</a>
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'setting' });
    </script>
@endsection
