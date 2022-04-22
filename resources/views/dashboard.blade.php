<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-2 lg:px-2">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-4 px-4">
            {{ $contratos->links() }}
            <table class="table-auto border-separate">
                <thead>
                    <tr>
                        <th>Contrato</th>
                        <th>Objeto</th>
                        <th>Início da Vigência</th>
                        <th>Final da Vigência</th>
                        <th>Fornecedor</th>
                        <th>Situação</th>
                        <th>R$ contrato</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                @foreach ($contratos as $contrato)
                    <tr class="py-2 text-base border border-slate-300 list">
                        <td class="border  w-24">{{ $contrato->numero }}</td>
                        <td class="border  w-2/5">{{ $contrato->objeto }}</td>
                        <td class="border  w-1/6 text-center">{{ $contrato->vigencia_inicio }}</td>
                        <td class="border  w-1/6 text-center">{{ $contrato->vigencia_fim }}</td>
                        <td class="border  w-2/5 ">
                            {{ $contrato->fonecedor_cnpj_cpf_idgener . ' ' . $contrato->fornecedor_nome }}</td>
                        <td class="border  w-16 text-center">{{ $contrato->situacao }}</td>
                        <td class="border  w-1/6 text-center">{{ $contrato->valor_global }}</td>
                        <td class="border  w-1/6 text-center">
                            @if (Auth::user()->permission === 'Usuário')
                                <a href="" class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-sky-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </a>
                            @else
                                <a href="{{route('contract.create')}}" >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-green-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </a>
                                {{-- <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-yellow-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a> --}}
                                {{-- <form style="margin-top: 5px;" action="{{route('contrato.destroy',$contrato)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-orange-400"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </button>
                                </form> --}}
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</x-app-layout>
