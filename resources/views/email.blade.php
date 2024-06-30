

<h3> {{ $newEmail['body']  }}</h3>
<h3>
<table>
  <tr>
    <td>Kegiatan </td>
    <td>: </td>
    <td> {{ $newEmail['title']  }}</td>
  </tr>
  <tr>
    <td>Hari, Tanggal </td>
    <td>: </td>
    <td> {{ $newEmail['date'] }}</td>
  </tr>
  <tr>
    <td>Waktu </td>
    <td>: </td>
    <td> {{ $newEmail['time']  }} WIB</td>
  </tr>
  <tr>
    <td>Tempat </td>
    <td>: </td>
    <td> {{ $newEmail['location']  }}</td>
  </tr>
</table>
</h3>
<h3> {{ $newEmail['footer'] }}</h3> 
<h3> Terima kasih </h3>

