@extends('layouts.app')

@section('content')
   <main class="medservice-page">
      <setion class="medservice">
         <div class="container">
            <h1 class="heading txt-center">{{__('Услуги')}}</h1>
            <p class="medservice__text txt-center">
               {{__('Обеспечение информационной, организаторской, технической и всех необходимых 
               услуг для Медицинских Туристов и их сопровождающих лиц от пункта А до Я и обратно 
               с обеспечением максимального комфорта и поддержки. Наша концепция позволит выбрать 
               индивидуальную программу для каждого пациента. В соответствии с требованиями 
               международных стандартов качества мы внимательно подходим к выбору клиник, врачей, 
               партнеров. Рекомендуя пациентам то или иное медицинское учреждение, мы в первую 
               очередь используем систематический статистический подход.')}}
            </p>
            <h2 class="title txt-center">{{__('Медицинские услуги')}}</h2>
            <ul class="services">
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service1.png')}}">
                  <h3 class="services__title">Профилактика</h3>
                  <ul>
                     <li>
                        Общая проверка организма, индивидуальные программы по проверке организма, 
                        вакцинация, профилактические программы и т.д.)
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service2.png')}}">
                  <h3 class="services__title">Телемедицина</h3>
                  <ul>
                     <li>
                        Организация онлайн консультаций с врачами/специалистами из других стран мира
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service3.png')}}">
                  <h3 class="services__title">Диагностика</h3>
                  <ul>
                     <li>Все виды и методы современной диагностики</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service4.png')}}">
                  <h3 class="services__title">Лечение</h3>
                  <ul>
                     <li>Все виды современного лечения</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service5.png')}}">
                  <h3 class="services__title">Реабилитация</h3>
                  <ul>
                     <li>Все виды реабилитационных мероприятий</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service6.png')}}">
                  <h3 class="services__title">Косметология</h3>
                  <ul>
                     <li>Хирургическая и не-хирургическая</li>
                  </ul>
               </li>
               <li class="services-item services-item--long-title">
                  <img class="services__img" src="{{asset('img/service7.png')}}">
                  <h3 class="services__title">Cанаторно-курортное лечение</h3>
                  <ul>
                     <li>Все виды</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service8.png')}}">
                  <h3 class="services__title">Санитарная авиация</h3>
                  <ul>
                     <li>Авиация, предназначенная для оказания экстренной медицинской помощи</li>
                  </ul>
               </li>
               <li class="services-item services-item--long-title">
                  <img class="services__img" src="{{asset('img/service9.png')}}">
                  <h3 class="services__title">Постлечебное планирование</h3>
                  <ul>
                     <li>Составление индивидуальных журналов, мониторинг пациентов и т.д.)</li>
                  </ul>
               </li>
               <li class="services-item services-item--long-title">
                  <img class="services__img" src="{{asset('img/service10.png')}}">
                  <h3 class="services__title">Медицинская страховка</h3>
                  <ul>
                     <li>Все виды</li>
                  </ul>
               </li>
               <li class="services-item services-item--long-title">
                  <img class="services__img" src="{{asset('img/service11.png')}}">
                  <h3 class="services__title">Альтернативная медицина</h3>
                  <ul>
                     <li>Аюрведа, Акупунктура, Гомеопатия, Натуропатия и другие виды</li>
                  </ul>
               </li>
               <li class="services-item services-item--long-title">
                  <img class="services__img" src="{{asset('img/service12.png')}}">
                  <h3 class="services__title">Объездной медицинский туризм </h3>
               </li>
            </ul>
            <h2 class="title txt-center">{{__('Не медицинские услуги')}}</h2>
            <ul class="services">
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service1.png')}}">
                  <h3 class="services__title">Перевод документов</h3>
                  <ul>
                     <li>
                        Перевод всех видов медицинских и не-медицинских документов на все 
                        необходимые языки 
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service2.png')}}">
                  <h3 class="services__title">Визовая поддержка</h3>
                  <ul>
                     <li>
                        Вся цепочка услуг по получению визы
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service3.png')}}">
                  <h3 class="services__title">Расходы</h3>
                  <ul>
                     <li>
                        Предоставление предварительного бюджета по всем видам расходов – начиная 
                        от визы, авиабилетов, гостиниц, стоимости лечения, питания и т.д. в стране 
                        пребывания
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service4.png')}}">
                  <h3 class="services__title">Авиабилеты</h3>
                  <ul>
                     <li>Помощь в бронировании, покупке, замене, возврате и т.д. авиабилетов</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service5.png')}}">
                  <h3 class="services__title">Банковские</h3>
                  <ul>
                     <li>
                        Помощь в открытии банковского счета и получении карт в стране проживания и 
                        по возможности в стране пребывания
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service6.png')}}">
                  <h3 class="services__title">Транспорт</h3>
                  <ul>
                     <li>Организация транспорта внутри страны проиживания и пребывания</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service7.png')}}">
                  <h3 class="services__title">Место проживания</h3>
                  <ul>
                     <li>
                        Помошь в выборе и бронировании различных уровней гостевых/гостиниц/ВИП 
                        аппартаментов
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service8.png')}}">
                  <h3 class="services__title">Переводчик</h3>
                  <ul>
                     <li>В и вне медицинского учреждения</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service9.png')}}">
                  <h3 class="services__title">Сопровождение</h3>
                  <ul>
                     <li>В и вне медицинского учреждения</li>
                  </ul>
               </li>
               <li class="services-item services-item--long-title">
                  <img class="services__img" src="{{asset('img/service10.png')}}">
                  <h3 class="services__title">Информация по Стране</h3>
                  <ul>
                     <li>
                        Правила пребывания, общая информация, особенности медицинского туризма 
                        и т.д. в стране пребывания
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service11.png')}}">
                  <h3 class="services__title">Постоянная связь</h3>
                  <ul>
                     <li>(24х7</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service12.png')}}">
                  <h3 class="services__title">Аренда Авто</h3>
                  <ul>
                     <li>Помощь по аренде автомобиля в стране пребывания</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service12.png')}}">
                  <h3 class="services__title">Питание</h3>
                  <ul>
                     <li>
                        Предоставление информации по местам/заказу питания согласно 
                        необходимым  требованиям туристов
                     </li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service12.png')}}">
                  <h3 class="services__title">Покупки</h3>
                  <ul>
                     <li>Помощь в покупке лекарств, медицинских оборудований и т.д.</li>
                  </ul>
               </li>
               <li class="services-item">
                  <img class="services__img" src="{{asset('img/service12.png')}}">
                  <h3 class="services__title">Тур поездки </h3>
                  <ul>
                     <li>Организация индивидуальных туров внутри города/страны пребывания</li>
                  </ul>
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
      <section class="whywe">
         <div class="container">
            <h2 class="title txt-center">{{__('Почему мы')}}?</h2>
            <ul class="whywe-list">
               <li class="whywe-item">Бесплатная консультация</li>
               <li class="whywe-item">Лучшие специалисты и ведущие медицинские учреждения</li>
               <li class="whywe-item">Высококвалифицированный медицинский персонал</li>
               <li class="whywe-item">Экономия времени и денег</li>
               <li class="whywe-item">Ведущие специалисты медицинского туризма, которые проходят ежегодную стажировку за границей</li>
               <li class="whywe-item">Сопровождение первой консультации до возвращения домой</li>
               <li class="whywe-item">Индивидуальный подход к каждому клиенту</li>
               <li class="whywe-item">Индивидуальный подбор программы</li>
               <li class="whywe-item">Помощь в выборе оптимального варианта в соответствии цены и качества</li>
               <li class="whywe-item">Медицинские программы</li>
            </ul>
         </div>
      </section>
      <section class="ourservices">
         <div class="container">
            <h2 class="title txt-center">{{__('Наши услуги')}}</h2>
            <ul class="ourservices-list">
               <li class="ourservices-item">Бесплатная онлайн консультация по вопросам связанным с организацией Вашего тура</li>
               <li class="ourservices-item">Организация быстрой консультации с врачами касательно Вашего лечения (через Интернет)</li>
               <li class="ourservices-item">Размещение сопровождающего лица</li>
               <li class="ourservices-item">Организация экскурсий и разработка индивидуального тура</li>
               <li class="ourservices-item">Покупка рекомендованных медикаментов и диетических продуктов при необходимости</li>
               <li class="ourservices-item">Гарантия абсолютной конфиденциальности медицинской, финансовой и личной информации</li>
            </ul>
         </div>
      </section>
   </main>
@endsection