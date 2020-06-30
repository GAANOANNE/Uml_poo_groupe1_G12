
$(function () {
    $('#alert_message').hide();
    $valInput = $(".requireinput");

    //effacer les erreurs
    for (let input of $valInput) {
        input.addEventListener("change", function (e) {
            if (e.target.hasAttribute("error")) {
                var idDivError = e.target.getAttribute("error");
                document.getElementById(idDivError).innerText = "";
            }
        })
    }

    $("#form_chambre").on("submit", (event) => {
        event.preventDefault();
        $data = $("#form_chambre").serialize();
        //const url = 'http://smb.alwaysdata.net/campus2';
      const url = "http://localhost/Uml_poo_groupe1_G12";
        var error = false;

        for (let input of $valInput) {
            var idDivError = input.getAttribute("error");
            if (!input.value) {
                //alert(input)
                document.getElementById(idDivError).innerHTML = 'veuillez mettre une valeur';

                error = true;
            }
        }

        if (!error) {
            $.post(`${url}/chambre/ajoutChambre`, $data,
                function (data, status) {
                    if (data.trim() != "error") {
                        //console.log(data);

                        window.location.replace(`${url}/chambre/listeChambre`)
                    } else {
                        console.log('error')
                        $("#alert_message").show();
                    }
                    // 
                });
        }


    });
});