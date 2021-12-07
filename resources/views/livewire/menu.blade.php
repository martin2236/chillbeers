<div class="tab-menu">
    <div class="slider slider-nav">
        <div class="tab-title-menu">
            <h2>APERITIVOS</h2>
            <p> <i class="flaticon-canape"></i> </p>
        </div>
        <div class="tab-title-menu">
            <h2>PRINCIPALES</h2>
            <p> <i class="flaticon-dinner"></i> </p>
        </div>
        <div class="tab-title-menu">
            <h2>POSTRES</h2>
            <p> <i class="flaticon-desert"></i> </p>
        </div>
        <div class="tab-title-menu">
            <h2>BEBIDAS</h2>
            <p> <i class="flaticon-coffee"></i> </p>
        </div>
    </div>
    <!--renderizar toto el componente para que el espacio se achique-->
    <div class="slider slider-single">
        <div>
            @livewire('aperitivos')
        </div>
        <div class="container">
            @livewire('principales')
        </div>
        <div>
            @livewire('postres')
        </div>
        <div>
            @livewire('bebidas')
        </div>
    </div>
</div>
<!-- end tab-menu -->
</div>
<!-- end col -->
</div>

<!-- end row -->
</div>
<!-- end container -->
</div>
<!-- end menu -->

</div>
<!--end comidas-->
