@extends('layouts.app')

@section('content')
   <main class="contacts-page">
      <div class="container">
         <h1 class="heading txt-center">{{__('Контакты')}}</h1>
         <p class="txt-center">
            {{__('На этой странице доступна наша контактная информация. Чтобы получить бесплатную консультацию, заполните контактную форму.')}}
         </p>
         <ul class="contact-links contacts-page__contact-links">
            <li class="contact-links__item">
               <a class="contact-links__link contact-links__link--phone" href="#">+992 988 977 977</a>
            </li>
            <li class="contact-links__item">
               <a class="contact-links__link contact-links__link--email" href="#">info@henesmed.tj</a>
            </li>
            <li class="contact-links__item">
               <a class="contact-links__link contact-links__link--site" href="#">www.henesmed.tj</a>
            </li>
         </ul>
         <h2 class="title txt-center">{{__('Контактная форма')}}</h2>
         <p class="txt-center">
            {{__('Заполните контактную форму для получения бесплатной консультации у наших специалистов.')}}
         </p>
         <form class="contact-form">
            @csrf
            <input class="contact-form__input contact-form__input--name" type="text" name="fullname" placeholder="Ваше Ф.И.О">
            <input class="contact-form__input" type="text" name="email" placeholder="Ваш email">
            <input class="contact-form__input" type="number" name="phone" placeholder="Ваш номер">
            <textarea class="contact-form__textarea" name="message" placeholder="Ваше сообщение"></textarea>
            <button class="button contact-form__submit-btn" type="submit">{{__('Отправить')}}</button>
         </form>
      </div>
   </main>
@endsection