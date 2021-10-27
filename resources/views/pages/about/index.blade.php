@extends('layouts.app')

@section('content')
   <main class="about">
      <div class="container">
         <h1 class="heading txt-center">{{__('О нас')}}</h1>
         <p class="txt-center">
            {{__('Медицинский туризм – это отдых, оздоровление, лечение, как внутри нашей страны, 
            так и за её пределами. Henes Medservices Tajikistan – Первое широкопрофильное Агентство
            по Медицинскому Туризму в Таджикистане.')}}
         </p>
         <img class="about-banner" src="{{asset('img/about.jpg')}}">
         <p class="about__text">
            <b>Выбрав нас</b>, вы приобретете профессионалов, которые помогут сделать правильный выбор медицинского учреждения 
            за рубежом и предоставят всю необходимую информацию о ней. При выборе мы уделяем большое внимание профессионализму 
            медицинских специалистов и современности диагностических оборудований и технологий. Благодаря сотрудничеству 
            с крупнейшими медицинскими центрами и партнерами в таких странах как – Германия, Израиль, Индия, Иран, Казахстан, Россия, Турция, 
            Узбекистан и др., наши пациенты пользуются услугами специалистов мирового уровня.
         </p>
         <p class="about__text">
            <b>Наша миссия</b> – дать пациентам в Таджикистане возможность выбора при принятии ответственных решений. 
         </p>
         <p class="about__text">
            <b>Наше Видение</b> - сделать качественную медицину доступной всем.
         </p>
      </div>
      <section class="desease">
         <div class="container">
            <h2 class="title txt-center">{{__('С нами Вы:')}}</h2>
            <ul class="deseases-list">
               <li class="deseases-item">
                  <h3 class="deseases-title">Сэкономите время</h3>
                  <ul>
                     <li>Большой выбор стран и методов лечения</li>
                     <li>Возможность получения вторичного мнения</li>
                     <li>Помощь в местных услугах в стране пребывания</li>
                     <li>Наш опыт работы с клиниками</li>
                     <li>Наш опыт работы с врачами </li>
                     <li>24 часовая консультационная поддержка</li>
                     <li>Внеочередное обслуживание наших пациентов</li>
                  </ul>
               </li>
               <li class="deseases-item">
                  <h3 class="deseases-title">Уменьшите риски</h3>
                  <ul>
                     <li>Конкретные отзывы от пациентов</li>
                     <li>Постлечебный мониторинг</li>
                     <li>Знание тонкостей медицинского туризма</li>
                     <li>Знание законов и норм страны пребывания</li>
                     <li>Соблюдение норм конфиденциальности</li>
                     <li>Надежные партнеры в разных странах</li>
                  </ul>
               </li>
               <li class="deseases-item">
                  <h3 class="deseases-title">Сэкономите финансы</h3>
                  <ul>
                     <li>Все услуги от А до Я через одну компанию</li>
                     <li>Знание и анализ цен</li>
                     <li>Возможность совмещения Отдыха с Лечением</li>
                     <li>Преждевременная консультация до поездки</li>
                  </ul>
               </li>
            </ul>
         </div>
      </section>
   </main>
@endsection