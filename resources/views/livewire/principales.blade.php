<div>
    <div class="col-lg-12 d-flex align-items-center">
        <div class="mb-3 d-flex col-lg-8">
            <input wire:model="search" type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="buscador">
        </div>
    </div>
    @foreach ($principales as $principal)
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
            <div class="offer-item">
                <img src="/imagenP/{{ $principal->imagen }}" alt="" class="img-responsive">
                <div>
                    <h3>{{ $principal->nombre }}</h3>
                    <p>
                        {{ $principal->descripcion }}
                    </p>
                </div>
                <span class="offer-price">${{ $principal->precio }}</span>
            </div>
        </div>
    @endforeach
    @if ($principales->hasPages())
      <div class="col-lg-12">
        {{ $principales->links() }}  
    @endif
        </div>
    
</div>