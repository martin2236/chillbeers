<div>
    <div class="col-lg-12 d-flex align-items-center">
        <div class="mb-3 d-flex col-lg-8">
            <input wire:model="search" type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="buscador">
        </div>
    </div>
  
    <div>
        @foreach ($bebidas as $bebida)
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <div class="offer-item">
                    <img src="/imagenP/{{ $bebida->imagen }}" alt="" class="img-responsive">
                    <div>
                        <h3>{{ $bebida->nombre }}</h3>
                        <p>
                            {{ $bebida->descripcion }}
                        </p>
                    </div>
                    <span class="offer-price">${{ $bebida->precio }}</span>
                </div>
            </div>
        @endforeach
        <div class="col-lg-12">
            {{ $bebidas->links() }}
        </div>
    </div>
    
</div>
