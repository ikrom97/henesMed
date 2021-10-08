@extends('layouts.app')

@section('content')
   <main class="worksystem">
      <div class="container">
         <h1 class="heading txt-center">{{__('messages.workSystemHenesMed')}}</h1>
         <p class="txt-center">{{__('messages.workSystemText')}}</p>
         <section class="process">
            <h2 class="title txt-center">{{__('messages.processTitle')}}:</h2>
            <ol class="process-list">
               <li class="process-item">
                  <h3 class="process-item__title">Вы отправляете заявку</h3>
                  <p class="process-item__text">
                     Для этого воспользуйтесь нашей контактной формой, указав подробную информацию о заболевании и состоянии пациента и приложив соответствующие документы. Не забудьте проверить правильность вашего e-mail.
                  </p>
               </li>
               <li class="process-item">
                  <h3 class="process-item__title">Отправляем вам анкету пациента</h3>
                  <p class="process-item__text">
                     Вам будет необходимо заполнить анкету пациента, чтобы наши специалисты могли подготовить для вас предложение по плану лечения.
                  </p>
               </li>
               <li class="process-item">
                  <h3 class="process-item__title">Предложение плана лечения</h3>
                  <p class="process-item__text">
                     Наши специалисты отправят предложение плана лечения в течение 48 часов после того, как вы отправите анкету пациента.
                  </p>
               </li>
               <li class="process-item">
                  <h3 class="process-item__title">Предложение плана путешествия</h3>
                  <p class="process-item__text">
                     После того, как вы подтвердите предложение плана лечения, наши специалисты подготовят для вас индивидуальный план путешествия с пакетными предложениями, в которые будут включены авиабилеты, трансфер из аэропорта и варианты размещения в отеле.
                  </p>
               </li>
               <li class="process-item">
                  <h3 class="process-item__title">Подписание договора</h3>
                  <p class="process-item__text">
                     После того, как вы подтвердите план лечения и поездки, наши специалисты вышлют вам договор на подпись.
                  </p>
               </li>
               <li class="process-item">
                  <h3 class="process-item__title">Оплата</h3>
                  <p class="process-item__text">
                     Вам будет необходимо произвести соответствующие оплаты. Все оплаты, связанные с лечением, будут производиться напрямую больницам и клиникам. Все платежи, связанные с поездкой, будут производиться напрямую нам - Tedavi Tour.
                  </p>
               </li>
               <li class="process-item">
                  <h3 class="process-item__title">Начало лечения</h3>
                  <p class="process-item__text">
                     Мы будем сопровождать вас на протяжении всего лечения. Наши специалисты будут готовы удовлетворить все ваши дополнительные запросы.
                  </p>
               </li>
               <li class="process-item">
                  <h3 class="process-item__title">Завершение лечения</h3>
                  <p class="process-item__text">
                     Завершение лечения. Получение назначения врача по дальнейшему выздоровлению. Все документы, которые вам выпишет врач, мы отправим на ваш e-mail и напомним о повторном визите при необходимости.
                  </p>
               </li>
            </ol>
         </section>
      </div>
   </main>
@endsection