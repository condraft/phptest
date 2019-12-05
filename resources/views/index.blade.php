@extends('layouts.layout')
@section('main')
<div class='maincon'>
  <h2 class='test'>
    Profile
    <section>
      <img class="prophoto" src="{{ asset('image/self.jpg') }}" alt="プロフィール写真">
    </section>
  </h2>
  <h2 class='test'>
    App
  </h2>
</div>

@endsection