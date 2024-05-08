<div>

    <a href="/{{ $link }}"
        class="text-sm font-semibold leading-6 mr-4 {{ request()->is($link) ? 'text-clr-mid-400 underline' : 'text-clr-mid-100' }}">{{ $slot }}</a>
</div>
