{{-- <h1> This is about page </h1> --}}

{{-- <a href="{{ route('home') }}">Home</a>
<a href="{{ route('mypost') }}">Post</a> --}}

    {{-- @include('pages.header')
        <article>
            <h1>about Page</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </article>
    @include('pages.footer') --}}

@extends('layouts.masterlayout')

@section('content')
    <h2>About Page</h2>
    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> --}}

    @verbatim
        <div id="app">{{ message }}</div>
    @endverbatim

@endsection

@section('title')
    About
@endsection

@section('sidebar')
    <p>About Sidebar: </p>
    @parent
@endsection

@push('scripts')

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script>
  const { createApp, ref } = Vue

  createApp({
    setup() {
      const message = ref('Hello vue!')
      return {
        message
      }
    }
  }).mount('#app')
</script>
    
@endpush