<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center font-bold text-xl">Contact with Admin</h1>

                <form method="POST" action="/contact" class="mt-10 ">
                    @csrf

                    <x-form.input name="email" type="email" autocomplete="email" required />
                    <x-form.textarea name="message" type="message" autocomplete="message" required />

                    <x-form.button>Send</x-form.button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>

