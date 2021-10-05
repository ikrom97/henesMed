@extends('layouts.app')

@section('content')
   <main class="home">
      <section class="vitrin">
         <div class="container">
            <div class="row">
               <div class="col-xxl-6">
                  <p>{{__('messages.vitrinText')}}</p>
                  <h1 class="heading">{{__('messages.vitrinTitle')}}</h1>
                  <ul class="vitrin-links">
                     <li class="vitrin-links__item">
                        <a class="button vitrin-links__link" href="#">{{__('messages.contactUs')}}</a>
                     </li>
                     <li class="vitrin-links__item">
                        <a class="button vitrin-links__link" href="#">{{__('messages.aboutUs')}}</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <video class="vitrin-video" src="{{asset('videos/vitrin.webm')}}" autoplay loop muted></video>
      </section>
      <section class="medservice">
         <div class="container">
            <div class="row">
               <h2 class="title">{{__('messages.medservices')}}</h2>
            </div>
            <div class="row">
               <ul class="medservices">
                  <li class="medservices__item">
                     <p>Стоматология</p>
                     <ul>
                        <li>Протезирование зубов</li>
                        <li>Дентальная имплантация</li>
                        <li>Детская стоматология</li>
                        <li>Протезирование зубов</li>
                     </ul>
                     <a class="medservices__link" href="#">Далее</a>
                  </li>
                  <li class="medservices__item">
                     <p>Диагностика & CHECK-UP</p>
                     <ul>
                        <li>Все виды диагностических услуг</li>
                        <li>Радионуклидная диагностика</li>
                        <li>МРТ, КТ, УЗИ, ПЭТ, коронарография</li>
                        <li>Диагностика CHECK-UP</li>
                     </ul>
                     <a class="medservices__link" href="#">Далее</a>
                  </li>
                  <li class="medservices__item">
                     <p>Пластическая хирургия</p>
                     <ul>
                        <li>Реконструктивная хирургия</li>
                        <li>Косметическая хирургия</li>
                        <li>Эндоскопические технологии</li>
                        <li>Процедуры интимной хирургии</li>
                     </ul>
                     <a class="medservices__link" href="#">Далее</a>
                  </li>
                  <li class="medservices__item">
                     <p>Акушерство и гинекология</p>
                     <ul>
                        <li>Лечение женского бесплодия</li>
                        <li>Лечение эрозии шейки матки</li>
                        <li>Лечение заболеваний яичников</li>
                        <li>ЭКО</li>
                     </ul>
                     <a class="medservices__link" href="#">Далее</a>
                  </li>
                  <li class="medservices__item">
                     <p>Офтальмология</p>
                     <ul>
                        <li>Лазерная коррекция зрения</li>
                        <li>Кросслинкинг роговицы</li>
                        <li>Кератопластика</li>
                        <li>Лечение глаукомы и катаракты</li>
                     </ul>
                     <a class="medservices__link" href="#">Далее</a>
                  </li>
                  <li class="medservices__item">
                     <p>Лечение онкологии</p>
                     <ul>
                        <li>Брахитерапия</li>
                        <li>Лучевая терапия</li>
                        <li>«Терапия цели»</li>
                        <li>Химиотерапия</li>
                     </ul>
                     <a class="medservices__link" href="#">Далее</a>
                  </li>
                  <li class="medservices__item">
                     <p>Кардиология и кардиохирургия</p>
                     <ul>
                        <li>Радиочастотная абляция (РЧА)</li>
                        <li>Консультации, диагностика и лечение</li>
                        <li>Ангиопластика</li>
                        <li>Установка кардиостимулятора сердца</li>
                     </ul>
                     <a class="medservices__link" href="#">Далее</a>
                  </li>
                  <li class="medservices__item">
                     <p>Урология и нефрология</p>
                     <ul>
                        <li>Болезнь Пейрони</li>
                        <li>Гемодиализ</li>
                        <li>Лазерное лечение недержания мочи</li>
                        <li>Урофлоуметрия</li>
                     </ul>
                     <a class="medservices__link" href="#">Далее</a>
                  </li>
                  <li class="medservices__item">
                     <p>Хирургия</p>
                     <ul>
                        <li>Холецистэктомия</li>
                        <li>Удаление гемангиомы</li>
                        <li>Лечение трофических язв</li>
                        <li>Видеоторакоскопия</li>
                     </ul>
                     <a class="medservices__link" href="#">Далее</a>
                  </li>
                  <li class="medservices__item">
                     <p>Неврология и нейрохирургия</p>
                     <ul>
                        <li>Лечение болезни Паркинсона</li>
                        <li>Иглорефлексотерапия</li>
                        <li>Рассеянный склероз</li>
                        <li>Вегето-сосудистая дистония</li>
                     </ul>
                     <a class="medservices__link" href="#">Далее</a>
                  </li>
                  <li class="medservices__item">
                     <p>Ортопедия и травматология</p>
                     <ul>
                        <li>Лечение артроза</li>
                        <li>Операции после спортивных травм</li>
                        <li>Вертебропластика</li>
                        <li>Эндопротезирование крупных суставов</li>
                     </ul>
                     <a class="medservices__link" href="#">Далее</a>
                  </li>
                  <li class="medservices__item">
                     <p>Диетология</p>
                     <ul>
                        <li>Индивидуализация рациона</li>
                        <li>Снижение веса</li>
                        <li>Здоровое питание</li>
                     </ul>
                     <a class="medservices__link" href="#">Далее</a>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <section class="partner">
         <div class="container">
            <div class="row">
               <h2 class="title">{{__('messages.ourPartners')}}</h2>
            </div>
            <div class="row">
               <p>{{__('messages.partnersText')}}</p>
            </div>
            <div class="row">
               <ul class="partners">
                  <li class="partners__item">
                     <img class="partners-img" src="{{asset('img/partner1.jpg')}}" alt="Министерство Здравоохранения Турецкой Республики">
                     <h3 class="partners-title txt-center">Министерство Здравоохранения Турецкой Республики</h3>
                  </li>
                  <li class="partners__item">
                     <img class="partners-img" src="{{asset('img/partner2.jpg')}}" alt="USHAŞ при Министерстве Здравоохранения">
                     <h3 class="partners-title txt-center">USHAŞ при Министерстве Здравоохранения</h3>
                  </li>
                  <li class="partners__item">
                     <img class="partners-img" src="{{asset('img/partner3.jpg')}}" alt="Турецкие Авиалинии">
                     <h3 class="partners-title txt-center">Турецкие Авиалинии</h3>
                  </li>
                  <li class="partners__item">
                     <img class="partners-img" src="{{asset('img/partner4.jpg')}}" alt="Ассоциации туристических агентств">
                     <h3 class="partners-title txt-center">Ассоциации туристических агентств</h3>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <section class="comments">
         <div class="container">
            <div class="row">
               <h2 class="title">{{__('messages.ourClientsComments')}}</h2>
            </div>
            <div class="owl-carousel comments__carousel">
               <div class="row">
                  <div class="col-xxl-5">
                     <img src="{{asset('img/nikolay.png')}}" alt="Николай Ершов">
                  </div>
                  <div class="col-xxl-7">
                     <h3 class="comments__author">Николай Ершов</h3>
                     <small class="comments__address">Россия:<time datetime="2015-05-12">12 мая 2015</time></small>
                     <p class="comments__text">
                        У меня хроническая обструкция лёгких постоянно приходится искать возможности для профилактики.
                        Пробовал много разных методик, санаторий, много где лечился у нас в России, в том числе и в
                        Краснодарском крае. Мой друг из Солигорска, с которым мы как-то пересеклись в Петербурге и заговорили на эту тему,
                        посоветовал мне свою родину. И я рискнул по совету друга. В гугле вбивая интересующийся меня вопрос, наткнулся на Henes Med и
                        в тот же день решил разузнать все подробности. Путь не близкий, нужно было взвесить все за и против. Меня устроили и цена и
                        качество, а также внимательные сотрудники Henes Med .
                     </p>
                     <a class="button comments__more-link" href="#">Читать все отзывы</a>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-5">
                     <img src="{{asset('img/nikolay.png')}}" alt="Николай Ершов">
                  </div>
                  <div class="col-xxl-7">
                     <h3 class="comments__author">Наталья Гаврилина</h3>
                     <small class="comments__address">Россия:<time datetime="2015-01-26">26 января 2015</time></small>
                     <p class="comments__text">
                        Хочу торжественно сообщить, что зубы мне сделали!:) Мне очень нравится! Всем довольна: и
                        врачами, и их работой. Зубы красивые, жуют! ну а дальше – время покажет. Спасибо вам огромное!
                        Буду рекомендовать вашу компанию знакомым. Уже кинула ссылку своему отцу:)
                     </p>
                     <a class="button comments__more-link" href="#">Читать все отзывы</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </main>
@endsection