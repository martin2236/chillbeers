<div>
    <div class="col-lg-12 d-flex align-items-center">
        <div class="mb-3 d-flex col-lg-8">
            <input wire:model="search" type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="buscador">
        </div>
    </div>
    <div>
        @foreach ($postres as $postre)
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="offer-item">
                    <img src="/imagenP/{{ $postre->imagen }}" alt="" class="img-responsive">
                    <div>
                        <h3>{{ $postre->nombre }}</h3>
                        <p>
                            {{ $postre->descripcion }}
                        </p>
                    </div>
                    <span class="offer-price">${{ $postre->precio }}</span>
                </div>
            </div>
        @endforeach
        <div class="col-lg-12">
            {{ $postres->links() }}
        </div>
    </div>
    
</div>
