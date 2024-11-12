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

                    <div class="card p-5 recoleta text-light" style="background-color: #9945d6;">SDGS: CLEAN WATER AND SANITATION</div>
                    <div class="row pt-2">
                        <div class="col-md-3 col-12">
                            <div class="card">
                                <div class="card-body">
                                    PERTANYAAN PEMANTIK: Mengapa akses terhadap air bersih dan sanitasi masih menjadi masalah global yang serius, padahal kita sudah memasuki abad ke-21?
                                </div>
                            </div>
                            <div class="card mt-3 mb-3">
                                <div class="card-body">
                                    WAWASAN BIOLOGI: Tahukah kamu! Lebih dari 2 miliar orang di dunia tidak memiliki akses ke air minum yang aman. Angka ini menunjukkan betapa mendesaknya masalah ini, terutama di negara-negara berkembang. Hampir setengah dari populasi dunia, atau sekitar 3,6 miliar orang, tidak memiliki akses ke sanitasi yang aman. Akibatnya, banyak penyakit menular yang mudah menyebar. Hal ini menjadi pendorong PBB untuk merumuskan tujuan mengenai peningkatan air bersih dan sanitasi yang layak ke dalam poin no 6.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <img src="{{URL::to('assets/image/sdgs.png')}}" alt="">
                                    <p>SDGs No. 6, yakni Air Bersih dan Sanitasi Layak (Clean Water and Sanitation) merupakan salah satu dari 17 Tujuan Pembangunan Berkelanjutan (SDGs) yang ditetapkan oleh Perserikatan Bangsa-Bangsa (PBB). Tujuan dari poin SDGs ini adalah untuk memastikan ketersediaan dan pengelolaan air bersih dan sanitasi yang berkelanjutan bagi semua.</p>
                                    <img src="{{URL::to('assets/image/sdgs_6.png')}}" alt="">
                                    <br>

                                    {{-- Mengapa Penting --}}
                                    <p><b>Mengapa Air Bersih dan Sanitasi Penting?</b></p>
                                    <ol>
                                        <li>
                                            <b>Kesehatan</b><br>
                                            Akses terhadap air bersih dan sanitasi yang layak merupakan kunci untuk mencegah berbagai penyakit menular, seperti diare, kolera, dan penyakit kulit.
                                        </li>
                                        <li>
                                            <b>Kualitas Hidup</b><br>
                                            Air bersih sangat penting untuk kegiatan sehari-hari seperti memasak, mencuci, dan menjaga kebersihan diri. Sanitasi yang baik juga meningkatkan kualitas hidup dan martabat manusia.
                                        </li>
                                        <li>
                                            <b>Perekonomian</b><br>
                                            Akses terhadap air bersih dan sanitasi yang memadai dapat meningkatkan produktivitas ekonomi, terutama di sektor pertanian.
                                        </li>
                                        <li>
                                            <b>Lingkungan</b><br>
                                            Pengelolaan air yang baik sangat penting untuk menjaga kelestarian lingkungan dan ekosistem.
                                        </li>
                                    </ol>

                                    {{-- Target Utama --}}

                                    <br>
                                    <p><b>Target Utama SDGs No. 6:</b></p>
                                    <ol>
                                        <li>
                                            Akses Universal: Menjamin semua orang memiliki akses ke air minum yang aman dan sanitasi yang layak pada tahun 2030.
                                        </li>
                                        <li>
                                            Kualitas Air: Meningkatkan kualitas air dengan mengurangi polusi, menghilangkan pembuangan limbah berbahaya, dan meningkatkan pengolahan air limbah.
                                        </li>
                                        <li>
                                            Pengelolaan Berkelanjutan: Menerapkan pengelolaan sumber daya air yang terpadu dan berkelanjutan.
                                        </li>
                                        <li>
                                            Perlindungan Ekosistem: Melindungi dan memulihkan ekosistem yang terkait dengan air, seperti hutan, lahan basah, dan sungai.
                                        </li>
                                    </ol>

                                    {{-- Tantangan --}}
                                    <p><b>Tantangan dalam Mencapai SDGs No. 6:</b></p>
                                    <ol>
                                        <li>
                                            Keterbatasan Infrastruktur: Banyak daerah, terutama di negara berkembang, masih kekurangan infrastruktur air bersih dan sanitasi yang memadai.
                                        </li>
                                        <li>
                                            Pertumbuhan Penduduk: Peningkatan jumlah penduduk menyebabkan peningkatan permintaan akan air bersih.
                                        </li>
                                        <li>
                                            Perubahan Iklim: Perubahan iklim dapat menyebabkan kekeringan, banjir, dan kontaminasi sumber air.
                                        </li>
                                        <li>
                                            Kemiskinan: Kemiskinan seringkali dikaitkan dengan kurangnya akses terhadap air bersih dan sanitasi.
                                        </li>
                                    </ol>

                                    {{-- Upaya --}}
                                    <p><b>Upaya yang Dapat Dilakukan:</b></p>
                                    <ol>
                                        <li>
                                            Investasi Infrastruktur: Meningkatkan investasi dalam pembangunan dan pemeliharaan infrastruktur air bersih dan sanitasi.
                                        </li>
                                        <li>
                                            Efisiensi Penggunaan Air: Mendorong masyarakat untuk menggunakan air secara efisien.
                                        </li>
                                        <li>
                                            Pengolahan Limbah: Meningkatkan kapasitas pengolahan air limbah.
                                        </li>
                                        <li>
                                            Kemitraan: Membangun kemitraan antara pemerintah, sektor swasta, dan masyarakat untuk mencapai tujuan SDGs No. 6.
                                        </li>
                                        <li>
                                            Pendidikan: Meningkatkan kesadaran masyarakat tentang pentingnya air bersih dan sanitasi.
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-body">
                            <h4 class="recoleta" style="color: #9945d6">Ringkasan</h4>
                            SDGs No. 6 merupakan tujuan yang sangat penting untuk mencapai pembangunan berkelanjutan. Dengan bekerja sama, kita dapat memastikan bahwa semua orang memiliki akses terhadap air bersih dan sanitasi yang layak, sehingga dapat meningkatkan kualitas hidup dan kesejahteraan masyarakat.
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
