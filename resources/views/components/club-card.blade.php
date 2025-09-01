@props(['club'])

<article class="card">
  <h3 style="margin:0 0 .5rem 0">{{ $club['name'] }}</h3>
  <p style="margin:.25rem 0">Kategori: <strong>{{ $club['category'] }}</strong></p>
  <p style="margin:.25rem 0">Hari: <strong>{{ $club['day'] }}</strong></p>
</article>