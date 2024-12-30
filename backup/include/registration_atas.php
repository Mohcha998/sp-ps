<?php if (!empty($_GET['ref'])) { ?>
    <form method="post" id="form-asli" action="https://m1salesforce.com/receive_data">
    <?php } else { ?>
        <form method="post" id="form-lp" action="#">
        <?php } ?>

        <input type="hidden" name="source" value="<?php echo $_GET['share']; ?>">
        <input type="hidden" name="quantity" value="0">
        <input type="hidden" name="merch_id" value="191">
        <input type="hidden" name="subkategori_id" value="111">
        <input type="hidden" name="fighter_id" value="<?php echo $_GET['ref']; ?>">
        <div class="mb-3">
            <div>
                <input type="text" name="name" id="name" placeholder="Nama Anda"
                    class="form-control" onkeyup="nameValidation()" required="">
                <div class="col-md-12 mt-2 text-center" id="div-name-validation"
                    style="display: none;">
                    <span style="color: red;">Nama Lengkap harus diisi</span>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <div>
                <input type="text" name="phone" id="hp" placeholder="No WA"
                    class="form-control numeric" required=""
                    onkeypress="phoneValidation()" onkeyup="phoneValidation()" maxlength="15"
                    autocomplete="disabled">
                <input type="hidden" id="phone-value-validation" value="false">
                <input type="hidden" name="country-code" id="country-code" value="">
            </div>
            <div class="col-md-12 mt-2 text-center">
                <span id="phone-validation-message"></span>
            </div>
        </div>
        <div class="mb-4">
            <div>
                <input type="email" name="email" id="email" placeholder="Email Anda"
                    autocomplete="disabled" onkeyup="emailValidation()"
                    class="form-control" required="">
                <input type="hidden" id="email-value-validation" value="false"></input>
            </div>
            <div class="col-md-12 mt-2 text-center">
                <span id="email-validation-message"></span>
            </div>
        </div>
        <div>
            <div>
                <button type="button" style="background-color: #ae0001" class="btn btn-block text-white"
                    onclick="disableToast()"
                    id="btn-submit-atas-modal" data-toggle="modal">
                    SAYA MAU DAFTAR WEBINAR!</button>
            </div>
        </div>

        <div class="modal fade" id="modal_psa_atas" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">M1 Live Webinar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="table_psa">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center" width="200">Usia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td id="response">
                                    <input type="text" name="usia" id="usia" placeholder="25"
                                        class="form-control numeric styling-form" required=""
                                        onkeypress="usiaValidation()" onkeyup="usiaValidation()"
                                        maxlength="2"
                                        autocomplete="disabled">
                                    <div class="col-md-12 mt-2 text-center" id="div-usia-validation"
                                        style="display: none;">
                                        <span style="color: red;">Usia harus diisi</span>
                                    </div>
                                </td>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-block styling-button"
                            id="btn-submit-atas">
                            LANJUTKAN!</button>
                        <button type="button" style="display: none;"
                            class="btn btn-block styling-button" id="btn-waiting">Mohon
                            Tunggu...</button>
                    </div>
                </div>
            </div>
        </div>

        </form>