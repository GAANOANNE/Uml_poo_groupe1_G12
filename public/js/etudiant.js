$(function(){

    
       // const URL = 'http://smb.alwaysdata.net/campus2';
       const URL = 'http://localhost/Uml_poo_groupe1_G12';
        var tab_checkedid={};
        var tab_allId=[];
        let offset=0;
        var dataEtu=[];
        var idGen=0;
//tab id to remove
        var id_rm=[];
        var tbody=$("#table");
        $('#update_cont').hide();

        getData(offset);
    $('#table').on("click",".select_etu",function(){

      var tab=[]
        if($(this).parents('tr').attr("id"))
        {
            tab = $(this).parents("tr").attr("id").split("_");
            //console.log(tab);
        }
        $('#update_cont').show();
        if($(this).is(':checked'))
        {
            tab_checkedid[$(this).val()]=$(this).val();
                
        }else
        {
            delete  tab_checkedid[$(this).val()];
        }
    });
    $(".select_all").on("change",()=>{
        if($(".select_all").is(":checked"))
        {
           tab_checkedid={};

            for(let i in tab_allId)
            {
                tab_checkedid[tab_allId[i]]=tab_allId[i]
            }
            console.log(tab_checkedid);
            $(".select_etu").prop('checked',true);
            $('#update_cont').show();
        }else
        {
            id_rm=[];
            $(".select_etu").prop('checked',false);
            $('#update_cont').hide();
        }
    });
//-----------------------------------------------------
//Afficher Montrer la navigation
//--------------------------------------------------
function showhidenav(offset,nbrpage)
{
	if(offset===0 || nbrpage===0)
	{
		$('#btn_precedent').hide();
	}
	else
	{
		$('#btn_precedent').show();
	}
	if((nbrpage-offset)<5)
	{

		$('#btn_suivant').hide();
	}else
	{
		$('#btn_suivant').show();
	}
}
//-----------------------------------------------------------
//-------------------------------------------------
//FUNCTION MODIFICATION
//-------------------------------------------------
$('#table').on('click',".btn_mod",function(){
   let tab = $(this).parents("tr").attr("id").split("_");
    console.log(dataEtu[tab[2]].nom);
    $('#mod_nom').val(dataEtu[tab[2]].nom);
    $('#mod_prenom').val(dataEtu[tab[2]].prenom);
    $('#mod_email').val(dataEtu[tab[2]].email);
    $('#mod_type').val(dataEtu[tab[2]].profil);
    $('#mod_date').val(dataEtu[tab[2]].date_naissance);
    $('#mod_tel').val(dataEtu[tab[2]].telephone);
    $('#myModal').show();

    //alert("modificatio" + tab[1] + " ___" +dataEtu[tab[2]]);
});

$("#form_update").on("submit",function(){
    alert('modifications validées');
});
//-------------------------------------------------
//FUNCTION SUPPRESSION
//-------------------------------------------------

    $('#table').on('click', ".btn_sup", function () {

        let tab = $(this).parents("tr").attr("id").split("_");

        if(confirm("Etes vous sûr de vouloir supprimer les infos de l'étudiant"))
        {
            $.ajax({
                type: "POST",
                url: `${URL}/etudiant/deleteEtudiant`,
                data: { id : tab[1]},
                success: (data, status) => {
                  if (data == "success")
                  {
                      $(this).parents("tr").hide();
                      alert("Infos etudiant supprimés avec succes");
                  }
                  else
                  {
                      alert('erreur lors de la suppression'+data);
                  }
                }
            });
        }
    });

    
//-------------------------------------------------
//CCROLLING DATA
//------------------------------------------------
const scrollZone=$('#scrollZone');
scrollZone.scroll(function(){
    const st = scrollZone[0].scrollTop;
    const sh = scrollZone[0].scrollHeight;
    const ch = scrollZone[0].clientHeight;

        if(sh-st <= ch)
        {
            console.log(ch+ " "+st+" "+" "+sh);
            getData(offset);
        }
});


//-------------------------------------------------
//FUNCTION RECHERCHE
//------------------------------------------------
$('#search_profil').on('change',search);
$('#search_mat').on("keyup",search);



function search() {
    let profil = $('#search_profil').val();
    let matricule = $('#search_mat').val();
    $.ajax({
        type: "POST",
        url: `${URL}/etudiant/rechercheEtudiant`,
        data: {
            profil: profil,
            matricule: matricule
        },
        dataType: "JSON",
        success: (data, status) => {
                console.log(data)
           // alert(' '+data)
            // console.log(data)
            // offset++;
            // dataEtu = dataEtu.concat(data);
            tbody.html('');
            printData(data);
            // offset += 5;
        }
    });
}
//-------------------------------------------------
//FUNCTION SENDDATA
//-------------------------------------------------
function getData(offs)
{
        $.ajax({
            type:"POST",
            url: `${URL}/etudiant/getListEtudiant`,
            data:{limit:5,offset:offs},
            dataType:"JSON",
            success: (data, status) => {
                console.log(data)
                offset++;
                dataEtu=dataEtu.concat(data);

             printData(data);
            offset+=5;
            }
        });

}
//---------------------------------------------------------
// DELETE FUNCTION
//---------------------------------------------------------
    $("#delete_elmt").on('click',function(){
        for(let x in tab_checkedid)
        {
            id_rm.push(x);
            $(`#id_${x}`).hide();

        }
        $(".select_all").prop('checked',false);
        $.ajax({
            type:"POST",
            url:`${URL}/chambre/deleteChambre`,
            data:{deleteId:id_rm},
           // dataType:"JSON",
            success:(data,status)=>{
                    if(data!=="error")
                    {
                        alert("suppression fait avec succes");
                    }
                    else
                    {
                        alert('Erreur lors de la suppression');
                    }
            } 
        });

    });



$('#mod_type').on('change',function(){
        $("#content_profil").html("");

        $profil = $("#mod_type").val();
        $selectPension=`
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputState">Pension</label>
                  <select name="pension" id="pension"" class="form-control">
                   <option value="20000">Demi bourse</option>
                    <option value="400000">Bourse entiere</option>
                  </select>
                </div>
              </div>`;
        if ($profil == "boursier") {
            $("#content_profil").html($selectPension);
        } else if ($profil == "nonBoursier") {
            $("#content_profil").html(getInput());
        } else if ($profil == "loger") {
            $("#content_profil").html($selectPension);
            nameInput = "numeroChambre"
            $("#content_profil").append(getInput(nameInput, "number"));
        }
        
})

    function getInput(name = "adresse", type = "text") {

        var input=` 
                <div class="form-group col-md-6">
                  <label for="number">${name}/label>
                  <input type="text" placeholder="${name}"  class="form-control" id="mod_tel"  name="${name}" type="${type}" />
                </div>
                `;
        return input;
    }





//-------------------------------------------------------------------
// DELETE FUNCTION
//-------------------------------------------------------------------

    function updateContUp()
    {
        getData(0);
    }
    

        function printData(data)
        {
            if(data.length!==0)
            {
                $.each(data,function(id,etu){
                    tab_allId.push(etu.id);
                    tbody.append(`
                        <tr id='id_${etu.id}_${idGen}'>
                            <td>
                            ${etu.matricule}
                            </td>
                            <td>
                                ${etu.nom}
                            </td>
                            <td>
                                ${etu.prenom}
                            </td>
                            <td>
                                ${etu.date_naissance}
                            </td>
                            <td>
                                ${etu.telephone}
                            </td>
                            <td>
                                ${etu.email}
                            </td>
                            <td>
                            ${etu.adresse}
                            </td>
                            <td>
                                ${etu.pension}
                            </td>
                            <td>
                                ${etu.numero_chambre}
                            </td>
                            <td class="btn bg-info text-white btn_mod"  data-toggle="modal" data-target="#myModal">mod<td>
                            <td class="btn bg-danger text-white btn_sup">sup</td>
            </tr>

                    `);

                });
            idGen++;
            } else {
                tbody.html('<tr class="alert alert-danger h4"><td colspan="8">Aucune données<td></tr>');
            }
        }

})
