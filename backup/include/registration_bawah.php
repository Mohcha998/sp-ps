<?php if (!empty($_GET['ref'])) { ?>
<form method="post" id="form-asli-bawah" action="https://m1salesforce.com/receive_data">
<?php } else { ?>
<form method="post" id="form-lp-bawah" action="#">
    <?php } ?>

    <input type="hidden" name="source" value="<?php echo $_GET['share']; ?>">
    <input type="hidden" name="quantity" value="0">
    <input type="hidden" name="merch_id" value="191">
    <input type="hidden" name="subkategori_id" value="111">
    <input type="hidden" name="fighter_id" value="<?php echo $_GET['ref']; ?>">

    <div class="px-4 py-4 warna-bg-putih">
        <label for="nama" class="styling-label-form">Nama Lengkap (wajib diisi)</label>
        <div class="row mb-3">
            <div class="col-md-12">
                <input type="text" name="name" id="name-bawah" placeholder="Budi Setiawan"
                    class="form-control styling-form" onkeyup="nameValidationBawah()"
                    required="">
            </div>
            <div class="col-md-12 mt-2 text-center" id="div-name-validation-bawah"
                style="display: none;">
                <span style="color: red;">Nama Lengkap harus diisi</span>
            </div>
        </div>

        <label for="phone" class="styling-label-form">HP (wajib diisi)</label>
        <div class="row mb-2">
            <div class="col-md-12">
                <input type="text" name="phone" id="hp-bawah"
                    placeholder="+6289123456789"
                    class="form-control numeric styling-form" required=""
                    onkeypress="phoneValidationBawah()" onkeyup="phoneValidationBawah()"
                    maxlength="15" autocomplete="disabled">
                <input type="hidden" id="phone-value-validation-bawah" value="false">
                <input type="hidden" name="country-code" id="country-code-bawah" value="">
            </div>
            <div class="col-md-12 mt-2 text-center">
                <span id="phone-validation-message-bawah"></span>
            </div>
        </div>

        <label for="email" class="styling-label-form">Email (wajib diisi)</label>
        <div class="row mb-3">
            <div class="col-md-12">
                <input type="email" name="email" id="email-bawah" placeholder="budi@gmail.com"
                    autocomplete="disabled" onkeyup="emailValidationBawah()"
                    class="form-control styling-form" required="">
                <input type="hidden" id="email-value-validation-bawah" value="false"></input>
            </div>
            <div class="col-md-12 mt-2 text-center">
                <span id="email-validation-message-bawah"></span>
            </div>
        </div>

            <div class="row text-center">
            <div class="col-md-12">
                <button type="button" class="btn btn-block styling-button"
                    onclick="disableToast()"
                    id="btn-submit-bawah-modal" data-toggle="modal">
                    LANJUTKAN!</button>
            </div>
            <div class="col-md-12 mt-2">
                <span>Informasi Anda terjamin 100% aman.</span>
            </div>
        </div>

    </div>
    <div class="modal fade" id="modal_psa_bawah" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">M1 Live Webinar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body" id="table_psa_bawah">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center" width="200">Usia</th>
                            </tr>
                        </thead>
                        <tbody>
                             <td id="response">
                                    <input type="text" name="usia" id="usia-bawah" placeholder="25"
                                        class="form-control numeric styling-form" required=""
                                        onkeypress="usiaValidationBawah()" onkeyup="usiaValidationBawah()" 
                                        maxlength="2"
                                        autocomplete="disabled">       
                                    <div class="col-md-12 mt-2 text-center" id="div-usia-validation-bawah"
                                        style="display: none;">
                                        <span style="color: red;">Usia harus diisi</span>
                                    </div>
                                </td>
                        </tbody>
                    </table>
                </div> 
                <div class="modal-footer">
                <button type="button" class="btn btn-block styling-button"
                    id="btn-submit-bawah">
                    LANJUTKAN!</button>
                <button type="button" style="display: none;"
                    class="btn btn-block styling-button" id="btn-waiting-bawah">Mohon
                    Tunggu...</button>
                </div>
            </div>
        </div>
    </div>
</form>