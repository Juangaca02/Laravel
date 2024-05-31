
<button type="{{ $attributes->get('type', 'button') }}" class="buttonLogin {{ $attributes->get('class') }}">
    <span class="text">{{ $slot }}</span>
</button>

<style>
    .buttonLogin {
    align-items: center;
    background-image: linear-gradient(144deg, #AF40FF, #5B42F3 50%, #00DDEB);
    border: 0;
    border-radius: 8px;
    box-shadow: rgba(151, 65, 252, 0.2) 0 15px 30px -5px;
    box-sizing: border-box;
    color: #FFFFFF;
    display: flex;
    font-family: Phantomsans, sans-serif;
    font-size: 18px;
    justify-content: center;
    line-height: 1em;
    max-width: 100%;
    min-width: 140px;
    padding: 3px;
    text-decoration: none;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    white-space: nowrap;
    cursor: pointer;
    transition: all .3s;
}

.buttonLogin:active,
.buttonLogin:hover {
    outline: 0;
}

.buttonLogin span {
    background-color: rgb(5, 6, 45);
    padding: 10px;
    border-radius: 6px;
    width: 100%;
    height: 100%;
    transition: 300ms;
}

.buttonLogin:hover span {
    background: none;
}

.buttonLogin:active {
    transform: scale(0.9);
}
</style>