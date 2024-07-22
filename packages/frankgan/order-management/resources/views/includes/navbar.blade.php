
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
</style>

<nav class="navbar">

    <p><span id="period"></span>阿循</p>

</nav>

<script>
    const now = new Date();
    const hours = now.getHours();
    const period = hours < 6 ? '凌晨' :
                   hours < 12 ? '上午' :
                   hours < 18 ? '下午' : '晚上';
    document.getElementById('period').textContent = period + "好！";
</script>
