<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <h4 class="card-title">Berikut Adalah Daftar Perusahaan</h4>
                    <table class="table table-bordered " id="tabel_perusahaan">

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function loadKonten(url) {
        $.ajax(url, {
            type: 'GET',
            success: function(data, status, xhr) {
                var objData = JSON.parse(data);
                console.log($('#tabel_perusahaan'));

                $('#tabel_perusahaan').html(objData.konten);

            },
            error: function(jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
            }
        });
    }

    loadKonten('http://localhost/bkk_app/backend_bkk/perusahaan/list_perusahaan');
</script>