<div class="container">
    <div class="row">
      <form class="col s6 offset-s9">
          
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Daftar Baru</span>
              <p>Silahkan isi form terlebih dahulu untuk bergabung bersama kami.</p>
              <br>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Nama Lengkap" id="nama_lengkap" type="text" class="validate">
                  <label for="nama_lengkap">Nama Lengkap</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="cth: saya@contoh.com" id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="cth: 081233344455" id="no_hp" type="text" class="validate">
                  <label for="no_hp">No HP</label>
                </div>
              </div>
              
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Password" id="password" type="password" class="validate">
                  <label for="password">Password</label>
                </div>
              </div>
              
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Ulang Password" id="repassword" type="password" class="validate">
                  <label for="repassword">Ulang Password</label>
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
              
              <div class="row">
                <div class="input-field col s12">
                    <label>
                        <input type="checkbox" name="persetujuan"/>
                        <span>Saya telah membaca dan menyetujui semua syarat dan kondisi serta ketentuan IklanMini</span>
                    </label>
                </div>
              </div>
              
            </div>
            <div class="card-action">
                <buton class="waves-effect waves-light btn">Daftar</buton>
            </div>
          </div>    
          
      </form>
    </div>
</div>    
