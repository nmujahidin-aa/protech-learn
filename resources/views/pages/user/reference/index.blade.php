@extends('layouts.app')
@section('title', 'SDGS | PROTECH')
@section('style')
<style>
    img{
        max-width: 100%;
        height: auto;
    }
</style>
@section('content')
<div class="d-flex justify-content-center align-items-center" style="flex: 1; margin-top: -50px;">
    <div style="width: 90%">
        <div class="card px-2 pt-8" style="background-color: rgba(255, 255, 255, 0.7); border: 5px solid #cccccc; height: 75%;">
            <div class="card-body" style="max-height: 70vh; overflow-y: auto; padding: 10px; scrollbar-width: none; -ms-overflow-style: none;">
                <div class="card p-5 recoleta text-light" style="background-color: #9945d6;">Daftar Rujukan</div>
                <div class="row pt-2">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <ol>
                                    <li>Campbell, N.A., Reece, J.B., Urry, L.A., Cain, M.L., Wasserman, S.A., Minorsky, P.V., & Jackson, R.B. 2014. Campbell Biology Twelfth Edition. New York: Pearson.</li>
                                    <li>Ferdinand, F. & Ariebowo, M. 2009. Praktis Belajar Biologi untuk Kelas X SMA/MA. Jakarta: Pusat Perbukuan, Departemen Pendidikan Nasional</li>
                                    <li>Hariyani, D., Slamet, A., & Santri, J. (2017). Jenis-Jenis Protista di Danau Teluk Gelam Kabupaten OKI Provinsi Sumatera Selatan. Jurnal Pembelajaran Biologi, 5(2), 126–136.</li>
                                    <li>Imaningtyas, S. A. 2013. Biologi untuk SMA/MA Kelompok Peminatan Matematika dan Ilmu Alam. Jakarta: Erlangga.Imaningtyas, S. A. 2013. Biologi untuk SMA/MA Kelompok Peminatan Matematika dan Ilmu Alam. Jakarta: Erlangga.</li>
                                    <li>Lugiarti, E., Wiryaningsih, A., Nurmawati, I., Pratiwi, M., Juangga, S., & Yuliati, S. (2021). Buku Saku Keberlanjutan PAMSIMAS. Jakarta: Kementerian Desa Pembangunan Daerah Tertinggal dan Transmigrasi.</li>
                                    <li>Puspaningsih, A. R., Tjahjadarmawan, E., & Krisdianti, N. R. 2021. Ilmu Pengetahuan Alam untuk SMA Kelas X. Jakarta: Pusat Kurikulum dan Perbukuan Kementerian, Kebudayaan, Riset, dan Teknologi.</li>
                                    <li>Rogers, Kara. 2011. Fungi, Algae, and Protists. New York: Britannica Educational Publishing.</li>
                                    <li>Subardi, Nuryani, & Pramono, S. 2009. Biologi untuk Kelas X SMA dan MA. Jakarta: Pusat Perbukuan Departemen Pendidikan Nasional.</li>
                                    <li>Sutopo, A., Arthati, D. F., & Rahmi, U. A. (2014). Kajian Indikator Sustainable Development Goals (SDGs). Jakrta: Badan Pusat Statistik.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center" style="position: absolute; bottom: -25px; right: 10px;">
                    <a href="{{route('home.index')}}" class="circlebutton">
                        <i class="ki-solid ki-home fs-1 text-light"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
