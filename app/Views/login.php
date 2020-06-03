<div class="pure-g">
    <div class="pure-u-1-3">
        <div class="pure-u-1-2 l-box">
            <h3>Login</h3>
            <hr>
            <?php if (session()->get('success')): ?>
                <div class="success">
                    <?=session()->get('success')?>
                </div>
            <?php endif; ?>
            <form class="pure-form pure-form-aligned" action="/" method="post">
                <fieldset>
                    <div class="pure-control-group">
                        <label for="email">Email adress</label>
                        <input type="text"  name="email" placeholder="Email adress" id="email" value="<?= set_value('email') ?>">
                    </div>
                    <div class="pure-control-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password" name="password" value=""/>
                    </div>
                    <?php if (isset($validation)): ?>
                        <div class="pure-u-1 alert ">
                            <div class="errors" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>
                    <?php endif; ?>
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