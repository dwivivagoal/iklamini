<div class="container">
    <div class="row">
        <form class="col s8 offset-s6" name="form-payment-confirmation" id="form-payment-confirmation" action="#" method="post" enctype="multiform/data">
          
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Konfirmasi Pembayaran</span>
              <p>Silahkan isi form terlebih dahulu untuk meninggalkan pesan.</p>
              <br>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Nama Lengkap" id="nama_lengkap" type="text" class="validate">
                  <label for="nama_lengkap">Nama Lengkap</label>
                </div>
              </div>
              
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Email" id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Judul Pesan" id="judul" type="text" class="validate">
                  <label for="judul">Judul</label>
                </div>
              </div>
              
              <div class="row">
                <div class="input-field col s12">
                  <textarea class="materialize-textarea" id="isi"></textarea>
                  <label for="isi">Isi Pesan</label>
                </div>
              </div>
              
              <div class="row">
                <div class="file-field input-field">
                <div class="input-field col s12">
                  <div class="btn">
                    <span>File</span>
                    <input type="file" name="file_bukti_bayar">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" name="file_name_bukti_bayar">
                  </div>
                </div>
                </div>    
              </div>
              
              <div class="row">
                    <div class="input-field col s6">
                        {image_captcha}
                    </div>  
                    <div class="input-field col s6">
                      <input placeholder="Kode Captcha" id="captcha" name="captcha" type="text" class="validate" required="required">
                      <label for="link">Captcha</label>
                    </div>
              </div>
              
            </div>
            <div class="card-action">
                <buton class="waves-effect waves-light btn" name="btn-payment-confirmation" type="submit">Konfirmasi Bayar</buton>
            </div>
          </div>    
          
      </form>
    </div>
</div>    
