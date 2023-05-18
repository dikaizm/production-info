function toggleSidebar() {
    if ($('#sidebar-full').is(':visible')) {
        $('#sidebar-full').addClass('hidden');
        $('#sidebar-partial').removeClass('hidden');
    } else {
        $('#sidebar-full').removeClass('hidden');
        $('#sidebar-partial').addClass('hidden');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    $('#sidebar-btn').on('click', toggleSidebar);
})