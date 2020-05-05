@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @if (has_nav_menu('hero_navigation'))
       {!! wp_nav_menu([
        'theme_location' => 'hero_navigation',
        'walker' => new wp_bootstrap_navwalker(),
        'container_class' => 'container',
        'before' => '',
        'after' => '',
        'menu_class' => 'hero_navigation -mt-20 flex justify-between font-poppins font-semibold text-black border-0 p-0 pb-40',
        'item_class' => 'border-blue w-6/25 border pt-5 pr-5 pb-5 pl-5 text-xl bg-green'
      ]) !!}
    @endif
    @include('partials.content-front-page')
  @endwhile
@endsection 


