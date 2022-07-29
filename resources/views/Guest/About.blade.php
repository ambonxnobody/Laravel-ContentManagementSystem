@extends('Guest.Layouts.Index')
@section('Pages')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn"
        style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/img/dhuha.jpg') }}) center center no-repeat; background-size: cover;"
        data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">{{ $title }}</h1>
        </div>
    </div>
    <div class="container">
        <div class="card p-5">
            <h1 class="text-center">Visi</h1>
            <h5>Unggul dalam Mutu: Indikatornya.</h5>
            <ol>
                <li>Prestasi akademik mencapai rerata naik dari tahun 2021/2020.(NP)</li>
                <li>Prestasi non akademik minimal B ( baik ).( NP)</li>
                <li>Dapat membedakan mana yang benar dan mana yang salah.( NK)</li>
                <li>Dapat memilih yang lebih dipentingkan.( NK )</li>
            </ol>
            <h5>Tidak Gagap Tehnologi : Indikatornya</h5>
            <ol>
                <li>Dapat Mengoperasionalkan Computer (NP)</li>
                <li>Dapat mengakses Informasi melalui internet ( NP )</li>
            </ol>
            <h5>Trampil: Indikatornya</h5>
            <ol>
                <li>Dapat menyelesaikan tugas dengan cepat dan tepat ( NK )</li>
                <li>Dapat menyelesaikan tugas yang ditanggungnya tanpa ketergantungan kepada orang lain. ( NK )</li>
            </ol>
            <h5>Berbudaya lingkungan:Indikatornya</h5>
            <ol>
                <li>Berperilaku hidup bersih, disiplin, jujur, taat aturan /tatatertib yang ada di Madrasah ataupun di
                    Masyarakat.
                    (NK)</li>
                <li>Saling menyayangi makluk Allah ( Manusia,Hewan dan Tumbuhan ).( NK )</li>
                <li>Peduli lingkungan bersih dan sehat baik di Madrasah maupun di rumah masing-masing. ( NK)</li>
                <li>Terbebasnya lingkungan sekolah dari jentik nyamuk terutama Aedes aegypti.</li>
                <li>Beperilaku pelestarian funsi lingkungan,mencegah terjadinya pencemaran( Tanah,Udara dan Air ) dan
                    menghindarkan
                    Kerusakan Lingkungan( NK).</li>
            </ol>
            <h5>Iman dan Taqwa:Indikatornya</h5>
            <ol>
                <li>Menjalankan Syari’at Islam dengan benar berazas Ahlushunah waljamaah. (NK)</li>
                <li>Menghormati dan patuh terhadap Orang Tua dan Guru.( NK)</li>
                <li>Berkata-kata yang sopan dan santun terhadap Orang Tua,Guru ,teman-temannya dan Masyarakat.( NK)</li>
            </ol>

            <p class="mt-3"><strong>Keterangan:</strong></p>
            <p>NP = Nilai Prestasi ( kognitif )</p>
            <p>NK = Nilai Karakter positif</p>
        </div>

        <div class="card p-5 mt-5">
            <h1 class="text-center">Misi</h1>
            <ol type="I">
                <li class="fs-5 text-dark fw-bold">Standar Isi</li>
                <ol>
                    <li>Menyusun kurikulum Madrasah yang relevan/sesuai dengan/mengikuti pekembangan dunia pendidikan dan
                        memuat
                        Pendidikan Lingkungan Hidup.</li>
                    <li>Selalu melakukan up date, informasi baru yang ada hubungannya dengan kurikulum demi relevansi dengan
                        kebutuhan stakeholder.</li>
                </ol>
                <li class="fs-5 text-dark fw-bold">Standar Tendik</li>
                <ol>
                    <li>Meningkatkan Sumber Daya Manusia( SDM ) Guru dalam Proses Belajar Mengajarnya.</li>
                    <li>Selalu mengupayakan memperolehnya pengetahuan baru sesuai dengan perkebangan zaman/terkini.</li>
                </ol>
                <li class="fs-5 text-dark fw-bold">Standar Proses</li>
                <ol>
                    <li>Melaksanakan proses pembelajaran yang profesional dan penuh inofatif.</li>
                    <li>Melaksanakan pembelajaran ke Agamaan yang menumbuh kembangkan perilaku menjalankan syari’at dengan
                        benar.
                    </li>
                    <li>Melaksanakan pembiasaan berlaku baik,jujur ,tanggungjawab ,kerja keras,cinta tanah air dan amanah.
                    </li>
                    <li>Melaksanakan pembelajaran melalui proses mengamati, menanya, mencoba( eksperimen) mengasosiasikan
                        dan
                        mengkomunikasikan (mengaplikasikan)</li>
                    <li>Melaksanakan pemantapan atau pendalaman materi terutama untuk Siswa kelas VI</li>
                    <li>Melaksanakan pembinaan terhadap siswa yang kurang mampu dalam hal baca dan tulis baik latin maupun
                        arab.
                    </li>
                    <li>Melaksanakan pembelajaran dan pembiasaan untuk menumbuhkembangkan budaya peduli ingkungan.</li>
                    <li>Melaksanakan Pembinaan / pembelajaran terkait dengan proses Pemberantasan Sarang Nyamuk terutama
                        penyebab
                        sakit Demam Berdarah Dengue ( PSN-DBD ).
                    </li>
                    <li>Melaksanakan pembelajaran umum dan agama dengan sumber belajar dari lingkungan Madrasah .</li>
                </ol>

                <li class="fs-5 text-dark fw-bold">Standar Sarpras</li>
                <ol>
                    <li>Mengupayakan tersedianya buku-buku dan alat peraga yang menunjang pelaksanaan Proses Pembeajaran.
                    </li>
                    <li>Mengupayakan tersedianya alat bantu untuk pendidikan lingkungan hidup, pendidikan karakter yang
                        akhlaqul
                        karimah.</li>
                    <li>Mengupayakan tersedianya lingkungan madrasah yang memadai sebagai sumber ataupun media belajar bagi
                        siswa.
                    </li>
                </ol>
                <li class="fs-5 text-dark fw-bold">Standar Kelulusan</li>
                <ol>
                    <li>Menetapkan kriteria kelulusan yang mengacu pada nilai Akhlaq, Pengetahuan dan budaya linghkungan.
                    </li>
                    <li>Meningkatkan mutu hasil belajar dengan rata-rata di atas 8,00</li>
                    <li>Meningkatkan Jumlah lulusan yang yang sesuai harapan stakeholder.</li>
                    <li>Meningkatkan kelulusan yang memiliki sikap, pengetahuan dan ketrampilan yang dibutuhkan oleh
                        masyarakat.
                    </li>
                </ol>
                <li class="fs-5 text-dark fw-bold">Standar Pengelolaan</li>
                <ol>
                    <li>Melaksanakan pembagian tugas lembaga sesuai dengan tupoksinya masing-masing.</li>
                    <li>Bekerja sama dengan Yayasan, Komite Madrsah dan Orang Tua Murid ,demi terwujudnya hasil pendidikan
                        yang
                        diharapkan.</li>
                    <li>Melaksanakan pengelolaan limbah air wudlu untuk memelihara ikan dan untuk pengairan tanaman di taman
                        Madrasah/bekerja sama dengan stakeholder.
                    </li>
                </ol>
                <li class="fs-5 text-dark fw-bold">Standar Pembiayaan</li>
                <ol>
                    <li>Melakukan efisiensi dan optimalisasi biaya sesuai dengan Peraturan Menteri Keuangan,.</li>
                    <li>Melakukan peningkatan kewirausahaan demi lancarnya kegiatan Madrasah.</li>
                    <li>Menjalin kerja sama dengan wali murid juga Komite Madrasah dan Yayasan dalam pengadaan sarana dan
                        prasarana.
                    </li>
                </ol>

                <li class="fs-5 text-dark fw-bold">Standar Penilaian</li>
                <ol>
                    <li>Melaksanakan penialain yang berdasarkan pada sikap Akhlaqul Karimah.</li>
                    <li>Melaksanakan penilaian yng berdasarkan pada Intelektual /ranah kognitif.</li>
                    <li>Melaksankan penilaian yang berdasarkan pada karakter adat ketimuran.</li>
                    <li>Melaksanakan penilaian berbasis perilaku terhadap cinta lingkungan sekitar.</li>
                    <li>Melaksanakan penilaian berdasar bukti outentik</li>
                </ol>
            </ol>

        </div>
    </div>
@endsection
