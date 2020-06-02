<div class="pure-g">
    <div class="pure-u-1-3">
        <div class="pure-u-1-2 l-box registerfield">
            <h3>Create account</h3>
            <hr>
            <form class="pure-form pure-form-aligned" action="/register" method="post">

                <fieldset>
                    <div class="pure-control-group">
                        <label for="firstname">First name</label>
                        <input type="text" name='firstname' id="firstname" placeholder="First name"
                               value="<?= set_value('firstname') ?>"/>
                    </div>
                    <div class="pure-control-group">
                        <label for="lastname">Last name</label>
                        <input type="text" name="lastname" id="lastname" placeholder="Last name"
                               value="<?= set_value('lastname') ?>"/>
                    </div>

                    <div class="pure-control-group">
                        <label for="email">Email adress</label>
                        <input type="email" name="email" id="email" placeholder="Email adress"
                               value="<?= set_value('email') ?>">
                    </div>
                    <div class="pure-control-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" name="password" value=""/>
                    </div>
                    <div class="pure-control-group">
                        <label for="password_confirm">Confirm Password</label>
                        <input type="password" name="password_confirm" id="password_confirm" placeholder="Password" name="password_confirm" value=""/>
                    </div>
                    <?php if (isset($validation)): ?>
                        <div class="pure-u-1 alert ">
                            <div class="errors" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>
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