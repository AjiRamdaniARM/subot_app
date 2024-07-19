<div id="loading-admin"
    class="hidden fixed top-0 z-96 left-0 w-full h-full flex items-center justify-center bg-gray-800 bg-opacity-75">
    <div id="wifi-loader">
        <svg viewBox="0 0 86 86" class="circle-outer">
            <circle r="40" cy="43" cx="43" class="back"></circle>
            <circle r="40" cy="43" cx="43" class="front"></circle>
            <circle r="40" cy="43" cx="43" class="new"></circle>
        </svg>
        <svg viewBox="0 0 60 60" class="circle-middle">
            <circle r="27" cy="30" cx="30" class="back"></circle>
            <circle r="27" cy="30" cx="30" class="front"></circle>
        </svg>

        <div data-text="Loading..." class="text"></div>
    </div>

</div>



<style>
    #wifi-loader {
        --background: #62abff;
        --front-color: #ef4d86;
        --front-color-in: #fbb216;
        --back-color: #c3c8de;
        --text-color: #414856;
        width: 64px;
        height: 64px;
        border-radius: 50px;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #wifi-loader svg {
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #wifi-loader svg circle {
        position: absolute;
        fill: none;
        stroke-width: 6px;
        stroke-linecap: round;
        stroke-linejoin: round;
        transform: rotate(-100deg);
        transform-origin: center;
    }

    #wifi-loader svg circle.back {
        stroke: var(--back-color);
    }

    #wifi-loader svg circle.front {
        stroke: var(--front-color);
    }

    #wifi-loader svg.circle-outer {
        height: 86px;
        width: 86px;
    }

    #wifi-loader svg.circle-outer circle {
        stroke-dasharray: 62.75 188.25;
    }

    #wifi-loader svg.circle-outer circle.back {
        animation: circle-outer135 1.8s ease infinite 0.3s;
    }

    #wifi-loader svg.circle-outer circle.front {
        animation: circle-outer135 1.8s ease infinite 0.15s;
    }

    #wifi-loader svg.circle-middle {
        height: 60px;
        width: 60px;
    }

    #wifi-loader svg.circle-middle circle {
        stroke: var(--front-color-in);
        stroke-dasharray: 42.5 127.5;
    }

    #wifi-loader svg.circle-middle circle.back {
        animation: circle-middle6123 1.8s ease infinite 0.25s;
    }

    #wifi-loader svg.circle-middle circle.front {
        animation: circle-middle6123 1.8s ease infinite 0.1s;
    }

    #wifi-loader svg.circle-inner {
        height: 34px;
        width: 34px;
    }

    #wifi-loader svg.circle-inner circle {
        stroke-dasharray: 22 66;
    }

    #wifi-loader svg.circle-inner circle.back {
        animation: circle-inner162 1.8s ease infinite 0.2s;
    }

    #wifi-loader svg.circle-inner circle.front {
        animation: circle-inner162 1.8s ease infinite 0.05s;
    }

    #wifi-loader .text {
        position: absolute;
        bottom: -40px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-transform: lowercase;
        font-weight: 500;
        font-size: 14px;
        letter-spacing: 0.2px;
    }

    #wifi-loader .text::before,
    #wifi-loader .text::after {
        content: attr(data-text);
    }

    #wifi-loader .text::before {
        color: var(--text-color);
    }

    #wifi-loader .text::after {
        color: var(--front-color-in);
        animation: text-animation76 3.6s ease infinite;
        position: absolute;
        left: 0;
    }

    @keyframes circle-outer135 {
        0% {
            stroke-dashoffset: 25;
        }

        25% {
            stroke-dashoffset: 0;
        }

        65% {
            stroke-dashoffset: 301;
        }

        80% {
            stroke-dashoffset: 276;
        }

        100% {
            stroke-dashoffset: 276;
        }
    }

    @keyframes circle-middle6123 {
        0% {
            stroke-dashoffset: 17;
        }

        25% {
            stroke-dashoffset: 0;
        }

        65% {
            stroke-dashoffset: 204;
        }

        80% {
            stroke-dashoffset: 187;
        }

        100% {
            stroke-dashoffset: 187;
        }
    }

    @keyframes circle-inner162 {
        0% {
            stroke-dashoffset: 9;
        }

        25% {
            stroke-dashoffset: 0;
        }

        65% {
            stroke-dashoffset: 106;
        }

        80% {
            stroke-dashoffset: 97;
        }

        100% {
            stroke-dashoffset: 97;
        }
    }

    @keyframes text-animation76 {
        0% {
            clip-path: inset(0 100% 0 0);
        }

        50% {
            clip-path: inset(0);
        }

        100% {
            clip-path: inset(0 0 0 100%);
        }
    }
</style>
