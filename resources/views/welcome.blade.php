<x-app-layout>
    <x-slot name="title">
        Vital - Nutrição e Saúde
    </x-slot>

    <div class="flex relative w-full overflow-hidden sm:h-[60vh] -mt-px px-8">
        <img class="w-full h-full object-contain" src="{{asset('/images/banner_home.png')}}" type="">
    </div>
    @if(!Auth::check())
    <div class="mx-auto px-2 sm:px-4 lg:px-8 bg-verde-header text-white border-b-4 mt-4 h-32 flex flex-col justify-center items-center text-center">
        <h2 class="text-black font-bold text-lg">CADASTRA-SE E TENHA ACESSO AO CONTEÚDO PERSONALIZADO!</h2>
        <button class="bg-white text-black bg-opacity-90 rounded px-5 py-2 text-lg m-1"><a href="{{ route('register') }}">VAMOS LÁ!</a></button>
        <p class="text-black">Ja possui cadastro? <a href="{{ route('login') }}" class="underline">Login</a></p>
    </div>
    @endif
    <div class="mx-60 mt-12 flex justify-between space-x-24 ">
        <div class="w-1/2 p-4 ">
            <div class="font-bold justify-center items-center flex mb-4">ARTIGOS ÚTEIS</div>
            <div class="bg-gray-200 p-4 mb-4 flex justify-between items-center">Vitamina B6 (piridoxina): para que serve e quantidade recomendada <button class="bg-verde-header text-white hover:bg-verde-escuro hover:underline rounded px-3 py-1"><a href="https://www.tuasaude.com/funcao-da-vitamina-b6-piridoxina/#:~:text=A%20vitamina%20B6%20est%C3%A1%20relacionada%20com%20a%20regula%C3%A7%C3%A3o%20da%20resposta,aumentando%20as%20defesas%20do%20corpo" target="_blank">Acessar</a></button></div>
            <div class="bg-gray-200 p-4 mb-4 flex justify-between items-center">11 alimentos que ajudam na cicatrização <button class="bg-verde-header text-white hover:bg-verde-escuro hover:underline rounded px-3 py-1"><a href="https://www.tuasaude.com/alimentos-cicatrizantes/" target="_blank">Acessar</a></button></div>
            <div class="bg-gray-200 p-4 mb-4 flex justify-between items-center">Liga Esportiva debate educação e nutrição juvenil
                <button class="bg-verde-header text-white hover:bg-verde-escuro hover:underline rounded px-3 py-1"><a href="https://www.terra.com.br/esportes/jogos-olimpicos/liga-esportiva-debate-educacao-e-nutricao-juvenil,544db517897ca46bc45744c1f41dfe72jm6narfn.html" target="_blank">Acessar</a></button>
            </div>
            <div class="bg-gray-200 p-4 mb-4 flex justify-between items-center">Exercícios para perder barriga: 10 melhores opções <button class="bg-verde-header text-white hover:bg-verde-escuro hover:underline rounded px-3 py-1"><a href="https://www.tuasaude.com/3-exercicios-simples-para-fazer-em-casa-e-perder-barriga/" target="_blank">Acessar</a></button></div>
        </div>
        <div class="border-black border-l"></div>
        <div class="w-1/2 p-4">
            <h1 class="font-bold justify-center items-center flex mb-4">SUA SAÚDE IMPORTA!</h1>
            <p>Na correria do dia a dia, é fácil deixar a saúde em segundo plano. Mas aqui, nosso compromisso é oferecer informações e recursos essenciais para cuidar do seu bem-estar físico e mental. Desde dicas de alimentação até orientações para lidar com o estresse. Quando se trata da sua saúde, cada cuidado faz toda a diferença. Comece sua jornada conosco e coloque sua saúde em foco hoje mesmo e tenha uma vida saúdavel e equilibrada!</p>
        </div>
    </div>

    <hr class="mt-24 border-black border-t w-1/2 mx-auto">
    <div class="m-12">
        <h2 class="flex items-center justify-center font-bold">ACESSE NOSSA CALCULADORA!</h2>
        <div class="mx-auto px-2 sm:px-4 lg:px-8 mt-4 flex flex-col justify-center items-center text-center">
            <p>Saiba como está sua saúde física descobrindo seu Índice de</p>
            <p>Massa Corporal, sua Taxa Metabólica Basal e seu Peso Ideal.</p>
            <button class="bg-verde-header text-black bg-opacity-90 rounded px-5 py-2 text-lg m-2"><a href="{{ route('calculadoras') }}">Acessar</a></button>
        </div>
    </div>
    <hr class="mb-24 border-black border-t w-1/2 mx-auto">
    <div>
        <h1 class="font-bold flex items-center justify-center">VÍDEOS DO DIA</h1>
    </div>
    <div class="m-16">
        <div class="flex justify-between">
            <iframe width="366" height="231" src="https://www.youtube.com/embed/CrwRwgNJIMU?si=CpY3q2LaYCs0f4nH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="366" height="231" src="https://www.youtube.com/embed/QK4qBiBj-QI?si=ntQ26ivvZinl4zlb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="366" height="231" src="https://www.youtube.com/embed/wSpnNf70Y1Q?si=g9hlgVGfjHp4NUMQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>

    <x-slot name="footer"></x-slot>

</x-app-layout>