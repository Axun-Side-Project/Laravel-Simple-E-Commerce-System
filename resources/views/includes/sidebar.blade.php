
<aside class="sticky top-0 w-64 h-screen text-white bg-slate-800">

    {{-- 品牌 Logo --}}
    <img src="" alt="">

    <ul class="*:hover:cursor-pointer">
        <li class="flex items-center px-8 py-4 hover:bg-slate-700">
            <a href="">首頁</a>
            <i></i>
        </li>
        <li class="flex items-center px-8 py-4 hover:bg-slate-700">
            <a href="">關於我們</a>
            <i></i>
        </li>
        <input type="checkbox" id="menu" class="hidden peer/menu">
        <label class="flex items-center px-8 py-4 hover:bg-slate-700" for="menu">
            商品
            <i class="ml-auto fa fa-angle-down"></i>
        </label>
        <ul class="!hidden bg-slate-600 peer-checked/menu:!block">
            <li class="px-12 py-4 hover:bg-slate-500">
                <a href="">手套</a>
            </li>
            <li class="px-12 py-4 hover:bg-slate-500">
                <a href="">壓克力</a>
            </li>
            <li class="px-12 py-4 hover:bg-slate-500">
                <a href="">委託</a>
            </li>
        </ul>
        <li class="flex items-center px-8 py-4 hover:bg-slate-700">
            <a href="">聯絡我們</a>
            <i></i>
        </li>
        <li class="flex items-center px-8 py-4 hover:bg-slate-700">
            <a href="">服務條款</a>
            <i></i>
        </li>
        <li class="flex items-center px-8 py-4 hover:bg-slate-700">
            <a href="">隱私政策</a>
            <i></i>
        </li>
    </ul>

</aside>

<style>
    input.peer\/menu:checked + label i {
        transition: all;
        transform: rotateX(180deg);
    }
</style>
