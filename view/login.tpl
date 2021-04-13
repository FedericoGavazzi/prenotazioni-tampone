<?php $this->layout('main', ['argomento' => 'Registrazione avvenuta con successo']); ?>
<form action="../php/esito_login.php" method="post">
    <fieldset>
        <legend>login</legend>
        <label for="username">Username</label>
        <input type="text" id="Username" placeholder="Username" name="usurname"/><br>
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Password" name="password"/><br>
        <input type="submit" value="Accedi"/>
    </fieldset>
</form>
