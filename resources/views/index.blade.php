@extends('layouts.layout')
@section('main')
<div class='maincon'>
  <h2 id='prof'>
    <section class='profile'>
      
      <img class="prophoto" src="{{ asset('image/self.jpg') }}" alt="プロフィール写真">
      <div class='pass'>
        About
        <p class='setumei'>
          とある事情で会社を辞め自分を見つめ直し<br>ITエンジニアになりたい夢を追うことにした33歳<br>
          Techexpertなんば校６１期卒業生<br>しゃべりはできるがIT経験全く無し<br>『昨日の自分より必ず成長する』の座右の銘と共に<br>愉快なおじさん今日も往く
        </p>
      </div>
      <div class='study'>
        Studying
        <p class='setumei'>
          ・Html　・CSS　・Javascript<br>・Ruby　・Rails　・Python<br>・PHP　・Laravel　・AWS
        </p>
      </div>

    </section>
  </h2>
  <h2 id='app'>
    App
    <p class='setumei'>
    <a href='http://54.238.5.113/'target="_blank">某フリマアプリクローン<i class="fas fa-external-link-alt"></i></a>
    </p>
    <p class='setumei'>
      TechExpertにてチームで開発したクローンアプリです。
    </p>
    <div>
      aaaaaaaaaaaaaaaaaaaaaaaaaa
    </div>
    <div>
      aaaaaaaaaaaaaaaaaaaaaaaaaa
    </div>
    <div>
      aaaaaaaaaaaaaaaaaaaaaaaaaa
    </div>
    <div>
      aaaaaaaaaaaaaaaaaaaaaaaaaa
    </div>
    <div>
      aaaaaaaaaaaaaaaaaaaaaaaaaa
    </div>
    <div>
      aaaaaaaaaaaaaaaaaaaaaaaaaa
    </div>
  </h2>
</div>

@endsection