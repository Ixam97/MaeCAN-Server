<div class="button_grid_2">
    <div class="button button_active">DCC</div>
    <div class="button">Motorola</div>
</div>
<div class="keyboard_grid" id="keyboard_grid">
    <!--<div class="acc button">
        <div class="acc_indicator">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class="acc_name">1</p>
    </div>
    <div class="acc button">
        <div class="acc_indicator">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class="acc_name">2</p>
    </div>
    <div class="acc button">
        <div class="acc_indicator">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class="acc_name">3</p>
    </div>
    <div class="acc button">
        <div class="acc_indicator">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class="acc_name">4</p>
    </div>
    <div class="acc button">
        <div class="acc_indicator">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class="acc_name">5</p>
    </div>
    <div class="acc button">
        <div class="acc_indicator">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class="acc_name">6</p>
    </div>
    <div class="acc button">
        <div class="acc_indicator">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class="acc_name">7</p>
    </div>
    <div class="acc button">
        <div class="acc_indicator">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <p class="acc_name">8</p>
    </div>-->
</div>

<script src="js/main.js" type="text/javascript"></script>
<script>
    for (let i = 1; i <= 16; i++) {
        let acc_button = document.createElement('div');
        acc_button.className = 'acc button';
        let acc_button_content = `
            <div class="acc_indicator">
                <div onclick="console.log('Set ${i} to 0');"></div>
                <div></div>
                <div onclick="console.log('Set ${i} to 1');"></div>
            </div>
            <p class="acc_name">${i}</p>`
        acc_button.innerHTML = acc_button_content;
        keyboard_grid.appendChild(acc_button);
    }
</script>