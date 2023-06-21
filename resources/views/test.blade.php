<table border = 1>
    <th>
        
        <td>Nama</td>
        <td>Nim</td>
        <td>Alamat</td>
        <td>Jenis kelamin</td>
    </th>
    @foreach ($test as $t)
        
    
    <tr>
        <td>{{ $t->id }}</td>
        <td>{{ $t->nama }}</td>
        <td>{{ $t->nim }}</td>
        <td>{{ $t->alamat }}</td>
        <td>{{ $t->jeniskelamin}}</td>
    </tr>
    @endforeach
</table>