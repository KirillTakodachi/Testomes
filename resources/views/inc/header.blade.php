<div class="flex  items-center justify-between">
    <div class="">
        <img src="{{ asset('images/Лого.png') }}">
    </div>

    <div class="flex text-white justify-between w-[500px] mr-[160px]">

        @foreach($menuItems as $menuItem)
            <a>{{ $menuItem->title }}</a>
        @endforeach

    </div>

    <img src="{{ asset('images/Бургер.png') }}">

</div>
