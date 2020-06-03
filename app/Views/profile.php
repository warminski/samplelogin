<div class="pure-g">
    <div class="pure-u-1-3">
        <div class="pure-u-1-2 l-box registerfield">
            <h3><?= $user['firstname'].' '.$user['lastname']?></h3>
            <hr>
            <?php if (session()->get('success')): ?>
                <div class="success">
                    <?=session()->get('success')?>
                </div>
            <?php endif; ?>
            <form class="pure-form pure-form-aligned" action="/profile" method="post">

                <fieldset>
                    <div class="pure-control-group">
                        <label for="firstname">First name</label>
                        <input type="text" name='firstname' id="firstname" placeholder="First name"
                               value="<?= set_value('firstname',$user['firstname']) ?>"/>
                    </div>
                    <div class="pure-control-group">
                        <label for="lastname">Last name</label>
                        <input type="text" name="lastname" id="lastname" placeholder="Last name"
                               value="<?= set_value('lastname',$user['lastname']) ?>"/>
                    </div>

                    <div class="pure-control-group">
                        <label for="email">Email adress</label>
                        <input type="email" readonly id="email" placeholder="Email adress"
                               value="<?=$user['email'] ?>">
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
                    <button type="submit" class="pure-button pure-button-primary">Update</button>
                </fieldset>
            </form>

        </div>
    </div>
</div>