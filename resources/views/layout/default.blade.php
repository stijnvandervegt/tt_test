<!DOCTYPE html>
<html>
    @include('common.head')
    <body  id="app">
        <div class="wrapper">
            @include('parts.header')
                <div class="content">
                    @yield('body')
                </div>
        </div>
        @include('parts.footer')
    </body>
    @include('common.foot')
</html>