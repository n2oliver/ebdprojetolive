@extends('templates.master')
@include('templates.navigation')

@section('sidebar')
    @include('templates.sidebar')
@endsection

@section('titulo')
    <div class="titulo col-md-8">
        Lições
    </div>
    @endsection

@section('image')
    @endsection

@section('conteudo')
    <div class="conteudo col-md-12">
        <div class="titulo col-md-12">
            Quem somos...
        </div>

        <div class="col-md-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique malesuada pulvinar. Morbi vel mollis est. Vestibulum lobortis massa ac pharetra iaculis. Maecenas eget urna a elit placerat ultrices at non tortor. Sed lobortis nec lacus in laoreet. Morbi aliquet efficitur nunc. Nam augue lorem, molestie eu est nec, accumsan euismod leo. Vestibulum ut ex in urna scelerisque ultricies nec eget dui. Sed nec lacinia lorem. Aliquam sed dui orci. Aenean pulvinar velit ac ex auctor accumsan. Nunc at rutrum massa.
        </p>

        <p>
        Sed luctus quam quam, in fermentum dolor lacinia quis. Vivamus et magna quis velit porttitor porttitor vitae ut enim. Donec sed tincidunt diam. Sed sagittis lectus purus. Nulla non magna non velit aliquam ultrices. Maecenas vitae nibh ac diam cursus euismod sit amet eu lectus. Nullam eget ligula enim. Fusce nec lacinia est. Curabitur iaculis elementum eros eget efficitur. Ut fringilla, est sit amet varius dignissim, arcu nisi posuere sapien, vel pellentesque erat risus iaculis lacus. Phasellus blandit lacus quis molestie ornare.
        </p>

        <p>
        Nullam malesuada consectetur condimentum. Integer fermentum lobortis ex at egestas. Aliquam erat volutpat. Vivamus pulvinar elit neque, id molestie tellus condimentum eu. Nullam varius elementum volutpat. Etiam leo mi, elementum et metus eu, suscipit elementum quam. Donec pulvinar lacinia lacus, at sodales massa finibus vitae. Curabitur ultricies efficitur urna vel accumsan. Maecenas eget eleifend ligula. Duis ornare, risus a congue efficitur, mi massa eleifend risus, rhoncus efficitur libero nibh eu enim. Sed posuere erat eget accumsan lobortis.
        </p>

        <p>
        Nullam auctor quis dolor non tristique. Suspendisse euismod quam ut risus tempor, a cursus augue facilisis. Pellentesque lacus justo, bibendum ut nunc nec, auctor dictum elit. Integer ullamcorper aliquet commodo. Nullam id risus odio. Nam bibendum luctus sem, in finibus neque lobortis id. Aliquam vulputate tortor eget pharetra bibendum. Integer eget imperdiet odio. Donec consectetur elit tincidunt vulputate finibus. Sed quis augue a quam dignissim malesuada. Proin lobortis purus nibh, eu volutpat est euismod quis. Pellentesque laoreet leo nisi, quis placerat sem venenatis vel.
        </p>

        <p>
        Maecenas sit amet leo fringilla, blandit massa ac, pharetra neque. Sed blandit, eros sed pretium faucibus, turpis arcu pretium ante, tristique accumsan lorem ante sed ex. Duis varius mauris ut quam pulvinar mattis. Pellentesque dictum consectetur aliquet. Fusce in quam nibh. Pellentesque posuere suscipit metus quis aliquet. Etiam viverra mi eget urna dignissim, sed tristique purus vehicula. Phasellus tempus erat ut faucibus eleifend. Vivamus a dictum diam. Phasellus facilisis elit sed nunc ultricies faucibus. Vestibulum auctor convallis ipsum, vel efficitur metus scelerisque at. Nulla malesuada lacus eget sem feugiat egestas.
        </p>
            <div class="row">&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br></div>
            <div class="row">&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br></div>


        </div>
    </div>

@endsection

@section('swiper')
    <script>
        $(document).ready(function () {
            //initialize swiper when document ready
            var mySwiper = new Swiper ('.swiper-container', {
                // Optional parameters
                autoplay:true,
                speed:3000,
                direction: 'horizontal',
                loop: true,

            })
        });
    </script>
@endsection

