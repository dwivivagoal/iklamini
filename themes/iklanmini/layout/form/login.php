<div class="container">
    <div class="row">
      <form class="col s6 offset-s9" id="form-iklanmini-login" method="POST" >
          
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Login</span>
              <p>Silahkan login terlebih dahulu unruk dapat mempergunakan fasilitas ini.</p>
              <br>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Email" id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input placeholder="Password" id="password" type="password" class="validate">
                  <label for="password">Password</label>
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
                        <input type="checkbox" />
                        <span>Ingat Saya</span>
                    </label>
                </div>
              </div>
              
            </div>
            <div class="card-action">
                <buton data-target="modal1" class="waves-effect waves-light btn modal-trigger btn-iklanmini-login" type='submit'>Login</buton>
            </div>
          </div>    
          
      </form>
    </div>
</div>    
