<header class="header">
   <div class="container">
      <div class="row">
         <div class="col-xxl-auto">
            <a class="home-link" href="#">
               <img class="logo" src="{{asset('img/logo.png')}}" alt="{{__('messages.logo')}}">
            </a>
         </div>
         <div class="col-xxl">
            <div class="row">
               <div class="d-flex align-items-center col-xxl">
                  <form class="search">
                     <input class="search__input" name="keyword" type="search" placeholder="{{__('messages.search')}}...">
                     <button class="search__submit-btn" type="submit">{{__('messages.search')}}</button>
                  </form>
                  <ul class="socials">
                     <li class="socials__item">
                        <a class="socials__link" href="#">{{__('messages.whatsapp')}}</a>
                     </li>
                     <li class="socials__item">
                        <a class="socials__link" href="#">{{__('messages.email')}}</a>
                     </li>
                     <li class="socials__item">
                        <a class="socials__link" href="#">{{__('messages.call')}}</a>
                     </li>
                  </ul>
                  <ul class="localization">
                     <li class="localization__item">
                        <a class="localization__link" href="{{route('localization')}}?lang=en">EN</a>
                     </li>
                     <li class="localization__item">
                        <a class="localization__link" href="{{route('localization')}}?lang=ru" >RU</a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="row">
               <div class="d-flex col-xxl">
                  <nav class="main-navigation d-flex">
                     <ul class="site-navigation d-flex">
                        <li class="site-navigation__item">
                           <a class="site-navigation__link site-navigation--dropdown">{{__('messages.about')}}</a>
                           <ul class="dropdown-links">
                              <li class="dropdown-links__item">
                                 <a class="dropdown-links__link" href="#">{{__('messages.aboutUs')}}</a>
                              </li>
                              <li class="dropdown-links__item">
                                 <a class="dropdown-links__link" href="#">{{__('messages.gallery')}}</a>
                              </li>
                           </ul>
                        </li>
                        <li class="site-navigation__item">
                           <a class="site-navigation__link site-navigation--dropdown">{{__('messages.services')}}</a>
                           <ul class="dropdown-links">
                              <li class="dropdown-links__item">
                                 <a class="dropdown-links__link" href="#">{{__('messages.medservices')}}</a>
                              </li>
                              <li class="dropdown-links__item">
                                 <a class="dropdown-links__link" href="#">{{__('messages.noMedservices')}}</a>
                              </li>
                           </ul>
                        </li>
                        <li class="site-navigation__item">
                           <a class="dropdown-links__link" href="#">{{__('messages.workSystem')}}</a>
                        </li>
                        <li class="site-navigation__item">
                           <a class="dropdown-links__link" href="#">{{__('messages.countries')}}</a>                  
                        </li>
                        <li class="site-navigation__item">
                           <a class="dropdown-links__link" href="#">{{__('messages.partners')}}</a>                           
                        </li>
                        <li class="site-navigation__item">
                           <a class="dropdown-links__link" href="#">{{__('messages.reviews')}}</a>                           
                        </li>
                        <li class="site-navigation__item">
                           <a class="dropdown-links__link" href="#">{{__('messages.contacts')}}</a>                           
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>