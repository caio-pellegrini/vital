<x-app-layout>
    <x-slot name="title">
        Vital - Nutrição e Saúde
    </x-slot>


    <div class="flex relative w-full overflow-hidden sm:h-[60vh] -mt-px px-8">
        <img class="w-full h-full object-contain" src="{{asset('/images/banner_home.png')}}" type="">
    </div>


        <div class="mx-auto px-2 sm:px-4 lg:px-8 bg-gray-800 bg-verde-header text-white border-b-4 mt-4 h-32 flex flex-col justify-center items-center text-center">
            <h2 class="text-black font-bold text-lg">CADASTRA-SE E TENHA ACESSO AO CONTEÚDO PERSONALIZADO!</h2>
            <button class="bg-white text-black bg-opacity-90 rounded px-5 py-2 text-lg m-1"><a href="{{ route('register') }}" >VAMOS LÁ!</a></button>
            <p class="text-black">Ja possui cadastro? <a href="{{ route('login') }}" class="underline">Login</a></p>
        </div>

        <div class="flex justify-between space-x-10">
            <h1 class="font-bold">ARTIGOS ÚTEIS</h1>
            <h1 class="font-bold">SUA SAÚDE IMPORTA!</h1>
        </div>


    <x-slot name="footer"></x-slot>

    <x-slot name="scripts">
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const observerOptions = {
                    root: null, // Usa o viewport como área de visão
                    threshold: 0.1, // Dispara quando 10% do elemento está visível
                };

                const observerCallback = (entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-active');
                        }
                    });
                };

                const observer = new IntersectionObserver(observerCallback, observerOptions);

                // Adiciona os elementos a serem observados
                const elementsToAnimate = document.querySelectorAll('.animate-prep-slideInLeft, .animate-prep-slideInRight');
                elementsToAnimate.forEach(element => {
                    observer.observe(element);
                });
            });
        </script>
    </x-slot>
</x-app-layout>
