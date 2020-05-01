@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @if (has_nav_menu('hero_navigation'))
       {!! wp_nav_menu([
        'theme_location' => 'hero_navigation',
        'walker' => new wp_bootstrap_navwalker()
      ]) !!}
    @endif
    @include('partials.content-front-page')
  @endwhile
@endsection


