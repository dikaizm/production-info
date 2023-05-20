function toggleSidebar() {
    if ($('#sidebar-full').hasClass('-translate-x-full')) {
        $('#sidebar-full').removeClass('-translate-x-full');
    } else {
        $('#sidebar-full').addClass('-translate-x-full');
    }
}

document.addEventListener('DOMContentLoaded', function () {
    $('#sidebar-btn').on('click', toggleSidebar);
    
    $('#inspeksi-sidebar').on('click', function () {
        $('#inspeksi-btn').click();
    })
    $('#pembakaran-sidebar').on('click', function () {
        $('#pembakaran-btn').click();
    })

    $('#inspeksi-sidebar-icon').on('click', function () {
        $('#inspeksi-btn').click();
    })
    $('#pembakaran-sidebar-icon').on('click', function () {
        $('#pembakaran-btn').click();
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
        $("#id").load("controllers/pembakaran/id.php");
        $("#ceksuhucel").load("controllers/pembakaran/ceksuhucel.php");
        $("#ceksuhufah").load("controllers/pembakaran/ceksuhufah.php");
        $("#cekwaktu").load("controllers/pembakaran/cekwaktu.php");
    }, 1000);

    // Popover tippyjs
    const pembakaranCard = document.getElementById('pembakaran-card');
    const inspeksiCard = document.getElementById('inspeksi-card');

    tippy('#pembakaran-btn', {
        content: 'Loading...',
        allowHTML: true,
        theme: 'popover',
        arrow: true,
        trigger: 'click',
        flipOnUpdate: true,
        onShow(instance) {
            setInterval(function () {
                instance.setContent(pembakaranCard.innerHTML);
            }, 1000);
        },
        onHidden(instance) {
            instance.setContent('Loading...');
        },
    });

    tippy('#inspeksi-btn', {
        content: 'Loading...',
        allowHTML: true,
        theme: 'popover',
        arrow: true,
        trigger: 'click',
        flipOnUpdate: true,
        onShow(instance) {
            setInterval(function () {
                instance.setContent(inspeksiCard.innerHTML);
            }, 1000);
        },
    });
})