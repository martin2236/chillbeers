<div >
    <div class="col-lg-12 d-flex align-items-center">
        <div class="mb-3 d-flex col-lg-8">
            <input wire:model="search" type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="buscador">
        </div>
    </div>
    @foreach ($aperitivos as $aperitivo)
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
            <div class="offer-item">
                <img src="/imagenP/{{ $aperitivo->imagen }}" alt="" class="img-responsive">
                <div>
                    <h3>{{ $aperitivo->nombre }}</h3>
                    <p>
                        {{ $aperitivo->descripcion }}
                    </p>
                </div>
                <span class="offer-price">${{ $aperitivo->precio }}</span>
            </div>
        </div>
    @endforeach
    @if ($aperitivos->hasPages())
      <div class="col-lg-12">
        {{ $aperitivos->links() }}  
    @endif
        </div>
    
</div>
