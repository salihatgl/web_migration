 <html lang="en">

 <head>
     <title></title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

 </head>

 <div>
   
        
    
     <form style="margin-left:35%; margin-top: 5%;" wire:submit="yanitEkle">
         <div style="background-color:#f2f2f2; display:inline-block;" class="p-3">
             <h3 class="text-center">ANKET</h3>
             <div class="mb-3 mt-3">
                 <div class="mb-2">
                     @foreach ($anketler as $anket)
                     @if ($anket->id == 1)
                     {{ $anket->soru }}
                     @endif
                     @endforeach
                 </div>

                 @foreach ($anketsecenek as $anketSecenek)
                 @if ($anketSecenek->anket_id == 1)
                 <div>
                     <div class="form-check">
                         <input type="radio" class="form-check-input" name="{{ $anketSecenek->id }}"
                             wire:model="secenek_anket_yanit_{{ $anketSecenek->anket_id }}"
                             value="{{ $anketSecenek->anket_id }};{{$anketSecenek->id}}">
                         {{ $anketSecenek->secenek }}


                     </div>
                     @endif
                     @endforeach

                 </div>
                 <div class="mb-3 mt-3">
                     <div class="mb-2">
                         @foreach ($anketler as $anket)
                         @if ($anket->id == 2)
                         {{ $anket->soru }}
                         @endif
                         @endforeach
                     </div>

                     @foreach ($anketsecenek as $anketSecenek)
                     @if ($anketSecenek->anket_id == 2)
                     <div class="form-check">
                         <input type="radio" class="form-check-input" name="{{ $anketSecenek->id }}"
                             wire:model="secenek_anket_yanit_{{ $anketSecenek->anket_id }}"
                             value="{{ $anketSecenek->anket_id }};{{$anketSecenek->id}}">
                         {{ $anketSecenek->secenek }}
                     </div>
                     @endif
                     @endforeach

                 </div>
                 <div class="mb-3 mt-3">
                     <div class="mb-2">
                         @foreach ($anketler as $anket)
                         @if ($anket->id == 3)
                         {{ $anket->soru }}
                         @endif
                         @endforeach
                     </div>

                     @foreach ($anketsecenek as $anketSecenek)
                     @if ($anketSecenek->anket_id == 3)
                     <div>
                         <input type="radio" class="form-check-input" name="{{ $anketSecenek->id }}"
                             wire:model="secenek_anket_yanit_{{ $anketSecenek->anket_id }}"
                             value="{{ $anketSecenek->anket_id }};{{ $anketSecenek->id }}">
                         {{ $anketSecenek->secenek }}

                     </div>
                     @endif
                     @endforeach
                     <div class="d-grid">
                         <button type="submit" class="btn btn-primary btn-block mt-2">Save</button>
                     </div>
                 </div>
             </div>
     </form>


 </div>
 
 </html>