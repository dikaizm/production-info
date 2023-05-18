function toggleSidebar() {
    if ($('#sidebar-full').is(':visible')) {
        $('#sidebar-full').addClass('hidden');
        $('#sidebar-partial').removeClass('hidden');
    } else {
        $('#sidebar-full').removeClass('hidden');
        $('#sidebar-partial').addClass('hidden');
    }
}

function toggleStatus(name) {
    var popoverCard = $(name).find('.popover-card');
    if (popoverCard.css('visibility') === 'hidden') {
        popoverCard.addClass('popover-show').removeClass('popover-default');
    } else {
        popoverCard.removeClass('popover-show').addClass('popover-default');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    $('#sidebar-btn').on('click', toggleSidebar);
    $('#pembakaran-btn').on('click', function () {
        toggleStatus($(this));
    });
    $('#inspeksi-btn').on('click', function () {
        toggleStatus($(this));
    });

    $('#inspeksi-sidebar').on('click', function () {
        toggleStatus($('#inspeksi-btn'));
    })
    $('#pembakaran-sidebar').on('click', function () {
        toggleStatus($('#pembakaran-btn'));
    })

    document.addEventListener('contextmenu', function (event) {
        event.preventDefault();
    });

    // Realtime load pembakaran
    setInterval(function () {
        $("#id").load("controllers/id.php");
        $("#ceksuhucel").load("controllers/ceksuhucel.php");
        $("#ceksuhufah").load("controllers/ceksuhufah.php");
        $("#cekwaktu").load("controllers/cekwaktu.php");
    }, 1000);
})