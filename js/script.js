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
        // Cek genteng
        $("#genteng-id").load("controllers/inspeksi/gentengid.php");
        $("#genteng-cekwaktu").load("controllers/inspeksi/gentengwaktu.php");
        $("#genteng-total").load("controllers/inspeksi/gentengtotal.php");
        $("#genteng-bagus").load("controllers/inspeksi/gentengbagus.php");
        $("#genteng-batuputih").load("controllers/inspeksi/gentengbatuputih.php");
        $("#genteng-rusak").load("controllers/inspeksi/gentengrusak.php");

        // Cek suhu
        $("#id").load("controllers/id.php");
        $("#ceksuhucel").load("controllers/ceksuhucel.php");
        $("#ceksuhufah").load("controllers/ceksuhufah.php");
        $("#cekwaktu").load("controllers/cekwaktu.php");
    }, 1000);
})