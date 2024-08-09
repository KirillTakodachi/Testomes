<h2 class="text-lg font-semibold">Форма</h2>
<form id="myForm" method="POST" action="{{ route('form.store') }}">
    @csrf
    <input type="text" name="username" placeholder="Имя пользователя" required class="w-full p-2 border border-gray-300 rounded mb-4">
    <input type="email" name="email" placeholder="Электронная почта" required class="w-full p-2 border border-gray-300 rounded mb-4">
    <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded">Отправить</button>
</form>
