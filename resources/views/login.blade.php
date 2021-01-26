<div id="login_form">
    <form name="f1" method="post" action="/login" id="f1">
        <table>
            <tr>
                <td class="f1_label">User Name :</td><td><input type="text" name="username" value="" required />
                </td>
            </tr>
            <tr>
                <td class="f1_label">Password  :</td><td><input type="password" name="password" value="" required  />
                </td>
            </tr>
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <tr>
                <td>
                    <input type="submit" name="login" value="Log In" style="font-size:18px; " />
                </td>
            </tr>
        </table>
    </form> 
</div>
<style>
#login_form {
    position: absolute;
    top: 20%;
    left: 30%;
    right: 30%;
    bottom: 20%;
    font-size: 18px;
}

#f1 {
    background-color: #ccc;
    border-style: solid;
    border-width: 1px;
}
.f1_label {
    white-space: nowrap;
}
</style>