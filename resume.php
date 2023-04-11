<div class="section-title">
    <h2>Resume</h2>
</div>

<div class="row">
    <div class="col-lg-6">
        <h3 class="resume-title">Education</h3>
        <?php
            $params = [
                ['sekolah' => 'SDN 1 Tegalmunjul', 'tahun' => '2006 - 2013'],
                ['sekolah' => 'SMPN 5 Purwakarta', 'tahun' => '2013 - 2017'],
                ['sekolah' => 'SMK Bina Kerja Purwakarta', 'tahun' => '2017 - 2020'],
            ];
            foreach($params as $data){ ?>
                <div class="resume-item">
                    <h4><?= $data['sekolah'];?></h4>
                    <h5><?= $data['tahun'] ?></h5>
                </div>
        <?php } ?>
    </div>
    <div class="col-lg-6">
        <h3 class="resume-title">Experience</h3>
        <div class="resume-item">
            <h4>Freelancer Web development</h4>
            <h5>2019 - <i>Now</i></h5>
            <ul>
                <li>Menganalisis Kebutuhan</li>
                <li>Membuat Desain Database</li>
                <li>Membuat Aplikasi Web</li>
            </ul>
        </div>
    </div>
</div>