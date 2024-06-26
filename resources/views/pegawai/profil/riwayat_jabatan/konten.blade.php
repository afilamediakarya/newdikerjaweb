    <table id="kt_table_data" class="table-group table-row-gray-300 gy-7">
        <thead class="text-center">
            <tr class="fw-bolder fs-6 text-gray-800">
                <th rowspan="2">No</th>
                <th rowspan="2">Nama Jabatan</th>
                <th colspan="4">Surat Keputusan</th>
                <th rowspan="2">TMT</th>
                <th rowspan="2">Unit Kerja</th>
                <th rowspan="2">File</th>
                @if($role['guard'] === 'web' && $path[0] == "profil")
                <th rowspan="2">Aksi</th>
                @endif
            </tr>
            <tr>
                <th>Gol. Ruang</th>
                <th>Nomor</th>
                <th>Tanggal</th>
                <th>Pejabat Pendantanganan </th>
            </tr>
        </thead>
        <tbody>
           @foreach($riwayat_jabatan as $a => $b)
                <tr class="text-center">
                    <td>{{$a+1}}</td>
                    <td>{{$b->nama_jabatan}}</td>
                    <td>{{$b->golongan}}</td>
                    <td>{{$b->nomor}}</td>
                    <td>{{$b->tanggal}}</td>
                    <td>{{$b->pejabat_pendantanganan}}</td>
                    <td>{{$b->tmt}}</td>
                    <td>{{$b->nama_unit_kerja}}</td>
                    <td> <a href="{{ url('/get-file-pegawai?path='.$b->surat_keputusan) }}" target="_blank">Link</a> </td>
                    @if($role['guard'] === 'web' && $path[0] == "profil")
                    <td style="width: 8rem">
                        <a href="javascript:;" type="button" data-uuid="{{$b->uuid}}" data-kt-drawer-show="true" data-kt-drawer-target="#side_form_riwayat_jabatan" class="btn btn-primary button-update btn-icon btn-sm" data-modul="riwayat_jabatan" data-toggle="tooltip" title="edit"> 
                                    <img src="{{ asset('admin/assets/media/icons/edit.svg')}}" alt="" srcset="">
                                </a>

                                <a href="javascript:;" type="button" data-uuid="{{$b->uuid}}" data-modul="riwayat_jabatan" data-label="{{$b->nama_sekolah}}" class="btn btn-danger button-delete btn-icon btn-sm"> 
                                    <img src="{{ asset('admin/assets/media/icons/trash.svg')}}" data-toggle="tooltip" title="hapus">
                                </a>

                    </td>
                    @endif
                </tr>
           @endforeach
        </tbody>
    </table>