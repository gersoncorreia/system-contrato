<div class="max-w-4xl mx-auto sm:px-2 lg:px-2">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-4 px-4">
        <form method="post" action="{{ route('contrato.store') }}">
            @csrf
            <div class="py-8 flex flex-wrap flex-col justify-center items-center w-full">
                <h2 class="text-2xl font-bold">Criar Usuário</h2>
                <div class="mt-8 w-2/4">
                    <div class="grid grid-cols-1 gap-4">
                        <label class="block">
                            <span class="text-gray-700">Nome</span>
                            <input name="name" type="text"
                                class="
                          mt-1
                          block
                          w-full
                          rounded-md
                          border-gray-300
                          shadow-sm
                          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                        "
                                placeholder="" />
                        </label>
                        <label class="block">
                            <span class="text-gray-700">E-mail</span>
                            <input name="email" type="text"
                                class="
                                    mt-1
                                    block
                                    w-full
                                    rounded-md
                                    border-gray-300
                                    shadow-sm
                                    focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                                    "
                                placeholder="" />
                        </label>
                        <label class="block">
                            <span class="text-gray-700">CPF</span>
                            <input name="cpf" type="text"
                                class="
                          mt-1
                          block
                          w-full
                          rounded-md
                          border-gray-300
                          shadow-sm
                          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                        " />
                        </label>
                        <label class="block">
                            <span class="text-gray-700">Senha</span>
                            <input name="password" type="password"
                                class="
                          mt-1
                          block
                          w-full
                          rounded-md
                          border-gray-300
                          shadow-sm
                          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                        " />
                        </label>
                        <label class="block">
                            <span class="text-gray-700">Nivel de Acesso</span>
                            <select name="permissao"
                                class="
                          block
                          w-full
                          mt-1
                          rounded-md
                          border-gray-300
                          shadow-sm
                          focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
                        ">
                                <option value="Administrador">Administrador</option>
                                <option value="Usuário">Usuário</option>
                            </select>
                        </label>
                    </div>
                </div>
                <button type="submit"
                    class="py-2 px-4 mt-2 w-40  h-14 bg-blue-500 text-white text-xl font-semibold rounded shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</div>
