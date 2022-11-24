<h1>WEBSITE SMKN 1 SUBANG | @yield('title')</h1>
<nav>
    <ul>
        {{-- http://localhost:8000/home --}}
        <li><a href="{{ url('home') }}">Home</a></li>
        <li><a href="{{ url('tentangsekolah') }}">Tentang Sekolah</a></li>
        <li><a href="{{ url('datapesertadidik') }}">Data Peserta Didik</a></li>
        <li><a href="{{ url('dataeskul') }}">Data Eskul</a></li>
        <li><a href="{{ url('dataprestasi') }}">Data Prestasi</a></li>
    </ul>
</nav>
<hr />
<div>
    @yield('content')
</div>