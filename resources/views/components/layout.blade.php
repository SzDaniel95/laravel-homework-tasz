<!doctype html>

<title>TASZ</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<style>
    html {
        scroll-behavior: smooth;
    }

    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/tasz.png" alt="TASZ logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                    <x-dropdown>
                        <x-slot name="trigger">
                            <button class="text-xs font-bold uppercase">
                                Welcome, {{ auth()->user()->name }}!
                            </button>
                        </x-slot>

                        @admin
                            <x-dropdown-item
                                href="/admin/posts"
                                :active="request()->is('admin/posts')"
                            >
                                Dashboard
                            </x-dropdown-item>

                            <x-dropdown-item
                                href="/admin/posts/create"
                                :active="request()->is('admin/posts/create')"
                            >
                                New Post
                            </x-dropdown-item>

                            <x-dropdown-item
                                href="/admin/contact"
                                :active="request()->is('/admin/contact')"
                            >
                                Messages
                            </x-dropdown-item>

                            <x-dropdown-item
                                href="/admin/users"
                                :active="request()->is('/admin/users')"
                            >
                                Users
                            </x-dropdown-item>
                        @endadmin

                        <x-dropdown-item
                            href="#"
                            x-data="{}"
                            @click.prevent="document.querySelector('#logout-form').submit()"
                        >
                            Log Out
                        </x-dropdown-item>

                        <form id="logout-form" method="POST" action="/logout" class="hidden">
                            @csrf
                        </form>
                    </x-dropdown>
                @else
                    <a href="/register"
                       class="text-xs font-bold uppercase {{ request()->is('register') ? 'text-blue-500' : '' }}">
                        Register
                    </a>

                    <a href="/login"
                       class="ml-6 text-xs font-bold uppercase {{ request()->is('login') ? 'text-blue-500' : '' }}">
                        Log In
                    </a>
                @endauth

                <a href="/contact"
                   class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Contact us
                </a>
            </div>
        </nav>

        {{ $slot }}

        <footer id="contact"
                class="bg-gray-100 border border-black border-opacity-5 rounded-xl py-16 px-10 mt-16 mx-auto"
        >
            <a href="https://hclu.hu/">
            <img src="/images/contact-us.png" alt="" class="-mb-6  rounded-full mx-auto" style="width: 145px;"></a><br>
            <p class="text-sm mt-3 " style="text-align: center">HUNGARIAN CIVIL LIBERTIES UNION</p>

            <div class="mt-10 mx-auto text-center">
                Address: H-1136 Budapest, Tátra utca 15/B.<br>
                Phone: 0036 1 209 0046<br>
                E-mail: tasz@tasz.hu<br>
                Tax number: 18067109-1-41<br>
                EU transparency registration number: 265187224994-05
            </div>
        </footer>
    </section>

    <x-flash/>
</body>
