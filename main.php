<div class="main">
    <p class="text">
        <img src="assets/img/logo/icon.svg" width="200">
        <span class="preloader"></span>
    </p>
</div>
<main id="main-app">
    <div class="card bg-transparent border-0 h-100 p-0 m-0">

        <div class="card-header rounded-0 p-0 m-0" id="header">
            <?php require_once './view/header/header.php'?>
        </div>
        <div class="card-body p-0 m-0 p-0 m-0" id="content">
            <?php require_once './view/content/content.php'?>
        </div>
        <div class="card-footer p-0 m-0" id="footer">
            <?php require_once './view/footer/footer.php'?>
        </div>
    </div>
</main>
<script>
    $('.lnk-toggle-modal').click((e)=>{
        e.preventDefault();
        const type = $('#lnk-toggle-modal').attr('data-md-type');
        alert(type);
    });
</script>