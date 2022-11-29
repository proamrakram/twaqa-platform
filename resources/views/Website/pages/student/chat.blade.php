@extends('Website.partials.layout')
@section('title', __('Chat'))
@section('content')
    <div class="page page-data mb-5">
        @include('Website.partials.header-heading-page')
        <div class="profile-data">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <aside class="profile-aside">
                            @include('Website.partials.std-side')
                        </aside>
                    </div>
                    <div class="col-md-9">
                        <div class="profile-data-user-boxes content-user">

                            <div class="home-page__content messages-page">

                                <div class="row g-2 h-100 bg-white">
                                    <!-- start message list section  -->
                                    <div class="col-12 col-md-3 col-lg-4 h-100">
                                        <div class="border p-2 shadow-sm rounded  messages-page__list-scroll">
                                            <div class="messages-page__header mb-0 px-4 pt-2 pb-1">
                                                <span class="messages-page__title h5">جميع الرسائل</span>
                                            </div>
                                            <div class="messages-page__search mb-0 px-3 pb-3">
                                                <div class="custom-form__search-wrapper">
                                                    <input type="text" class="form-control custom-form" id="search"
                                                        placeholder="البحث " autocomplete="off">
                                                    <button type="submit" class="custom-form__search-submit ">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="svg-icon svg-icon--search" viewBox="0 0 46.6 46.6">
                                                            <path
                                                                d="M46.1,43.2l-9-8.9a20.9,20.9,0,1,0-2.8,2.8l8.9,9a1.9,1.9,0,0,0,1.4.5,2,2,0,0,0,1.5-.5A2.3,2.3,0,0,0,46.1,43.2ZM4,21a17,17,0,1,1,33.9,0A17.1,17.1,0,0,1,33,32.9h-.1A17,17,0,0,1,4,21Z"
                                                                fill="#f68b3c"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <ul class="messages-page__list pb-0 px-1 px-md-3">
                                                <li class="messaging-member messaging-member--new messaging-member--online">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/men/74.jpg"
                                                                alt="Bessie Cooper" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Baraa Adnan</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message"> هناك حقيقة مثبتة منذ زمن
                                                            طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                                            الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي
                                                            يقرأها</span>
                                                    </div>
                                                </li>


                                                <li
                                                    class="messaging-member messaging-member--online messaging-member--active">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/women/56.jpg"
                                                                alt="Jenny Smith" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Jenny Smith</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message">هناك حقيقة مثبتة منذ زمن
                                                            طويل وهي أن الم </span>
                                                    </div>
                                                </li>
                                                <li class="messaging-member">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/women/17.jpg"
                                                                alt="Courtney Simmons" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Courtney Simmons</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message">هناك حقيقة مثبتة منذ زمن
                                                            طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                                            الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي
                                                            يقرأها</span>
                                                    </div>
                                                </li>
                                                <li class="messaging-member messaging-member--online">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/women/39.jpg"
                                                                alt="Martha Curtis" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Martha Curtis</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message"> هناك حقيقة مثبتة منذ زمن
                                                            طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                                            الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="messaging-member messaging-member--online">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/men/27.jpg"
                                                                alt="Rozie Tucker" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Gab Ryan</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message"> هناك حقيقة مثبتة منذ زمن
                                                            طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                                            الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي
                                                            يقرأها</span>
                                                    </div>
                                                </li>
                                                <li class="messaging-member">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/men/17.jpg"
                                                                alt="Jules Zimmermann" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Jules Zimmermann</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message"> هناك حقيقة مثبتة منذ زمن
                                                            طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                                            الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي
                                                            يقرأها</span>
                                                    </div>
                                                </li>
                                                <li class="messaging-member">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/men/9.jpg"
                                                                alt="Mark Reid" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Mark Reid</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message"> هناك حقيقة مثبتة منذ زمن
                                                            طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                                            الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي
                                                            يقرأها</span>
                                                    </div>
                                                </li>
                                                <li class="messaging-member  messaging-member--online">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/men/54.jpg"
                                                                alt="Russell Williams" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Russell Williams</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message"> هناك حقيقة مثبتة منذ زمن
                                                            طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                                            الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="messaging-member">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/women/85.jpg"
                                                                alt="Savannah Nguyen" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Savannah Nguyen</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message">هناك حقيقة مثبتة منذ زمن
                                                            طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                                            الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي
                                                            يقرأها</span>
                                                    </div>
                                                </li>
                                                <li class="messaging-member">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/women/85.jpg"
                                                                alt="Savannah Nguyen" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Savannah Nguyen</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message"> هناك حقيقة مثبتة منذ زمن
                                                            طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                                            الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي
                                                            يقرأها</span>
                                                    </div>
                                                </li>
                                                <li class="messaging-member">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/women/85.jpg"
                                                                alt="Savannah Nguyen" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Savannah Nguyen</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message"> هناك حقيقة مثبتة منذ زمن
                                                            طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على
                                                            الشكل الخارجي</span>
                                                    </div>
                                                </li>
                                                <li class="messaging-member">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/women/85.jpg"
                                                                alt="Savannah Nguyen" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Savannah Nguyen</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message"> هناك حقيقة مثبتة منذ زمن
                                                            طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز
                                                            ع</span>
                                                    </div>
                                                </li>
                                                <li class="messaging-member">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/women/85.jpg"
                                                                alt="Savannah Nguyen" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Savannah Nguyen</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message"> تمام ... </span>
                                                    </div>
                                                </li>
                                                <li class="messaging-member">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/women/85.jpg"
                                                                alt="Savannah Nguyen" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Savannah Nguyen</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message"> تمام ... </span>
                                                    </div>
                                                </li>
                                                <li class="messaging-member">
                                                    <div class="messaging-member__wrapper">
                                                        <div class="messaging-member__avatar">
                                                            <img src="https://randomuser.me/api/portraits/thumb/women/85.jpg"
                                                                alt="Savannah Nguyen" loading="lazy">
                                                            <div class="user-status"></div>
                                                        </div>
                                                        <span
                                                            class="messaging-member__name date text-start font-number">2022/1/1</span>
                                                        <span class="messaging-member__name">Savannah Nguyen</span>
                                                        <span class="messaging-member__last-seen">مُنذ 3 دقائق</span>
                                                        <span class="messaging-member__message"> تمام ... </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- end message list section  -->
                                    <!-- start content section  -->
                                    <div class="chat col-12 col-md-9 col-lg-8 pl-md-1">
                                        <div class="border p-2 shadow-sm rounded chat__container">
                                            <div class="chat__wrapper  pt-mb-2 pb-md-1">
                                                <div
                                                    class="chat__messaging messaging-member--online pb-2 pb-md-2 pl-2 pl-md-4 pr-2">
                                                    <div class="chat__previous d-flex d-md-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="svg-icon svg-icon--previous" viewBox="0 0 45.5 30.4">
                                                            <path
                                                                d="M43.5,13.1H7l9.7-9.6A2.1,2.1,0,1,0,13.8.6L.9,13.5h0L.3,14v.6c0,.1-.1.1-.1.2v.4a2,2,0,0,0,.6,1.5l.3.3L13.8,29.8a2.1,2.1,0,1,0,2.9-2.9L7,17.2H43.5a2,2,0,0,0,2-2A2.1,2.1,0,0,0,43.5,13.1Z"
                                                                fill="#f68b3c"></path>
                                                        </svg>
                                                    </div>
                                                    <div
                                                        class="chat__notification d-flex d-md-none chat__notification--new">
                                                        <span>1</span>
                                                    </div>
                                                    <div class="chat__infos pl-2 pl-md-0">
                                                        <div class="chat-member__wrapper" data-online="true">
                                                            <div class="chat-member__avatar">
                                                                <img src="https://randomuser.me/api/portraits/thumb/women/56.jpg"
                                                                    alt="Jenny Smith" loading="lazy">
                                                                <div class="user-status user-status--large"></div>
                                                            </div>
                                                            <div class="chat-member__details">
                                                                <span class="chat-member__name">Jenny Smith</span>
                                                                <!-- <span class="chat-member__status">Online</span> -->
                                                                <span class="chat-member__status">Last seen 18hr</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="chat__content pt-4 px-3">
                                                    <ul class="chat__list-messages">
                                                        <li>
                                                            <div class="chat_user_img">
                                                                <img src="https://randomuser.me/api/portraits/thumb/women/56.jpg"
                                                                    alt="Jenny Smith" loading="lazy">
                                                            </div>
                                                            <div class="chat__time">Yesterday at 16:43</div>
                                                            <div class="chat__bubble chat__bubble--you">
                                                                Hey, I bought something yesterdat but haven't gotten any
                                                                confirmation. Do you know I if the order went through?
                                                            </div>
                                                        </li>
                                                        <li class="chat__msg-me">
                                                            <div class="chat_user_img">
                                                                <img src="https://randomuser.me/api/portraits/thumb/women/55.jpg"
                                                                    alt="Jenny Smith" loading="lazy">
                                                            </div>
                                                            <div class="chat__bubble chat__bubble--me">
                                                                Hi! I just checked, your order went through and is on it's
                                                                way home. Enjoy your new computer! 😃
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="chat_user_img">
                                                                <img src="https://randomuser.me/api/portraits/thumb/women/56.jpg"
                                                                    alt="Jenny Smith" loading="lazy">
                                                            </div>

                                                            <div class="chat__bubble chat__bubble--you">
                                                                Ohh thanks ! I was really worried about it !
                                                            </div>
                                                            <div class="chat__bubble chat__bubble--you">
                                                                Can't wait for it to be delivered
                                                            </div>
                                                        </li>
                                                        <li class="chat__msg-me">
                                                            <div class="chat__time">07:14</div>
                                                            <div class="chat_user_img">
                                                                <img src="https://randomuser.me/api/portraits/thumb/women/55.jpg"
                                                                    alt="Jenny Smith" loading="lazy">
                                                            </div>

                                                            <div class="chat__bubble chat__bubble--me">
                                                                Aenean iaculis massa non lorem dignissim volutpat. Praesent
                                                                id faucibus lorem, a sagittis nunc. Duis facilisis lectus
                                                                vel sapien ultricies, sed placerat augue elementum. In
                                                                sagittis, justo nec sodales posuere, nunc est sagittis
                                                                tellus, eget scelerisque dolor risus vel augue
                                                            </div>
                                                            <div class="chat__bubble chat__bubble--me">
                                                                Is everything alright?
                                                            </div>

                                                        </li>
                                                        <li>
                                                            <div class="chat_user_img">
                                                                <img src="https://randomuser.me/api/portraits/thumb/women/56.jpg"
                                                                    alt="Jenny Smith" loading="lazy">
                                                            </div>

                                                            <div class="chat__bubble chat__bubble--you">
                                                                Vestibulum finibus pulvinar quam, at tempus lorem.
                                                                Pellentesque justo sapien, pulvinar sed magna et, vulputate
                                                                commodo nisl. Aenean pharetra ornare turpis. Pellentesque
                                                                viverra blandit ullamcorper. Mauris tincidunt ac lacus vel
                                                                convallis. Vestibulum id nunc nec urna accumsan dapibus quis
                                                                ullamcorper massa. Aliquam erat volutpat. Nam mollis mi et
                                                                arcu dapibus condimentum.
                                                            </div>
                                                            <div class="chat__bubble chat__bubble--you">
                                                                Nulla facilisi. Duis laoreet dignissim lectus vel maximus
                                                            </div>
                                                            <div class="chat__bubble chat__bubble--you">
                                                                Curabitur volutpat, ipsum a condimentum hendrerit ! 😊
                                                            </div>
                                                        </li>
                                                        <li class="chat__msg-me">
                                                            <div class="chat__time">09:26</div>
                                                            <div class="chat_user_img">
                                                                <img src="https://randomuser.me/api/portraits/thumb/women/55.jpg"
                                                                    alt="Jenny Smith" loading="lazy">
                                                            </div>

                                                            <div class="chat__bubble chat__bubble--me">
                                                                Perfect, thanks !
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="chat__send-container px-1 px-md-2 pt-1 pt-md-2">
                                                    <div class="custom-form__send-wrapper">
                                                        <input type="text" class="form-control custom-form"
                                                            id="message" placeholder="اكتب رسالتك هنا..."
                                                            autocomplete="off">
                                                        <div class="custom-form__send-img">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="svg-icon svg-icon--send-img"
                                                                viewBox="0 0 45.7 45.7">
                                                                <path
                                                                    d="M6.6,45.7A6.7,6.7,0,0,1,0,39.1V6.6A6.7,6.7,0,0,1,6.6,0H39.1a6.7,6.7,0,0,1,6.6,6.6V39.1h0a6.7,6.7,0,0,1-6.6,6.6ZM39,4H6.6A2.6,2.6,0,0,0,4,6.6V39.1a2.6,2.6,0,0,0,2.6,2.6H39.1a2.6,2.6,0,0,0,2.6-2.6V6.6A2.7,2.7,0,0,0,39,4Zm4.7,35.1Zm-4.6-.4H6.6a2.1,2.1,0,0,1-1.8-1.1,2,2,0,0,1,.3-2.1l8.1-10.4a1.8,1.8,0,0,1,1.5-.8,2.4,2.4,0,0,1,1.6.7l4.2,5.1,6.6-8.5a1.8,1.8,0,0,1,1.6-.8,1.8,1.8,0,0,1,1.5.8L40.7,35.5a2,2,0,0,1,.1,2.1A1.8,1.8,0,0,1,39.1,38.7Zm-17.2-4H35.1l-6.5-8.6-6.5,8.4C22,34.6,22,34.7,21.9,34.7Zm-11.2,0H19l-4.2-5.1Z"
                                                                    fill="#f68b3c"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="custom-form__send-emoji">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="svg-icon svg-icon--send-emoji"
                                                                viewBox="0 0 46.2 46.2">
                                                                <path
                                                                    d="M23.1,0A23.1,23.1,0,1,0,46.2,23.1,23.1,23.1,0,0,0,23.1,0Zm0,41.6A18.5,18.5,0,1,1,41.6,23.1,18.5,18.5,0,0,1,23.1,41.6Zm8.1-20.8a3.5,3.5,0,0,0,3.5-3.5,3.5,3.5,0,0,0-7,0,3.5,3.5,0,0,0,3.5,3.5ZM15,20.8a3.5,3.5,0,0,0,3.5-3.5A3.5,3.5,0,0,0,15,13.9a3.4,3.4,0,0,0-3.4,3.4A3.5,3.5,0,0,0,15,20.8Zm8.1,15a12.6,12.6,0,0,0,10.5-5.5,1.7,1.7,0,0,0-1.3-2.6H14a1.7,1.7,0,0,0-1.4,2.6A12.9,12.9,0,0,0,23.1,35.8Z"
                                                                    fill="#f68b3c"></path>
                                                            </svg>
                                                        </div>
                                                        <button type="submit" class="custom-form__send-submit">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="svg-icon svg-icon--send" viewBox="0 0 45.6 45.6">
                                                                <g>
                                                                    <path
                                                                        d="M20.7,26.7a1.4,1.4,0,0,1-1.2-.6,1.6,1.6,0,0,1,0-2.4L42.6.5a1.8,1.8,0,0,1,2.5,0,1.8,1.8,0,0,1,0,2.5L21.9,26.1A1.6,1.6,0,0,1,20.7,26.7Z"
                                                                        fill="#d87232"></path>
                                                                    <path
                                                                        d="M29.1,45.6a1.8,1.8,0,0,1-1.6-1L19.4,26.2,1,18.1a1.9,1.9,0,0,1-1-1.7,1.8,1.8,0,0,1,1.2-1.6L43.3.1a1.7,1.7,0,0,1,1.8.4,1.7,1.7,0,0,1,.4,1.8L30.8,44.4a1.8,1.8,0,0,1-1.6,1.2ZM6.5,16.7l14.9,6.6a2,2,0,0,1,.9.9l6.6,14.9L41,4.6Z"
                                                                        fill="#d87232"></path>
                                                                </g>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
