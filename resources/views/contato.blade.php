<x-app-layout>
    <x-slot name="title">Contato | Action Moto Parts</x-slot>

    <x-slot name="header">
        {{ __('FALE CONOSCO') }}
    </x-slot>

    <div class="py-12">
        <form action="">

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Card de imagem de perfil -->
                <div class="md:col-span-1 space-y-6">
                    <div class="">
                        <label for="name" class="block">NOME</label>
                        <input type="text" name="name" id="name" class="w-full p-2 border rounded">
                    </div>
                    <div class="">
                        <label for="phone" class="block">TELEFONE</label>
                        <input type="tel" name="phone" id="phone" class="w-full p-2 border rounded">
                    </div>
                    <div class="">
                        <label for="city" class="block">CIDADE/UF</label>
                        <input type="text" name="city" id="city" class="w-full p-2 border rounded">
                    </div>
                </div>

                <!-- Card de editar perfil e alterar senha -->
                <div class="md:col-span-1 space-y-6">
                    <div class="">
                        <label for="email" class="block">E-MAIL</label>
                        <input type="email" name="email" id="email" class="w-full p-2 border rounded">
                    </div>
                    <div class="">
                        <label for="cel" class="block">CELULAR</label>
                        <input type="tel" name="cel" id="cel" class="w-full p-2 border rounded">
                    </div>
                    <div class="">
                        <label for="order" class="block">Nº DO PEDIDO</label>
                        <input type="text" name="order" id="order" class="w-full p-2 border rounded">
                    </div>
                </div>

                <div class="md:col-span-2 space-y-6">
                    <div class="">
                        <label for="name" class="block">ASSUNTO</label>
                        <input type="text" name="name" id="name" class="w-full p-2 border rounded">
                    </div>
                    <div class="">
                        <label for="message" class="block">MENSAGEM</label>
                        <textarea name="message" id="message" class="w-full h-24 p-2 border rounded"></textarea>
                    </div>
                </div>

                <div class="md:col-span-2 text-center mt-8">
                    <button type="submit" class="bg-verde-escuro hover:bg-green-600 text-white text-lg font-bold py-2 px-8 rounded-lg">
                        ENVIAR
                    </button>
                </div>

            </div>
        </form>

    </div>


    <x-slot name="footer"></x-slot>


</x-app-layout>