"<br />
<font size='1'><table class='xdebug-error xe-warning' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
        <tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Warning: preg_match(): Empty regular expression in C:\OSPanel\domains\a.kondratiev-oop\application\core\model.php on line <i>62</i></th></tr>
        <tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
        <tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
        <tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0003</td><td bgcolor='#eeeeec' align='right'>123688</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\OSPanel\domains\a.kondratiev-oop\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
        <tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0004</td><td bgcolor='#eeeeec' align='right'>125848</td><td bgcolor='#eeeeec'>require_once( <font color='#00bb00'>'C:\OSPanel\domains\a.kondratiev-oop\application\bootstrap.php'</font> )</td><td title='C:\OSPanel\domains\a.kondratiev-oop\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>5</td></tr>
        <tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0020</td><td bgcolor='#eeeeec' align='right'>157224</td><td bgcolor='#eeeeec'>Route::start(  )</td><td title='C:\OSPanel\domains\a.kondratiev-oop\application\bootstrap.php' bgcolor='#eeeeec'>...\bootstrap.php<b>:</b>10</td></tr>
        <tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0146</td><td bgcolor='#eeeeec' align='right'>181144</td><td bgcolor='#eeeeec'>Controller_Users->action_reg(  )</td><td title='C:\OSPanel\domains\a.kondratiev-oop\application\core\route.php' bgcolor='#eeeeec'>...\route.php<b>:</b>55</td></tr>
        <tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0146</td><td bgcolor='#eeeeec' align='right'>181200</td><td bgcolor='#eeeeec'>Users->addUser(  )</td><td title='C:\OSPanel\domains\a.kondratiev-oop\application\controllers\controller_users.php' bgcolor='#eeeeec'>...\controller_users.php<b>:</b>20</td></tr>
        <tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>0.0146</td><td bgcolor='#eeeeec' align='right'>186312</td><td bgcolor='#eeeeec'>Model->validate(  )</td><td title='C:\OSPanel\domains\a.kondratiev-oop\application\models\model_users.php' bgcolor='#eeeeec'>...\model_users.php<b>:</b>78</td></tr>
        <tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>0.0147</td><td bgcolor='#eeeeec' align='right'>188808</td><td bgcolor='#eeeeec'><a href='http://www.php.net/function.preg-match' target='_new'>preg_match</a>
                (  )</td><td title='C:\OSPanel\domains\a.kondratiev-oop\application\core\model.php' bgcolor='#eeeeec'>...\model.php<b>:</b>62</td></tr>
        <tr><th colspan='5' align='left' bgcolor='#e9b96e'>Dump <i>$_SERVER</i></th></tr>
        <tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$_SERVER['REMOTE_ADDR']&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'127.0.0.1'</font> <i>(length=9)</i>
</pre></td></tr>
        <tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$_SERVER['REQUEST_METHOD']&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'POST'</font> <i>(length=4)</i>
</pre></td></tr>
        <tr><th colspan='5' align='left' bgcolor='#e9b96e'>Dump <i>$_SESSION</i></th></tr>
        <tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$_SESSION['*']&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><i>undefined</i></td></tr>
        <tr><th colspan='5' align='left' bgcolor='#e9b96e'>Dump <i>$_REQUEST</i></th></tr>
        <tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$_REQUEST['name']&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>''</font> <i>(length=0)</i>
</pre></td></tr>
        <tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$_REQUEST['family']&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>''</font> <i>(length=0)</i>
</pre></td></tr>
        <tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$_REQUEST['email']&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>''</font> <i>(length=0)</i>
</pre></td></tr>
        <tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$_REQUEST['phone']&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>''</font> <i>(length=0)</i>
</pre></td></tr>
        <tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$_REQUEST['address']&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>''</font> <i>(length=0)</i>
</pre></td></tr>
        <tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$_REQUEST['password']&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>''</font> <i>(length=0)</i>
</pre></td></tr>
        <tr><td colspan='2' align='right' bgcolor='#eeeeec' valign='top'><pre>$_REQUEST['confirm_password']&nbsp;=</pre></td><td colspan='3' bgcolor='#eeeeec'><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>''</font> <i>(length=0)</i>
</pre></td></tr>
    </table></font>
{"error":true,"fields":{"name":["\u041f\u043e\u043b\u0435 \u0418\u043c\u044f \u043d\u0435 \u0437\u0430\u043f\u043e\u043b\u043d\u0435\u043d\u043e"],"family":["\u041f\u043e\u043b\u0435 \u0424\u0430\u043c\u0438\u043b\u0438\u044f \u043d\u0435 \u0437\u0430\u043f\u043e\u043b\u043d\u0435\u043d\u043e"],"email":["\u041f\u043e\u043b\u0435 E-mail \u043d\u0435 \u0437\u0430\u043f\u043e\u043b\u043d\u0435\u043d\u043e","\u041d\u0435\u043e\u0431\u0445\u043e\u0434\u0438\u043c\u043e \u0432\u0432\u0435\u0441\u0442\u0438 e-mail \u0432 \u0444\u043e\u0440\u043c\u0430\u0442\u0435 name@domain.com"],"phone":["\u041f\u043e\u043b\u0435 \u0422\u0435\u043b\u0435\u0444\u043e\u043d \u043d\u0435 \u0437\u0430\u043f\u043e\u043b\u043d\u0435\u043d\u043e","\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u0442\u0435\u043b\u0435\u0444\u043e\u043d \u0432 \u043d\u0443\u0436\u043d\u043e\u043c \u0444\u043e\u0440\u043c\u0430\u0442\u0435"],"address":["\u041f\u043e\u043b\u0435 \u0410\u0434\u0440\u0435\u0441 \u043d\u0435 \u0437\u0430\u043f\u043e\u043b\u043d\u0435\u043d\u043e"],"password":["\u041f\u043e\u043b\u0435 \u041f\u0430\u0440\u043e\u043b\u044c \u043d\u0435 \u0437\u0430\u043f\u043e\u043b\u043d\u0435\u043d\u043e",""],"confirm_password":["\u041f\u043e\u043b\u0435 \u041f\u043e\u0434\u0442\u0432\u0435\u0440\u0436\u0434\u0435\u043d\u0438\u0435 \u043f\u0430\u0440\u043e\u043b\u044f \u043d\u0435 \u0437\u0430\u043f\u043e\u043b\u043d\u0435\u043d\u043e"]}}"

<div class="block_registration__container">
    <div class="row">
        <div class="col-sm-6">
            <h3 class="text-center">Регистрация</h3>
            <form action="" method="POST" class="reg-form " id="regForm" autocomplete="off">
                <div class="form-group">
                    <label for="regInputName">Имя</label>
                    <input type="text" name="name" class="form-control" id="regInputName">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="regInputFamily">Фамилия</label>
                    <input type="text" name="family" class="form-control" id="regInputFamily">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="regInputEmail">Email</label>
                    <input type="text" name="email" class="form-control" id="regInputEmail">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="regInputPhone">Телефон</label>
                    <input type="tel" name="phone" class="form-control" id="regInputPhone">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="regInputAddress">Адрес</label>
                    <input type="text" name="address" class="form-control" id="regInputAddress">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="regInputPassword">Пароль</label>
                    <input type="password" name="password" class="form-control" id="regInputPassword">
                    <div class="invalid-feedback"></div>
                </div>
                <div class="form-group">
                    <label for="regInputConfirmPassword">Подтвердить пароль</label>
                    <input type="password" name="confirm_password" class="form-control" id="regInputConfirmPassword">
                    <div class="invalid-feedback"></div>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
            </form>
        </div>
        <div class="col-sm-6">
            <h3 class="text-center">Авторизация</h3>
            <form action="" method="POST" class="auth-form" id="authForm">
                <div class="form-group">
                    <label for="authInputEmail">Email</label>
                    <input type="email" class="form-control" id="authInputEmail">
                </div>
                <div class="form-group">
                    <label for="authInputPassword">Пароль</label>
                    <input type="password" class="form-control" id="authInputPassword">
                </div>
                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>
    </div>

</div>
