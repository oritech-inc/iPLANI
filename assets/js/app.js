$(()=>{
    handlePopTips();

    $(document).ready(()=>{
        handlePreloader();

    });
})

function handlePreloader() {
    $('.main').css('display','none');
    $('#main-app').css('display','block');
}

function handlePopTips() {
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
}