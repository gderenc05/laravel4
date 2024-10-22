@extends('layout')

@section('main')
    <h5>İletişim Sayfa İçeriği</h5>

    @if($errors->any())
        Hatalı veri girişi:
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <h5>İletişim Formu</h5>
    <form action="" method="POST">
        @csrf
        İsminiz:
        <br/>
        <!-- old('isim') ile eski ismi geri yükleme -->
        <input type="text" name="isim" value="{{ old('isim') }}" />
        <br/><br/>

        Konu:
        <br/>
        <!-- Select box ile konuyu geri yükleme -->
        <select name="konu">
            <option {{ old('konu') == 'öğrenci işleri' ? 'selected' : '' }}>öğrenci işleri</option>
            <option {{ old('konu') == 'sosyal olanaklar' ? 'selected' : '' }}>sosyal olanaklar</option>
            <option {{ old('konu') == 'diğer' ? 'selected' : '' }}>diğer</option>
        </select>
        <br/><br/>

        Mesajınız:
        <br/>
        <!-- old('mesaj') ile eski mesajı geri yükleme -->
        <textarea name="mesaj">{{ old('mesaj') }}</textarea>
        <br/><br/>

        <input type="submit" value="Mesajı Gönder"/>
    </form>
@endsection
