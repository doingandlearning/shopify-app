@extends('shopify-app::layouts.default')

@section('content')
    <h2>Welcome</h2>

@endsection

@section('scripts')
    @parent

    <script type="text/javascript">
      // ESDK page and bar title
      window.mainPageTitle = 'Welcome Page';
      ShopifyApp.ready(function() {
        ShopifyApp.Bar.initialize({
          title: 'Welcome'
        })
      });
    </script>
@endsection