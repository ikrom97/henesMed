@extends('layouts.app')

@section('content')
   <main class="reviews-page">
      <div class="container">
         <h1 class="heading txt-center">{{__('messages.ourClientsComments')}}</h1>
         <ul class="reviews">
            <li class="reviews__item">
               <img class="reviews__img" src="{{asset('img/nikolay.png')}}">
               <div class="reviews__wrapper">
                  <h3 class="reviews__author">Николай Ершов</h3>
                  <small>Россия:<time datetime="2015-01-26">26 января 2015</time></small>
                  <p>
                     У меня хроническая обструкция лёгких постоянно приходится искать возможности для профилактики. 
                     Пробовал много разных методик, санаторий, много где лечился у нас в России, в том числе и в 
                     Краснодарском крае. Мой друг из Солигорска, с которым мы как-то пересеклись в Петербурге и
                     заговорили на эту тему, посоветовал мне свою родину. И я рискнул по совету друга. В гугле вбивая 
                     интересующийся меня вопрос, наткнулся на Henes Med и в тот же день решил разузнать все подробности. 
                     Путь не близкий, нужно было взвесить все за и против. Меня устроили и цена и качество, а также 
                     внимательные сотрудники Henes Med.
                  </p>
               </div>
            </li>
            <li class="reviews__item">
               <img class="reviews__img" src="{{asset('img/nikolay.png')}}">
               <div class="reviews__wrapper">
                  <h3 class="reviews__author">Николай Ершов</h3>
                  <small>Россия:<time datetime="2015-01-26">26 января 2015</time></small>
                  <p>
                     У меня хроническая обструкция лёгких постоянно приходится искать возможности для профилактики. 
                     Пробовал много разных методик, санаторий, много где лечился у нас в России, в том числе и в 
                     Краснодарском крае. 
                  </p>
               </div>
            </li>
            <li class="reviews__item">
               <img class="reviews__img" src="{{asset('img/nikolay.png')}}">
               <div class="reviews__wrapper">
                  <h3 class="reviews__author">Николай Ершов</h3>
                  <small>Россия:<time datetime="2015-01-26">26 января 2015</time></small>
                  <p>
                     У меня хроническая обструкция лёгких постоянно приходится искать возможности для профилактики. 
                     Пробовал много разных методик, санаторий, много где лечился у нас в России, в том числе и в 
                     Краснодарском крае. Мой друг из Солигорска, с которым мы как-то пересеклись в Петербурге и
                     заговорили на эту тему, посоветовал мне свою родину. И я рискнул по совету друга. В гугле вбивая 
                     интересующийся меня вопрос, наткнулся на Henes Med и в тот же день решил разузнать все подробности. 
                     Путь не близкий, нужно было взвесить все за и против. Меня устроили и цена и качество, а также 
                     внимательные сотрудники Henes Med приходится искать возможности для профилактики.
                     У меня хроническая обструкция лёгких постоянно приходится искать возможности для профилактики. 
                     Пробовал много разных методик, санаторий, много где лечился у нас в России, в том числе и в 
                     Краснодарском крае. Мой друг из Солигорска, с которым мы как-то пересеклись в Петербурге и
                     заговорили на эту тему, посоветовал мне свою родину. И я рискнул по совету друга. В гугле вбивая 
                     интересующийся меня вопрос, наткнулся на Henes Med и в тот же день решил разузнать все подробности. 
                     Путь не близкий, нужно было взвесить все за и против. Меня устроили и цена и качество, а также 
                     внимательные сотрудники Henes Med.
                  </p>
               </div>
            </li>
         </ul>
      </div>
   </main>
@endsection