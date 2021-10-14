@extends('layouts.app')

@section('content')
   <main class="home">
      <section class="vitrin">
         <video class="vitrin-video" src="{{asset('videos/vitrin.webm')}}" autoplay loop muted></video>
         <div class="container vitrin__container">
            <div class="vitrin-wrapper">
               <p>{{__('Henes Med является агентством медицинского туризма. Мы предоставляем услуги по подбору лечений в клиниках для иностранных пациентов.')}}</p>
               <h1 class="heading vitrin__heading">{{__('Henes Med - Агентство Медицинского Туризма')}}</h1>
               <a class="button vitrin__button" href="{{route('contacts')}}">{{__('Свяжитесь с нами')}}</a>
               <a class="button vitrin__button button--white" href="{{route('about')}}">{{__('О нас')}}</a>
            </div>
         </div>
      </section>
      <section class="service">
         <div class="container">
            <h2 class="title txt-center">{{__('Услуги')}}</h2>
            <ul class="services">
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service1.png')}}">
                  <h3 class="services__title">Стоматология</h3>
                  <ul>
                     <li>Протезирование зубов</li>
                     <li>Дентальная имплантация</li>
                     <li>Детская стоматология</li>
                     <li>Протезирование зубов</li>
                  </ul>
                  <a class="services__further" href="#">{{__('Далее')}}</a>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service2.png')}}">
                  <h3 class="services__title">Диагностика & CHECK-UP</h3>
                  <ul>
                     <li>Все виды диагностических услуг</li>
                     <li>Радионуклидная диагностика</li>
                     <li>МРТ, КТ, УЗИ, ПЭТ, коронарография</li>
                     <li>Диагностика CHECK-UP</li>
                  </ul>
                  <a class="services__further" href="#">{{__('Далее')}}</a>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service3.png')}}">
                  <h3 class="services__title">Пластическая хирургия</h3>
                  <ul>
                     <li>Реконструктивная хирургия</li>
                     <li>Косметическая хирургия</li>
                     <li>Эндоскопические технологии</li>
                     <li>Процедуры интимной хирургии</li>
                  </ul>
                  <a class="services__further" href="#">{{__('Далее')}}</a>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service4.png')}}">
                  <h3 class="services__title">Акушерство и гинекология</h3>
                  <ul>
                     <li>Лечение женского бесплодия</li>
                     <li>Лечение эрозии шейки матки</li>
                     <li>Лечение заболеваний яичников</li>
                     <li>ЭКО</li>
                  </ul>
                  <a class="services__further" href="#">{{__('Далее')}}</a>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service5.png')}}">
                  <h3 class="services__title">Офтальмология</h3>
                  <ul>
                     <li>Лазерная коррекция зрения</li>
                     <li>Кросслинкинг роговицы</li>
                     <li>Кератопластика</li>
                     <li>Лечение глаукомы и катаракты</li>
                  </ul>
                  <a class="services__further" href="#">{{__('Далее')}}</a>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service6.png')}}">
                  <h3 class="services__title">Лечение онкологии</h3>
                  <ul>
                     <li>Брахитерапия</li>
                     <li>Лучевая терапия</li>
                     <li>«Терапия цели»</li>
                     <li>Химиотерапия</li>
                  </ul>
                  <a class="services__further" href="#">{{__('Далее')}}</a>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service7.png')}}">
                  <h3 class="services__title">Кардиология и кардиохирургия</h3>
                  <ul>
                     <li>Радиочастотная абляция (РЧА)</li>
                     <li>Консультации, диагностика и лечение</li>
                     <li>Ангиопластика</li>
                     <li>Установка кардиостимулятора сердца</li>
                  </ul>
                  <a class="services__further" href="#">{{__('Далее')}}</a>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service8.png')}}">
                  <h3 class="services__title">Урология и нефрология</h3>
                  <ul>
                     <li>Болезнь Пейрони</li>
                     <li>Гемодиализ</li>
                     <li>Лазерное лечение недержания мочи</li>
                     <li>Урофлоуметрия</li>
                  </ul>
                  <a class="services__further" href="#">{{__('Далее')}}</a>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service9.png')}}">
                  <h3 class="services__title">Хирургия</h3>
                  <ul>
                     <li>Холецистэктомия</li>
                     <li>Удаление гемангиомы</li>
                     <li>Лечение трофических язв</li>
                     <li>Видеоторакоскопия</li>
                  </ul>
                  <a class="services__further" href="#">{{__('Далее')}}</a>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service10.png')}}">
                  <h3 class="services__title">Неврология и нейрохирургия</h3>
                  <ul>
                     <li>Лечение болезни Паркинсона</li>
                     <li>Иглорефлексотерапия</li>
                     <li>Рассеянный склероз</li>
                     <li>Вегето-сосудистая дистония</li>
                  </ul>
                  <a class="services__further" href="#">{{__('Далее')}}</a>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service11.png')}}">
                  <h3 class="services__title">Ортопедия и травматология</h3>
                  <ul>
                     <li>Лечение артроза</li>
                     <li>Операции после спортивных травм</li>
                     <li>Вертебропластика</li>
                     <li>Эндопротезирование крупных суставов</li>
                  </ul>
                  <a class="services__further" href="#">{{__('Далее')}}</a>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service12.png')}}">
                  <h3 class="services__title">Диетология</h3>
                  <ul>
                     <li>Индивидуализация рациона</li>
                     <li>Снижение веса</li>
                     <li>Здоровое питание</li>
                     <li>Снижение веса</li>
                  </ul>
                  <a class="services__further" href="#">{{__('Далее')}}</a>
               </li>
            </ul>
         </div>
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