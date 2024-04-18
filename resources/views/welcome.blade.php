<x-app-layout>
    <x-slot name="title">
        Vital - Nutrição e Saúde
    </x-slot>


    <div class="flex relative w-full overflow-hidden sm:h-[60vh] -mt-px px-8 hover:scale-[1.03] ease-in-out transform transition-transform duration-300">
        <img class="w-full h-full object-contain" src="{{asset('/images/banner_home.png')}}" type="">
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
