@extends('templates.master')
@include('templates.navigation')

@section('titulo')
    <div class="titulo col-md-8">
        <h1>Dois pilares, um só caminho...</h1>
        <h4>Conheça aqui a nossa história, nossa visão e nossos valores...</h4>
    </div>
    @endsection
@section('sidebar')
@endsection
@section('image')

        <div class="imagem" style="background-image:url('{{ asset('img/sobre_a_ebd/fundo_banco_semear.jpg') }}">

        </div>
    @endsection





@section('conteudo')

    <div class="row">&nbsp;</div>

    <div class="conteudo col-md-10 col-md-offset-2">
        <div class="row">&nbsp;</div>


        <div class="col-md-11 col-md-offset-1">
            <p>Somos um corpo que visa através do ensinamento da Palavra de Deus, levar as pessoas ao conhecimento pleno da Verdade deixada na terra através da grandiosa obra de nosso Senhor Jesus Cristo. Ministramos cultos, palestras e trabalhos evangelísticos que visam levar cada vez mais almas ao arrependimento de seus pecados e ao alcance de sua Salvação. O mundo perece por não conhecer aquilo que Deus preparou para nós, que é a Vida Eterna, a vida que nunca morre. Todos temos o direito de entrar no reino dos Céus, mas para isso é preciso um coração quebrantado. E é isso o que precisamos, sempre confiando na Justiça e no Amor de nosso Senhor.</p>

            <p> Iluminado por Deus, o Pr. Luis Carlos é fundador do Ministério Projeto e Vivo (MPEV), com o propósito de conduzir almas ao Único Deus, merecedor de toda honra e glória, através de louvores e através da mensagem da cruz, que é levada às almas carentes e sedentas de "Boas Novas". O evangélio genuíno de Cristo entrará de vez nessas vidas, quebrando correntes e destruindo muralhas. “Porque ele é a nossa paz, o qual de ambos os povos fez um; e, derrubando a parede de separação que estava no meio” Efésios 2:14.
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

