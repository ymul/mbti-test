<div class="col-md-3">
    <div class="panel panel-default panel-flush">
        <div class="panel-heading">
            Sidebar
        </div>

        <div class="panel-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="{{ url('/home') }}">
                        Dashboard
                    </a>
                </li>
                @if(Auth::user()->hasRole('Admin'))
                <li role="presentation">
                    <a href="{{ url('/kategori-soal') }}">
                        Kategori Soal
                    </a>
                </li>
                <li role="presentation">
                    <a href="{{ url('/soal') }}">
                        Soal
                    </a>
                </li>
                <li role="presentation">
                    <a href="{{ url('/peserta') }}">
                        Peserta
                    </a>
                </li>
                @endif
                @if(Auth::user()->hasRole('Peserta'))
                <li role="presentation">
                    <a href="{{ url('/soal-test') }}">
                        Soal Test
                    </a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>
