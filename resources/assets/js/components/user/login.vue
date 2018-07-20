<template lang="html">
  <div class="signin-page">
    <div class="accounting">
        <div class="overlay"></div>
    </div>
    
    <div class="signup-from">
        <div class="signup">
          <div class="signup-body">
            <h3 class="text-center m-t-0 m-b-15">
              <a href="#" class="logo logo-admin">
                <img src="images/logo.png" height="45" width="200" alt="KAN">
              </a>
            </h3>

            <h4 class="text-muted text-center m-t-0">
              <b>Sign In</b>
            </h4>
            <form class="m-t-30" action="index.html">

                <div class="form-group col-xs-12">
                    <input class="form-control input-field" type="text" required="" placeholder="Username">
                </div>
            
                <div class="form-group col-xs-12">
                    <input class="form-control input-field" type="password" required="" placeholder="Password">
                </div>
            
                <div class="form-group col-xs-12">
                    <div class="checkbox checkbox-primary">
                        <input id="checkbox-signup" type="checkbox">
                        <label for="checkbox-signup">
                            Remember me
                        </label>
                    </div>
                </div>

                <div class="form-group col-xs-12">
                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                </div>

                  <div class="form-group d-flex m-t-30 m-b-0">
                      <div class="col-sm-7 p-r-0 p-l-0">
                          <a href="" class="text-muted shadow-hover"><i class="fas fa-lock m-r-5" aria-hidden="true"></i> Forgot your password?</a>
                      </div>
                      <div class="col-sm-5 text-right p-r-0 p-l-0">
                          <a href="" class="text-muted shadow-hover">Create an account</a>
                      </div>
                  </div>
              </form>
          </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
}
</script>

<style lang="css">
</style>
