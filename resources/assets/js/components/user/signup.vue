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
              <b>Sign Up</b>
            </h4>
            <form class="" action="index.html">
                    <div class="form-group col-xs-12">
                        <input class="form-control input-field" type="email" required="" placeholder="Email">
                    </div>
                
                    <div class="form-group  col-xs-12">
                        <input class="form-control input-field" type="text" required="" placeholder="Username">
                    </div>
                
                    <div class="form-group col-xs-12">
                        <input class="form-control input-field" type="password" required="" placeholder="Password">
                    </div>
                
                    <div class="form-group col-xs-12">
                        <input class="form-control input-field" type="password" required="" placeholder="Confirm password">
                    </div>

                    <div class="form-group col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                I accept <a href="">Terms and Conditions</a>
                            </label>
                        </div>
                    </div>

                    <div class="form-group text-center col-xs-12">
                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register</button>
                    </div>

                    <div class="form-group m-b-0 col-sm-12 text-center">
                        <a href="" class="text-muted shadow-hover">Already have account</a>
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
