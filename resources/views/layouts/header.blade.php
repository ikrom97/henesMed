<header class="header">
   <div class="container">
      <nav class="header__navigation">
         <a class="home-link" href="{{route('home')}}">
            <img class="logo" src="{{asset('img/logo.png')}}" alt="{{__('messages.logo')}}">
         </a>
         <ul class="pages-navigation">
            <li class="pages-navigation__item">
               <a class="pages-navigation__link {{$route == 'about' || $route == 'gallery' ? 'pages-navigation__link--active' : ''}}">{{__('messages.about')}}</a>
               <ul class="dropdown-links">
                  <li class="dropdown-links__item">
                     <a class="dropdown-links__link" href="{{route('about')}}">{{__('messages.aboutUs')}}</a>
                  </li>
                  <li class="dropdown-links__item">
                     <a class="dropdown-links__link" href="{{route('gallery')}}">{{__('messages.gallery')}}</a>
                  </li>
               </ul>
            </li>
            <li class="pages-navigation__item">
               <a class="pages-navigation__link {{$route == 'medservices' || $route == 'nomedservices' ? 'pages-navigation__link--active' : ''}}">{{__('messages.services')}}</a>
               <ul class="dropdown-links">
                  <li class="dropdown-links__item">
                     <a class="dropdown-links__link" href="{{route('medservices')}}">{{__('messages.medservices')}}</a>
                  </li>
                  <li class="dropdown-links__item">
                     <a class="dropdown-links__link" href="{{route('nomedservices')}}">{{__('messages.noMedservices')}}</a>
                  </li>
               </ul>
            </li>
            <li class="pages-navigation__item">
               <a class="pages-navigation__link {{$route == 'worksystem' ? 'pages-navigation__link--active' : ''}}" href="{{route('worksystem')}}">{{__('messages.workSystem')}}</a>
            </li>
            <li class="pages-navigation__item">
               <a class="pages-navigation__link {{$route == 'countries' ? 'pages-navigation__link--active' : ''}}" href="{{route('countries')}}">{{__('messages.countries')}}</a>
            </li>
            <li class="pages-navigation__item">
               <a class="pages-navigation__link {{$route == 'partners' ? 'pages-navigation__link--active' : ''}}" href="{{route('partners')}}">{{__('messages.partners')}}</a>
            </li>
            <li class="pages-navigation__item">
               <a class="pages-navigation__link {{$route == 'reviews' ? 'pages-navigation__link--active' : ''}}" href="{{route('reviews')}}">{{__('messages.reviews')}}</a>
            </li>
            <li class="pages-navigation__item">
               <a class="pages-navigation__link {{$route == 'contacts' ? 'pages-navigation__link--active' : ''}}" href="{{route('contacts')}}">{{__('messages.contacts')}}</a>
            </li>
         </ul>
      </nav>
      <div class="header-top-wrapper">
         <form class="search hidden">
            <input class="search__input" type="search" placeholder="{{__('messages.search')}}">
            <button class="search__button" type="button"></button>
         </form>
         <ul class="socials">
            <li class="socials__item">
               <a class="socials__link socials__link--whatsapp" href="#">{{__('messages.whatsapp')}}</a>
            </li>
            <li class="socials__item">
               <a class="socials__link socials__link--email" href="#">{{__('messages.email')}}</a>
            </li>
            <li class="socials__item">
               <a class="socials__link socials__link--call" href="#">{{__('messages.call')}}</a>
            </li>
         </ul>
         <ul class="localizations">
            <li class="localizations__item">
               <a class="localizations__link {{App::currentLocale() == 'en' ? 'localizations__link--active' : ''}}" href="{{route('localization')}}?lang=en">en</a>
            </li>
            <li class="localizations__item">
               <a class="localizations__link {{App::currentLocale() == 'ru' ? 'localizations__link--active' : ''}}" href="{{route('localization')}}?lang=ru">ru</a>
            </li>
         </ul>
         <button class="hamburger" type="button">{{__('messages.menu')}}</button>
      </div>
   </div>
   <ul class="mobile-navigation hidden">
      <li class="mobile-navigation__item">
         <a class="mobile-navigation__link">{{__('messages.about')}}</a>
         <ul class="mobile-dropdown-links hidden">
            <li class="mobile-dropdown-links__item">
               <a class="mobile-dropdown-links__link" href="{{route('about')}}">{{__('messages.aboutUs')}}</a>
            </li>
            <li class="mobile-dropdown-links__item">
               <a class="mobile-dropdown-links__link" href="{{route('gallery')}}">{{__('messages.gallery')}}</a>
            </li>
         </ul>
      </li>
      <li class="mobile-navigation__item">
         <a class="mobile-navigation__link">{{__('messages.services')}}</a>
         <ul class="mobile-dropdown-links hidden">
            <li class="mobile-dropdown-links__item">
               <a class="mobile-dropdown-links__link" href="{{route('medservices')}}">{{__('messages.medservices')}}</a>
            </li>
            <li class="mobile-dropdown-links__item">
               <a class="mobile-dropdown-links__link" href="{{route('nomedservices')}}">{{__('messages.noMedservices')}}</a>
            </li>
         </ul>
      </li>
      <li class="mobile-navigation__item">
         <a class="mobile-navigation__link" href="{{route('worksystem')}}">{{__('messages.workSystem')}}</a>
      </li>
      <li class="mobile-navigation__item">
         <a class="mobile-navigation__link" href="{{route('countries')}}">{{__('messages.countries')}}</a>
      </li>
      <li class="mobile-navigation__item">
         <a class="mobile-navigation__link" href="{{route('partners')}}">{{__('messages.partners')}}</a>
      </li>
      <li class="mobile-navigation__item">
         <a class="mobile-navigation__link" href="{{route('reviews')}}">{{__('messages.reviews')}}</a>
      </li>
      <li class="mobile-navigation__item">
         <a class="mobile-navigation__link" href="{{route('contacts')}}">{{__('messages.contacts')}}</a>
      </li>
   </ul>
</header>