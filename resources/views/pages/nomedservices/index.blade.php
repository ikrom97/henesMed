@extends('layouts.app')

@section('content')
   <main class="nomedservices-page">
      <section class="whywe">
         <div class="container">
            <h2 class="title txt-center">{{__('messages.whyWe')}}?</h2>
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
            <h2 class="title txt-center">{{__('messages.ourServices')}}</h2>
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