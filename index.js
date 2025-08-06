$(document).ready(function () {
    getMesaj();
})

function postMesaj() {
    var mesaj = $("#mesaj").val();
    $.ajax({
        type: "POST",
        url: "send.php",
        data: { content: mesaj },
        success: function () {
            $("#mesaj").val("");
        },
        error: function (error) {
            console.log(error);
        }
    });
    setTimeout(500);
    location.reload();
}

function getMesaj() {
    $.ajax({
        type: "GET",        
        url: "post.php",      
        success: function (response) {
            try {         
                var mesajList = JSON.parse(response);
                if (mesajList.length > 0) {
                    var html = "";                  
                    mesajList.forEach(element => {
                        html += `
                            <div class="mesaj">
                                <div class="mesaj-user">
                                    <span class="kullaniciAdi">${element.kullaniciAdi}</span>
                                </div>
                                <div class="mesajlar">
                                    <p class="mesaj">${element.mesaj}</p>
                                </div>
                            </div>`;
                    });                   
                    $("#messages").html(html);
                }
            } catch (error) {
                console.error("JSON parse hatası:", error);
            }
        },
        error: function (xhr, status, error) {
            console.error("Mesaj listesi getirme hatası:", error);
        }
    });
}
