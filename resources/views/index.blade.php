@extends('layouts.app')

@section('content')
   <main class="home">
      <section class="vitrin">
         <video class="vitrin-video" src="{{asset('videos/vitrin.webm')}}" autoplay loop muted></video>
         <div class="container vitrin__container">
            <div class="vitrin-wrapper">
               <h1 class="heading vitrin__heading">{{__('Henes Medservices Tajikistan – Первое широкопрофильное Агентство по Медицинскому Туризму в Таджикистане.')}}</h1>
               <a class="button vitrin__button" href="{{route('contacts')}}">{{__('Свяжитесь с нами')}}</a>
               <a class="button vitrin__button button--white" href="{{route('about')}}">{{__('О нас')}}</a>
            </div>
         </div>
      </section>
      <section class="home-service">
         <h2 class="title txt-center">{{__('Услуги')}}</h2>
         <ul class="countries-list home__countries-list">
            <li class="countries-item">
               <a class="countries-link" href="{{route('services')}}">
                  <img class="countries-link__img" src="{{asset('img/country1.jpg')}}">
                  <h3 class="countries-link__title txt-center">{{__('Медицинские услуги')}}</h3>
               </a>
            </li>
            <li class="countries-item">
               <a class="countries-link" href="{{route('services')}}#nomedservices">
                  <img class="countries-link__img" src="{{asset('img/country2.jpg')}}">
                  <h3 class="countries-link__title txt-center">{{__('Не медицинские услуги')}}</h3>
               </a>
            </li>
         </ul>
      </section>
      <section class="partners">
         <div class="container">
            <h2 class="title txt-center">{{__('Наши партнеры')}}</h2>
            <p class="partners__text txt-center">
               {{__('Мы имеем все необходимые лицензии и сертификаты для оказания медицинских услуг, вот почему нам доверяют.')}}
            </p>
            <ul class="partners-list home__partners-list">
               <li class="partners-item">
                  <img class="partners-img" src="{{asset('img/partner1.jpg')}}">
                  <h3 class="txt-center">Министерство Здравоохранения Турецкой Республики</h3>
               </li>
               <li class="partners-item">
                  <img class="partners-img" src="{{asset('img/partner2.jpg')}}">
                  <h3 class="txt-center">USHAŞ при Министерстве Здравоохранения</h3>
               </li>
               <li class="partners-item">
                  <img class="partners-img" src="{{asset('img/partner3.jpg')}}">
                  <h3 class="txt-center">Турецкие Авиалинии</h3>
               </li>
               <li class="partners-item">
                  <img class="partners-img" src="{{asset('img/partner4.jpg')}}">
                  <h3 class="txt-center">Ассоциации туристических агентств</h3>
               </li>
            </ul>
         </div>
      </section>
      <section class="comments">
         <div class="container">
            <h2 class="title txt-white txt-center">{{__('Отзывы наших клиентов')}}:</h2>
            <div class="owl-carousel comments-slide">
               <div class="comments-slide-item">
                  <img class="comments__img" src="{{asset('img/nikolay.png')}}">
                  <div class="comments-info txt-white">
                     <h3>Николай Ершов</h3>
                     <small class="comments__time">Россия:<time datetime="2015-05-12">12 мая 2015</time></small>
                     <p class="comments__text">
                        У меня хроническая обструкция лёгких постоянно приходится искать возможности для профилактики.
                        Пробовал много разных методик, санаторий, много где лечился у нас в России, в том числе и в Краснодарском крае. 
                        Мой друг из Солигорска, с которым мы как-то пересеклись в Петербурге и заговорили на эту тему,
                        посоветовал мне свою родину. И я рискнул по совету друга. В гугле вбивая интересующийся меня вопрос, 
                        наткнулся на Henes Med и в тот же день решил разузнать все подробности. Путь не близкий, нужно было 
                        взвесить все за и против. Меня устроили и цена и качество, а также внимательные сотрудники Henes Med .
                     </p>
                     <a class="button comments__further" href="{{route('reviews')}}">{{__('Читать все отзывы')}}</a>
                  </div>
               </div>
               <div class="comments-slide-item">
                  <img class="comments__img" src="{{asset('img/nikolay.png')}}">
                  <div class="comments-info txt-white">
                     <h3>Наталья Гаврилина</h3>
                     <small class="comments__time">Россия:<time datetime="2015-01-26">26 января 2015</time></small>
                     <p class="comments__text">
                        Хочу торжественно сообщить, что зубы мне сделали!:) Мне очень нравится! Всем довольна: и
                        врачами, и их работой. Зубы красивые, жуют! ну а дальше – время покажет. Спасибо вам огромное!
                        Буду рекомендовать вашу компанию знакомым. Уже кинула ссылку своему отцу:)
                     </p>
                     <a class="button comments__further" href="{{route('reviews')}}">{{__('Читать все отзывы')}}</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
@endsection