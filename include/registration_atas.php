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
                    disabled
                    id="btn-submit-atas">
                    Daftar Sekarang </button>
                <button type="button" style="background-color: #ae0001; display: none;" class="btn btn-block text-white"
                    disabled
                    id="btn-waiting">
                    Mohon Tunggu...</button>
            </div>
        </div>


        </form>