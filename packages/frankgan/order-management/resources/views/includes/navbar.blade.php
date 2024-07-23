
<style>
    nav.navbar {
        width: 100%;
        padding: 1rem 2rem;
        background-color: #FFF;
        top: 0;
        z-index: 100;
        display: flex;
        justify-content: space-between
    }

    .setting-area {
        display: flex;
        justify-content: flex-end;
        column-gap: 1rem;
    }

    .setting-area a:hover {
        color: #00adad;
    }
</style>

<nav class="navbar">

    <p><span id="period"></span>阿循</p>

    <div class="setting-area">
        <a href="">系統設定</a>
        <a href="">帳號設定</a>
    </div>

</nav>

<script>
    const now = new Date();
    const hours = now.getHours();
    const period = hours < 6 ? '凌晨' :
                   hours < 12 ? '上午' :
                   hours < 18 ? '下午' : '晚上';
    document.getElementById('period').textContent = period + "好！";
</script>
