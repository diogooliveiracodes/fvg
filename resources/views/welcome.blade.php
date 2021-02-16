@extends('layouts.app')

@section('content')
<div class="row justify-content-center m-0 p-0" style="height: 100%; overflow-y: hidden; position: relative; overflow: hidden;">

    <video autoplay muted loop id="myVideo" class="p-0" style="height: 100%;">
        <source src="videos/videofundo.mp4" type="video/mp4">
    </video>
    <div style="height: 100%; background: rgba(3, 3, 3, 0.7); position: absolute; margin: 0px; padding: 0px">
        <div class="row justify-content-center px-0 mx-0">
            <div class="col-md-9" style="margin-top: 15%;">
                <h4 class="cor-azul gotham-bold" style="font-size: 2.7rem">
                    Imersão e mentoria <br>
                    desenvolvida para você <br>
                    evoluir na prática
                </h4>
                <p class="text-white font15">O Hands On foi desenvolvido por cirurgiões plásticos,<br>
                    feito para cirurgiões plásticos e residentes, para atualizações<br>
                    de técnicas e promoção de mudanças significativas,<br>
                    do marketing médico à técnica cirúrgica.<br>
                </p>
                <a class="btn btn-sm btn-danger botao-fale-com-especialista" href="#" style="font-size: 1.4rem">QUERO CONHECER OS PROGRAMAS</a>
            </div>
        </div>
    </div>
</div>

<nossos-programas></nossos-programas>
<nossos-numeros></nossos-numeros>





@endsection