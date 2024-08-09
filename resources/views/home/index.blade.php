@extends('layouts.app')

@section('title')
    Home
@endsection

@section('header_bloc')
    <div class="flex text-white">

        <div class="w-full">

            <div class="text-70px font-bold font-playfair">
                Открой для себя <br> Новую Ирландию
            </div>

            <div class="text-24px ">
                Авторские туры по экзотическим уголкам
                <br>от Ивана Иванова
            </div>

            <div class="flex mt-7">
                <button id="openModal" class=" text-black text-3xl bg-button rounded-full basis-3/12 mr-9">Оставить
                    заявку
                </button>

                <div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
                    <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">

                        <div id="modalContent"><!-- Контент модального окна будет загружен сюда --></div>

                        <button id="closeModal" class="mt-2 text-red-500">Закрыть</button>
                    </div>
                </div>

                <div class="flex">

                    <div class="mr-3.5">
                        <img src="{{ asset('images/iconPlay 1.png') }}">
                    </div>

                    <div class="text-clay">
                        Посмотрите<br> видео-отчет <br>2018-2019
                    </div>
                </div>
            </div>
            @if (session('success'))
                <div class="flex justify-center text-center w-[440px] text-white">
                    {{ session('success') }}
                </div>
            @endif
            <div class="mt-14 flex justify-between">
                <div class="font-mont">
                    <div class="text-clay">
                        Подписывайтесь в соцсетях
                    </div>
                    <div class="flex justify-between w-[235px] mt-7">
                        <img class="object-contain" src="{{ asset('images/iconYouTube.png') }}">
                        <img class="object-contain" src="{{ asset('images/iconFB.png') }}">
                        <img class="object-contain" src="{{ asset('images/iconTwitter.png') }}">
                        <img class="object-contain" src="{{ asset('images/iconVK.png') }}">
                    </div>
                </div>

                <div class="flex justify-between w-[920px] mt-[80px]">

                    <div class="flex">
                        <div class="w-bloc-w h-bloc-h bg-iceland-fon bg-no-repeat px-4">
                            <div class="font-bold font-playfair text-23px pt-block-num-pt">02</div>
                            <div class="flex">
                                <div class="mt-block-mt font-mont text-xl">Водопады<br>Исландии</div>
                                <div class="self-end ml-bloc-ml"><img src="{{ asset('images/Arrow 1.png') }}"></div>
                            </div>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="w-bloc-w h-bloc-h bg-dolomit-fon bg-no-repeat px-4">
                            <div class="font-bold font-playfair text-23px pt-block-num-pt">02</div>
                            <div class="flex">
                                <div class="mt-block-mt font-mont text-xl">Водопады<br>Исландии</div>
                                <div class="self-end ml-bloc-ml"><img src="{{ asset('images/Arrow 1.png') }}"></div>
                            </div>
                        </div>
                    </div>

                    <div class="flex">
                        <div class="w-bloc-w h-bloc-h bg-norfland-fon bg-no-repeat px-4">
                            <div class="font-bold font-playfair text-23px pt-block-num-pt">02</div>
                            <div class="flex">
                                <div class="mt-block-mt font-mont text-xl">Водопады<br>Исландии</div>
                                <div class="self-end ml-bloc-ml"><img src="{{ asset('images/Arrow 1.png') }}"></div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection

@section('post_header_bloc')

    <div class="py-[200px]">

        <div class="flex">

            <div class="w-[827px] h-[472px] bg-hawai-fon bg-no-repeat px-[56px] text-white">
                <div class="font-bold font-playfair text-32px pt-block-num-pt">10-24</div>
                <div class="font-mont text-22px mt-[17px]">апреля</div>
                <div class="flex">
                    <div class="mt-block-big-mt font-mont text-24px font-medium">Большое ущелье<br> на острове Гавайи
                    </div>
                    <div class="mt-[280px] ml-bloc-big-ml"><img class="w-[40px]"
                                                                src="{{ asset('images/Arrow 1.png') }}"></div>
                </div>
            </div>

            <div class="w-[400px] ml-[100px]">
                <div class="text-42px font-playfair font-bold">
                    Посмотрите все направления туров
                </div>
                <div class="font-mont text-21px mt-[40px]">
                    Берега океанов и дикие пляжи с редкими породами
                    деревьев. Местная архитектура и первозданный вид дикой природы
                </div>
                <button
                    class="text-23px font-mont text-but mt-[50px] border-2 border-but-color rounded-full px-[60px] py-[15px]">
                    Смотреть все
                </button>
            </div>

        </div>

    </div>

@endsection

@section('form_bloc')

    <div class="flex">
        <div class="w-[400px]">
            <div class="text-42px font-playfair font-bold">Оставьте заявку<br> на бесплатную консультацию</div>
            <div class="text-21px font-mont mt-[40px]">Мы перезвоним вам<br> в ближайшее время</div>
        </div>
        <div class="w-[270px] content-center text-center">
            <input
                class="rounded-full border-but-blue-clay border-2 py-[10px] w-full pl-[20px] placeholder:font-bold placeholder:text-but-clay text-23px"
                placeholder="Ваше имя">
            <input
                class="rounded-full border-but-blue-clay border-2 py-[10px] w-full pl-[20px] placeholder:font-bold placeholder:text-but-clay text-23px my-[31px]"
                placeholder="+7(___)___-__-__">
            <button class="text-23px font-bold bg-gold rounded-full content-center py-[10px] w-full">Оставить заявку
            </button>
            <div class="text-11px mt-[10px]">Нажимая кнопку, вы даете согласие<br><a class="text-but"> на обработку персональных данных</a></div>
        </div>
    </div>

@endsection

@section('last_bloc')

    <div class="py-[200px] ">

        <div class="flex">

            <div class="w-[400px] ml-[100px]">
                <div class="text-42px font-playfair font-bold">
                    Что пишут участники наших путешествий
                </div>
                <div class="font-mont text-21px mt-[40px]">
                    87% участников приходят по личной рекомендации от
                    друзей. А каждый 4-ый путешествует с нами больше двух раз!
                </div>
                <button
                    class="text-23px font-mont text-but mt-[50px] border-2 border-but-color rounded-full px-[60px] py-[15px]">
                    Читать отзывы
                </button>
            </div>

            <div class="w-[827px] h-[472px] bg-form-fon2 bg-no-repeat px-[56px] py-[50px] text-white">
                <div class="font-bold font-playfair text-32px">Отзыв</div>
                <div class="font-mont text-22px mt-[5px]">Елена Иванова</div>
                <div class="flex justify-between">
                    <div class="mt-[230px] font-mont text-24px font-medium w-[400px]">Пожалуй, это был самый<br> лучший
                        отпуск в моей жизни...
                    </div>
                    <div class="mt-[260px] w-[60px] h-[20px]"><img src="{{ asset('images/Arrow 1.png') }}"></div>
                </div>
            </div>

        </div>

    </div>

@endsection
