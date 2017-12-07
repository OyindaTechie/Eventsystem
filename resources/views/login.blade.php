@extends('layout.header');

    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="/gologin">
            {{ csrf_field() }}
              <h1>Admin Login </h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-success">Submit</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

             
                  <h1><i class="fa fa-paw"></i> Event System</h1>
                  <p>©2017 Musiliu Oyindamola Aina</p>
                </div>
              </div>
            </form>
          </section>
        </div>

                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
