@extends('layouts.app')

@section('content')
   <main class="contacts-page">
      <div class="container">
         <h1 class="heading txt-center">{{__('Контакты')}}</h1>
         <p class="txt-center">
            {{__('На этой странице доступна наша контактная информация. Чтобы получить бесплатную консультацию, заполните контактную форму.')}}
         </p>
         <br>
         <p class="txt-center">
            {{__('Заполните контактную форму для получения бесплатной консультации у наших специалистов:')}}
         </p>
         <br>
         <form class="form">
            @csrf
            <fieldset class="form-fieldset">
               <legend class="form-legend">{{__('Контактная форма')}}</legend>
               <label class="form-label">{{__('Имя и фамилия')}}
                  <input class="form-input contact-form__input--name" type="text" name="fullname" placeholder="Рахимов Икром" autocomplete="off">
               </label>
               <label class="form-label">{{__('Электронная почта')}}
                  <input class="form-input" type="text" name="email" placeholder="ikrom97@gmail.com" autocomplete="off">
               </label>
               <label class="form-label">{{__('Телефон')}}
                  <input class="form-input" type="number" name="phone" placeholder="+992951439975" autocomplete="off">
               </label>
               <label class="form-label">{{__('Сообщение')}}
                  <textarea class="form-textarea" name="message" placeholder="Ваше сообщение" autocomplete="off"></textarea>
               </label>
            </fieldset>
            <button class="button form-submit" type="submit">{{__('Отправить')}}</button>
         </form>
      </div>
   </main>
@endsection