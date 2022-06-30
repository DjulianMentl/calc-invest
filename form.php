<form method = "POST" action = "<?= $_SERVER['PHP_SELF'] ?>" name = "calcInvest">
    <div>
        <span>Введите депозит: </span>
        <input type = "text" name = "deposit" value = ""/>
        <span> руб.</span><br/>
        <span>Проценты в день: </span>
        <input type = "text" name = "dayPercent" value = ""/><br/>
        <span>Сложный процент: </span>
        <input type = "checkbox"/><br/>
    </div>

    <br/>
    <input type = "submit" name = "calculate" value = "Рассчитать"/>
</form>