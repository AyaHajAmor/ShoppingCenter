@include('user.layouts.header')
@include('user.layouts.menu')
@include('user.layouts.nav')
@include('user.layouts.title')

  <!-- Main content -->
  <section id="content">
    @include('user.layouts.message')
    @yield('content')
  </section>
  <!-- /.content -->


@include('user.layouts.footer')
