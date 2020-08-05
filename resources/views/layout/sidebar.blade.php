<h4 class="text-center">Menu</h4>
<div class="list-group list-group-flush">
<a href="/mhs" class="list-group-item list-group-item-action {{ (request()->is('mhs')) ? 'active' : '' }}">Mahasiswa</a>
<a href="/dosen" class="list-group-item list-group-item-action {{(request()->is('dosen')) ? 'active' : '' }}">Dosen</a>
<a href="/prodi" class="list-group-item list-group-item-action {{(request()->is('prodi')) ? 'active' : '' }}">Program Studi</a>
<a href="/matkul" class="list-group-item list-group-item-action{{(request()->is('matkul')) ? 'active' : '' }}">Mata Kuliah</a>
<a href="/kp" class="list-group-item list-group-item-action {{(request()->is('kp')) ? 'active' : '' }}">Kerja Praktek</a>
<a href="/skripsi" class="list-group-item list-group-item-action{{(request()->is('skripsi')) ? 'active' : '' }}">Skripsi</a>
</div>