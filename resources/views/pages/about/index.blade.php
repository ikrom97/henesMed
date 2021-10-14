@extends('layouts.app')

@section('content')
   <main class="about">
      <div class="container">
         <h1 class="heading txt-center">{{__('О нас')}}</h1>
         <p class="txt-center">
            {{__('Компания медицинского туризма Henes Med оказывает весь спектр комплексных услуг по организации, сопровождению медицинской поездки с целью получения: лечения, диагностики, обследования, реабилитации и профилактики в медицинских учреждениях.')}}
         </p>
         <img class="about-banner" src="{{asset('img/about.jpg')}}">
         <p class="about__text">
            <b>Компания Henes Med </b> — это официальная структура, мы помогаем и представляем интересы частных и
            государстсвенных медицинских учреждений
            здравоохранения по работе с иностранными пациентами.
         </p>
         <p class="about__text">
            <b>Миссия компании Henes Med</b> — сохранять, беречь и приумножать по возможности здоровье клиентов,
            улучшать
            качество оказываемых медицинских услуг,
            работать во благо здоровья и благополучия людей.
         </p>
         <p class="about__text">
            <b>Цель компании Henes Med — быть лидером в туризме и медицине по оказанию данного комплекса услуг,</b>
            развивать медицинский туризм и медицину, и при этом оставаться с клиентом на связи в
            течении 24 часов.
         </p>
         <p class="about__text">
            <b>Компания медицинского туризма Henes Med </b> не рекламирует и не распространяет конкретно интересы
            какой-либо клиники, больницы или иного медицинского центра. Мы
            стараемся и работаем во благо пациента и предоставляем исключительно интересы клиента.
         </p>
         <p class="about__text">
            <b>Лечащие врачи клиентов Henes Med </b> — это прежде всего надёжные, проверенные и лучшие специалисты
            своего
            дела, обладающие медицинской квалификацией второй,
            первой и высшей категории, а также кандидаты, доктора медицинских наук и ведущие академики страны.
         </p>
         <p class="about__text">
            Мы организуем обследование, диагностику и лечение, а также сопровождение от начала и до конца поездки по
            любому
            из
            интересующих медицинских направлений. Новаторские достижения медицины без проблем доступны
            иностранным клиентом, поскольку также присоединяется к девизу и слогану международного туризма: <b>"Пациент
               без
               границ!"</b>
         </p>
         <p class="about__text">
            На всех этапах организации медицинского тура, а также по прибытию в страну, мы будем рядом с вами, всегда
            готовы прийти
            на помощь и ответить на любой вопрос. Мы в любой возникшей ситуации будем на вашей стороне и будем
            отстаивать
            интересы
            до конца в любых незапланированных ситуациях, от которых никто не застрахован.
         </p>
         <p class="about__text">
            Мы знаем своё дело на 100% и медицинский туризм - это не просто повседневная работа, обязанность и
            увлечение,
            это наша
            жизнь и стремление помочь вам взять от медицины по максимуму.
         </p>
         <p class="about__text">
            <b>Гарантируем полную конфиденциальность вашей личной, материальной и врачебной информации.</b>
         </p>
         <p class="about__text">
            Мы рады быть рядом с вами и помочь в организации медицинского тура, пишите или звоните, мы ждём ваших
            звонков!
         </p>
      </div>
   </main>
@endsection