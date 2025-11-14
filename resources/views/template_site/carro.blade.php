@extends('template_site.nav_footer')

@section('conteudo')
    <section class="estoque-bg page-top-space pb-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-5">
                
                <div class="col-lg-7 mb-4">
                    <img src="{{ $carro->fotoPrincipal->url ?? '' }}" class="img-fluid rounded shadow mb-4" alt="{{ $carro->marca->nome . ' ' . $carro->modelo->nome }}">
                    <div class="d-flex gap-3 flex-wrap">
                        @if($carro->fotoPrincipal)
                            <img src="{{ $carro->fotoPrincipal->url }}" class="rounded shadow-sm" style="width: 180px; height: 120px; object-fit: cover;">
                        @endif

                        @foreach($carro->fotos as $foto)
                            @if(!$foto->principal)
                                <img src="{{ $foto->url }}" class="rounded shadow-sm" style="width: 180px; height: 120px; object-fit: cover;">
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-5">
                    <h2 class="text-white mb-3">{{ $carro->marca->nome }} {{ $carro->modelo->nome }}</h2>
                    <h4 class="text-warning fw-bold mb-4">R$ {{ number_format($carro->valor, 2, ',', '.') }}</h4>
                    <div class="bg-dark text-white p-4 rounded shadow-sm mb-4">
                        <p class="mb-2"><strong>Ano:</strong> {{ $carro->ano }}</p>
                        <p class="mb-2">
                            <strong>Quilometragem:</strong>
                            {{ number_format($carro->quilometragem, 0, ',', '.') }} km
                        </p>
                        <p class="mb-0"><strong>Cor:</strong> {{ $carro->color->nome }}</p>
                    </div>
                    <h4 class="text-warning">Detalhes</h4>
                    <p class="text-white-50">{{ $carro->detalhes ?? 'Sem detalhes adicionais.' }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection