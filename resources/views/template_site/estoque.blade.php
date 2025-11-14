@extends('template_site.nav_footer')

@section('conteudo')
    <section class="estoque-bg py-5">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-5 mb-3 text-white">Estoque de veículos</h2>
            <p class="text-muted text-center mb-5 text-white-50">Confira os carros disponíveis na SotnasCar.</p>

            <div class="row gx-4 gx-lg-5">
                @forelse($carros as $carro)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <a href="{{ route('estoque.infos', $carro) }}" class="text-decoration-none text-dark">
                            <div class="card h-100 shadow-sm border-0">
                                @if($carro->fotoPrincipal)
                                    <img src="{{ $carro->fotoPrincipal->url }}" class="card-img-top" alt="{{ ($carro->marca->nome ?? '') . ' ' . ($carro->modelo->nome ?? '') }}">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title mb-1 text-dark">{{ $carro->marca->nome ?? '' }} {{ $carro->modelo->nome ?? '' }}</h5>
                                    <p class="card-text mb-1 text-muted">
                                        {{ $carro->ano }} · {{ number_format($carro->quilometragem, 0, ',', '.') }} km ·
                                        {{ $carro->color->nome ?? '' }}
                                    </p>
                                    <p class="card-text fw-bold text-warning">R$ {{ number_format($carro->valor, 2, ',', '.') }}</p>
                                    @if($carro->detalhes)
                                        <p class="card-text small text-muted">{{ $carro->detalhes }}</p>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12"><p class="text-center text-white-50">Nenhum veículo encontrado.</p></div>
                @endforelse
            </div>
            <div class="d-flex justify-content-center mt-4">{!! $carros->onEachSide(1)->links('vendor.pagination.bootstrap-5-only') !!}</div>
        </div>
    </section>
@endsection