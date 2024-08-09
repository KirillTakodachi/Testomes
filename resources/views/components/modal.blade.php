<h2 class="text-lg font-mont">Форма</h2>
<form id="myForm" method="POST" action="{{ route('form.store') }}">
    @csrf
{{--    <input type="text" name="username" placeholder="Имя пользователя" required class="w-full p-2 border border-gray-300 rounded mb-4">--}}
{{--    <input type="email" name="email" placeholder="Электронная почта" required class="w-full p-2 border border-gray-300 rounded mb-4">--}}
{{--    <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded">Отправить</button>--}}

    <input type="name" name="username" required class="rounded-full border-but-blue-clay border-2 py-[10px] w-full pl-[20px] placeholder:font-bold placeholder:text-but-clay text-23px"
        placeholder="Ваше имя">
    <input type="text" name="phone" required class="rounded-full border-but-blue-clay border-2 py-[10px] w-full pl-[20px] placeholder:font-bold placeholder:text-but-clay text-23px my-[31px]"
        placeholder="+7(___)___-__-__">
    <button type="submit" class="text-23px font-bold bg-gold rounded-full content-center py-[10px] w-full">Оставить заявку
    </button>
    <div class="text-11px text-black mt-[10px]">Нажимая кнопку, вы даете согласие<a class="text-but"> на обработку
            персональных данных</a></div>
</form>
