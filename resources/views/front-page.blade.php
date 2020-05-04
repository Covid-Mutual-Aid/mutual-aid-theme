@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @if (has_nav_menu('hero_navigation'))
       {!! wp_nav_menu([
        'theme_location' => 'hero_navigation',
        'walker' => new wp_bootstrap_navwalker(),
        'container_class' => 'container flex flex-no-wrap box-content',
        'before' => '<div class="relative flex flex-col box-border max-w-25">',
        'after' => '</div>',
      ]) !!}
    @endif
    @include('partials.content-front-page')
  @endwhile
@endsection


