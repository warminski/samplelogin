<div class="pure-g">
    <div class="pure-u-1-3">
        <div class="pure-u-1-2 l-box">
            <h3>Login</h3>
            <hr>
            <form class="pure-form pure-form-aligned" action="/" method="post">
                <fieldset>
                    <div class="pure-control-group">
                        <label for="aligned-email">Email adress</label>
                        <input type="email" id="aligned-email" placeholder="Email adress"
                               valaue="<? set_value('email') ?>"
                    </div>
                    <div class="pure-control-group">
                        <label for="aligned-password">Password</label>
                        <input type="password" id="aligned-password" placeholder="Password" name="password" value=""/>
                    </div>
                    <button type="submit" class="pure-button pure-button-primary">Login</button>
                    <div class="pure-g register">
                        <div class="pure-u-2-3">
                            <a href="/register">Don't have an account yet?</a>
                        </div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>
</div>