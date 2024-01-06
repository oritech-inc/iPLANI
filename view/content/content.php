<style>
    .nav-closer{
        animation-name: closer;
        animation-duration: 0.5s;
        animation-timing-function: ease-in-out;
        animation-fill-mode: forwards;
    }

    .nav-opener{
        animation-name: opener;
        animation-duration: 0.5s;
        animation-timing-function: ease-in-out;
    }

    .expands{
        animation-name: expand;
        animation-duration: 0.5s;
        animation-timing-function: ease-in-out;
    }
    .shinks{
        animation-name: shrink;
        animation-duration: 0.5s;
        animation-timing-function: ease-in-out;
    }

    @keyframes expand {
        from {
            width: 85%;
        }
        to {
            width: 98%;
        }
    }

    @keyframes shrink {
        from {
            width: 98%;
        }
        to {
            width: 85%;
        }
    }

    @keyframes closer {
        from {
            width: 15%;
        }
        to{
            width: 5%;
        }
    }

    @keyframes opener {
        from {
            width: 5%;
        }
        to {
            width: 15%;
        }
    }
</style>
<div class="container-fluid p-0 m-0 h-100 d-flex flex-row">
    <div id="left-content">
        <?php require_once 'left/left.php'?>
    </div>
    <div id="right-content">
        <?php require_once 'right/right.php'?>
    </div>
</div>

<script>
    $('.btnToggleSide').click((e)=>{
        e.preventDefault();
        const state = $('.btnToggleSide').attr('data-state');
        if (state === "open"){
            $('.btnToggleSide').attr('data-state', 'close');
            $('#left-content').addClass('nav-closer').removeClass('nav-opener');
            $('#right-content').addClass('expands').removeClass('shrinks').css('width','95%');
            $('.sidebar-text').toggle();
        }else{
            $('.btnToggleSide').attr('data-state', 'open');
            $('#left-content').addClass('nav-opener').removeClass('nav-closer');
            $('#right-content').addClass('shrinks').removeClass('expands');
            $('.sidebar-text').toggle();
        }
    });
</script>