@extends('layouts.app')

@section('content')
   <main class="medservice-page">
      <setion class="medservice">
         <div class="container">
            <h1 class="heading txt-center">{{__('Медицинские услуги')}}</h1>
            <p class="medservice__text txt-center">
               {{__('Медицинские услуги под ключ. Медицинский туризм: имплантация, стоматологические туры, липосакция, увеличение груди, онкология, хирургия, гинекология, урология, офтальмология. Начните лечение уже завтра. Медицинские услуги под ключ от Henes Med это только лучшие клиники и высокое качество обслуживания. Работаем напрямую с ведущими клиниками. Наши услуги для вас БЕСПЛАТНЫ, мы оказываем консультации по соглашению с клиниками-партнерами.')}}
            </p>
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
      </setion>
      <section class="desease">
         <div class="container">
            <h2 class="title txt-center">{{__('Заболевания и лечение')}}</h2>
            <p class="deseases__text txt-center">{{__('Заболевания и лечение. На этой странице приведен список болезней, по которым вы можете получить специальное лечение с помощью Henes Med .')}}</p>
            <ul class="deseases-list">
               <li class="deseases-item">
                  <h3 class="deseases-title">Стоматология</h3>
                  <ul>
                     <li>Общая стоматология</li>
                     <li>Имплантация зубов</li>
                     <li>Виниры \ люминиры</li>
                     <li>3D улыбка</li>
                     <li>Коронки</li>
                  </ul>
               </li>
               <li class="deseases-item">
                  <h3 class="deseases-title">Эстетическая медицина</h3>
                  <ul>
                     <li>Пересадка волос</li>
                     <li>Маммопластика пластика груди</li>
                     <li>Программа похудения</li>
                     <li>СПА-программы</li>
                     <li>Косметология</li>
                  </ul>
               </li>
               <li class="deseases-item">
                  <h3 class="deseases-title">Офтальмология</h3>
                  <ul>
                     <li>Общие процедуры</li>
                     <li>Лазерная коррекция зрения</li>
                     <li>Глаукома</li>
                     <li>Катаракта</li>
                     <li>Трансплантация роговицы</li>
                  </ul>
               </li>
               <li class="deseases-item">
                  <h3 class="deseases-title">Онкология</h3>
                  <ul>
                     <li>Общее онкологическое лечение</li>
                     <li>Лечение лейкемии</li>
                     <li>Лечение рака желудка</li>
                     <li>Лечение рака простаты</li>
                     <li>Лечение рака горла</li>
                  </ul>
               </li>
               <li class="deseases-item">
                  <h3 class="deseases-title">Кардиология</h3>
                  <ul>
                     <li>Общее кардиологическое лечение</li>
                     <li>Ишемическая болезнь сердца</li>
                     <li>Ангиопластика</li>
                     <li>Ишемическая болезнь сердца</li>
                     <li>Ангиопластика</li>
                  </ul>
               </li>
            </ul>
         </div>
      </section>
   </main>
@endsection