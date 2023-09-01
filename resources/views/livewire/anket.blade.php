<div>
    <h1>Kullanıcı Listesi</h1>

    <ul>
        @foreach ($ankets as $anket)
        
            <li>{{ $anket}}</li>
        @endforeach
    </ul>
</div>