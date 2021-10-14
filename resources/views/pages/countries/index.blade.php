@extends('layouts.app')

@section('content')
   <main class="countries">
      <div class="container">
         <h1 class="heading txt-center">{{__('Страны')}}</h1>
         <ul class="countries-list">
            <li class="countries-item">
               <a class="countries-link" href="#">
                  <img class="countries-link__img" src="{{asset('img/country1.jpg')}}">
                  <h3 class="countries-link__title txt-center">Лечение в Германии</h3>
               </a>
            </li>
            <li class="countries-item">
               <a class="countries-link" href="#">
                  <img class="countries-link__img" src="{{asset('img/country2.jpg')}}">
                  <h3 class="countries-link__title txt-center">Лечение в Израиле</h3>
               </a>
            </li>
            <li class="countries-item">
               <a class="countries-link" href="#">
                  <img class="countries-link__img" src="{{asset('img/country3.jpg')}}">
                  <h3 class="countries-link__title txt-center">Лечение в Индии</h3>
               </a>
            </li>
            <li class="countries-item">
               <a class="countries-link" href="#">
                  <img class="countries-link__img" src="{{asset('img/country4.jpg')}}">
                  <h3 class="countries-link__title txt-center">Лечение в Иране</h3>
               </a>
            </li>
            <li class="countries-item">
               <a class="countries-link" href="#">
                  <img class="countries-link__img" src="{{asset('img/country5.jpg')}}">
                  <h3 class="countries-link__title txt-center">Лечение в Казахстане</h3>
               </a>
            </li>
            <li class="countries-item">
               <a class="countries-link" href="#">
                  <img class="countries-link__img" src="{{asset('img/country6.jpg')}}">
                  <h3 class="countries-link__title txt-center">Лечение в Китае</h3>
               </a>
            </li>
            <li class="countries-item">
               <a class="countries-link" href="#">
                  <img class="countries-link__img" src="{{asset('img/country7.jpg')}}">
                  <h3 class="countries-link__title txt-center">Лечение в ОАЭ</h3>
               </a>
            </li>
            <li class="countries-item">
               <a class="countries-link" href="#">
                  <img class="countries-link__img" src="{{asset('img/country8.jpg')}}">
                  <h3 class="countries-link__title txt-center">Лечение в России</h3>
               </a>
            </li>
            <li class="countries-item">
               <a class="countries-link" href="#">
                  <img class="countries-link__img" src="{{asset('img/country9.jpg')}}">
                  <h3 class="countries-link__title txt-center">Лечение в Турции</h3>
               </a>
            </li>
            <li class="countries-item">
               <a class="countries-link" href="#">
                  <img class="countries-link__img" src="{{asset('img/country10.jpg')}}">
                  <h3 class="countries-link__title txt-center">Лечение в Узбекистане</h3>
               </a>
            </li>
         </ul>
      </div>
   </main>
@endsection