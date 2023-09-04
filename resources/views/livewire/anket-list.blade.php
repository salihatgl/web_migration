<div>

    <ul>
        <h1 style="margin-left: 30px;">Anketler</h1>
        @foreach ($anketler as $anket)
        
            {{ $anket->sorular }}

        @endforeach
        @foreach ($anketsecenek as $anketSecenek)
        <li style="list-style-type: none; "> <input type="radio" name="secenek" value="{{ $anketSecenek->id }}">  <!-- radio düğmesinin kullanıcı tarafından seçildiğinde gönderilen değeri ifade eder. -->
            {{ $anketSecenek->secenekler }}</li>
        @endforeach
    </ul>

</div>