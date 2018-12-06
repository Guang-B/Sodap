<script type="text/javascript">
    $(document).ready(function () {
        $("#dashkeg").click(function () {
            Pace.restart();
            Pace.track(function () {
                window.location.href = base_url + "User/kakppk";
            });
        });
    });

</script>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        SODAP
        <small>Kota Payakumbuh</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="callout callout-info">
        <div class="row">
            <div class="col-xs-12 col-md-12 col-md-offset-1">
                <br>
                <p id="kdunit" hidden><?php echo $idopd ?></p>
                <div class="row">
                    <div class="col-md-2 col-sm-2" style="text-align: left">Organisasi</div>
                    <div class="col-md-1 col-sm-1" style="text-align: right;width: 5px">:</div>
                    <div class="col-md-9 col-sm-9" style="padding-left: 25px"><?php echo $nmopd ?></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2 col-sm-2" style="text-align: left">Tahun</div>
                    <div class="col-md-1 col-sm-1" style="text-align: right;width: 5px">:</div>
                    <div class="col-md-9 col-sm-9" style="padding-left: 25px"><?php echo $tahun ?>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>LIST</h3>
                    <p>Kegiatan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <!--   <a href="#" class="small-box-footer" id="dashkeg">
                      Proses <i class="fa fa-arrow-circle-right"></i>
                  </a> -->
                <a class="btn btn-block btn-social btn-success" id="dashkeg">
                    <i class="fa fa-bars"></i> proses
                </a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <div class="row col-md-12 col-sm-12 col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border" style="font-size: 18px">
                <center><strong>Realisasi</strong></center>
            </div>
            <div class="box-body table-responsive">
                <br>
                <div class="row col-md-offset-1 col-md-10 col-sm-10 col-xs-10">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <strong>Pagu Tahun</strong>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <?php echo $pagu_tahun; ?>
                    </div>
                </div>
                <div class="row col-md-12">
                    <br>
                </div>
                <div class="row col-md-offset-1 col-md-10 col-sm-10 col-xs-10">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <strong>Angkas sampai bulan ini</strong>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <?php echo $angkas_bulan; ?>
                    </div>
                </div>
                <div class="row col-md-12">
                    <br>
                </div>
                <div class="row col-md-offset-1 col-md-10 col-sm-10 col-xs-10">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <strong>Angkas bulan ini</strong>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <?php echo $angkas_bulan_ini; ?>
                    </div>
                </div>
                <div class="row col-md-12">
                    <br>
                </div>
                <div class="row col-md-offset-1 col-md-10 col-sm-10 col-xs-10">
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <strong>Persentase realisasi bulan ini</strong>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <?php echo $persen_realisasi; ?>
                    </div>
                </div>
                <div class="row col-md-12">
                    <br>
                </div>
                <div class="row col-md-12 col-sm-12 col-xs-12">
                    <br>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <td style="text-align: center;white-space: nowrap;width: 1%"><strong>No</strong></td>
                            <td><strong>PPTK</strong></td>
                            <td style="text-align: center;white-space: nowrap;width: 1%"><strong>Persentase</strong>
                            </td>
                            <td style="text-align: center;white-space: nowrap;width: 1%"><strong>Nilai</strong></td>
                            <td style="text-align: center;white-space: nowrap;width: 1%"></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $no = 1;
                        foreach ($lspptk

                        as $pptk){ ?>
                        <tr>
                            <td style="text-align: center"><?php echo '<strong>' . $no . '</strong>'; ?></td>
                            <td><?php echo '<strong>' . $pptk['nama'] . '</strong>' ?></td>
                            <td style="text-align: center"></td>
                            <td style="text-align: center;white-space: nowrap;width: 1%"></td>
                            <td style="text-align: center;white-space: nowrap;width: 1%"></td>
                        </tr>
                        <?php
                        foreach ($kegiatan as $keg) {
                            if ($keg['idpnspptk'] == $pptk['nip']) {
                                ?>
                                <tr>
                                    <td style="text-align: center"></td>
                                    <td id="keg<?php echo $keg['kdkegunit'] ?>"><?php echo $keg['nmkegunit'] ?></td>
                                    <td style="text-align: center;white-space: nowrap;width: 1%">
                                        <?php
                                        $jum = 0;
                                        foreach ($data_realisasi as $d_real) {
                                            if ($d_real['kdkegunit'] == $keg['kdkegunit']) {
                                                $jum += $d_real['jumlah_harga'];
                                            }
                                        }
                                        $tb = 0;
                                        foreach ($det_angkas_bulan_ini as $det) {
                                            if ($det['kdkegunit'] == $keg['kdkegunit']) {
                                                $tb += $det['nilai']; //tb : total angkas bulan
                                            }
                                        }
                                        $trhbs = 0;
                                        foreach ($data_realisasi_hbs as $r) {
                                            if ($r['kdkegunit'] == $keg['kdkegunit']) {
                                                $trhbs += $r['jumlah_harga']; //total realisasi hingga bulan sebelumnya : trhbs
                                            }
                                        }
                                        $angkas = 0;
                                        foreach ($data_angkas_hbs as $a) {
                                            if ($a['kdkegunit'] == $keg['kdkegunit']) {
                                                $angkas += $a['total_angkas'];
                                            }
                                        }
                                        $sisa_angkas_hbs = ($angkas - $trhbs); //sisa angkas hingga bulan sebelumnya
                                        $ta = $sisa_angkas_hbs + $tb;
                                        $persen = round(($jum / $ta) * 100, 2);
                                        echo $persen; ?> %
                                    </td>
                                    <td style="text-align: center;white-space: nowrap;width: 1%">
                                        <?php $jum = 0;
                                        foreach ($data_realisasi as $d_real) {
                                            if ($d_real['kdkegunit'] == $keg['kdkegunit']) {
                                                $jum += $d_real['jumlah_harga'];
                                            }
                                        }
                                        echo $this->template->rupiah($jum); ?>
                                    </td>
                                    <td style="text-align: center;white-space: nowrap;width: 1%">
                                        <button id="<?php echo $keg['kdkegunit']; ?>"
                                                onclick="detail('<?php echo $keg['kdkegunit']; ?>')"
                                                class="btn btn-primary btn-flat btn-sm btn-social"><i
                                                    class="fa fa-list"></i> detail
                                        </button>
                                    </td>
                                </tr>
                            <?php }
                        } ?>
                        </tbody>
                        <?php $no++;
                        } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="modal-data" class="modal">
        <div class="modal-dialog modal-lg" style="width: 95%">

            <div class="modal-content">
                <div class="modal-header" style="text-align: center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    Detail Realisasi
                    <strong id="header">

                    </strong>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- include the style -->
<link rel="stylesheet" href="<?php echo base_url('assets/alertify/css/alertify.min.css') ?>"/>
<!-- include a theme -->
<link rel="stylesheet" href="<?php echo base_url('assets/alertify/css/themes/default.min.css') ?>"/>
<!-- include the script -->
<script src="<?php echo base_url('assets/alertify/alertify.min.js') ?>"></script>
<script type="application/javascript">
    function detail(kdkegunit) {
        $.ajax({
            url: '<?php echo base_url('User/getjsonrealisasi/'); ?>' + kdkegunit,
            type: 'GET',
            success: function (data) {
                if (JSON.parse(data) != 0) {
                    console.log(JSON.parse(data).datar);
                    var tr = '';
                    for(i=0;i<JSON.parse(data).matangr.length;i++){
                        tr += '<tr style="background-color: #f7f3f7">'+
                            '<td style="text-align:center;vertical-align: middle"><strong>'+JSON.parse(data).matangr[i].kdper+'</strong></td>'+
                            '<td><strong>'+JSON.parse(data).matangr[i].nmper+'</strong></td>'+
                            '<td></td>'+
                            '<td></td>'+
                            '<td></td>'+
                            '<td></td>'+
                            '<td></td>'+
                            '<td style="text-align:center;vertical-align: middle"><strong>'+JSON.parse(data).matangr[i].sisa_dana+'</strong></td>'+
                            '</tr>';
                        for(j=0;j<JSON.parse(data).datar.length;j++){
                            if((JSON.parse(data).matangr[i].mtgkey)==(JSON.parse(data).datar[j].mtgkey)){
                                tr += '<tr>'+
                                    '<td></td>'+
                                    '<td style="text-align:left">'+JSON.parse(data).datar[j].urn+'</td>'+
                                    '<td style="text-align:center;vertical-align:middle"><strong>'+JSON.parse(data).datar[j].vol+'</strong></td>'+
                                    '<td style="text-align:center;vertical-align:middle"><strong>'+JSON.parse(data).datar[j].satuan+'</strong></td>'+
                                    '<td style="text-align:center;vertical-align:middle"><strong>'+JSON.parse(data).datar[j].harga_satuan+'</strong></td>'+
                                    '<td style="text-align:center;vertical-align:middle"><strong>'+JSON.parse(data).datar[j].jumlah_harga+'</strong></td>'+
                                    '<td style="text-align:center;vertical-align:middle"><strong>'+JSON.parse(data).datar[j].nm_dana+'</strong></td>'+
                                    '<td style="text-align:center;vertical-align:middle"><strong>'+JSON.parse(data).datar[j].sisa_dana+'</strong></td>'+
                                    '</tr>';
                            }
                        }
                    }
                    var header = document.getElementById('keg' + kdkegunit).innerHTML;
                    var data_real = '';
                    var tb = '<table class="table table-bordered table-condensed table-hover" width="100%">\n' +
                        '                        <thead>\n' +
                        '                        <tr>\n' +
                        '                           <td rowspan="3" style="text-align: center;vertical-align: middle;white-space: nowrap;width: 1%"><strong>Kode\n' +
                        '                                    Rekening</strong></td>\n' +
                        '                            <td colspan="5" style="text-align: center;vertical-align: middle"><strong>Realisasi</strong>\n' +
                        '                            </td>\n' +
                        '                            <td rowspan="3"\n' +
                        '                                style="text-align: center;vertical-align: middle;white-space: nowrap;width: 1%"><strong>Sumber\n' +
                        '                                    Dana</strong></td>\n' +
                        '                            <td rowspan="3"\n' +
                        '                                style="text-align: center;vertical-align: middle;white-space: nowrap;width: 1%"><strong>Sisa\n' +
                        '                                    Dana</strong></td>\n' +
                        '                        </tr>\n' +
                        '                        <tr>\n' +
                        '                            <td rowspan="2"\n' +
                        '                                style="text-align: center;vertical-align: middle;white-space: nowrap;width: 1%"><strong>Uraian</strong>\n' +
                        '                            </td>\n' +
                        '                            <td rowspan="2"\n' +
                        '                                style="text-align: center;vertical-align: middle;white-space: nowrap;width: 1%"><strong>Volumes</strong>\n' +
                        '                            </td>\n' +
                        '                            <td rowspan="2"\n' +
                        '                                style="text-align: center;vertical-align: middle;white-space: nowrap;width: 1%"><strong>Satuan</strong>\n' +
                        '                            </td>\n' +
                        '                            <td rowspan="2"\n' +
                        '                                style="text-align: center;vertical-align: middle;white-space: nowrap;width: 1%"><strong>Harga\n' +
                        '                                    Satuan</strong></td>\n' +
                        '                            <td rowspan="2"\n' +
                        '                                style="text-align: center;vertical-align: middle;white-space: nowrap;width: 1%"><strong>Jumlah</strong>\n' +
                        '                            </td>\n' +
                        '                        </tr>\n' +
                        '                        <tr>\n' +
                        '\n' +
                        '                        </tr>\n' +
                        '                        </thead>\n' +
                        '                        <tbody id="tb-data">\n' +
                        '\n' +
                        '                        </tbody>\n' +
                        '                    </table>';
                    alertify.defaults.glossary.title = '<center>Detail Realisasi <strong>'+header+'</strong></center>';
                    alertify.confirm(tb,function(){ alertify.success('Dikonfirmasi')},function(){ alertify.error('Detail ditutup!')}).set({transition:'zoom'}).maximize().set({labels:{ok:'Konfirmasi', cancel: 'Batal'}, padding: false}).set('defaultFocus', 'cancel');
                    /*for (i = 0; i < JSON.parse(data).length; i++) {
                        data_real += '<tr>' +
                            '<td style="text-align: center;white-space: nowrap;width: 1%">' + JSON.parse(data)[i].nm_dana + '</td>' +
                            '<td style="text-align: left;">' + JSON.parse(data)[i].urn + '</td>' +
                            '<td style="text-align: center;white-space: nowrap;width: 1%">' + JSON.parse(data)[i].vol + '</td>' +
                            '<td style="text-align: center;white-space: nowrap;width: 1%">' + JSON.parse(data)[i].satuan + '</td>' +
                            '<td style="text-align: right;white-space: nowrap;width: 1%">' + JSON.parse(data)[i].harga_satuan + '</td>' +
                            '<td style="text-align: right;white-space: nowrap;width: 1%">' + JSON.parse(data)[i].jumlah_harga + '</td>' +
                            '<td style="text-align: right;white-space: nowrap;width: 1%">' + JSON.parse(data)[i].sisa_dana + '</td>' +
                            '</tr>';
                    }
                    */
                    document.getElementById('tb-data').innerHTML = tr;

                    //$('#modal-data').modal('show');

                } else {
                    var header = document.getElementById('keg' + kdkegunit).innerHTML;
                    alertify.defaults.glossary.title = 'Info!';
                    alertify.alert('<div class="text-red">Belum ada realisasi <strong style="color: #000000" "> Kegiatan '+header+'!</strong></div>').set({transition:'zoom'});
                }
            }
        });
    }
</script>
<!-- /.content -->









