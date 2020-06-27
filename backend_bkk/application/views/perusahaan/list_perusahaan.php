<div class="card">
    <div class="card-body">
        <h4 class="card-title">Berikut Adalah Daftar Perusahaan</h4>
        <table class="table table-bordered">

        </table>
    </div>
</div>
</div>
<script type="text/javascript">
    function loadKonten(url) {
        $.ajax(url, {
            type: 'GET',
            success: function(data, status, xhr) {
                var objData = JSON.parse(data);

                $('#tabel_perusahaan').html(objData.konten);

            },
            error: function(jqXHR, textStatus, errorMsg) {
                alert('Error : ' + errorMsg);
            }
        });
    }

    loadKonten('http://localhost/bkk_app/backend_bkk/perusahaan/list_perusahaan');
</script>