class TogglePopup {
    static inspeksi(id) {
        $(`#${id}`).on('click', function () {
            $('#inspeksi-btn').click();
        })
    }

    static pembakaran(id) {
        $(`#${id}`).on('click', function () {
            $('#pembakaran-btn').click();
        })
    }
}

class StatusColor {
    static on(id) {
        $(`#${id}`).removeClass('border-red-600 bg-red-500 hover:bg-red-600').addClass('border-green-600 bg-green-500 hover:bg-green-600');
    }

    static off(id) {
        $(`#${id}`).removeClass('border-green-600 bg-green-500 hover:bg-green-600').addClass('border-red-600 bg-red-500 hover:bg-red-600');
    }
}

function toggleSidebar() {
    if ($('#sidebar-full').hasClass('-translate-x-full')) {
        $('#sidebar-full').removeClass('-translate-x-full');
    } else {
        $('#sidebar-full').addClass('-translate-x-full');
    }
}

function openModal(modal, id) {
    $(`#${modal}`).removeClass('hidden').attr('data-info', id)
    tippy.hideAll()
    getData()
}

function closeModal(modal) {
    $(`#${modal}`).addClass('hidden').attr('data-info', '')
    $('#form-dl')[0].reset();
    $('#status-dl').html('')
}

function getData() {
    const form = $('#form-dl')
    const type = $('#modal-pw').data('info')
    const urlPass = 'controllers/password.php'
    const urlInspeksi = 'controllers/inspeksi/export_excel.php'
    const urlPembakaran = 'controllers/pembakaran/export_excel.php'

    function modalType(urlType, data) {
        $.ajax({
            url: urlPass,
            method: 'POST',
            data: data,
            success: function (response) {
                if (response == 'true') {
                    closeModal('modal-pw')
                    window.open(urlType)
                } else {
                    $('#status-dl').html('Password yang Anda masukkan salah!')
                }
            }
        })
    }

    form.submit(function (event) {
        event.preventDefault();
        const formData = form.serializeArray();
        const data = formData.reduce(function (result, field) {
            result[field.name] = field.value;
            return result;
        }, {});

        if (type == 'inspeksi-modal') {
            modalType(urlInspeksi, data)
        } else if (type == 'pembakaran-modal') {
            modalType(urlPembakaran, data)
        }
    })
}

document.addEventListener('DOMContentLoaded', function () {

    // Set the scroll position to the middle
    var scrollContainer = $('#scroll-container');
    var middlePosition = scrollContainer[0].scrollWidth / 2 - scrollContainer.outerWidth() / 1.65;
    scrollContainer.scrollLeft(middlePosition);

    // Sidebar
    $('#sidebar-btn').on('click', toggleSidebar);

    // Popover interaction
    // Sidebar full
    TogglePopup.inspeksi('inspeksi-sidebar');
    TogglePopup.pembakaran('pembakaran-sidebar');

    // Sidebar partial
    TogglePopup.inspeksi('inspeksi-sidebar-icon');
    TogglePopup.pembakaran('pembakaran-sidebar-icon');

    // Tabbar mobile
    TogglePopup.inspeksi('inspeksi-tabbar');
    TogglePopup.pembakaran('pembakaran-tabbar');

    document.addEventListener('contextmenu', function (event) {
        event.preventDefault();
    });

    // Realtime load data
    setInterval(function () {
        // Box change color
        $.ajax({
            url: "controllers/inspeksi/status.php",
            success: function (response) {
                var response = JSON.parse(response)

                if (response.data == 'running') {
                    StatusColor.on('inspeksi-btn');

                    $("#genteng-status").html("Running")
                } else if (response.data == 'cekkamera') {
                    $("#genteng-status").html("Cek kamera")
                } else if (response.data == 'deviceoff' || response.data == 0) {
                    StatusColor.off('inspeksi-btn');

                    $("#genteng-status").html("Device off")
                }
            }
        });

        $.ajax({
            url: "controllers/pembakaran/id.php",
            success: function (response) {
                var response = JSON.parse(response)

                var status = response.status;

                if (status == 'on') {
                    StatusColor.on('pembakaran-btn');
                } else {
                    StatusColor.off('pembakaran-btn');
                }
            }
        })

        // Cek genteng
        $("#genteng-id").load("controllers/inspeksi/gentengid.php");
        $("#genteng-cekwaktu").load("controllers/inspeksi/gentengwaktu.php");
        $("#genteng-total").load("controllers/inspeksi/gentengtotal.php");
        $("#genteng-bagus").load("controllers/inspeksi/gentengbagus.php");
        $("#genteng-batuputih").load("controllers/inspeksi/gentengbatuputih.php");
        $("#genteng-retak").load("controllers/inspeksi/gentengretak.php");

        // Cek suhu
        $("#ceksuhucel").load("controllers/pembakaran/ceksuhucel.php");
        $("#ceksuhufah").load("controllers/pembakaran/ceksuhufah.php");
        $("#cekwaktu").load("controllers/pembakaran/cekwaktu.php");
    }, 1000);

    // Popover tippyjs
    const pembakaranCard = document.getElementById('pembakaran-card');
    const inspeksiCard = document.getElementById('inspeksi-card');

    tippy('#pembakaran-btn', {
        content: 'Loading...',
        theme: 'popover',
        allowHTML: true,
        interactive: true,
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
        theme: 'popover',
        allowHTML: true,
        interactive: true,
        arrow: true,
        trigger: 'click',
        flipOnUpdate: true,
        onShow(instance) {
            setInterval(function () {
                instance.setContent(inspeksiCard.innerHTML);
            }, 1000);
        },
    });

    // Modal download
    $('#modal-close').on('click', function () {
        closeModal('modal-pw')
    })
})