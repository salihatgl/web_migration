<div>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        
        <form style="margin-left:35%; margin-top: 5%;">
       
            <ul style="background-color:#f2f2f2; display:inline-block;" class="p-3">
            <h3 class="text-center">ANKET</h3>
                <div class="mb-3 mt-3 ">
                    <label class="form-label mb-2">
                        @foreach ($anketler as $anket)
                        @if ($anket->id == 1)
                        {{ $anket->sorular }}
                        @endif
                        @endforeach</label>
                    @foreach ($anketsecenek as $anketSecenek)
                    <li style="list-style-type: none; "> <input type="radio" name="secenek" wire:model="yanit"
                            value="{{ $anketSecenek->secenekler}}">
                        <!-- radio düğmesinin kullanıcı tarafından seçildiğinde gönderilen değeri ifade eder. -->
                        {{ $anketSecenek->secenekler}}</li>
                    @endforeach
                </div>
        </form>

        <form>
            <div class="mb-3 mt-3 ">
                <label class="form-label mb-2">
                    @foreach ($anketler as $anket)
                    @if ($anket->id == 2)
                    {{ $anket->sorular }}
                    @endif
                    @endforeach</label>
                @foreach ($anketsecenek as $anketSecenek)
                <li style="list-style-type: none; "> <input type="radio" name="secenek" wire:model="yanit_tarayici"
                        value="{{ $anketSecenek->secenekler_tarayici}}">
                    <!-- radio düğmesinin kullanıcı tarafından seçildiğinde gönderilen değeri ifade eder. -->
                    {{ $anketSecenek->secenekler_tarayici}}</li>
                @endforeach
            </div>
        </form>


        <form>
        <div class="mb-3 mt-3 ">
            <label class="form-label mb-2">
                @foreach ($anketler as $anket)
                @if ($anket->id == 3)
                {{ $anket->sorular }}
                @endif
                @endforeach</label>
            @foreach ($anketsecenek as $anketSecenek)
            <li style="list-style-type: none; "> <input type="radio" name="secenek" wire:model="yanit_isletim_sis"
                    value="{{ $anketSecenek->secenekler_isletim_sis}}">
                <!-- radio düğmesinin kullanıcı tarafından seçildiğinde gönderilen değeri ifade eder. -->
                {{ $anketSecenek->secenekler_isletim_sis}}</li>
            @endforeach
        </div>
        </form>
        <div class="d-grid gap-2">

        <br><button type="submit" class="btn btn-success" wire:click="yanitEkle">Yanıtla</button>
        </div>


</div>
</ul>
</form>

</body>

</html>
</div>