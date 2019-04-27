    <div class="row">
        <div class="col s7">
            <form id="form-pasang-iklan" name="form-pasang-iklan" method="POST" action="#">

              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                  <span class="card-title">Pasang Iklan</span>
                  <p>Silahkan isi form terlebih dahulu pasang iklanmini.</p>
                  <br>
                  
                  <div class="row">
                    <div class="input-field col s12">
                        <input placeholder="Judul Iklan" id="judul" name="judul" type="text" class="validate " required="required">
                      <label for="judul">Judul IklanMini</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s12">
                      <textarea class="materialize-textarea" id="isi" name="isi"  required="required"></textarea>
                      <label for="isi">Isi IklanMini</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="cth: https://www.iklanmini.com" id="link" name="link" type="text" class="validate" required="required">
                      <label for="link">URL</label>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="input-field col s12">
                      <select>
                        <option value="" disabled selected>[ Pilih Satu ]</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                      </select>
                      <label for="kategori">Kategori IklanMini</label>
                    </div>
                  </div>
                  
                  
                  <br>
                  <br>
                  <br>
                  
                  <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Nama Lengkap Saya" id="nama_lengkap" name="nama_lengkap" type="text" class="validate" required="required">
                      <label for="link">Nama Lengkap</label>
                    </div>
                    
                    <div class="input-field col s6">
                      <input placeholder="cth: 081233344455" id="no_hp" name="no_hp" type="text" class="validate" required="required">
                      <label for="link">No HP</label>
                    </div>  
                      
                  </div>
                  
                  <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="Alamat Email" id="email" name="email" type="email" class="validate" required="required">
                      <label for="link">Email</label>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="cth: Jakarta" id="kota" name="kota" type="text" class="validate" required="required">
                      <label for="link">Kota Tinggal</label>
                    </div>
                  </div>
                  
                  <br>
                  <br>
                  <br>
                  
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
                    <buton class="waves-effect waves-light btn" type="submit" id="btn-pasang">Pasang Iklan</buton>
                </div>
              </div>    

          </form>
        </div>  
        <div class="col s5">
            
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Tampilan Iklan</span>
                    <p>dibawah ini bentuk tampilan iklanmini anda.</p>
                    <br>
                </div>
            </div>
            
        </div>
        
    </div>
