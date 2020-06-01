<div class="pure-g">
    <div class="pure-u-1-3">
        <div class="pure-u-1-2 l-box registerfield">
            <h3>Create account</h3>
            <hr>
            <form class="pure-form pure-form-aligned" action="/register" method="post">

                <fieldset>
                    <div class="pure-control-group">
                        <label for="firstname">First name</label>
                        <input type="text" id="firstname" placeholder="First name"
                               valaue="<? set_value('firstname') ?>"
                    </div>
                    <div class="pure-control-group">
                        <label for="lastname">Last name</label>
                        <input type="text" id="lastname" placeholder="Last name"
                               valaue="<? set_value('lastname') ?>"
                    </div>

                    <div class="pure-control-group">
                        <label for="aligned-email">Email adress</label>
                        <input type="email" id="aligned-email" placeholder="Email adress"
                               valaue="<? set_value('email') ?>"
                    </div>
                    <div class="pure-control-group">
                        <label for="aligned-password">Password</label>
                        <input type="password" id="aligned-password" placeholder="Password" name="password" value=""/>
                    </div>
                    <div class="pure-control-group">
                        <label for="aligned-password_confirm">Confirm Password</label>
                        <input type="password" id="aligned-password_confirm" placeholder="Password" name="password_confirm" value=""/>
                    </div>
                    <button type="submit" class="pure-button pure-button-primary">Register</button>
                    <div class="pure-g register">
                        <div class="pure-u-2-3">
                            <a href="/">Already have an account</a>
                        </div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
</div>