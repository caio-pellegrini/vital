<x-app-layout>
    <x-slot name="title">
        Vital - Nutrição e Saúde
    </x-slot>


    <div class="flex relative w-full overflow-hidden sm:h-[60vh] -mt-px px-8">
        <img class="w-full h-full object-contain" src="{{asset('/images/banner_home.png')}}" type="">
    </div>
    @if(!Auth::check())
    <div class="mx-auto px-2 sm:px-4 lg:px-8 bg-gray-800 bg-verde-header text-white border-b-4 mt-4 h-32 flex flex-col justify-center items-center text-center">
        <h2 class="text-black font-bold text-lg">CADASTRA-SE E TENHA ACESSO AO CONTEÚDO PERSONALIZADO!</h2>
        <button class="bg-white text-black bg-opacity-90 rounded px-5 py-2 text-lg m-1"><a href="{{ route('register') }}">VAMOS LÁ!</a></button>
        <p class="text-black">Ja possui cadastro? <a href="{{ route('login') }}" class="underline">Login</a></p>
    </div>
    @endif
    <div class="mx-60 mt-12 flex justify-between space-x-24 ">
        <div class="w-1/2 p-4 ">
            <div class="font-bold justify-center items-center flex mb-4">ARTIGOS ÚTEIS</div>
            <div class="bg-gray-200 p-4 mb-4 flex justify-between items-center">Vitamina B6 (piridoxina): para que serve e quantidade recomendada <button class="bg-verde-header text-white hover:bg-verde-escuro hover:underline rounded px-3 py-1">Acessar</button></div>
            <div class="bg-gray-200 p-4 mb-4 flex justify-between items-center">11 alimentos que ajudam na cicatrização <button class="bg-verde-header text-white hover:bg-verde-escuro hover:underline rounded px-3 py-1">Acessar</button></div>
            <div class="bg-gray-200 p-4 mb-4 flex justify-between items-center">Liga Esportiva debate educação e nutrição juvenil
                <button class="bg-verde-header text-white hover:bg-verde-escuro hover:underline rounded px-3 py-1">Acessar</button>
            </div>
            <div class="bg-gray-200 p-4 mb-4 flex justify-between items-center">Exercícios para perder barriga: 10 melhores opções <button class="bg-verde-header text-white hover:bg-verde-escuro hover:underline rounded px-3 py-1">Acessar</button></div>
        </div>
        <div class="border-black border-l-2"></div>
        <div class="w-1/2 p-4">
            <h1 class="font-bold justify-center items-center flex mb-4">SUA SAÚDE IMPORTA!</h1>
            <p>Na correria do dia a dia, é fácil deixar a saúde em segundo plano. Mas aqui, nosso compromisso é oferecer informações e recursos essenciais para cuidar do seu bem-estar físico e mental. Desde dicas de alimentação até orientações para lidar com o estresse. Quando se trata da sua saúde, cada cuidado faz toda a diferença. Comece sua jornada conosco e coloque sua saúde em foco hoje mesmo e tenha uma vida saúdavel e equilibrada!</p>
        </div>
    </div>

    <x-slot name="footer"></x-slot>

</x-app-layout>