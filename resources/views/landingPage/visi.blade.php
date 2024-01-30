@extends('landingPage.masterLp')

@section('contentlp')

    <div class="card card-body">
        <div class="row">
            <div class="col-9">
                <div class="card card-body" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19)">
                    <h3 align='center' style="color: rgb(10, 68, 127)">VISI & MISI</h3>
                    <h4>VISI</h4>
                    <p>" Menuju Perubahan Desa Bonde yang Mandiri, Maju, Sehat, Cerdas dan Sejahtera "</p>
                    <h4>MISI</h4>
                    <ul>
                        <li>Meningkatkan Kualitas Pelayanan di Bidang Pemerintahan Desa</li>
                        <li>Meningkatkan Pembangunan Infrastruktur di Bidang Olahraga untuk dapat menunjang aktivitas masyarakat Desa Bonde</li>
                        <li>Meningkatkan Pembangunan Infrastruktur di Bidang Objek Wisata untuk menjadikan Desa Bonde yang mampu bersaing di Bidang Perdagangan dan Pariwisata</li>
                        <li>Meningkatkan Pembangunan dan Kesejahteraan Ekonomi dengan mendorong masyarakat agar mampu tumbuh dan berkembang di Bidang Home Industri, Pertanian, dan Nelayan</li>
                        <li>Meningkatkan Pembangunan Infrastruktur yang mendukung perekonomian desa, seperti jalan, jembatan serta infrastruktur strategis lainnya, dan</li>
                        <li>Meningkatkan Pembinaan di Bidang Organisasi Kemasyarakatan, Keagamaan dan Kepemudaan</li>
                    </ul>
                </div>
            </div>
            <div class="col-3">
                <div class="card card-body" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.19)">
                    <div class="ml-2"><img src="{{ asset('backend/assets/img/avaters/avatar2.png') }}" alt="" style="size: 100%"></div>
                    <div class="mt-2 mb-2 text-center"><h5>Kepala Desa</h5></div>
                    <div><ul>
                        <li>Nama : Testing Tester</li>
                        <li>Tanggal Lahir : 87678</li> 
                        <li>Nip : -</li>   
                    </ul></div>
                </div>
            </div>
        </div>
    </div>

    
@endsection